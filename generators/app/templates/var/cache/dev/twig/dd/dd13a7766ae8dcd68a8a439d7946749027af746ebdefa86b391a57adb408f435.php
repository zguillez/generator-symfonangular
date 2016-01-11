<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_14ad852baf2273979079f3f079bc0ce41a5768095e28c05096403165169c1b98 extends Twig_Template
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
        $__internal_9276595fba90e2a6ef23721d9c6b660d89e0ab1f6313dc48e876d3a65b83dcf4 = $this->env->getExtension("native_profiler");
        $__internal_9276595fba90e2a6ef23721d9c6b660d89e0ab1f6313dc48e876d3a65b83dcf4->enter($__internal_9276595fba90e2a6ef23721d9c6b660d89e0ab1f6313dc48e876d3a65b83dcf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_9276595fba90e2a6ef23721d9c6b660d89e0ab1f6313dc48e876d3a65b83dcf4->leave($__internal_9276595fba90e2a6ef23721d9c6b660d89e0ab1f6313dc48e876d3a65b83dcf4_prof);

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
