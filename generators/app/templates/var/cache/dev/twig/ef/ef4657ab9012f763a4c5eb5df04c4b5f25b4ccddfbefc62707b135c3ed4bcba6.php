<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_715ed4866968d41534e9b6e82508b3e88d5f35f3f6d258a94cca626c66a7582e extends Twig_Template
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
        $__internal_ae4a29d8110cc32a7242b728797f1805c9e0299f70149c7e99ee8623101f52e3 = $this->env->getExtension("native_profiler");
        $__internal_ae4a29d8110cc32a7242b728797f1805c9e0299f70149c7e99ee8623101f52e3->enter($__internal_ae4a29d8110cc32a7242b728797f1805c9e0299f70149c7e99ee8623101f52e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_ae4a29d8110cc32a7242b728797f1805c9e0299f70149c7e99ee8623101f52e3->leave($__internal_ae4a29d8110cc32a7242b728797f1805c9e0299f70149c7e99ee8623101f52e3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
