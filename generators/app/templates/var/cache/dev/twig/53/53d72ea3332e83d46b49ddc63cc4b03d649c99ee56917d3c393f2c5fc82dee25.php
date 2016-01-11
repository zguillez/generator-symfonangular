<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_adb2ce1f0ee2eacbf77677e4f68069ad5fe4874d1e4cb4d3792968427e6b04b2 extends Twig_Template
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
        $__internal_0ad98e63cf39fc14aab21eed2123a50005669fd46689dec186a21eec25025fa7 = $this->env->getExtension("native_profiler");
        $__internal_0ad98e63cf39fc14aab21eed2123a50005669fd46689dec186a21eec25025fa7->enter($__internal_0ad98e63cf39fc14aab21eed2123a50005669fd46689dec186a21eec25025fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_0ad98e63cf39fc14aab21eed2123a50005669fd46689dec186a21eec25025fa7->leave($__internal_0ad98e63cf39fc14aab21eed2123a50005669fd46689dec186a21eec25025fa7_prof);

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
