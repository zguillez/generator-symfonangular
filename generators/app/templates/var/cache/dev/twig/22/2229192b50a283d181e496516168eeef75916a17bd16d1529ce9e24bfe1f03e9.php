<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_43fe0a5751e861e63ebcb74f8a854ec652392d86573c82032e5506420c36547d extends Twig_Template
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
        $__internal_06dcb19446e8a335fa6d6774eba121ad50ff9bbcf5c255ae8227f618c0a5bcb5 = $this->env->getExtension("native_profiler");
        $__internal_06dcb19446e8a335fa6d6774eba121ad50ff9bbcf5c255ae8227f618c0a5bcb5->enter($__internal_06dcb19446e8a335fa6d6774eba121ad50ff9bbcf5c255ae8227f618c0a5bcb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_06dcb19446e8a335fa6d6774eba121ad50ff9bbcf5c255ae8227f618c0a5bcb5->leave($__internal_06dcb19446e8a335fa6d6774eba121ad50ff9bbcf5c255ae8227f618c0a5bcb5_prof);

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
