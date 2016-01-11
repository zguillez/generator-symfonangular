<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_c71165f46d304481b1a86e449596daa7acce83b3b8d63cf0eccdb8d9aabeeea0 extends Twig_Template
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
        $__internal_2722413509b454976592f59f1a48e21f983320e5d3d1fd095cd39070089b2860 = $this->env->getExtension("native_profiler");
        $__internal_2722413509b454976592f59f1a48e21f983320e5d3d1fd095cd39070089b2860->enter($__internal_2722413509b454976592f59f1a48e21f983320e5d3d1fd095cd39070089b2860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_2722413509b454976592f59f1a48e21f983320e5d3d1fd095cd39070089b2860->leave($__internal_2722413509b454976592f59f1a48e21f983320e5d3d1fd095cd39070089b2860_prof);

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
