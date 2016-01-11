<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_f1cdf937f5eefdd34a6769f9a4d32f93283ab84ccd7bdcfc2af66760786d24c6 extends Twig_Template
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
        $__internal_03617a265dff1a6fb3725beee2cf290946bf4c9675af9fa0b3c002174fc6459f = $this->env->getExtension("native_profiler");
        $__internal_03617a265dff1a6fb3725beee2cf290946bf4c9675af9fa0b3c002174fc6459f->enter($__internal_03617a265dff1a6fb3725beee2cf290946bf4c9675af9fa0b3c002174fc6459f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_03617a265dff1a6fb3725beee2cf290946bf4c9675af9fa0b3c002174fc6459f->leave($__internal_03617a265dff1a6fb3725beee2cf290946bf4c9675af9fa0b3c002174fc6459f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
