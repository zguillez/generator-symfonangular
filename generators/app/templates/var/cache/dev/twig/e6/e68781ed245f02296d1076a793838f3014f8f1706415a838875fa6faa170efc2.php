<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_f99846d603f10c2e9e1ccef83206eeea59a6f7451ea0139dfa55f8fbf4f56963 extends Twig_Template
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
        $__internal_e178f7304d3ef812b92e7d23c59080b948bb7d4876a7a42c7b00bd051576a4ec = $this->env->getExtension("native_profiler");
        $__internal_e178f7304d3ef812b92e7d23c59080b948bb7d4876a7a42c7b00bd051576a4ec->enter($__internal_e178f7304d3ef812b92e7d23c59080b948bb7d4876a7a42c7b00bd051576a4ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_e178f7304d3ef812b92e7d23c59080b948bb7d4876a7a42c7b00bd051576a4ec->leave($__internal_e178f7304d3ef812b92e7d23c59080b948bb7d4876a7a42c7b00bd051576a4ec_prof);

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
