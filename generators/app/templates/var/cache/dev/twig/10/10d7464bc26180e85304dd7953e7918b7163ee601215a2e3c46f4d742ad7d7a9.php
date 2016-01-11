<?php

/* ::base.html.twig */
class __TwigTemplate_c7f7c427e176ed96a5cad5aa2f512a7922c71cab12acda5fec2426e958fe0787 extends Twig_Template
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
        $__internal_9792b1e466023f2900096ef057d524c2fd29040fdeab58c672c1b99e14570b34 = $this->env->getExtension("native_profiler");
        $__internal_9792b1e466023f2900096ef057d524c2fd29040fdeab58c672c1b99e14570b34->enter($__internal_9792b1e466023f2900096ef057d524c2fd29040fdeab58c672c1b99e14570b34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_9792b1e466023f2900096ef057d524c2fd29040fdeab58c672c1b99e14570b34->leave($__internal_9792b1e466023f2900096ef057d524c2fd29040fdeab58c672c1b99e14570b34_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_158ca568993b8eaa9d4baa32dca1da968cff456a4403171eec2b6500ddeb4992 = $this->env->getExtension("native_profiler");
        $__internal_158ca568993b8eaa9d4baa32dca1da968cff456a4403171eec2b6500ddeb4992->enter($__internal_158ca568993b8eaa9d4baa32dca1da968cff456a4403171eec2b6500ddeb4992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_158ca568993b8eaa9d4baa32dca1da968cff456a4403171eec2b6500ddeb4992->leave($__internal_158ca568993b8eaa9d4baa32dca1da968cff456a4403171eec2b6500ddeb4992_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a521edc7797915de45af51149b362c20cabb046971adb7a183b62903b42dfd5d = $this->env->getExtension("native_profiler");
        $__internal_a521edc7797915de45af51149b362c20cabb046971adb7a183b62903b42dfd5d->enter($__internal_a521edc7797915de45af51149b362c20cabb046971adb7a183b62903b42dfd5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a521edc7797915de45af51149b362c20cabb046971adb7a183b62903b42dfd5d->leave($__internal_a521edc7797915de45af51149b362c20cabb046971adb7a183b62903b42dfd5d_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_7e564777c1e0fa184ab2fa4ac17f3273d517a893f70736c65a21c7fc57f28308 = $this->env->getExtension("native_profiler");
        $__internal_7e564777c1e0fa184ab2fa4ac17f3273d517a893f70736c65a21c7fc57f28308->enter($__internal_7e564777c1e0fa184ab2fa4ac17f3273d517a893f70736c65a21c7fc57f28308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7e564777c1e0fa184ab2fa4ac17f3273d517a893f70736c65a21c7fc57f28308->leave($__internal_7e564777c1e0fa184ab2fa4ac17f3273d517a893f70736c65a21c7fc57f28308_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_717d6a4ba87442b0739f8a2fc0569c96906e3225f09e6639761203991ddfb923 = $this->env->getExtension("native_profiler");
        $__internal_717d6a4ba87442b0739f8a2fc0569c96906e3225f09e6639761203991ddfb923->enter($__internal_717d6a4ba87442b0739f8a2fc0569c96906e3225f09e6639761203991ddfb923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_717d6a4ba87442b0739f8a2fc0569c96906e3225f09e6639761203991ddfb923->leave($__internal_717d6a4ba87442b0739f8a2fc0569c96906e3225f09e6639761203991ddfb923_prof);

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
