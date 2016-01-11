<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_6b2b5c1f81db11aa77947a88e9128e790c2c8938daf5375f79b882212dcba45a extends Twig_Template
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
        $__internal_942b146149d316e816c8df7a697ed79d5185cfcf57a7553b07273b426823ca7b = $this->env->getExtension("native_profiler");
        $__internal_942b146149d316e816c8df7a697ed79d5185cfcf57a7553b07273b426823ca7b->enter($__internal_942b146149d316e816c8df7a697ed79d5185cfcf57a7553b07273b426823ca7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_942b146149d316e816c8df7a697ed79d5185cfcf57a7553b07273b426823ca7b->leave($__internal_942b146149d316e816c8df7a697ed79d5185cfcf57a7553b07273b426823ca7b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
