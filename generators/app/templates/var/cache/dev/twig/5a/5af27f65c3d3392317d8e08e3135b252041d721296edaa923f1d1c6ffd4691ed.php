<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_18c2c5cedf2a9c5b9b9a4dc25e3a0cb0b8014355cfaaf2db2549d21dca29fc5c extends Twig_Template
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
        $__internal_a6930961ab7dcd555a41c687947d088da816bed1b89c77e214b01d3ebe30aa8d = $this->env->getExtension("native_profiler");
        $__internal_a6930961ab7dcd555a41c687947d088da816bed1b89c77e214b01d3ebe30aa8d->enter($__internal_a6930961ab7dcd555a41c687947d088da816bed1b89c77e214b01d3ebe30aa8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_a6930961ab7dcd555a41c687947d088da816bed1b89c77e214b01d3ebe30aa8d->leave($__internal_a6930961ab7dcd555a41c687947d088da816bed1b89c77e214b01d3ebe30aa8d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
