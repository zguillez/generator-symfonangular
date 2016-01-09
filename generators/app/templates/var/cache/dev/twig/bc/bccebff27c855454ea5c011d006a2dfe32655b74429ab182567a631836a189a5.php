<?php

/* AppBundle::page/modules/slideB.html.twig */
class __TwigTemplate_e5ca0764c41e5a8a9a6a00d9292ad04e5c45472d0e4518ecb7f410dedfb4d6b2 extends Twig_Template
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
        $__internal_bbd069db27223ae12821cf9eea00d2641f9e2e01443a4c37929d797a013e6729 = $this->env->getExtension("native_profiler");
        $__internal_bbd069db27223ae12821cf9eea00d2641f9e2e01443a4c37929d797a013e6729->enter($__internal_bbd069db27223ae12821cf9eea00d2641f9e2e01443a4c37929d797a013e6729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::page/modules/slideB.html.twig"));

        // line 1
        echo "<script type=\"text/ng-template\" id=\"/modules/slideB.html\">
\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<h2>";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</h2>
\t\t\t<h3>[[ subtitle ]]</h3>
\t\t\t<a class=\"btn btn-default\" ng-click=\"gotoView('home/a')\">CHANGE SUBVIEW</a>
\t\t</div>
\t</div>
</script>
";
        
        $__internal_bbd069db27223ae12821cf9eea00d2641f9e2e01443a4c37929d797a013e6729->leave($__internal_bbd069db27223ae12821cf9eea00d2641f9e2e01443a4c37929d797a013e6729_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::page/modules/slideB.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* <script type="text/ng-template" id="/modules/slideB.html">*/
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<h2>{{ title }}</h2>*/
/* 			<h3>[[ subtitle ]]</h3>*/
/* 			<a class="btn btn-default" ng-click="gotoView('home/a')">CHANGE SUBVIEW</a>*/
/* 		</div>*/
/* 	</div>*/
/* </script>*/
/* */
