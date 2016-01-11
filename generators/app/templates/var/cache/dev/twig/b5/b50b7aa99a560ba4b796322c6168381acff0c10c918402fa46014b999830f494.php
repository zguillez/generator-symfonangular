<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_0c7490628c82e6da2b0a7fbf65254308eb4cb7440241490b0d1430e5ad17fcaa extends Twig_Template
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
        $__internal_666764246d5deee362a0bdfb6cfe1c5837131260fc73e32b3b64a0f35da47ad1 = $this->env->getExtension("native_profiler");
        $__internal_666764246d5deee362a0bdfb6cfe1c5837131260fc73e32b3b64a0f35da47ad1->enter($__internal_666764246d5deee362a0bdfb6cfe1c5837131260fc73e32b3b64a0f35da47ad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_666764246d5deee362a0bdfb6cfe1c5837131260fc73e32b3b64a0f35da47ad1->leave($__internal_666764246d5deee362a0bdfb6cfe1c5837131260fc73e32b3b64a0f35da47ad1_prof);

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
