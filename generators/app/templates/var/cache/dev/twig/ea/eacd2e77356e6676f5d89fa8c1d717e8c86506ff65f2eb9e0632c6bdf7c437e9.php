<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_83fd777e1b9daf308dbb9e324f014402f43b9405bedb44156692bde8b59dce50 extends Twig_Template
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
        $__internal_b565224409a07e9d13b234503fa08df582d99b102ce3f522af0c5955a6ccbe72 = $this->env->getExtension("native_profiler");
        $__internal_b565224409a07e9d13b234503fa08df582d99b102ce3f522af0c5955a6ccbe72->enter($__internal_b565224409a07e9d13b234503fa08df582d99b102ce3f522af0c5955a6ccbe72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_b565224409a07e9d13b234503fa08df582d99b102ce3f522af0c5955a6ccbe72->leave($__internal_b565224409a07e9d13b234503fa08df582d99b102ce3f522af0c5955a6ccbe72_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
