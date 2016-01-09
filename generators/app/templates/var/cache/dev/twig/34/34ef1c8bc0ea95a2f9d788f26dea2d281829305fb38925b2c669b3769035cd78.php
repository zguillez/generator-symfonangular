<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_629e42567b4a22738c953c307494bf0f2c76af040fa362fc84b6bb438c1a2dc0 extends Twig_Template
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
        $__internal_77a2fce4277a1cc664f91b452ec8594f903bcc42436244ad83deb46ca3750460 = $this->env->getExtension("native_profiler");
        $__internal_77a2fce4277a1cc664f91b452ec8594f903bcc42436244ad83deb46ca3750460->enter($__internal_77a2fce4277a1cc664f91b452ec8594f903bcc42436244ad83deb46ca3750460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_77a2fce4277a1cc664f91b452ec8594f903bcc42436244ad83deb46ca3750460->leave($__internal_77a2fce4277a1cc664f91b452ec8594f903bcc42436244ad83deb46ca3750460_prof);

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
