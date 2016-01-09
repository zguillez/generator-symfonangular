<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_0b74f43fdb17e119008aa873c8b9422d1e6f8682dfbcf8a2aa47e008294a5aab extends Twig_Template
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
        $__internal_e19144f4944bc71e3ea5cf777d38f5d2dd9f1808597f4ec196dd473984dba0bb = $this->env->getExtension("native_profiler");
        $__internal_e19144f4944bc71e3ea5cf777d38f5d2dd9f1808597f4ec196dd473984dba0bb->enter($__internal_e19144f4944bc71e3ea5cf777d38f5d2dd9f1808597f4ec196dd473984dba0bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_e19144f4944bc71e3ea5cf777d38f5d2dd9f1808597f4ec196dd473984dba0bb->leave($__internal_e19144f4944bc71e3ea5cf777d38f5d2dd9f1808597f4ec196dd473984dba0bb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
