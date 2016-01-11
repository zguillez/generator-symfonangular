<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_62ea46db67082d18daab1c9ab631f1b16a02e17ac77f041f4abca6127076e8b3 extends Twig_Template
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
        $__internal_95a84308fdac2d69e149498c2c51d2ba032928948a14db0e866239a34816b140 = $this->env->getExtension("native_profiler");
        $__internal_95a84308fdac2d69e149498c2c51d2ba032928948a14db0e866239a34816b140->enter($__internal_95a84308fdac2d69e149498c2c51d2ba032928948a14db0e866239a34816b140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_95a84308fdac2d69e149498c2c51d2ba032928948a14db0e866239a34816b140->leave($__internal_95a84308fdac2d69e149498c2c51d2ba032928948a14db0e866239a34816b140_prof);

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
