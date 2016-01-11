<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_c9ce7b57f256ab552e8bc5f4506a2150bf026df48ee5a9cc1084dc19909b63e6 extends Twig_Template
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
        $__internal_4deab6eb69e15dacd49b8dcdc71cd8aac7719e53d1bfba2ceb15e237d041178b = $this->env->getExtension("native_profiler");
        $__internal_4deab6eb69e15dacd49b8dcdc71cd8aac7719e53d1bfba2ceb15e237d041178b->enter($__internal_4deab6eb69e15dacd49b8dcdc71cd8aac7719e53d1bfba2ceb15e237d041178b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_4deab6eb69e15dacd49b8dcdc71cd8aac7719e53d1bfba2ceb15e237d041178b->leave($__internal_4deab6eb69e15dacd49b8dcdc71cd8aac7719e53d1bfba2ceb15e237d041178b_prof);

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
