<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_b96fa3ba567d6cbb01d1cc5e385238b222cfdecd8c7aeeaea9733984dd0436f2 extends Twig_Template
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
        $__internal_09e5c7612d997095d13987550e8d7f6d94d5985adcd1b78e999e604abc5a4e39 = $this->env->getExtension("native_profiler");
        $__internal_09e5c7612d997095d13987550e8d7f6d94d5985adcd1b78e999e604abc5a4e39->enter($__internal_09e5c7612d997095d13987550e8d7f6d94d5985adcd1b78e999e604abc5a4e39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_09e5c7612d997095d13987550e8d7f6d94d5985adcd1b78e999e604abc5a4e39->leave($__internal_09e5c7612d997095d13987550e8d7f6d94d5985adcd1b78e999e604abc5a4e39_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
