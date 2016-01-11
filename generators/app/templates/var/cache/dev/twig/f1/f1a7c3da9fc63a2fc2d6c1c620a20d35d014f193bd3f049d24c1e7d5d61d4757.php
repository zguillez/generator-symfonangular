<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_ca3353e8c6ee108eef3879cd77c84c76521cb925ce59036d4e3fc93c076785f3 extends Twig_Template
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
        $__internal_c0fd96b1ba8160401eb1bf10a2ac2ebb7072455e62f9baaa1ddc6258dd63d262 = $this->env->getExtension("native_profiler");
        $__internal_c0fd96b1ba8160401eb1bf10a2ac2ebb7072455e62f9baaa1ddc6258dd63d262->enter($__internal_c0fd96b1ba8160401eb1bf10a2ac2ebb7072455e62f9baaa1ddc6258dd63d262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_c0fd96b1ba8160401eb1bf10a2ac2ebb7072455e62f9baaa1ddc6258dd63d262->leave($__internal_c0fd96b1ba8160401eb1bf10a2ac2ebb7072455e62f9baaa1ddc6258dd63d262_prof);

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
