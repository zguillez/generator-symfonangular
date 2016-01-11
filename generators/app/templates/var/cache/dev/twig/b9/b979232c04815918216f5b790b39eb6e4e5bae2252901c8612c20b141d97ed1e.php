<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_a6e185aaf8db0292ba7bdecc8e6bb8321301e1459d47adf4f518dc89fd29b86e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_7668f0cd060ba6b902340ede41df4a6c9e76edf30f12dfe9cf0a96e3ae3da6f2 = $this->env->getExtension("native_profiler");
        $__internal_7668f0cd060ba6b902340ede41df4a6c9e76edf30f12dfe9cf0a96e3ae3da6f2->enter($__internal_7668f0cd060ba6b902340ede41df4a6c9e76edf30f12dfe9cf0a96e3ae3da6f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7668f0cd060ba6b902340ede41df4a6c9e76edf30f12dfe9cf0a96e3ae3da6f2->leave($__internal_7668f0cd060ba6b902340ede41df4a6c9e76edf30f12dfe9cf0a96e3ae3da6f2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ef34327c564d6322c94ae381edf966cbd36b7c4e9ba3509914e0aaa13c3c77b2 = $this->env->getExtension("native_profiler");
        $__internal_ef34327c564d6322c94ae381edf966cbd36b7c4e9ba3509914e0aaa13c3c77b2->enter($__internal_ef34327c564d6322c94ae381edf966cbd36b7c4e9ba3509914e0aaa13c3c77b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ef34327c564d6322c94ae381edf966cbd36b7c4e9ba3509914e0aaa13c3c77b2->leave($__internal_ef34327c564d6322c94ae381edf966cbd36b7c4e9ba3509914e0aaa13c3c77b2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_95104803ba6945cf1c3d308b9c0a90fd2f7fca5fef85d294b5fcf4ea94d53a96 = $this->env->getExtension("native_profiler");
        $__internal_95104803ba6945cf1c3d308b9c0a90fd2f7fca5fef85d294b5fcf4ea94d53a96->enter($__internal_95104803ba6945cf1c3d308b9c0a90fd2f7fca5fef85d294b5fcf4ea94d53a96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_95104803ba6945cf1c3d308b9c0a90fd2f7fca5fef85d294b5fcf4ea94d53a96->leave($__internal_95104803ba6945cf1c3d308b9c0a90fd2f7fca5fef85d294b5fcf4ea94d53a96_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
