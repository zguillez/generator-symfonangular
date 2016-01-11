<?php

/* @App/page/templates/intro.html */
class __TwigTemplate_11d47267244060d0c3182e7f93dbd8c485683741724a1e48b7847276f4433ed3 extends Twig_Template
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
        $__internal_07087ebf6d277416b00c3e07ad0a1efe929edfaf809877dc8a7a4d7f46245ef0 = $this->env->getExtension("native_profiler");
        $__internal_07087ebf6d277416b00c3e07ad0a1efe929edfaf809877dc8a7a4d7f46245ef0->enter($__internal_07087ebf6d277416b00c3e07ad0a1efe929edfaf809877dc8a7a4d7f46245ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/page/templates/intro.html"));

        // line 1
        echo "<div class=\"panel panel-default\">
    <div class=\"panel-body\">
        <h2>[[ title ]]</h2>
        <h3>[[ subtitle ]]</h3>
        <p>[[ text ]]</p>
        <a class=\"btn btn-default\" ng-click=\"gotoView('home/a')\">HOME</a>
    </div>
</div>";
        
        $__internal_07087ebf6d277416b00c3e07ad0a1efe929edfaf809877dc8a7a4d7f46245ef0->leave($__internal_07087ebf6d277416b00c3e07ad0a1efe929edfaf809877dc8a7a4d7f46245ef0_prof);

    }

    public function getTemplateName()
    {
        return "@App/page/templates/intro.html";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div class="panel panel-default">*/
/*     <div class="panel-body">*/
/*         <h2>[[ title ]]</h2>*/
/*         <h3>[[ subtitle ]]</h3>*/
/*         <p>[[ text ]]</p>*/
/*         <a class="btn btn-default" ng-click="gotoView('home/a')">HOME</a>*/
/*     </div>*/
/* </div>*/
