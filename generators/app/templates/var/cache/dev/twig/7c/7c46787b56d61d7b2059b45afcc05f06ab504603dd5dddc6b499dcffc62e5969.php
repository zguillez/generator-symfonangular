<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_218505fc79f664b5687394a706ee46d0658a4f27234cdac07a8a11b0d0658509 extends Twig_Template
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
        $__internal_8d5a7e3da68162da95a34e1c0c40bc5eceab556d4260966fbefd94868d6b8770 = $this->env->getExtension("native_profiler");
        $__internal_8d5a7e3da68162da95a34e1c0c40bc5eceab556d4260966fbefd94868d6b8770->enter($__internal_8d5a7e3da68162da95a34e1c0c40bc5eceab556d4260966fbefd94868d6b8770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_8d5a7e3da68162da95a34e1c0c40bc5eceab556d4260966fbefd94868d6b8770->leave($__internal_8d5a7e3da68162da95a34e1c0c40bc5eceab556d4260966fbefd94868d6b8770_prof);

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
