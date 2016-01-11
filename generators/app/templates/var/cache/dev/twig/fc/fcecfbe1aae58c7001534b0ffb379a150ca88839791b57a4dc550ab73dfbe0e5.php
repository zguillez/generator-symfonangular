<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_de8acc81b19b3ab9df4d392fe44c22b80bf6b535145b12965fc5817714c62a4a extends Twig_Template
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
        $__internal_e46df6d0615895271483441fe8aeef4d2330dedafeee323e9ebc4e0dcf42fa14 = $this->env->getExtension("native_profiler");
        $__internal_e46df6d0615895271483441fe8aeef4d2330dedafeee323e9ebc4e0dcf42fa14->enter($__internal_e46df6d0615895271483441fe8aeef4d2330dedafeee323e9ebc4e0dcf42fa14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_e46df6d0615895271483441fe8aeef4d2330dedafeee323e9ebc4e0dcf42fa14->leave($__internal_e46df6d0615895271483441fe8aeef4d2330dedafeee323e9ebc4e0dcf42fa14_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
