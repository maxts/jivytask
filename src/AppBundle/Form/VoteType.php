<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class VoteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('score', ChoiceType::class, array(
            'choices' => array(0,1,2,3,4,5,6,7,8,9,10),
            'placeholder' => 'Choose an option',
        ))
        ->add('email', EmailType::class, array('label' => false))
        ->add('touser', EntityType::class, array(
          'label' => false,
          'choice_label' => 'player',
          'class' => 'AppBundle:Player',
          'expanded' => false,
          'multiple' => false,
        ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Vote',
        ));
    }
}