<?php

/* ::base.html.twig */
class __TwigTemplate_6aa385a459d8628c7449dcb13b8934390aa7bc20cd10decbfa72629fa8523201 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_687cc577df8da0c140775584dc2d473d11e666b9f5372b9d23992b86e5c62767 = $this->env->getExtension("native_profiler");
        $__internal_687cc577df8da0c140775584dc2d473d11e666b9f5372b9d23992b86e5c62767->enter($__internal_687cc577df8da0c140775584dc2d473d11e666b9f5372b9d23992b86e5c62767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html ng-app=\"App\" ng-controller=\"appController\">

<head>
\t<meta charset=\"UTF-8\" />
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
\t<title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "\t<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>

<body>
\t";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "\t";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "</body>

</html>";
        
        $__internal_687cc577df8da0c140775584dc2d473d11e666b9f5372b9d23992b86e5c62767->leave($__internal_687cc577df8da0c140775584dc2d473d11e666b9f5372b9d23992b86e5c62767_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bdf9019e23d6b00544d05ded15611f83c5ea85e873ccffce7cf6d7e1de4e4437 = $this->env->getExtension("native_profiler");
        $__internal_bdf9019e23d6b00544d05ded15611f83c5ea85e873ccffce7cf6d7e1de4e4437->enter($__internal_bdf9019e23d6b00544d05ded15611f83c5ea85e873ccffce7cf6d7e1de4e4437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_bdf9019e23d6b00544d05ded15611f83c5ea85e873ccffce7cf6d7e1de4e4437->leave($__internal_bdf9019e23d6b00544d05ded15611f83c5ea85e873ccffce7cf6d7e1de4e4437_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ea230c37692c0430f227086056bde471fc89d9a3fd064864553b0819613216c9 = $this->env->getExtension("native_profiler");
        $__internal_ea230c37692c0430f227086056bde471fc89d9a3fd064864553b0819613216c9->enter($__internal_ea230c37692c0430f227086056bde471fc89d9a3fd064864553b0819613216c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ea230c37692c0430f227086056bde471fc89d9a3fd064864553b0819613216c9->leave($__internal_ea230c37692c0430f227086056bde471fc89d9a3fd064864553b0819613216c9_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_c20004d455e291fae3cfc8eba4fcf1e05d778207bf21dc3d8120c0a91f1940c3 = $this->env->getExtension("native_profiler");
        $__internal_c20004d455e291fae3cfc8eba4fcf1e05d778207bf21dc3d8120c0a91f1940c3->enter($__internal_c20004d455e291fae3cfc8eba4fcf1e05d778207bf21dc3d8120c0a91f1940c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c20004d455e291fae3cfc8eba4fcf1e05d778207bf21dc3d8120c0a91f1940c3->leave($__internal_c20004d455e291fae3cfc8eba4fcf1e05d778207bf21dc3d8120c0a91f1940c3_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_06bb4d2ebcdcdb9da396ba43012c4f31f70c6a68f699d1cdfe550be9433f0819 = $this->env->getExtension("native_profiler");
        $__internal_06bb4d2ebcdcdb9da396ba43012c4f31f70c6a68f699d1cdfe550be9433f0819->enter($__internal_06bb4d2ebcdcdb9da396ba43012c4f31f70c6a68f699d1cdfe550be9433f0819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_06bb4d2ebcdcdb9da396ba43012c4f31f70c6a68f699d1cdfe550be9433f0819->leave($__internal_06bb4d2ebcdcdb9da396ba43012c4f31f70c6a68f699d1cdfe550be9433f0819_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 14,  84 => 13,  73 => 8,  62 => 7,  53 => 15,  50 => 14,  48 => 13,  40 => 9,  38 => 8,  34 => 7,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html ng-app="App" ng-controller="appController">*/
/* */
/* <head>*/
/* 	<meta charset="UTF-8" />*/
/* 	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">*/
/* 	<title>{% block title %}{% endblock %}</title>*/
/* 	{% block stylesheets %}{% endblock %}*/
/* 	<link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* </head>*/
/* */
/* <body>*/
/* 	{% block body %}{% endblock %}*/
/* 	{% block javascripts %}{% endblock %}*/
/* </body>*/
/* */
/* </html>*/
