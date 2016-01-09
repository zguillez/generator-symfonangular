<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_360568ead9e7337dc04d5a3dfadcb6946d98f41e25b765831dcd4dc5067f68d7 extends Twig_Template
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
        $__internal_d24c2fa278c0a39d6bf1577b8278b4977e10140a1695e03627cbef95b4b38f6b = $this->env->getExtension("native_profiler");
        $__internal_d24c2fa278c0a39d6bf1577b8278b4977e10140a1695e03627cbef95b4b38f6b->enter($__internal_d24c2fa278c0a39d6bf1577b8278b4977e10140a1695e03627cbef95b4b38f6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_d24c2fa278c0a39d6bf1577b8278b4977e10140a1695e03627cbef95b4b38f6b->leave($__internal_d24c2fa278c0a39d6bf1577b8278b4977e10140a1695e03627cbef95b4b38f6b_prof);

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
