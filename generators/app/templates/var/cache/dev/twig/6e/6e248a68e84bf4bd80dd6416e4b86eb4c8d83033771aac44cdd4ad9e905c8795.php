<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_45e45b6955e62761cb79d44bf0ea73b45c50ac877ae744e2949bc0bc2f359d90 extends Twig_Template
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
        $__internal_ab68e1059020cdd1d1b06e1bdafe5e544909adc73215fce5bbb53a936ee25fa7 = $this->env->getExtension("native_profiler");
        $__internal_ab68e1059020cdd1d1b06e1bdafe5e544909adc73215fce5bbb53a936ee25fa7->enter($__internal_ab68e1059020cdd1d1b06e1bdafe5e544909adc73215fce5bbb53a936ee25fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ab68e1059020cdd1d1b06e1bdafe5e544909adc73215fce5bbb53a936ee25fa7->leave($__internal_ab68e1059020cdd1d1b06e1bdafe5e544909adc73215fce5bbb53a936ee25fa7_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9fdf94d193cf875028611f8b10eb2624060e14c4d304b36d476e2d713df2d03d = $this->env->getExtension("native_profiler");
        $__internal_9fdf94d193cf875028611f8b10eb2624060e14c4d304b36d476e2d713df2d03d->enter($__internal_9fdf94d193cf875028611f8b10eb2624060e14c4d304b36d476e2d713df2d03d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_9fdf94d193cf875028611f8b10eb2624060e14c4d304b36d476e2d713df2d03d->leave($__internal_9fdf94d193cf875028611f8b10eb2624060e14c4d304b36d476e2d713df2d03d_prof);

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
