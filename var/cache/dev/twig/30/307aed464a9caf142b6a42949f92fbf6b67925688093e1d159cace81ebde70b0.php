<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_1d35a13cb8f64ebc0266c11c90adc399ea8f3f03cab62da1f05a51fb8f1afe2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be4f9724b1432440c983169b9f8e2e64f232caa957e59112bdae14d7e895a0a7 = $this->env->getExtension("native_profiler");
        $__internal_be4f9724b1432440c983169b9f8e2e64f232caa957e59112bdae14d7e895a0a7->enter($__internal_be4f9724b1432440c983169b9f8e2e64f232caa957e59112bdae14d7e895a0a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be4f9724b1432440c983169b9f8e2e64f232caa957e59112bdae14d7e895a0a7->leave($__internal_be4f9724b1432440c983169b9f8e2e64f232caa957e59112bdae14d7e895a0a7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_de3eb422dac872600aa0f750aaee428c563716b7f3fa8f4cb1d7e221011559f2 = $this->env->getExtension("native_profiler");
        $__internal_de3eb422dac872600aa0f750aaee428c563716b7f3fa8f4cb1d7e221011559f2->enter($__internal_de3eb422dac872600aa0f750aaee428c563716b7f3fa8f4cb1d7e221011559f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_de3eb422dac872600aa0f750aaee428c563716b7f3fa8f4cb1d7e221011559f2->leave($__internal_de3eb422dac872600aa0f750aaee428c563716b7f3fa8f4cb1d7e221011559f2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_830dc8c77fd87b1e593717921a53a139be437e480216941f38ec55015f850c3a = $this->env->getExtension("native_profiler");
        $__internal_830dc8c77fd87b1e593717921a53a139be437e480216941f38ec55015f850c3a->enter($__internal_830dc8c77fd87b1e593717921a53a139be437e480216941f38ec55015f850c3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_830dc8c77fd87b1e593717921a53a139be437e480216941f38ec55015f850c3a->leave($__internal_830dc8c77fd87b1e593717921a53a139be437e480216941f38ec55015f850c3a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a195dfe57d298f7c31bcb68f925849c9a0dfc9857860593a09b51776ff2963cc = $this->env->getExtension("native_profiler");
        $__internal_a195dfe57d298f7c31bcb68f925849c9a0dfc9857860593a09b51776ff2963cc->enter($__internal_a195dfe57d298f7c31bcb68f925849c9a0dfc9857860593a09b51776ff2963cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a195dfe57d298f7c31bcb68f925849c9a0dfc9857860593a09b51776ff2963cc->leave($__internal_a195dfe57d298f7c31bcb68f925849c9a0dfc9857860593a09b51776ff2963cc_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
