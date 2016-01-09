<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_cabed18c82825448583c4a51bdc8b6a65e302d714d3f29447641cb31eac6fd99 extends Twig_Template
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
        $__internal_015807f92f973f208645ed8ab131ba0f60995077490ee051e743a5f418d96172 = $this->env->getExtension("native_profiler");
        $__internal_015807f92f973f208645ed8ab131ba0f60995077490ee051e743a5f418d96172->enter($__internal_015807f92f973f208645ed8ab131ba0f60995077490ee051e743a5f418d96172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_015807f92f973f208645ed8ab131ba0f60995077490ee051e743a5f418d96172->leave($__internal_015807f92f973f208645ed8ab131ba0f60995077490ee051e743a5f418d96172_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
