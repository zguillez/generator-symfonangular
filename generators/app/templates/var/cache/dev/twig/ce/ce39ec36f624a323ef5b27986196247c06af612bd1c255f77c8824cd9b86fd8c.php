<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_5abd8baf596918c2aa7afd3e1d85de2ee5604743c1462afb973836429a054462 extends Twig_Template
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
        $__internal_4f5cc8a325568eb20115c3a02af53bddd3e5fdf0fb0f27a00f079f60f8efa3f9 = $this->env->getExtension("native_profiler");
        $__internal_4f5cc8a325568eb20115c3a02af53bddd3e5fdf0fb0f27a00f079f60f8efa3f9->enter($__internal_4f5cc8a325568eb20115c3a02af53bddd3e5fdf0fb0f27a00f079f60f8efa3f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_4f5cc8a325568eb20115c3a02af53bddd3e5fdf0fb0f27a00f079f60f8efa3f9->leave($__internal_4f5cc8a325568eb20115c3a02af53bddd3e5fdf0fb0f27a00f079f60f8efa3f9_prof);

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
