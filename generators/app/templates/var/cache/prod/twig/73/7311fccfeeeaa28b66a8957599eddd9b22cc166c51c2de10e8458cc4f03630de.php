<?php

/* @App/page/templates/intro.html */
class __TwigTemplate_86652bae8e1f0ac55b6a3f397761ab1e1addf9a1194f7de74919d8d1983a864e extends Twig_Template
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
        // line 1
        echo "<div class=\"panel panel-default\">
    <div class=\"panel-body\">
        <h2>[[ title ]]</h2>
        <h3>[[ subtitle ]]</h3>
        <p>[[ text ]]</p>
        <a class=\"btn btn-default\" ng-click=\"gotoView('home/a')\">HOME</a>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "@App/page/templates/intro.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
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
