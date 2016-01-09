<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_890b3987abb2c292c908825ccf430bf1947c754239430be644a1ed52dfc0ded5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_4c09382a9e0dae534958e49a8770b39c3a390b6f76de83e69f12ed9bc75998ee = $this->env->getExtension("native_profiler");
        $__internal_4c09382a9e0dae534958e49a8770b39c3a390b6f76de83e69f12ed9bc75998ee->enter($__internal_4c09382a9e0dae534958e49a8770b39c3a390b6f76de83e69f12ed9bc75998ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c09382a9e0dae534958e49a8770b39c3a390b6f76de83e69f12ed9bc75998ee->leave($__internal_4c09382a9e0dae534958e49a8770b39c3a390b6f76de83e69f12ed9bc75998ee_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_20f2be8732338c13f61495a4df98fcc32e077ec499a2fccd624e0019fd6e56b9 = $this->env->getExtension("native_profiler");
        $__internal_20f2be8732338c13f61495a4df98fcc32e077ec499a2fccd624e0019fd6e56b9->enter($__internal_20f2be8732338c13f61495a4df98fcc32e077ec499a2fccd624e0019fd6e56b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_20f2be8732338c13f61495a4df98fcc32e077ec499a2fccd624e0019fd6e56b9->leave($__internal_20f2be8732338c13f61495a4df98fcc32e077ec499a2fccd624e0019fd6e56b9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9a01c7fa952d56c7ff3eea0a5f73861d9835faff78e3112750496ac41c7d0bb8 = $this->env->getExtension("native_profiler");
        $__internal_9a01c7fa952d56c7ff3eea0a5f73861d9835faff78e3112750496ac41c7d0bb8->enter($__internal_9a01c7fa952d56c7ff3eea0a5f73861d9835faff78e3112750496ac41c7d0bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9a01c7fa952d56c7ff3eea0a5f73861d9835faff78e3112750496ac41c7d0bb8->leave($__internal_9a01c7fa952d56c7ff3eea0a5f73861d9835faff78e3112750496ac41c7d0bb8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1d969c47fa3bb913bfe0932ecffa5f6574e5a802ba7e7e528b5d68023f9879e0 = $this->env->getExtension("native_profiler");
        $__internal_1d969c47fa3bb913bfe0932ecffa5f6574e5a802ba7e7e528b5d68023f9879e0->enter($__internal_1d969c47fa3bb913bfe0932ecffa5f6574e5a802ba7e7e528b5d68023f9879e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_1d969c47fa3bb913bfe0932ecffa5f6574e5a802ba7e7e528b5d68023f9879e0->leave($__internal_1d969c47fa3bb913bfe0932ecffa5f6574e5a802ba7e7e528b5d68023f9879e0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
