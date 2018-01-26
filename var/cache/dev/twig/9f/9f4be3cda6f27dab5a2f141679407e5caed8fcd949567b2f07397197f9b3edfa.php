<?php

/* default/result.html.twig */
class __TwigTemplate_c87e61044850dfcf42e299f6bad15ca70717aa64ac379eae4bef9bce8213bbe8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/result.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a0ff0a57b07161472040cbb5c34d234d73a73b3e612b0cf3e9a0ff8645e7c52f = $this->env->getExtension("native_profiler");
        $__internal_a0ff0a57b07161472040cbb5c34d234d73a73b3e612b0cf3e9a0ff8645e7c52f->enter($__internal_a0ff0a57b07161472040cbb5c34d234d73a73b3e612b0cf3e9a0ff8645e7c52f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/result.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0ff0a57b07161472040cbb5c34d234d73a73b3e612b0cf3e9a0ff8645e7c52f->leave($__internal_a0ff0a57b07161472040cbb5c34d234d73a73b3e612b0cf3e9a0ff8645e7c52f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_99c5c16e5ffad7393731aa8f26ca3cb7b75bdc9d9af7efca46cf1157971df781 = $this->env->getExtension("native_profiler");
        $__internal_99c5c16e5ffad7393731aa8f26ca3cb7b75bdc9d9af7efca46cf1157971df781->enter($__internal_99c5c16e5ffad7393731aa8f26ca3cb7b75bdc9d9af7efca46cf1157971df781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"Absolute-Center\">
        <img src=\"bundles/framework/images/ZipJet.png\" width=\"100\" height=\"20\">

        ";
        // line 6
        if (((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == 200)) {
            // line 7
            echo "            <div class=\"col result\">
                ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "amount", array(), "array"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "base_currency", array(), "array"), "html", null, true);
            echo " = ";
            echo twig_escape_filter($this->env, (isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "target_currency", array(), "array"), "html", null, true);
            echo "
                <br>Current rate is <b>";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["rate"]) ? $context["rate"] : $this->getContext($context, "rate")), "html", null, true);
            echo "</b>
            </div>
        ";
        } else {
            // line 12
            echo "            <div class=\"alert alert-warning\" role=\"alert\">
                Ooops! Something whent wrong, try again later
            </div>
        ";
        }
        // line 16
        echo "
    </div>
  ";
        
        $__internal_99c5c16e5ffad7393731aa8f26ca3cb7b75bdc9d9af7efca46cf1157971df781->leave($__internal_99c5c16e5ffad7393731aa8f26ca3cb7b75bdc9d9af7efca46cf1157971df781_prof);

    }

    public function getTemplateName()
    {
        return "default/result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 16,  66 => 12,  60 => 9,  50 => 8,  47 => 7,  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/*     <div class="Absolute-Center">*/
/*         <img src="bundles/framework/images/ZipJet.png" width="100" height="20">*/
/* */
/*         {% if status == 200 %}*/
/*             <div class="col result">*/
/*                 {{ request['amount'] }} {{ request['base_currency'] }} = {{ result }} {{ request['target_currency'] }}*/
/*                 <br>Current rate is <b>{{ rate }}</b>*/
/*             </div>*/
/*         {% else %}*/
/*             <div class="alert alert-warning" role="alert">*/
/*                 Ooops! Something whent wrong, try again later*/
/*             </div>*/
/*         {% endif %}*/
/* */
/*     </div>*/
/*   {% endblock %}*/
/* */
