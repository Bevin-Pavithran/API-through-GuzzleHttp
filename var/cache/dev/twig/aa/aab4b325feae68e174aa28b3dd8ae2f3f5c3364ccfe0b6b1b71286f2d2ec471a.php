<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_2c4ce8648635d4f7657a245d74dd809262fee9dcb521925f00a4d807bc02f4a1 extends Twig_Template
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
        $__internal_85095dbf615af48b806c1193a01dc5174877a8e8d421bfb96ab31c450807c699 = $this->env->getExtension("native_profiler");
        $__internal_85095dbf615af48b806c1193a01dc5174877a8e8d421bfb96ab31c450807c699->enter($__internal_85095dbf615af48b806c1193a01dc5174877a8e8d421bfb96ab31c450807c699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85095dbf615af48b806c1193a01dc5174877a8e8d421bfb96ab31c450807c699->leave($__internal_85095dbf615af48b806c1193a01dc5174877a8e8d421bfb96ab31c450807c699_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_560ccb8bdc0331d32b745ba0812ee5c389e030277f96b0eb8afaf7f34019a85e = $this->env->getExtension("native_profiler");
        $__internal_560ccb8bdc0331d32b745ba0812ee5c389e030277f96b0eb8afaf7f34019a85e->enter($__internal_560ccb8bdc0331d32b745ba0812ee5c389e030277f96b0eb8afaf7f34019a85e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_560ccb8bdc0331d32b745ba0812ee5c389e030277f96b0eb8afaf7f34019a85e->leave($__internal_560ccb8bdc0331d32b745ba0812ee5c389e030277f96b0eb8afaf7f34019a85e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1a2f05da76e4059e73b79ac5d1bf58764e4793091f9c4e25011ef2da4dd434ea = $this->env->getExtension("native_profiler");
        $__internal_1a2f05da76e4059e73b79ac5d1bf58764e4793091f9c4e25011ef2da4dd434ea->enter($__internal_1a2f05da76e4059e73b79ac5d1bf58764e4793091f9c4e25011ef2da4dd434ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1a2f05da76e4059e73b79ac5d1bf58764e4793091f9c4e25011ef2da4dd434ea->leave($__internal_1a2f05da76e4059e73b79ac5d1bf58764e4793091f9c4e25011ef2da4dd434ea_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4365a71898d2ff50d165a5833b9f49e9b89ec47f55c67d11f668735aad497ed4 = $this->env->getExtension("native_profiler");
        $__internal_4365a71898d2ff50d165a5833b9f49e9b89ec47f55c67d11f668735aad497ed4->enter($__internal_4365a71898d2ff50d165a5833b9f49e9b89ec47f55c67d11f668735aad497ed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4365a71898d2ff50d165a5833b9f49e9b89ec47f55c67d11f668735aad497ed4->leave($__internal_4365a71898d2ff50d165a5833b9f49e9b89ec47f55c67d11f668735aad497ed4_prof);

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
