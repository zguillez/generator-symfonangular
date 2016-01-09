<?php

/* AppBundle:page:home.html.twig */
class __TwigTemplate_9d024023c192e0a66abcf6b7c585518cffde867fc0c5ec64f11ee5f82c33f4fb extends Twig_Template
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
        $__internal_1501ce152a45eb7138f9f2b6e73012221bde3a3d63453ea165a2e37622c1f0ac = $this->env->getExtension("native_profiler");
        $__internal_1501ce152a45eb7138f9f2b6e73012221bde3a3d63453ea165a2e37622c1f0ac->enter($__internal_1501ce152a45eb7138f9f2b6e73012221bde3a3d63453ea165a2e37622c1f0ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:page:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1501ce152a45eb7138f9f2b6e73012221bde3a3d63453ea165a2e37622c1f0ac->leave($__internal_1501ce152a45eb7138f9f2b6e73012221bde3a3d63453ea165a2e37622c1f0ac_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_676c09f11272be468689c0229c95bf765ac71644eae0e051e212f9e57f582484 = $this->env->getExtension("native_profiler");
        $__internal_676c09f11272be468689c0229c95bf765ac71644eae0e051e212f9e57f582484->enter($__internal_676c09f11272be468689c0229c95bf765ac71644eae0e051e212f9e57f582484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_676c09f11272be468689c0229c95bf765ac71644eae0e051e212f9e57f582484->leave($__internal_676c09f11272be468689c0229c95bf765ac71644eae0e051e212f9e57f582484_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_169ec33eda1580788555514aea1a2027ed8ba25a1d945e86a0ecf4bff9ac6578 = $this->env->getExtension("native_profiler");
        $__internal_169ec33eda1580788555514aea1a2027ed8ba25a1d945e86a0ecf4bff9ac6578->enter($__internal_169ec33eda1580788555514aea1a2027ed8ba25a1d945e86a0ecf4bff9ac6578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_169ec33eda1580788555514aea1a2027ed8ba25a1d945e86a0ecf4bff9ac6578->leave($__internal_169ec33eda1580788555514aea1a2027ed8ba25a1d945e86a0ecf4bff9ac6578_prof);

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
