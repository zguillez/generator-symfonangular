<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_d83479160daf93550823c36134c71e9f2ef1cf05ba712eff156a97d75bb7bbe1 extends Twig_Template
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
        $__internal_7342a61c8765bebdc921095286f745b5cbd07449e7eb27e0f72e940fe556589e = $this->env->getExtension("native_profiler");
        $__internal_7342a61c8765bebdc921095286f745b5cbd07449e7eb27e0f72e940fe556589e->enter($__internal_7342a61c8765bebdc921095286f745b5cbd07449e7eb27e0f72e940fe556589e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_7342a61c8765bebdc921095286f745b5cbd07449e7eb27e0f72e940fe556589e->leave($__internal_7342a61c8765bebdc921095286f745b5cbd07449e7eb27e0f72e940fe556589e_prof);

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
