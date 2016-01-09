<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_1561e04a0c53e0be4f9bc3a095e57ee381b1239f4b663ed21ef6ab0c5e1ea009 extends Twig_Template
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
        $__internal_d725abf19869fa020af62f88e8bef31cd57aaa1ea5cf2486d08dfd9f39d9209e = $this->env->getExtension("native_profiler");
        $__internal_d725abf19869fa020af62f88e8bef31cd57aaa1ea5cf2486d08dfd9f39d9209e->enter($__internal_d725abf19869fa020af62f88e8bef31cd57aaa1ea5cf2486d08dfd9f39d9209e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_d725abf19869fa020af62f88e8bef31cd57aaa1ea5cf2486d08dfd9f39d9209e->leave($__internal_d725abf19869fa020af62f88e8bef31cd57aaa1ea5cf2486d08dfd9f39d9209e_prof);

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
