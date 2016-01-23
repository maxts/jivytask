<?php

/* default/index.html.twig */
class __TwigTemplate_f35d19d8ebefd44c456af3c724a645873ac653dcc37f99938020d2afbb48cfa1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0117da2ba06e64d6a7514ef1cefd14e1dce7e692484014f5751d8ef2e29164c2 = $this->env->getExtension("native_profiler");
        $__internal_0117da2ba06e64d6a7514ef1cefd14e1dce7e692484014f5751d8ef2e29164c2->enter($__internal_0117da2ba06e64d6a7514ef1cefd14e1dce7e692484014f5751d8ef2e29164c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0117da2ba06e64d6a7514ef1cefd14e1dce7e692484014f5751d8ef2e29164c2->leave($__internal_0117da2ba06e64d6a7514ef1cefd14e1dce7e692484014f5751d8ef2e29164c2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d8ce749d15f788f6b591fad2b0cafa52549c2c03a435ade8d28b717e73911d75 = $this->env->getExtension("native_profiler");
        $__internal_d8ce749d15f788f6b591fad2b0cafa52549c2c03a435ade8d28b717e73911d75->enter($__internal_d8ce749d15f788f6b591fad2b0cafa52549c2c03a435ade8d28b717e73911d75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"container\">
    <div id=\"row\">
        <div class=\"col-md-4\">
        ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3>Add player</h3>
            </div>
            <div class=\"panel-body\">
            <div class=\"input-group\">
              <span class=\"input-group-addon\" id=\"basic-addon1\">@</span>
              ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "player", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Username")));
        echo "
            </div><br>
            <div class=\"input-group\">
              <span class=\"input-group-addon\" id=\"basic-addon1\">Email</span>
              ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "test@google.com")));
        echo "
            </div><br>
            ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), 'row');
        echo "
            </div>
            <div class=\"panel-footer\">
            <button type=\"submit\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span></button>
            </div>
        </div>
        ";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
        <div class=\"col-md-4\">
        <div class=\"panel panel-default\">
        <div class=\"panel-body content\">
          <table class=\"table\">
            <thead> <tr> <th>#</th> <th>Player</th> <th>Rank</th> <th>Zee Mug</th> </tr> </thead>
            <tbody>
            ";
        // line 35
        if (twig_test_empty((isset($context["all"]) ? $context["all"] : $this->getContext($context, "all")))) {
            // line 36
            echo "            <tr> <td colspan=\"4\" class=\"textcenter\">No players found</td> </tr> 
            ";
        } else {
            // line 38
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["all"]) ? $context["all"] : $this->getContext($context, "all")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 39
                echo "            <tr><td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "</td><td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "player", array()), "html", null, true);
                echo "</td><td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "rank", array()), "html", null, true);
                echo "</td><td><a href=\"#\" class=\"thumbnail\"><img src=\"/uploads/images/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "image", array()), "html", null, true);
                echo "\"></a></td></tr> 
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "            ";
        }
        // line 42
        echo "            </tbody>
          </table>
        </div>
        </div>
        </div>
        <div class=\"col-md-4\">
        ";
        // line 48
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("vote")));
        echo "
        <div class=\"panel panel-default\">
        <div class=\"panel-heading\">Vote</div>
        <div class=\"panel-body\">
        <div class=\"alert alert-danger hidden\" role=\"alert\">Only images allowed</div>
        ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), 'errors');
        echo "
        <div class=\"input-group\">
          <span class=\"input-group-addon\" id=\"basic-addon1\">Email</span>
          ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "email", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "test@google.com")));
        echo "
        </div><br>
        <div class=\"input-group\">
        ";
        // line 59
        if (twig_test_empty((isset($context["all"]) ? $context["all"] : $this->getContext($context, "all")))) {
            // line 60
            echo "            <select class=\"form-control\"><option>No users present</option></select>
        ";
        } else {
            // line 62
            echo "          ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "touser", array()), 'row', array("attr" => array("class" => "form-control")));
            echo "
        ";
        }
        // line 64
        echo "        </div><br>
        <div class=\"input-group\">
          ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "score", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        </div><br>
        <button type=\"submit\" class=\"btn btn-default\">Submit</button>
        </div>
        </div>
        ";
        // line 71
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), 'form_end');
        echo "
        </div>
    </div>
    </div>
";
        
        $__internal_d8ce749d15f788f6b591fad2b0cafa52549c2c03a435ade8d28b717e73911d75->leave($__internal_d8ce749d15f788f6b591fad2b0cafa52549c2c03a435ade8d28b717e73911d75_prof);

    }

    // line 77
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8c2a7ea1327c1dd5975e99bec2cdf190870e47d2f9b6a4ac7e21dc4cfc83eeba = $this->env->getExtension("native_profiler");
        $__internal_8c2a7ea1327c1dd5975e99bec2cdf190870e47d2f9b6a4ac7e21dc4cfc83eeba->enter($__internal_8c2a7ea1327c1dd5975e99bec2cdf190870e47d2f9b6a4ac7e21dc4cfc83eeba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 78
        echo "<style>
body { padding-top: 3rem; }
body h3 { margin-top: 10px; }
.textcenter { text-align: center; }
.thumbnail { max-width: 50px; max-height: 50px; }
</style>
";
        
        $__internal_8c2a7ea1327c1dd5975e99bec2cdf190870e47d2f9b6a4ac7e21dc4cfc83eeba->leave($__internal_8c2a7ea1327c1dd5975e99bec2cdf190870e47d2f9b6a4ac7e21dc4cfc83eeba_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 78,  182 => 77,  170 => 71,  162 => 66,  158 => 64,  152 => 62,  148 => 60,  146 => 59,  140 => 56,  134 => 53,  126 => 48,  118 => 42,  115 => 41,  100 => 39,  95 => 38,  91 => 36,  89 => 35,  78 => 27,  69 => 21,  64 => 19,  57 => 15,  46 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div id="container">*/
/*     <div id="row">*/
/*         <div class="col-md-4">*/
/*         {{ form_start(form) }}*/
/*         <div class="panel panel-default">*/
/*             <div class="panel-heading">*/
/*                 <h3>Add player</h3>*/
/*             </div>*/
/*             <div class="panel-body">*/
/*             <div class="input-group">*/
/*               <span class="input-group-addon" id="basic-addon1">@</span>*/
/*               {{ form_row(form.player, {'attr': {'class': 'form-control', 'placeholder': 'Username'}}) }}*/
/*             </div><br>*/
/*             <div class="input-group">*/
/*               <span class="input-group-addon" id="basic-addon1">Email</span>*/
/*               {{ form_row(form.email, {'attr': {'class': 'form-control', 'placeholder': 'test@google.com'}}) }}*/
/*             </div><br>*/
/*             {{ form_row(form.image) }}*/
/*             </div>*/
/*             <div class="panel-footer">*/
/*             <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>*/
/*             </div>*/
/*         </div>*/
/*         {{ form_end(form) }}*/
/*         </div>*/
/*         <div class="col-md-4">*/
/*         <div class="panel panel-default">*/
/*         <div class="panel-body content">*/
/*           <table class="table">*/
/*             <thead> <tr> <th>#</th> <th>Player</th> <th>Rank</th> <th>Zee Mug</th> </tr> </thead>*/
/*             <tbody>*/
/*             {% if all is empty %}*/
/*             <tr> <td colspan="4" class="textcenter">No players found</td> </tr> */
/*             {% else %}*/
/*             {% for item in all %}*/
/*             <tr><td>{{ item.id }}</td><td>{{ item.player }}</td><td>{{ item.rank }}</td><td><a href="#" class="thumbnail"><img src="/uploads/images/{{ item.image }}"></a></td></tr> */
/*             {% endfor %}*/
/*             {% endif %}*/
/*             </tbody>*/
/*           </table>*/
/*         </div>*/
/*         </div>*/
/*         </div>*/
/*         <div class="col-md-4">*/
/*         {{ form_start(form2, {'action': path('vote')}) }}*/
/*         <div class="panel panel-default">*/
/*         <div class="panel-heading">Vote</div>*/
/*         <div class="panel-body">*/
/*         <div class="alert alert-danger hidden" role="alert">Only images allowed</div>*/
/*         {{ form_errors(form2) }}*/
/*         <div class="input-group">*/
/*           <span class="input-group-addon" id="basic-addon1">Email</span>*/
/*           {{ form_row(form2.email, {'attr': {'class': 'form-control', 'placeholder': 'test@google.com'}}) }}*/
/*         </div><br>*/
/*         <div class="input-group">*/
/*         {% if all is empty %}*/
/*             <select class="form-control"><option>No users present</option></select>*/
/*         {% else %}*/
/*           {{ form_row(form2.touser, {'attr': {'class': 'form-control'}}) }}*/
/*         {% endif %}*/
/*         </div><br>*/
/*         <div class="input-group">*/
/*           {{ form_row(form2.score, {'attr': {'class': 'form-control'}}) }}*/
/*         </div><br>*/
/*         <button type="submit" class="btn btn-default">Submit</button>*/
/*         </div>*/
/*         </div>*/
/*         {{ form_end(form2) }}*/
/*         </div>*/
/*     </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* <style>*/
/* body { padding-top: 3rem; }*/
/* body h3 { margin-top: 10px; }*/
/* .textcenter { text-align: center; }*/
/* .thumbnail { max-width: 50px; max-height: 50px; }*/
/* </style>*/
/* {% endblock %}*/
/* */
