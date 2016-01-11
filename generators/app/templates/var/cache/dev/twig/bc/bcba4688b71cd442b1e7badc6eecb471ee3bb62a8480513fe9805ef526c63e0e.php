<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_668ce9e467506134a688208f856ed8605e4205ba354ca441e2e15773edd96761 extends Twig_Template
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
        $__internal_788a3170e69da36f67e9d2a5cf525cc9ec7a0c9583b80d8f4df48f7e1190745e = $this->env->getExtension("native_profiler");
        $__internal_788a3170e69da36f67e9d2a5cf525cc9ec7a0c9583b80d8f4df48f7e1190745e->enter($__internal_788a3170e69da36f67e9d2a5cf525cc9ec7a0c9583b80d8f4df48f7e1190745e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_788a3170e69da36f67e9d2a5cf525cc9ec7a0c9583b80d8f4df48f7e1190745e->leave($__internal_788a3170e69da36f67e9d2a5cf525cc9ec7a0c9583b80d8f4df48f7e1190745e_prof);

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
