<?php

/* AppBundle:page/modules:slideB.html.twig */
class __TwigTemplate_d3af8343e349b99f1e19a07ec63e32c88c5e3a39514286fec3a4cddb83b5423f extends Twig_Template
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
        $__internal_4ea7df88fc81728ed5cfd03a9cdeea9479bcf52b2123247738dc99b760551840 = $this->env->getExtension("native_profiler");
        $__internal_4ea7df88fc81728ed5cfd03a9cdeea9479bcf52b2123247738dc99b760551840->enter($__internal_4ea7df88fc81728ed5cfd03a9cdeea9479bcf52b2123247738dc99b760551840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:page/modules:slideB.html.twig"));

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
        
        $__internal_4ea7df88fc81728ed5cfd03a9cdeea9479bcf52b2123247738dc99b760551840->leave($__internal_4ea7df88fc81728ed5cfd03a9cdeea9479bcf52b2123247738dc99b760551840_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:page/modules:slideB.html.twig";
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
