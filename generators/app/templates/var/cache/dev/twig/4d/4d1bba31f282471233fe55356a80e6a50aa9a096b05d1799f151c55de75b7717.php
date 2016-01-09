<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_bae58fe5e3681745110236b302b72d3a5938fe71db95e73ecd577802adeb0016 extends Twig_Template
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
        $__internal_482c6b50f31ab01ee23823b01c2c7371ac56a545826d4cf04db7f8716d1cca6c = $this->env->getExtension("native_profiler");
        $__internal_482c6b50f31ab01ee23823b01c2c7371ac56a545826d4cf04db7f8716d1cca6c->enter($__internal_482c6b50f31ab01ee23823b01c2c7371ac56a545826d4cf04db7f8716d1cca6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_482c6b50f31ab01ee23823b01c2c7371ac56a545826d4cf04db7f8716d1cca6c->leave($__internal_482c6b50f31ab01ee23823b01c2c7371ac56a545826d4cf04db7f8716d1cca6c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
