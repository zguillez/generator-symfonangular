<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_6f6e71ba7cbef02819427ada7e593c9ebfc0bc559d85697cf88cf2f4552529f7 extends Twig_Template
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
        $__internal_22bf398bf588fe7be4a39c6c9ae963f5529c20fb5b34ae365b876be14bb2ee01 = $this->env->getExtension("native_profiler");
        $__internal_22bf398bf588fe7be4a39c6c9ae963f5529c20fb5b34ae365b876be14bb2ee01->enter($__internal_22bf398bf588fe7be4a39c6c9ae963f5529c20fb5b34ae365b876be14bb2ee01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_22bf398bf588fe7be4a39c6c9ae963f5529c20fb5b34ae365b876be14bb2ee01->leave($__internal_22bf398bf588fe7be4a39c6c9ae963f5529c20fb5b34ae365b876be14bb2ee01_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
