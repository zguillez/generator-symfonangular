<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_6e802477887fcb634684d03471b5a071a7c64dcf7cc798b5ababd992ddad5f4e extends Twig_Template
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
        $__internal_b7f9509b6994b762754981af5d44aa51392d7fb683a5ed3e614d869b82fbabb1 = $this->env->getExtension("native_profiler");
        $__internal_b7f9509b6994b762754981af5d44aa51392d7fb683a5ed3e614d869b82fbabb1->enter($__internal_b7f9509b6994b762754981af5d44aa51392d7fb683a5ed3e614d869b82fbabb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_b7f9509b6994b762754981af5d44aa51392d7fb683a5ed3e614d869b82fbabb1->leave($__internal_b7f9509b6994b762754981af5d44aa51392d7fb683a5ed3e614d869b82fbabb1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
