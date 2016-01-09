<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_9093fe248fba775b95d217edb3fe99d07425aabf5a0c6ec7ac54141f9f412432 extends Twig_Template
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
        $__internal_944558467ad8896e9da7f79df3994e42da5239c61a2aec2e6f0dec7072c4d529 = $this->env->getExtension("native_profiler");
        $__internal_944558467ad8896e9da7f79df3994e42da5239c61a2aec2e6f0dec7072c4d529->enter($__internal_944558467ad8896e9da7f79df3994e42da5239c61a2aec2e6f0dec7072c4d529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_944558467ad8896e9da7f79df3994e42da5239c61a2aec2e6f0dec7072c4d529->leave($__internal_944558467ad8896e9da7f79df3994e42da5239c61a2aec2e6f0dec7072c4d529_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_017f7d7e380f5656f2ea0367240a7b1b1abba247432442a00d1d836ebba2f50e = $this->env->getExtension("native_profiler");
        $__internal_017f7d7e380f5656f2ea0367240a7b1b1abba247432442a00d1d836ebba2f50e->enter($__internal_017f7d7e380f5656f2ea0367240a7b1b1abba247432442a00d1d836ebba2f50e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_017f7d7e380f5656f2ea0367240a7b1b1abba247432442a00d1d836ebba2f50e->leave($__internal_017f7d7e380f5656f2ea0367240a7b1b1abba247432442a00d1d836ebba2f50e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_182408b3cecdba49ff28dbe76d24288e0064147b881ad2a064fbc575248254ab = $this->env->getExtension("native_profiler");
        $__internal_182408b3cecdba49ff28dbe76d24288e0064147b881ad2a064fbc575248254ab->enter($__internal_182408b3cecdba49ff28dbe76d24288e0064147b881ad2a064fbc575248254ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_182408b3cecdba49ff28dbe76d24288e0064147b881ad2a064fbc575248254ab->leave($__internal_182408b3cecdba49ff28dbe76d24288e0064147b881ad2a064fbc575248254ab_prof);

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
