<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_f3cb0cd10737cf1f25b90868450443d0bab5f3b3cb663d7e70d968626c981cb3 extends Twig_Template
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
        $__internal_7fa5117530f259e498d04d6dcfa022845700ae2db9b1bf15cae3e89323ce1d78 = $this->env->getExtension("native_profiler");
        $__internal_7fa5117530f259e498d04d6dcfa022845700ae2db9b1bf15cae3e89323ce1d78->enter($__internal_7fa5117530f259e498d04d6dcfa022845700ae2db9b1bf15cae3e89323ce1d78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_7fa5117530f259e498d04d6dcfa022845700ae2db9b1bf15cae3e89323ce1d78->leave($__internal_7fa5117530f259e498d04d6dcfa022845700ae2db9b1bf15cae3e89323ce1d78_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
