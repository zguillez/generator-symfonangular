<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_afad9e6d7dc3c672a2a4fa6a5c547b43fac4628dfa92ad2ec58a6effafcb634f extends Twig_Template
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
        $__internal_2c83178d4b1d3298a664f489bc844596875dfe26057c07e3d5944773bb388aa1 = $this->env->getExtension("native_profiler");
        $__internal_2c83178d4b1d3298a664f489bc844596875dfe26057c07e3d5944773bb388aa1->enter($__internal_2c83178d4b1d3298a664f489bc844596875dfe26057c07e3d5944773bb388aa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_2c83178d4b1d3298a664f489bc844596875dfe26057c07e3d5944773bb388aa1->leave($__internal_2c83178d4b1d3298a664f489bc844596875dfe26057c07e3d5944773bb388aa1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
