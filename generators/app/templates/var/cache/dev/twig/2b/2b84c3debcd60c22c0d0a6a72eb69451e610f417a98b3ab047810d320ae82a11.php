<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_43ecce7874cca2fdbb4147b9e6011f6c6260c3f576ea23070d0a2a6c03ac4fa9 extends Twig_Template
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
        $__internal_f3433512117afddfb5a3faf485daa8f9d5456bd4ba139b501bffcbecc5ca845d = $this->env->getExtension("native_profiler");
        $__internal_f3433512117afddfb5a3faf485daa8f9d5456bd4ba139b501bffcbecc5ca845d->enter($__internal_f3433512117afddfb5a3faf485daa8f9d5456bd4ba139b501bffcbecc5ca845d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_f3433512117afddfb5a3faf485daa8f9d5456bd4ba139b501bffcbecc5ca845d->leave($__internal_f3433512117afddfb5a3faf485daa8f9d5456bd4ba139b501bffcbecc5ca845d_prof);

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
