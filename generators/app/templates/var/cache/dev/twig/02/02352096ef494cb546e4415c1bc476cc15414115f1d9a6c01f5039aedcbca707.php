<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_5a2366e37a8a7fd8acf39bccc6b291169a09afe0b14e5304a070034d5eaf4f6f extends Twig_Template
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
        $__internal_3ae642c0e6394f64a117d40f9316463bb43877c6d75cf1b2205b6552c3659016 = $this->env->getExtension("native_profiler");
        $__internal_3ae642c0e6394f64a117d40f9316463bb43877c6d75cf1b2205b6552c3659016->enter($__internal_3ae642c0e6394f64a117d40f9316463bb43877c6d75cf1b2205b6552c3659016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_3ae642c0e6394f64a117d40f9316463bb43877c6d75cf1b2205b6552c3659016->leave($__internal_3ae642c0e6394f64a117d40f9316463bb43877c6d75cf1b2205b6552c3659016_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
