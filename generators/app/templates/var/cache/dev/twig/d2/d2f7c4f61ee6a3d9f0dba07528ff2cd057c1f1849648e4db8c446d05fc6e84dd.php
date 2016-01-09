<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_5310d4a741b5073c31bd6c5e585122e4190091cc53352df7ea9d8dbfd94e5cb2 extends Twig_Template
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
        $__internal_724293225b84f1ce765faf0d26c9e68b9f081a4eba9b91f51cd7d39804d9d48b = $this->env->getExtension("native_profiler");
        $__internal_724293225b84f1ce765faf0d26c9e68b9f081a4eba9b91f51cd7d39804d9d48b->enter($__internal_724293225b84f1ce765faf0d26c9e68b9f081a4eba9b91f51cd7d39804d9d48b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_724293225b84f1ce765faf0d26c9e68b9f081a4eba9b91f51cd7d39804d9d48b->leave($__internal_724293225b84f1ce765faf0d26c9e68b9f081a4eba9b91f51cd7d39804d9d48b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
