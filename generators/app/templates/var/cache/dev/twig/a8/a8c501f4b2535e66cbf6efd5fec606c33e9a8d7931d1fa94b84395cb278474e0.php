<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_01e664e09256917309fd5ef883cf9f0860a143a1f744a6fcbd6d1f989d5697e6 extends Twig_Template
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
        $__internal_79cb7f5d676237409609bcb337f4cebfe5bab7ac8e7b08fb944f85f963077271 = $this->env->getExtension("native_profiler");
        $__internal_79cb7f5d676237409609bcb337f4cebfe5bab7ac8e7b08fb944f85f963077271->enter($__internal_79cb7f5d676237409609bcb337f4cebfe5bab7ac8e7b08fb944f85f963077271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_79cb7f5d676237409609bcb337f4cebfe5bab7ac8e7b08fb944f85f963077271->leave($__internal_79cb7f5d676237409609bcb337f4cebfe5bab7ac8e7b08fb944f85f963077271_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
