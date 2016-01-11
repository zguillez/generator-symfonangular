<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_a5bcf13edb35e52cb97e79bcd31248bf48f86d3af3970f612c389cad4678918b extends Twig_Template
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
        $__internal_d790dbbef4f41a6d5f90e1708d91ba3d6096e3c678912b7b9e7503f2ba697095 = $this->env->getExtension("native_profiler");
        $__internal_d790dbbef4f41a6d5f90e1708d91ba3d6096e3c678912b7b9e7503f2ba697095->enter($__internal_d790dbbef4f41a6d5f90e1708d91ba3d6096e3c678912b7b9e7503f2ba697095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d790dbbef4f41a6d5f90e1708d91ba3d6096e3c678912b7b9e7503f2ba697095->leave($__internal_d790dbbef4f41a6d5f90e1708d91ba3d6096e3c678912b7b9e7503f2ba697095_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_925c6d57a924b73d8842c346d0a2d08296af13dd762658088afe6e2bf96e8987 = $this->env->getExtension("native_profiler");
        $__internal_925c6d57a924b73d8842c346d0a2d08296af13dd762658088afe6e2bf96e8987->enter($__internal_925c6d57a924b73d8842c346d0a2d08296af13dd762658088afe6e2bf96e8987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_925c6d57a924b73d8842c346d0a2d08296af13dd762658088afe6e2bf96e8987->leave($__internal_925c6d57a924b73d8842c346d0a2d08296af13dd762658088afe6e2bf96e8987_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fb03e2a942f8bf8cb8f430a6ab7d494a92ffd476bd0cdf0868ca68fc9348368e = $this->env->getExtension("native_profiler");
        $__internal_fb03e2a942f8bf8cb8f430a6ab7d494a92ffd476bd0cdf0868ca68fc9348368e->enter($__internal_fb03e2a942f8bf8cb8f430a6ab7d494a92ffd476bd0cdf0868ca68fc9348368e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fb03e2a942f8bf8cb8f430a6ab7d494a92ffd476bd0cdf0868ca68fc9348368e->leave($__internal_fb03e2a942f8bf8cb8f430a6ab7d494a92ffd476bd0cdf0868ca68fc9348368e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9467cf5480801ad7ea87dd1a0cef7b9a093a392e84f8b7c16385758a5cce5fae = $this->env->getExtension("native_profiler");
        $__internal_9467cf5480801ad7ea87dd1a0cef7b9a093a392e84f8b7c16385758a5cce5fae->enter($__internal_9467cf5480801ad7ea87dd1a0cef7b9a093a392e84f8b7c16385758a5cce5fae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_9467cf5480801ad7ea87dd1a0cef7b9a093a392e84f8b7c16385758a5cce5fae->leave($__internal_9467cf5480801ad7ea87dd1a0cef7b9a093a392e84f8b7c16385758a5cce5fae_prof);

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
