<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_e0a9f3609b694defef37e0521214fe6d8821281a265e8cc48e37266a0c8760f9 extends Twig_Template
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
        $__internal_3ba577d57e5e187e22ce55f880c23ac1cf6d76c0456b8c59c58d5b7fc00dbbde = $this->env->getExtension("native_profiler");
        $__internal_3ba577d57e5e187e22ce55f880c23ac1cf6d76c0456b8c59c58d5b7fc00dbbde->enter($__internal_3ba577d57e5e187e22ce55f880c23ac1cf6d76c0456b8c59c58d5b7fc00dbbde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_3ba577d57e5e187e22ce55f880c23ac1cf6d76c0456b8c59c58d5b7fc00dbbde->leave($__internal_3ba577d57e5e187e22ce55f880c23ac1cf6d76c0456b8c59c58d5b7fc00dbbde_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
