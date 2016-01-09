<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_673daf0ed8d309c151d87592421ddc706a868c19abcd529a83f62c630776803c extends Twig_Template
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
        $__internal_25e2857c755870098831a950b77e9d6d1f05d4d3d9785b9d0ad869ee70772899 = $this->env->getExtension("native_profiler");
        $__internal_25e2857c755870098831a950b77e9d6d1f05d4d3d9785b9d0ad869ee70772899->enter($__internal_25e2857c755870098831a950b77e9d6d1f05d4d3d9785b9d0ad869ee70772899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_25e2857c755870098831a950b77e9d6d1f05d4d3d9785b9d0ad869ee70772899->leave($__internal_25e2857c755870098831a950b77e9d6d1f05d4d3d9785b9d0ad869ee70772899_prof);

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
