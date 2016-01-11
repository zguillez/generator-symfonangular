<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_baaf38d214f07230399ebd0388af5e6e884249451a226861a387dba97189177c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dbe262e7274e0dfce74c4550e38779200eb87eb8e5721edc70bb749aadfdcc30 = $this->env->getExtension("native_profiler");
        $__internal_dbe262e7274e0dfce74c4550e38779200eb87eb8e5721edc70bb749aadfdcc30->enter($__internal_dbe262e7274e0dfce74c4550e38779200eb87eb8e5721edc70bb749aadfdcc30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_dbe262e7274e0dfce74c4550e38779200eb87eb8e5721edc70bb749aadfdcc30->leave($__internal_dbe262e7274e0dfce74c4550e38779200eb87eb8e5721edc70bb749aadfdcc30_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_ba2c363d484bfca79517e58604bed96014b5df488e51ab0418b898ca3daa5b40 = $this->env->getExtension("native_profiler");
        $__internal_ba2c363d484bfca79517e58604bed96014b5df488e51ab0418b898ca3daa5b40->enter($__internal_ba2c363d484bfca79517e58604bed96014b5df488e51ab0418b898ca3daa5b40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ba2c363d484bfca79517e58604bed96014b5df488e51ab0418b898ca3daa5b40->leave($__internal_ba2c363d484bfca79517e58604bed96014b5df488e51ab0418b898ca3daa5b40_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
