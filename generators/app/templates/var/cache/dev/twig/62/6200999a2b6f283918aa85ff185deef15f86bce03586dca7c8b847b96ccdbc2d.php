<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_7177ac7e2d62241f3e48e0a7659ca84a639201b91d6c5a238a205d97bd03ce69 extends Twig_Template
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
        $__internal_52dc1fb7bf4879beead543d74289d6b1713d04570bc692010f3502ade577f276 = $this->env->getExtension("native_profiler");
        $__internal_52dc1fb7bf4879beead543d74289d6b1713d04570bc692010f3502ade577f276->enter($__internal_52dc1fb7bf4879beead543d74289d6b1713d04570bc692010f3502ade577f276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_52dc1fb7bf4879beead543d74289d6b1713d04570bc692010f3502ade577f276->leave($__internal_52dc1fb7bf4879beead543d74289d6b1713d04570bc692010f3502ade577f276_prof);

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
