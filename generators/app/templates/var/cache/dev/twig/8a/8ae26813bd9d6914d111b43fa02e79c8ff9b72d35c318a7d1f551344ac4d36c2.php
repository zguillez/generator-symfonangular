<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_459e5f5e103d3bbced0ec1b334a867c988a33999873bd3e5340d03513d824b50 extends Twig_Template
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
        $__internal_9daf3eec780bf2ac6768efc53a1032afbc05d4cebcb008c4ced538387aec56e2 = $this->env->getExtension("native_profiler");
        $__internal_9daf3eec780bf2ac6768efc53a1032afbc05d4cebcb008c4ced538387aec56e2->enter($__internal_9daf3eec780bf2ac6768efc53a1032afbc05d4cebcb008c4ced538387aec56e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_9daf3eec780bf2ac6768efc53a1032afbc05d4cebcb008c4ced538387aec56e2->leave($__internal_9daf3eec780bf2ac6768efc53a1032afbc05d4cebcb008c4ced538387aec56e2_prof);

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
