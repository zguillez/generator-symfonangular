<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_738ff5b97f1e925a636a51163734c50943248f33d261d906b5e577dea759af7b extends Twig_Template
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
        $__internal_f5b7fe3676a41d9652fcfe2cbac385d180ba261d1260f422ca94d5b472b6b3c8 = $this->env->getExtension("native_profiler");
        $__internal_f5b7fe3676a41d9652fcfe2cbac385d180ba261d1260f422ca94d5b472b6b3c8->enter($__internal_f5b7fe3676a41d9652fcfe2cbac385d180ba261d1260f422ca94d5b472b6b3c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_f5b7fe3676a41d9652fcfe2cbac385d180ba261d1260f422ca94d5b472b6b3c8->leave($__internal_f5b7fe3676a41d9652fcfe2cbac385d180ba261d1260f422ca94d5b472b6b3c8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
