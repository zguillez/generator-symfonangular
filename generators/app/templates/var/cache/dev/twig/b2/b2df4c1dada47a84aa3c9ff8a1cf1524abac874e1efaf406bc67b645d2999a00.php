<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_6d2c0d8a2943370a044e4a1ea6fd18f036ba2d883c6082e0c222f9132294fbb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_40b3664c7b008d7ad7225490c1bc45af91f2e30c2e3fef245de2848b8723e212 = $this->env->getExtension("native_profiler");
        $__internal_40b3664c7b008d7ad7225490c1bc45af91f2e30c2e3fef245de2848b8723e212->enter($__internal_40b3664c7b008d7ad7225490c1bc45af91f2e30c2e3fef245de2848b8723e212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40b3664c7b008d7ad7225490c1bc45af91f2e30c2e3fef245de2848b8723e212->leave($__internal_40b3664c7b008d7ad7225490c1bc45af91f2e30c2e3fef245de2848b8723e212_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0378560cb4a11e60c4aa4d3bd543117e82e71c62063420120a07b3dd472cd964 = $this->env->getExtension("native_profiler");
        $__internal_0378560cb4a11e60c4aa4d3bd543117e82e71c62063420120a07b3dd472cd964->enter($__internal_0378560cb4a11e60c4aa4d3bd543117e82e71c62063420120a07b3dd472cd964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0378560cb4a11e60c4aa4d3bd543117e82e71c62063420120a07b3dd472cd964->leave($__internal_0378560cb4a11e60c4aa4d3bd543117e82e71c62063420120a07b3dd472cd964_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_43bf0c22415c39d16dee3df45c0bc9e383c9f4675a19a95e5f8df1606f1451e8 = $this->env->getExtension("native_profiler");
        $__internal_43bf0c22415c39d16dee3df45c0bc9e383c9f4675a19a95e5f8df1606f1451e8->enter($__internal_43bf0c22415c39d16dee3df45c0bc9e383c9f4675a19a95e5f8df1606f1451e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_43bf0c22415c39d16dee3df45c0bc9e383c9f4675a19a95e5f8df1606f1451e8->leave($__internal_43bf0c22415c39d16dee3df45c0bc9e383c9f4675a19a95e5f8df1606f1451e8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a6cd60223e5659644f8457aaa804f471872951e2ae7d4964a532a051f80e8473 = $this->env->getExtension("native_profiler");
        $__internal_a6cd60223e5659644f8457aaa804f471872951e2ae7d4964a532a051f80e8473->enter($__internal_a6cd60223e5659644f8457aaa804f471872951e2ae7d4964a532a051f80e8473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a6cd60223e5659644f8457aaa804f471872951e2ae7d4964a532a051f80e8473->leave($__internal_a6cd60223e5659644f8457aaa804f471872951e2ae7d4964a532a051f80e8473_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
