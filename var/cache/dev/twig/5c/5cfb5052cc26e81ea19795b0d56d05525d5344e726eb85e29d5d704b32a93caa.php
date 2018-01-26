<?php

/* base.html.twig */
class __TwigTemplate_1cf950ec91c1cfe8be9e8612d1fb3e73113bd3c6ed27258b90cb972e01c6c304 extends Twig_Template
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
        $__internal_c2b08cb96a8f23dfb424f38b46a130f9bd6f51d5f64e39a6a032ec64882f2d74 = $this->env->getExtension("native_profiler");
        $__internal_c2b08cb96a8f23dfb424f38b46a130f9bd6f51d5f64e39a6a032ec64882f2d74->enter($__internal_c2b08cb96a8f23dfb424f38b46a130f9bd6f51d5f64e39a6a032ec64882f2d74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 11
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 19
        echo "    </body>
</html>
";
        
        $__internal_c2b08cb96a8f23dfb424f38b46a130f9bd6f51d5f64e39a6a032ec64882f2d74->leave($__internal_c2b08cb96a8f23dfb424f38b46a130f9bd6f51d5f64e39a6a032ec64882f2d74_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ae2ca358abfc0d0eeca7c4b83df623bb2504998d7e2c1301200b5706f23dbd01 = $this->env->getExtension("native_profiler");
        $__internal_ae2ca358abfc0d0eeca7c4b83df623bb2504998d7e2c1301200b5706f23dbd01->enter($__internal_ae2ca358abfc0d0eeca7c4b83df623bb2504998d7e2c1301200b5706f23dbd01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ae2ca358abfc0d0eeca7c4b83df623bb2504998d7e2c1301200b5706f23dbd01->leave($__internal_ae2ca358abfc0d0eeca7c4b83df623bb2504998d7e2c1301200b5706f23dbd01_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fbcbddad10083837c716c41239c34e1d44de0b817c1653c9995aa7950f0d061e = $this->env->getExtension("native_profiler");
        $__internal_fbcbddad10083837c716c41239c34e1d44de0b817c1653c9995aa7950f0d061e->enter($__internal_fbcbddad10083837c716c41239c34e1d44de0b817c1653c9995aa7950f0d061e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/extra.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

        ";
        
        $__internal_fbcbddad10083837c716c41239c34e1d44de0b817c1653c9995aa7950f0d061e->leave($__internal_fbcbddad10083837c716c41239c34e1d44de0b817c1653c9995aa7950f0d061e_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_eab3610e6e8d8e10ed87f93a51b19a99006e3ba950c25823117d6e4930eccd6a = $this->env->getExtension("native_profiler");
        $__internal_eab3610e6e8d8e10ed87f93a51b19a99006e3ba950c25823117d6e4930eccd6a->enter($__internal_eab3610e6e8d8e10ed87f93a51b19a99006e3ba950c25823117d6e4930eccd6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_eab3610e6e8d8e10ed87f93a51b19a99006e3ba950c25823117d6e4930eccd6a->leave($__internal_eab3610e6e8d8e10ed87f93a51b19a99006e3ba950c25823117d6e4930eccd6a_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_db99b2d7a7f6d7cfe59ee12abf8b4ab06776464897fa59b75eb97def4b1c67ce = $this->env->getExtension("native_profiler");
        $__internal_db99b2d7a7f6d7cfe59ee12abf8b4ab06776464897fa59b75eb97def4b1c67ce->enter($__internal_db99b2d7a7f6d7cfe59ee12abf8b4ab06776464897fa59b75eb97def4b1c67ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/js/jquery-1.7.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/js/extra.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        ";
        
        $__internal_db99b2d7a7f6d7cfe59ee12abf8b4ab06776464897fa59b75eb97def4b1c67ce->leave($__internal_db99b2d7a7f6d7cfe59ee12abf8b4ab06776464897fa59b75eb97def4b1c67ce_prof);

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
        return array (  114 => 17,  109 => 16,  103 => 15,  92 => 14,  82 => 8,  77 => 7,  71 => 6,  59 => 5,  50 => 19,  47 => 15,  45 => 14,  38 => 11,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             <link href="{{ asset('bundles/framework/css/bootstrap.min.css') }}" rel="stylesheet" />*/
/*             <link href="{{ asset('bundles/framework/css/extra.css') }}" rel="stylesheet" />*/
/* */
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}*/
/*             <script src="{{ asset('bundles/framework/js/jquery-1.7.min.js') }}" type="text/javascript"></script>*/
/*             <script src="{{ asset('bundles/framework/js/extra.js') }}" type="text/javascript"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
