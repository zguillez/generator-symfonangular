<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_be2de7969b670f97bedeeebcb8e6e627d7f041571ceaad31ccf52c7c609f8b7c extends Twig_Template
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
        $__internal_46e939ddbb12eeacc5284d358be3ec13fb1a08121b7d2d48d16cf519427b3e8e = $this->env->getExtension("native_profiler");
        $__internal_46e939ddbb12eeacc5284d358be3ec13fb1a08121b7d2d48d16cf519427b3e8e->enter($__internal_46e939ddbb12eeacc5284d358be3ec13fb1a08121b7d2d48d16cf519427b3e8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_46e939ddbb12eeacc5284d358be3ec13fb1a08121b7d2d48d16cf519427b3e8e->leave($__internal_46e939ddbb12eeacc5284d358be3ec13fb1a08121b7d2d48d16cf519427b3e8e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
