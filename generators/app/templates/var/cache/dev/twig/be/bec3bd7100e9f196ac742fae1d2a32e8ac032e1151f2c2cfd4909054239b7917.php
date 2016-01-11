<?php

/* AppBundle:page/modules:slideA.html.twig */
class __TwigTemplate_acf3b52344669148ab54b05fe8338dd8524454eb315f331121bea29d6a4e97f0 extends Twig_Template
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
        $__internal_5eefe638b1dcb978f65e29e6533cb73fd1688c65f3510754f30d3ebd61c8611f = $this->env->getExtension("native_profiler");
        $__internal_5eefe638b1dcb978f65e29e6533cb73fd1688c65f3510754f30d3ebd61c8611f->enter($__internal_5eefe638b1dcb978f65e29e6533cb73fd1688c65f3510754f30d3ebd61c8611f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:page/modules:slideA.html.twig"));

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
        
        $__internal_5eefe638b1dcb978f65e29e6533cb73fd1688c65f3510754f30d3ebd61c8611f->leave($__internal_5eefe638b1dcb978f65e29e6533cb73fd1688c65f3510754f30d3ebd61c8611f_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:page/modules:slideA.html.twig";
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
