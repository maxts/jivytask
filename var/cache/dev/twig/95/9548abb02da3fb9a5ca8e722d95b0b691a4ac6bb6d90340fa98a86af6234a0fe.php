<?php

/* base.html.twig */
class __TwigTemplate_9f0bc2402725bffed3e6d5eae93d5fb8a9303bb1c9466c9af248306290fd0dfd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5999078d1bbfd2795997251852acd9f8738360b691c0bd8f6b140a6140be7420 = $this->env->getExtension("native_profiler");
        $__internal_5999078d1bbfd2795997251852acd9f8738360b691c0bd8f6b140a6140be7420->enter($__internal_5999078d1bbfd2795997251852acd9f8738360b691c0bd8f6b140a6140be7420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css\" integrity=\"sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r\" crossorigin=\"anonymous\">
        <script src=\"//code.jquery.com/jquery-1.12.0.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\" integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\" crossorigin=\"anonymous\"></script>
    </head>
    <body>
        ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 16
        echo "    </body>
</html>
";
        
        $__internal_5999078d1bbfd2795997251852acd9f8738360b691c0bd8f6b140a6140be7420->leave($__internal_5999078d1bbfd2795997251852acd9f8738360b691c0bd8f6b140a6140be7420_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fed055daffb1c4aea7daf80dc6e66be5921114cb6a2c8a9ae72e14fb1e1a641d = $this->env->getExtension("native_profiler");
        $__internal_fed055daffb1c4aea7daf80dc6e66be5921114cb6a2c8a9ae72e14fb1e1a641d->enter($__internal_fed055daffb1c4aea7daf80dc6e66be5921114cb6a2c8a9ae72e14fb1e1a641d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Many example much wow";
        
        $__internal_fed055daffb1c4aea7daf80dc6e66be5921114cb6a2c8a9ae72e14fb1e1a641d->leave($__internal_fed055daffb1c4aea7daf80dc6e66be5921114cb6a2c8a9ae72e14fb1e1a641d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bce9d29f2927234515bcc571431582db383970075d5c6bd8310de284c7862142 = $this->env->getExtension("native_profiler");
        $__internal_bce9d29f2927234515bcc571431582db383970075d5c6bd8310de284c7862142->enter($__internal_bce9d29f2927234515bcc571431582db383970075d5c6bd8310de284c7862142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_bce9d29f2927234515bcc571431582db383970075d5c6bd8310de284c7862142->leave($__internal_bce9d29f2927234515bcc571431582db383970075d5c6bd8310de284c7862142_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_fce735a84f62b3e31a152c02233ac113365e06a694e59fc3f77a083eea536b46 = $this->env->getExtension("native_profiler");
        $__internal_fce735a84f62b3e31a152c02233ac113365e06a694e59fc3f77a083eea536b46->enter($__internal_fce735a84f62b3e31a152c02233ac113365e06a694e59fc3f77a083eea536b46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fce735a84f62b3e31a152c02233ac113365e06a694e59fc3f77a083eea536b46->leave($__internal_fce735a84f62b3e31a152c02233ac113365e06a694e59fc3f77a083eea536b46_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_46a64f5721c2c587667ddc02352b2a6ad18e3239648832d1571ee0ca26bcffc8 = $this->env->getExtension("native_profiler");
        $__internal_46a64f5721c2c587667ddc02352b2a6ad18e3239648832d1571ee0ca26bcffc8->enter($__internal_46a64f5721c2c587667ddc02352b2a6ad18e3239648832d1571ee0ca26bcffc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_46a64f5721c2c587667ddc02352b2a6ad18e3239648832d1571ee0ca26bcffc8->leave($__internal_46a64f5721c2c587667ddc02352b2a6ad18e3239648832d1571ee0ca26bcffc8_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 15,  86 => 14,  75 => 6,  63 => 5,  54 => 16,  51 => 15,  49 => 14,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Many example much wow{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">*/
/*         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">*/
/*         <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>*/
/*         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
