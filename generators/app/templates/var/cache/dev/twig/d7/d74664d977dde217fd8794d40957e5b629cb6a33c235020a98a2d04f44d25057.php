<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_df7338ec4df4b2517175dc047c33dad7656d1784087388eb99bf1d8f4434417c extends Twig_Template
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
        $__internal_a2438f5a97797acdae6ed63c63237c57b384e01186fa83eb4bacd63dfd86a11b = $this->env->getExtension("native_profiler");
        $__internal_a2438f5a97797acdae6ed63c63237c57b384e01186fa83eb4bacd63dfd86a11b->enter($__internal_a2438f5a97797acdae6ed63c63237c57b384e01186fa83eb4bacd63dfd86a11b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a2438f5a97797acdae6ed63c63237c57b384e01186fa83eb4bacd63dfd86a11b->leave($__internal_a2438f5a97797acdae6ed63c63237c57b384e01186fa83eb4bacd63dfd86a11b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
