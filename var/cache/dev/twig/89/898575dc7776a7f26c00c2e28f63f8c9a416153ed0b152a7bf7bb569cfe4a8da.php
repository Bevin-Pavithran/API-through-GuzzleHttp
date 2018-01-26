<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_2bd8d90c112270859f1ce4825a4dda948c7b1efe36aec029b0d40ddea33a391b extends Twig_Template
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
        $__internal_7671394d3aade8a54eee9ca83e78b40e0adb276a3b2482c95e90610b0dcd6810 = $this->env->getExtension("native_profiler");
        $__internal_7671394d3aade8a54eee9ca83e78b40e0adb276a3b2482c95e90610b0dcd6810->enter($__internal_7671394d3aade8a54eee9ca83e78b40e0adb276a3b2482c95e90610b0dcd6810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7671394d3aade8a54eee9ca83e78b40e0adb276a3b2482c95e90610b0dcd6810->leave($__internal_7671394d3aade8a54eee9ca83e78b40e0adb276a3b2482c95e90610b0dcd6810_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7ce240f0f86d3c527a7aaf7ded17ca05d4b5ec0efcde106cc076436055a71423 = $this->env->getExtension("native_profiler");
        $__internal_7ce240f0f86d3c527a7aaf7ded17ca05d4b5ec0efcde106cc076436055a71423->enter($__internal_7ce240f0f86d3c527a7aaf7ded17ca05d4b5ec0efcde106cc076436055a71423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7ce240f0f86d3c527a7aaf7ded17ca05d4b5ec0efcde106cc076436055a71423->leave($__internal_7ce240f0f86d3c527a7aaf7ded17ca05d4b5ec0efcde106cc076436055a71423_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7ef741ef917ee76e242ea64a004c8d2ea5ce1ccb1161cc34ba383c0d9cbd2673 = $this->env->getExtension("native_profiler");
        $__internal_7ef741ef917ee76e242ea64a004c8d2ea5ce1ccb1161cc34ba383c0d9cbd2673->enter($__internal_7ef741ef917ee76e242ea64a004c8d2ea5ce1ccb1161cc34ba383c0d9cbd2673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7ef741ef917ee76e242ea64a004c8d2ea5ce1ccb1161cc34ba383c0d9cbd2673->leave($__internal_7ef741ef917ee76e242ea64a004c8d2ea5ce1ccb1161cc34ba383c0d9cbd2673_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5fefb772b19e3c344c942986e066f30f3707bdde0a3908e52047407969cdbcef = $this->env->getExtension("native_profiler");
        $__internal_5fefb772b19e3c344c942986e066f30f3707bdde0a3908e52047407969cdbcef->enter($__internal_5fefb772b19e3c344c942986e066f30f3707bdde0a3908e52047407969cdbcef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_5fefb772b19e3c344c942986e066f30f3707bdde0a3908e52047407969cdbcef->leave($__internal_5fefb772b19e3c344c942986e066f30f3707bdde0a3908e52047407969cdbcef_prof);

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
