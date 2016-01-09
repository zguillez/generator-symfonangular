<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_5e76f773ebdde17693f65959e434ff8c6cc9d18962760da1fe5d8d2fc996d78a extends Twig_Template
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
        $__internal_b792314b5c39a87ec92e63789e89fe7edd5430c2ad3078b2a7bbc83502066b1e = $this->env->getExtension("native_profiler");
        $__internal_b792314b5c39a87ec92e63789e89fe7edd5430c2ad3078b2a7bbc83502066b1e->enter($__internal_b792314b5c39a87ec92e63789e89fe7edd5430c2ad3078b2a7bbc83502066b1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_b792314b5c39a87ec92e63789e89fe7edd5430c2ad3078b2a7bbc83502066b1e->leave($__internal_b792314b5c39a87ec92e63789e89fe7edd5430c2ad3078b2a7bbc83502066b1e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
