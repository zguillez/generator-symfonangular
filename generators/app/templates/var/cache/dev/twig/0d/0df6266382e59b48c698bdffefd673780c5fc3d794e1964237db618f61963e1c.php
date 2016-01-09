<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_01aabbb761d8daa0b16aa85bff1ac2317f239346e45c7b41317e417fc2211798 extends Twig_Template
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
        $__internal_0b96d965541edd26c23da984378078b64bd868f8512ea2d0de0d0b897d0a5824 = $this->env->getExtension("native_profiler");
        $__internal_0b96d965541edd26c23da984378078b64bd868f8512ea2d0de0d0b897d0a5824->enter($__internal_0b96d965541edd26c23da984378078b64bd868f8512ea2d0de0d0b897d0a5824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_0b96d965541edd26c23da984378078b64bd868f8512ea2d0de0d0b897d0a5824->leave($__internal_0b96d965541edd26c23da984378078b64bd868f8512ea2d0de0d0b897d0a5824_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
