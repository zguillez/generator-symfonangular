<?php

/* @App/page/templates/intro.html */
class __TwigTemplate_23bcefb72847b612dbb5ea9eeec805a7f7fa10829a62c8e4dd2335406ba435e3 extends Twig_Template
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
        $__internal_0b5c3892936606a61bee6b11660e58f62dbda447881e7447654a3e9b7c1b23c1 = $this->env->getExtension("native_profiler");
        $__internal_0b5c3892936606a61bee6b11660e58f62dbda447881e7447654a3e9b7c1b23c1->enter($__internal_0b5c3892936606a61bee6b11660e58f62dbda447881e7447654a3e9b7c1b23c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/page/templates/intro.html"));

        // line 1
        echo "<div class=\"panel panel-default\">
    <div class=\"panel-body\">
        <h2>[[ title ]]</h2>
        <h3>[[ subtitle ]]</h3>
        <p>[[ text ]]</p>
        <a class=\"btn btn-default\" ng-click=\"gotoView('home/a')\">HOME</a>
    </div>
</div>";
        
        $__internal_0b5c3892936606a61bee6b11660e58f62dbda447881e7447654a3e9b7c1b23c1->leave($__internal_0b5c3892936606a61bee6b11660e58f62dbda447881e7447654a3e9b7c1b23c1_prof);

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
