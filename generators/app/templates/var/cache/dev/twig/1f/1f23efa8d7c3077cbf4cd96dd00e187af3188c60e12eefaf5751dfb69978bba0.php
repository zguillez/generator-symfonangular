<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_821e8fc42bd87b7a128f38da7111894434a24a5d03b8127c49eeffea6bd6f395 extends Twig_Template
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
        $__internal_7c24b63ce405e019b38fddbe528ff1060f259595e66e08c1fed6d1e61b8bf8b9 = $this->env->getExtension("native_profiler");
        $__internal_7c24b63ce405e019b38fddbe528ff1060f259595e66e08c1fed6d1e61b8bf8b9->enter($__internal_7c24b63ce405e019b38fddbe528ff1060f259595e66e08c1fed6d1e61b8bf8b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_7c24b63ce405e019b38fddbe528ff1060f259595e66e08c1fed6d1e61b8bf8b9->leave($__internal_7c24b63ce405e019b38fddbe528ff1060f259595e66e08c1fed6d1e61b8bf8b9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
