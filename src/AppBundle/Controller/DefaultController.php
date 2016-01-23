<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Player;
use AppBundle\Entity\Vote;
use AppBundle\Form\PlayerType;
use AppBundle\Form\VoteType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="index")
     */
    public function indexAction(Request $request)
    {
        $player = new Player();
        $form = $this->createForm(PlayerType::class, $player);

        $all = $this->getDoctrine()->getRepository('AppBundle:Player')->findAll();
        $form->handleRequest($request);

        $vote = new Vote();
        $form2 = $this->createForm(VoteType::class, $vote);

        if ($form->isValid()) {
            $player->setRank(0);
            $file = $player->getImage();
            $fileName = md5(uniqid()).'.'.$file->guessExtension();
            $filesDir = $this->container->getParameter('kernel.root_dir').'/../web/uploads/images';
            $file->move($filesDir, $fileName);
            $player->setImage($fileName);
            $em = $this->getDoctrine()->getManager();
            $em->persist($player);
            $em->flush();
            //return $this->redirect($this->generateUrl('app_product_list'));
        }
        $all = $this->getDoctrine()->getRepository('AppBundle:Player')->findAll();
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            'all' => $all,
            'form' => $form->createView(),
            'form2' => $form2->createView(),
        ));
    }
    /**
     * @Route("/vote", name="vote")
     */
    public function voteAction(Request $request)
    {
        $vote = new Vote();
        $form2 = $this->createForm(VoteType::class, $vote);
        $form2->handleRequest($request);

        if ($form2->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($vote);
            $em->flush();
            $id = $vote->getTouser()->getId();
            $queryScore = $this->getDoctrine()->getRepository('AppBundle:Vote');
            $queryAvgScore = $queryScore->createQueryBuilder('g')
            ->select("avg(g.score)")
            ->where('g.touser = :idPlayer')
            ->setParameter('idPlayer', $id)
            ->getQuery();

            $avg = $queryAvgScore->getResult();
            $player = $this->getDoctrine()->getRepository('AppBundle:Player')->findOneById($id);
            $player->setRank($avg[0][1]);
            $em->persist($player);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('index'));
    }
    /**
     * @Route("/listplayers", name="listplayers")
     */
    public function listallAction(Request $request)
    {
        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());

        $serializer = new Serializer($normalizers, $encoders);

        $all = $this->getDoctrine()->getRepository('AppBundle:Player')->findAll();
        return new Response($serializer->serialize($all, 'json'));
    }
    /**
     * @Route("/listplayer/{id}", name="listplayer")
     */
    public function listAction(Request $request, $id)
    {
        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());

        $serializer = new Serializer($normalizers, $encoders);

        $single = $this->getDoctrine()->getRepository('AppBundle:Player')->findOneById($id);
        return new Response($serializer->serialize($single, 'json'));
    }

    /**
     * @Route("/removeplayer/{id}", name="removeplayer")
     */
    public function removeAction(Request $request, $id)
    {
        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());

        $serializer = new Serializer($normalizers, $encoders);

        $em = $this->getDoctrine()->getManager();
        $single = $em->getRepository('AppBundle:Player')->findOneById($id);
        if ($single != null){
            $file = $single->getImage();
            $filesDir = $this->container->getParameter('kernel.root_dir').'/../web/uploads/images/';
            @unlink($filesDir.$file);
            $votes = $em->getRepository('AppBundle:Vote')->findByTouser($id);
            if ($votes != null)
            {
                foreach ($votes as $vote) { $em->remove($vote); }
            }
            $em->remove($single);
            $em->flush();
        }
        return new Response($serializer->serialize(($single==null ? "nein" : "deleted"), 'json'));
    }
    //Dangerous above, would be limited to post request to prevent CSRF, simple get for demo
}
