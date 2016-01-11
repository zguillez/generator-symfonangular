<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_f9473c91dcad7431486428068218341209f9fcd65e72cddf110cb0cd4017171d extends Twig_Template
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
        $__internal_877caee080594f98f77069ac0c757216550b6be4200dce9487e3bc20382ee921 = $this->env->getExtension("native_profiler");
        $__internal_877caee080594f98f77069ac0c757216550b6be4200dce9487e3bc20382ee921->enter($__internal_877caee080594f98f77069ac0c757216550b6be4200dce9487e3bc20382ee921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_877caee080594f98f77069ac0c757216550b6be4200dce9487e3bc20382ee921->leave($__internal_877caee080594f98f77069ac0c757216550b6be4200dce9487e3bc20382ee921_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
