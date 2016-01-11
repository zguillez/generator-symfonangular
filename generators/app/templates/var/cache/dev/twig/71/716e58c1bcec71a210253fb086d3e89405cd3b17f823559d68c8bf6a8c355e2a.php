<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_1e7d0a6cde221ef36ec3a76b91bdb22213a895bda4ddb85931683ba25e66a75b extends Twig_Template
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
        $__internal_9854fa61122b1793309e08fb544e44a6e72a9472a0bc73536fbf7ce0e61ad97f = $this->env->getExtension("native_profiler");
        $__internal_9854fa61122b1793309e08fb544e44a6e72a9472a0bc73536fbf7ce0e61ad97f->enter($__internal_9854fa61122b1793309e08fb544e44a6e72a9472a0bc73536fbf7ce0e61ad97f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_9854fa61122b1793309e08fb544e44a6e72a9472a0bc73536fbf7ce0e61ad97f->leave($__internal_9854fa61122b1793309e08fb544e44a6e72a9472a0bc73536fbf7ce0e61ad97f_prof);

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
