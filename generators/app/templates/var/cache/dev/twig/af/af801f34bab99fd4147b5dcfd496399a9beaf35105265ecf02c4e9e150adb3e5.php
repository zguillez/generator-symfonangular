<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_25bd41756b3dd818acc7aeb50fc1a877e54f250f93178348124ab09408a1a776 extends Twig_Template
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
        $__internal_7e8334752024c1398b3a75fefc6182b7511d92f82840033dd71c5d911ee41284 = $this->env->getExtension("native_profiler");
        $__internal_7e8334752024c1398b3a75fefc6182b7511d92f82840033dd71c5d911ee41284->enter($__internal_7e8334752024c1398b3a75fefc6182b7511d92f82840033dd71c5d911ee41284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_7e8334752024c1398b3a75fefc6182b7511d92f82840033dd71c5d911ee41284->leave($__internal_7e8334752024c1398b3a75fefc6182b7511d92f82840033dd71c5d911ee41284_prof);

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
