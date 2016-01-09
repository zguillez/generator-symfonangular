<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_774d347bdcc8cdb1db64c9eec36e59f1e87816e04482690b31ac0561f202ef0a extends Twig_Template
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
        $__internal_bf43393518e1d119dd69e1a5168c7b977b53c2703cac59840b1a32f4b42c936a = $this->env->getExtension("native_profiler");
        $__internal_bf43393518e1d119dd69e1a5168c7b977b53c2703cac59840b1a32f4b42c936a->enter($__internal_bf43393518e1d119dd69e1a5168c7b977b53c2703cac59840b1a32f4b42c936a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_bf43393518e1d119dd69e1a5168c7b977b53c2703cac59840b1a32f4b42c936a->leave($__internal_bf43393518e1d119dd69e1a5168c7b977b53c2703cac59840b1a32f4b42c936a_prof);

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
