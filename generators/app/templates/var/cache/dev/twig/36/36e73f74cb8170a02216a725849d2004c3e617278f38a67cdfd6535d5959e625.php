<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_1dbed14cbc93e0ddda5c50ebdd6805aae150db36c5ef4d2d059371e658b75d10 extends Twig_Template
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
        $__internal_5988b123acc83593b83da7a2f4b0cfb3a1b93a4cef4bdcdba6f670415fed7473 = $this->env->getExtension("native_profiler");
        $__internal_5988b123acc83593b83da7a2f4b0cfb3a1b93a4cef4bdcdba6f670415fed7473->enter($__internal_5988b123acc83593b83da7a2f4b0cfb3a1b93a4cef4bdcdba6f670415fed7473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_5988b123acc83593b83da7a2f4b0cfb3a1b93a4cef4bdcdba6f670415fed7473->leave($__internal_5988b123acc83593b83da7a2f4b0cfb3a1b93a4cef4bdcdba6f670415fed7473_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
