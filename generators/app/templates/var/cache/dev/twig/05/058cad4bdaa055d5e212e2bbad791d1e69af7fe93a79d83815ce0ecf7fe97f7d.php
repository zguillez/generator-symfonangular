<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_82c27739456d08e322cbaa73b52cb0ae752c46df0fab8c0dbd60b691f5e00f72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3c7369740cd8706bc74ccb1c159e97b9e1ee837ac87f682c6020c598845bae8f = $this->env->getExtension("native_profiler");
        $__internal_3c7369740cd8706bc74ccb1c159e97b9e1ee837ac87f682c6020c598845bae8f->enter($__internal_3c7369740cd8706bc74ccb1c159e97b9e1ee837ac87f682c6020c598845bae8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c7369740cd8706bc74ccb1c159e97b9e1ee837ac87f682c6020c598845bae8f->leave($__internal_3c7369740cd8706bc74ccb1c159e97b9e1ee837ac87f682c6020c598845bae8f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4362966b3a89082b0ecb00a454cf9ae8ca4c01343e47083f591e240bc5ae9b47 = $this->env->getExtension("native_profiler");
        $__internal_4362966b3a89082b0ecb00a454cf9ae8ca4c01343e47083f591e240bc5ae9b47->enter($__internal_4362966b3a89082b0ecb00a454cf9ae8ca4c01343e47083f591e240bc5ae9b47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_4362966b3a89082b0ecb00a454cf9ae8ca4c01343e47083f591e240bc5ae9b47->leave($__internal_4362966b3a89082b0ecb00a454cf9ae8ca4c01343e47083f591e240bc5ae9b47_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_61fd77ecfa4548158c969c4c5be5f8707f3ee23d310c6581c48ec29295895e59 = $this->env->getExtension("native_profiler");
        $__internal_61fd77ecfa4548158c969c4c5be5f8707f3ee23d310c6581c48ec29295895e59->enter($__internal_61fd77ecfa4548158c969c4c5be5f8707f3ee23d310c6581c48ec29295895e59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_61fd77ecfa4548158c969c4c5be5f8707f3ee23d310c6581c48ec29295895e59->leave($__internal_61fd77ecfa4548158c969c4c5be5f8707f3ee23d310c6581c48ec29295895e59_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1c56d6b5153c0456211e8d324eee8b7d2ae58c9be3f63b9fa89ba4847906fa0b = $this->env->getExtension("native_profiler");
        $__internal_1c56d6b5153c0456211e8d324eee8b7d2ae58c9be3f63b9fa89ba4847906fa0b->enter($__internal_1c56d6b5153c0456211e8d324eee8b7d2ae58c9be3f63b9fa89ba4847906fa0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_1c56d6b5153c0456211e8d324eee8b7d2ae58c9be3f63b9fa89ba4847906fa0b->leave($__internal_1c56d6b5153c0456211e8d324eee8b7d2ae58c9be3f63b9fa89ba4847906fa0b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
