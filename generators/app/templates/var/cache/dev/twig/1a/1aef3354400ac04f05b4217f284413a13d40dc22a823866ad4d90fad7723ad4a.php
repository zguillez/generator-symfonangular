<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_8e16124f097c058fa67fe2e7acb900d4ec11629bf2169e8c7a4ffd646ef82f85 extends Twig_Template
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
        $__internal_8e7fefba09d4a347f8092185c6f802b6578cd353cf4c0e80d42dc3772928ce25 = $this->env->getExtension("native_profiler");
        $__internal_8e7fefba09d4a347f8092185c6f802b6578cd353cf4c0e80d42dc3772928ce25->enter($__internal_8e7fefba09d4a347f8092185c6f802b6578cd353cf4c0e80d42dc3772928ce25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_8e7fefba09d4a347f8092185c6f802b6578cd353cf4c0e80d42dc3772928ce25->leave($__internal_8e7fefba09d4a347f8092185c6f802b6578cd353cf4c0e80d42dc3772928ce25_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
