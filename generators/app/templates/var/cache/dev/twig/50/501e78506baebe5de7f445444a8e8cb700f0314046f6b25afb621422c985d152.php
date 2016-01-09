<?php

/* AppBundle::page/modules/slideA.html.twig */
class __TwigTemplate_d24f9159559f139d5b8fc9278a9e404e316b35f29a8e85af86579fd4efcdfcee extends Twig_Template
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
        $__internal_c57c7db8a3bb0ab470f9e566c3ec0e40860a541be5a8d1eef654adcfe1a2a270 = $this->env->getExtension("native_profiler");
        $__internal_c57c7db8a3bb0ab470f9e566c3ec0e40860a541be5a8d1eef654adcfe1a2a270->enter($__internal_c57c7db8a3bb0ab470f9e566c3ec0e40860a541be5a8d1eef654adcfe1a2a270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::page/modules/slideA.html.twig"));

        // line 1
        echo "<script type=\"text/ng-template\" id=\"/modules/slideA.html\">
\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<h2>";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</h2>
\t\t\t<h3>[[ subtitle ]]</h3>
\t\t\t<a class=\"btn btn-default\" ng-click=\"gotoView('home/b')\">CHANGE SUBVIEW</a>
\t\t</div>
\t</div>
</script>
";
        
        $__internal_c57c7db8a3bb0ab470f9e566c3ec0e40860a541be5a8d1eef654adcfe1a2a270->leave($__internal_c57c7db8a3bb0ab470f9e566c3ec0e40860a541be5a8d1eef654adcfe1a2a270_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::page/modules/slideA.html.twig";
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
/* <script type="text/ng-template" id="/modules/slideA.html">*/
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<h2>{{ title }}</h2>*/
/* 			<h3>[[ subtitle ]]</h3>*/
/* 			<a class="btn btn-default" ng-click="gotoView('home/b')">CHANGE SUBVIEW</a>*/
/* 		</div>*/
/* 	</div>*/
/* </script>*/
/* */
