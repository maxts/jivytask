<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4609f40b59b45d16ce1cab350f8211339f99fb1de30eb286f35b4acb64943656 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5799e6d0d8e506ac371c63d1d4674af5ce18d2d4e99a214b024fae82066105fe = $this->env->getExtension("native_profiler");
        $__internal_5799e6d0d8e506ac371c63d1d4674af5ce18d2d4e99a214b024fae82066105fe->enter($__internal_5799e6d0d8e506ac371c63d1d4674af5ce18d2d4e99a214b024fae82066105fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5799e6d0d8e506ac371c63d1d4674af5ce18d2d4e99a214b024fae82066105fe->leave($__internal_5799e6d0d8e506ac371c63d1d4674af5ce18d2d4e99a214b024fae82066105fe_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d2258a0e098fd883cab638b2b2499b06de78a130ca2da9b6bf8e51256fbf8b31 = $this->env->getExtension("native_profiler");
        $__internal_d2258a0e098fd883cab638b2b2499b06de78a130ca2da9b6bf8e51256fbf8b31->enter($__internal_d2258a0e098fd883cab638b2b2499b06de78a130ca2da9b6bf8e51256fbf8b31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d2258a0e098fd883cab638b2b2499b06de78a130ca2da9b6bf8e51256fbf8b31->leave($__internal_d2258a0e098fd883cab638b2b2499b06de78a130ca2da9b6bf8e51256fbf8b31_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_654433b6e54569e5edd6bfc8477e2760c6b2286c6bc5279362f1fc6f2ec879a8 = $this->env->getExtension("native_profiler");
        $__internal_654433b6e54569e5edd6bfc8477e2760c6b2286c6bc5279362f1fc6f2ec879a8->enter($__internal_654433b6e54569e5edd6bfc8477e2760c6b2286c6bc5279362f1fc6f2ec879a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_654433b6e54569e5edd6bfc8477e2760c6b2286c6bc5279362f1fc6f2ec879a8->leave($__internal_654433b6e54569e5edd6bfc8477e2760c6b2286c6bc5279362f1fc6f2ec879a8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe037e4a5820e420d889142699cee2194874377735cd8ab997798a949a119b89 = $this->env->getExtension("native_profiler");
        $__internal_fe037e4a5820e420d889142699cee2194874377735cd8ab997798a949a119b89->enter($__internal_fe037e4a5820e420d889142699cee2194874377735cd8ab997798a949a119b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_fe037e4a5820e420d889142699cee2194874377735cd8ab997798a949a119b89->leave($__internal_fe037e4a5820e420d889142699cee2194874377735cd8ab997798a949a119b89_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
