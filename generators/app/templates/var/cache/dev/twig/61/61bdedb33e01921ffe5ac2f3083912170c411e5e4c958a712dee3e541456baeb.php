<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_c68bc10c07f5f090b2cb7d40dbbfd3c4dd1469d850958f6128faa7a7f5776794 extends Twig_Template
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
        $__internal_9876da774ce5fcc32b54b20e2200db2a83b28aed5e02a1407db9141d30b1376e = $this->env->getExtension("native_profiler");
        $__internal_9876da774ce5fcc32b54b20e2200db2a83b28aed5e02a1407db9141d30b1376e->enter($__internal_9876da774ce5fcc32b54b20e2200db2a83b28aed5e02a1407db9141d30b1376e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_9876da774ce5fcc32b54b20e2200db2a83b28aed5e02a1407db9141d30b1376e->leave($__internal_9876da774ce5fcc32b54b20e2200db2a83b28aed5e02a1407db9141d30b1376e_prof);

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
