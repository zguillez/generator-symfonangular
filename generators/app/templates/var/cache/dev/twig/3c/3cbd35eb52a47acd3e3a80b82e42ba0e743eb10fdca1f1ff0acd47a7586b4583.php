<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_da0dbf3305948d39fe0039d422d4c60b237597b20ae382df477519d10ab25d72 extends Twig_Template
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
        $__internal_ed41b59b9d006c40328c6abf37dee04d31d17459837f46aa23d001ebc8b6ba17 = $this->env->getExtension("native_profiler");
        $__internal_ed41b59b9d006c40328c6abf37dee04d31d17459837f46aa23d001ebc8b6ba17->enter($__internal_ed41b59b9d006c40328c6abf37dee04d31d17459837f46aa23d001ebc8b6ba17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_ed41b59b9d006c40328c6abf37dee04d31d17459837f46aa23d001ebc8b6ba17->leave($__internal_ed41b59b9d006c40328c6abf37dee04d31d17459837f46aa23d001ebc8b6ba17_prof);

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
