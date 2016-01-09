<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_5577218a563b6ba23ab78c2837e28120299adb7e0ec71e1ea564d51d88866dfb extends Twig_Template
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
        $__internal_aba1f6046012757d19c6c2e015826a9242d669fdeb7671808f28f64e9f73d18e = $this->env->getExtension("native_profiler");
        $__internal_aba1f6046012757d19c6c2e015826a9242d669fdeb7671808f28f64e9f73d18e->enter($__internal_aba1f6046012757d19c6c2e015826a9242d669fdeb7671808f28f64e9f73d18e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_aba1f6046012757d19c6c2e015826a9242d669fdeb7671808f28f64e9f73d18e->leave($__internal_aba1f6046012757d19c6c2e015826a9242d669fdeb7671808f28f64e9f73d18e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
