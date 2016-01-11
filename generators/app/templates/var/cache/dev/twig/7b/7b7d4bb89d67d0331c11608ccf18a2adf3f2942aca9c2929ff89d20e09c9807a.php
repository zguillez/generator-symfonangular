<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_9f4ea8d15be43a66078934b1305803d59d35e28c07bc851ef5d6eb7f353d55ff extends Twig_Template
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
        $__internal_66a08d2cc3a7a5e339590482238f0f9f7b3df0eed0b24541b27d36e36a0de193 = $this->env->getExtension("native_profiler");
        $__internal_66a08d2cc3a7a5e339590482238f0f9f7b3df0eed0b24541b27d36e36a0de193->enter($__internal_66a08d2cc3a7a5e339590482238f0f9f7b3df0eed0b24541b27d36e36a0de193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_66a08d2cc3a7a5e339590482238f0f9f7b3df0eed0b24541b27d36e36a0de193->leave($__internal_66a08d2cc3a7a5e339590482238f0f9f7b3df0eed0b24541b27d36e36a0de193_prof);

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
