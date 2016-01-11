<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_15713d030c0930ba10c7ecc2631f29904af1980e54f80b115a5dec3c6fb2df9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e02f2c2d1e996f455767d69dd4b56540242b71613af1d5a86de274c9dc1b517f = $this->env->getExtension("native_profiler");
        $__internal_e02f2c2d1e996f455767d69dd4b56540242b71613af1d5a86de274c9dc1b517f->enter($__internal_e02f2c2d1e996f455767d69dd4b56540242b71613af1d5a86de274c9dc1b517f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_e02f2c2d1e996f455767d69dd4b56540242b71613af1d5a86de274c9dc1b517f->leave($__internal_e02f2c2d1e996f455767d69dd4b56540242b71613af1d5a86de274c9dc1b517f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
