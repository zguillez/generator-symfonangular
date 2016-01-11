<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_a2bae36637549300ce28ab60cbf3cbdebd532854a6f142afa9096f2d03c6228a extends Twig_Template
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
        $__internal_2192759ac06c575c0400b1996662c48d53e41c72ba3acd45ec4b06dd5865f670 = $this->env->getExtension("native_profiler");
        $__internal_2192759ac06c575c0400b1996662c48d53e41c72ba3acd45ec4b06dd5865f670->enter($__internal_2192759ac06c575c0400b1996662c48d53e41c72ba3acd45ec4b06dd5865f670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_2192759ac06c575c0400b1996662c48d53e41c72ba3acd45ec4b06dd5865f670->leave($__internal_2192759ac06c575c0400b1996662c48d53e41c72ba3acd45ec4b06dd5865f670_prof);

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
