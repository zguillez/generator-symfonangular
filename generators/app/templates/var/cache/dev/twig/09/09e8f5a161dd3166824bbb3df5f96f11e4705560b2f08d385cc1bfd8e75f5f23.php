<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_854c92e420f449d6d1402c1781c90084bcc77fae3de05721b0b94c46b1e998c2 extends Twig_Template
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
        $__internal_21d3ee358113d9f9206da8147c2e4b50424a627e0b1f0797f69d30b3f6a5e7b2 = $this->env->getExtension("native_profiler");
        $__internal_21d3ee358113d9f9206da8147c2e4b50424a627e0b1f0797f69d30b3f6a5e7b2->enter($__internal_21d3ee358113d9f9206da8147c2e4b50424a627e0b1f0797f69d30b3f6a5e7b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_21d3ee358113d9f9206da8147c2e4b50424a627e0b1f0797f69d30b3f6a5e7b2->leave($__internal_21d3ee358113d9f9206da8147c2e4b50424a627e0b1f0797f69d30b3f6a5e7b2_prof);

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
