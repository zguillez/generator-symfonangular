<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_86c18361d651544b130fcb0abb69c986a56dccf6682fb9b96fb964e8f57451b0 extends Twig_Template
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
        $__internal_de4b19e64d295b8d35c56d546c6e292fc9c5320dc8d62f5464e0dd5ed123c85f = $this->env->getExtension("native_profiler");
        $__internal_de4b19e64d295b8d35c56d546c6e292fc9c5320dc8d62f5464e0dd5ed123c85f->enter($__internal_de4b19e64d295b8d35c56d546c6e292fc9c5320dc8d62f5464e0dd5ed123c85f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_de4b19e64d295b8d35c56d546c6e292fc9c5320dc8d62f5464e0dd5ed123c85f->leave($__internal_de4b19e64d295b8d35c56d546c6e292fc9c5320dc8d62f5464e0dd5ed123c85f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
