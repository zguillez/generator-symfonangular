<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_3772edba66b58856fac3c5a6ff888bad20f14c7e4baa5d973be23a0e8672dd39 extends Twig_Template
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
        $__internal_5f963bf60d599bac192d4cf4bca033897aa037d49b593ebeb0defa1f077d4cdd = $this->env->getExtension("native_profiler");
        $__internal_5f963bf60d599bac192d4cf4bca033897aa037d49b593ebeb0defa1f077d4cdd->enter($__internal_5f963bf60d599bac192d4cf4bca033897aa037d49b593ebeb0defa1f077d4cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_5f963bf60d599bac192d4cf4bca033897aa037d49b593ebeb0defa1f077d4cdd->leave($__internal_5f963bf60d599bac192d4cf4bca033897aa037d49b593ebeb0defa1f077d4cdd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
