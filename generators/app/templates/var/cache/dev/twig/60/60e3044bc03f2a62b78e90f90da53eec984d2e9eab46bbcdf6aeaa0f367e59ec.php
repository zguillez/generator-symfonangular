<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_de6f1eac5087dda147761ddc47f4524857e385f1ad472fe11b9a12b1d26b391a extends Twig_Template
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
        $__internal_d48b745540510ec8352379b157a584d9b6950110eaa94f55e391c2c3be313816 = $this->env->getExtension("native_profiler");
        $__internal_d48b745540510ec8352379b157a584d9b6950110eaa94f55e391c2c3be313816->enter($__internal_d48b745540510ec8352379b157a584d9b6950110eaa94f55e391c2c3be313816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_d48b745540510ec8352379b157a584d9b6950110eaa94f55e391c2c3be313816->leave($__internal_d48b745540510ec8352379b157a584d9b6950110eaa94f55e391c2c3be313816_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
