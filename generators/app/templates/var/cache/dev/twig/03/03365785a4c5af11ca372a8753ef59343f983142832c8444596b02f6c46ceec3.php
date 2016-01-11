<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_9fa4f345fd24664a53610be65fa544428dbe3eb4281d3ba4bae0e8563b83d9e7 extends Twig_Template
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
        $__internal_74fdabb6ab0e1b0c81b5568577f479ea49f892e1f3e169867c42f49b4498ddcc = $this->env->getExtension("native_profiler");
        $__internal_74fdabb6ab0e1b0c81b5568577f479ea49f892e1f3e169867c42f49b4498ddcc->enter($__internal_74fdabb6ab0e1b0c81b5568577f479ea49f892e1f3e169867c42f49b4498ddcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_74fdabb6ab0e1b0c81b5568577f479ea49f892e1f3e169867c42f49b4498ddcc->leave($__internal_74fdabb6ab0e1b0c81b5568577f479ea49f892e1f3e169867c42f49b4498ddcc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
