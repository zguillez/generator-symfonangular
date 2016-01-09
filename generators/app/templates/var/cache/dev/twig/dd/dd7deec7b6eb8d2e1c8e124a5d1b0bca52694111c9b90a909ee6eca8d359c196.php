<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_66a259f719556e2fd8d2763b44e9f3f9ddf71d435d50d8ecab24038dc2b692c7 extends Twig_Template
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
        $__internal_e0f5138a94cbd8d4b1bade928a2ab39eb3cda6f88429326c03b5e71da30b3807 = $this->env->getExtension("native_profiler");
        $__internal_e0f5138a94cbd8d4b1bade928a2ab39eb3cda6f88429326c03b5e71da30b3807->enter($__internal_e0f5138a94cbd8d4b1bade928a2ab39eb3cda6f88429326c03b5e71da30b3807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_e0f5138a94cbd8d4b1bade928a2ab39eb3cda6f88429326c03b5e71da30b3807->leave($__internal_e0f5138a94cbd8d4b1bade928a2ab39eb3cda6f88429326c03b5e71da30b3807_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
