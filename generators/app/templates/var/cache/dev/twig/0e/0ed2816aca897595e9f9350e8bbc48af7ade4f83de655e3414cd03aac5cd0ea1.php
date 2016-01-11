<?php

/* AppBundle:page:home.html.twig */
class __TwigTemplate_0735b9a6e7877ab0803a72fa89d074f62c89b5d5da4ba3b7f90446b7aca11f39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:page:home.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a0b0ec77a2256715483cd55607be0dfc95a1dc70345f7d60069b493064ac2061 = $this->env->getExtension("native_profiler");
        $__internal_a0b0ec77a2256715483cd55607be0dfc95a1dc70345f7d60069b493064ac2061->enter($__internal_a0b0ec77a2256715483cd55607be0dfc95a1dc70345f7d60069b493064ac2061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:page:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0b0ec77a2256715483cd55607be0dfc95a1dc70345f7d60069b493064ac2061->leave($__internal_a0b0ec77a2256715483cd55607be0dfc95a1dc70345f7d60069b493064ac2061_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d92d40a65d273a4e156d6484a4510c9d490c51332a829c5151f710633ce509cc = $this->env->getExtension("native_profiler");
        $__internal_d92d40a65d273a4e156d6484a4510c9d490c51332a829c5151f710633ce509cc->enter($__internal_d92d40a65d273a4e156d6484a4510c9d490c51332a829c5151f710633ce509cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_d92d40a65d273a4e156d6484a4510c9d490c51332a829c5151f710633ce509cc->leave($__internal_d92d40a65d273a4e156d6484a4510c9d490c51332a829c5151f710633ce509cc_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_804c80ad5cd9ab69ef5ea779d7cc77d0e5cd80e9f90f614c4aa9096de7359c2d = $this->env->getExtension("native_profiler");
        $__internal_804c80ad5cd9ab69ef5ea779d7cc77d0e5cd80e9f90f614c4aa9096de7359c2d->enter($__internal_804c80ad5cd9ab69ef5ea779d7cc77d0e5cd80e9f90f614c4aa9096de7359c2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
\t<div id=\"container\" class=\"container\">
\t\t";
        // line 8
        $this->loadTemplate("AppBundle::page/modules/slideA.html.twig", "AppBundle:page:home.html.twig", 8)->display($context);
        // line 9
        echo "\t\t";
        $this->loadTemplate("AppBundle::page/modules/slideB.html.twig", "AppBundle:page:home.html.twig", 9)->display($context);
        // line 10
        echo "\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12\">
\t\t\t\t<div ng-view></div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<script>var title=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "\";</script>
\t<script>var intro=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["intro"]) ? $context["intro"] : $this->getContext($context, "intro")), "html", null, true);
        echo "\";</script>

";
        
        $__internal_804c80ad5cd9ab69ef5ea779d7cc77d0e5cd80e9f90f614c4aa9096de7359c2d->leave($__internal_804c80ad5cd9ab69ef5ea779d7cc77d0e5cd80e9f90f614c4aa9096de7359c2d_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:page:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 18,  70 => 17,  61 => 10,  58 => 9,  56 => 8,  52 => 6,  46 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'AppBundle::base.html.twig' %}*/
/* */
/* {% block title %}{% endblock %}*/
/* */
/* {% block content %}*/
/* */
/* 	<div id="container" class="container">*/
/* 		{% include 'AppBundle::page/modules/slideA.html.twig' %}*/
/* 		{% include 'AppBundle::page/modules/slideB.html.twig' %}*/
/* 		<div class="row">*/
/* 			<div class="col-xs-12">*/
/* 				<div ng-view></div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<script>var title="{{ title }}";</script>*/
/* 	<script>var intro="{{ intro }}";</script>*/
/* */
/* {% endblock %}*/
/* */
