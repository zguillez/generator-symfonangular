<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_a5bbe9086dc67eb32928abdb5b725070daa760312c9a68a74a08cbc70dc40fe3 extends Twig_Template
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
        $__internal_0d95cf18dc3e0c3f0fc438768e776928df139e0a9547cd6afe9725bcb268ce87 = $this->env->getExtension("native_profiler");
        $__internal_0d95cf18dc3e0c3f0fc438768e776928df139e0a9547cd6afe9725bcb268ce87->enter($__internal_0d95cf18dc3e0c3f0fc438768e776928df139e0a9547cd6afe9725bcb268ce87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_0d95cf18dc3e0c3f0fc438768e776928df139e0a9547cd6afe9725bcb268ce87->leave($__internal_0d95cf18dc3e0c3f0fc438768e776928df139e0a9547cd6afe9725bcb268ce87_prof);

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
