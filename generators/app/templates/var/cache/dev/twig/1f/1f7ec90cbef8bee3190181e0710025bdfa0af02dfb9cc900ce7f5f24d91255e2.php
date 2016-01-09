<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_21db22085bfdc5a7505e58d8ce41805e679dc04813d4ebb05425541bb304a324 extends Twig_Template
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
        $__internal_cb7101d5908601344b4103873d8f41d681b83bd71268c46612143eb81e0910ed = $this->env->getExtension("native_profiler");
        $__internal_cb7101d5908601344b4103873d8f41d681b83bd71268c46612143eb81e0910ed->enter($__internal_cb7101d5908601344b4103873d8f41d681b83bd71268c46612143eb81e0910ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb7101d5908601344b4103873d8f41d681b83bd71268c46612143eb81e0910ed->leave($__internal_cb7101d5908601344b4103873d8f41d681b83bd71268c46612143eb81e0910ed_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_26589a25c9b346af42d329fe58de14b0af69df14e3097c26853d5e3e5a631742 = $this->env->getExtension("native_profiler");
        $__internal_26589a25c9b346af42d329fe58de14b0af69df14e3097c26853d5e3e5a631742->enter($__internal_26589a25c9b346af42d329fe58de14b0af69df14e3097c26853d5e3e5a631742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_26589a25c9b346af42d329fe58de14b0af69df14e3097c26853d5e3e5a631742->leave($__internal_26589a25c9b346af42d329fe58de14b0af69df14e3097c26853d5e3e5a631742_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e3c770bac4d0bead5b7880f0fbcd8e19c333c7f2ab3b48a917f869a1fbcdfbcd = $this->env->getExtension("native_profiler");
        $__internal_e3c770bac4d0bead5b7880f0fbcd8e19c333c7f2ab3b48a917f869a1fbcdfbcd->enter($__internal_e3c770bac4d0bead5b7880f0fbcd8e19c333c7f2ab3b48a917f869a1fbcdfbcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e3c770bac4d0bead5b7880f0fbcd8e19c333c7f2ab3b48a917f869a1fbcdfbcd->leave($__internal_e3c770bac4d0bead5b7880f0fbcd8e19c333c7f2ab3b48a917f869a1fbcdfbcd_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0628cce71fbd1ca65a313f7a203ed35d989d1f81b51cfa978244490af6b296f4 = $this->env->getExtension("native_profiler");
        $__internal_0628cce71fbd1ca65a313f7a203ed35d989d1f81b51cfa978244490af6b296f4->enter($__internal_0628cce71fbd1ca65a313f7a203ed35d989d1f81b51cfa978244490af6b296f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0628cce71fbd1ca65a313f7a203ed35d989d1f81b51cfa978244490af6b296f4->leave($__internal_0628cce71fbd1ca65a313f7a203ed35d989d1f81b51cfa978244490af6b296f4_prof);

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
