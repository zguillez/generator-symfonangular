<?php

/* AppBundle::base.html.twig */
class __TwigTemplate_c5dd89fe428c283a2bbe0c77b9c4316fbe6f098d9a3239eefaad4b48469e65d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle::base.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'header_nav' => array($this, 'block_header_nav'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/css/normalize.css"), "html", null, true);
        echo "\"/>
\t<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/css/animate.min.css"), "html", null, true);
        echo "\"/>
\t<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
\t";
        // line 7
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "3e7b5a2_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3e7b5a2_0") : $this->env->getExtension('asset')->getAssetUrl("css/3e7b5a2_part_1_styles_1.css");
            // line 8
            echo "\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
\t";
            // asset "3e7b5a2_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3e7b5a2_1") : $this->env->getExtension('asset')->getAssetUrl("css/3e7b5a2_part_1_styles.css_2.css");
            echo "\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
\t";
        } else {
            // asset "3e7b5a2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3e7b5a2") : $this->env->getExtension('asset')->getAssetUrl("css/3e7b5a2.css");
            echo "\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
\t";
        }
        unset($context["asset_url"]);
    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        // line 13
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/scripts/require.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/scripts/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/scripts/angular.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/scripts/angular-route.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/scripts/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/scripts/html5shiv.min.js"), "html", null, true);
        echo "\"></script>
\t";
        // line 19
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "bb54fd1_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bb54fd1_0") : $this->env->getExtension('asset')->getAssetUrl("js/bb54fd1_part_1_init_1.js");
            // line 20
            echo "\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
\t";
            // asset "bb54fd1_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bb54fd1_1") : $this->env->getExtension('asset')->getAssetUrl("js/bb54fd1_part_1_init.js_2.js");
            echo "\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
\t";
        } else {
            // asset "bb54fd1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bb54fd1") : $this->env->getExtension('asset')->getAssetUrl("js/bb54fd1.js");
            echo "\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
\t";
        }
        unset($context["asset_url"]);
    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        // line 25
        echo "\t<div id=\"wrapper\">
\t\t<header>
\t\t\t<div id=\"logo-box\">
\t\t\t\t<img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"Logo\"/>
\t\t\t</div>
\t\t\t";
        // line 30
        $this->displayBlock('header_nav', $context, $blocks);
        // line 38
        echo "\t\t</header>
\t\t<secction id=\"content\">
\t\t\t";
        // line 40
        $this->displayBlock('content', $context, $blocks);
        // line 41
        echo "\t\t</secction>
\t\t<footer>
\t\t\t";
        // line 43
        $this->displayBlock('footer', $context, $blocks);
        // line 44
        echo "\t\t</footer>
\t</div>
";
    }

    // line 30
    public function block_header_nav($context, array $blocks = array())
    {
        // line 31
        echo "\t\t\t\t<nav>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li class=\"botHome\"><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("_home");
        echo "\">Home</a></li>
\t\t\t\t\t\t<li class=\"botHome\"><a ng-click=\"gotoView('home/intro')\">Intro</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</nav>
\t\t\t";
    }

    // line 40
    public function block_content($context, array $blocks = array())
    {
    }

    // line 43
    public function block_footer($context, array $blocks = array())
    {
        echo "<p>@Symfonangular 2016</p>";
    }

    public function getTemplateName()
    {
        return "AppBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 43,  178 => 40,  169 => 33,  165 => 31,  162 => 30,  156 => 44,  154 => 43,  150 => 41,  148 => 40,  144 => 38,  142 => 30,  137 => 28,  132 => 25,  129 => 24,  107 => 20,  103 => 19,  99 => 18,  95 => 17,  91 => 16,  87 => 15,  83 => 14,  78 => 13,  75 => 12,  53 => 8,  49 => 7,  45 => 6,  41 => 5,  36 => 4,  33 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/* 	<link rel="stylesheet" href="{{ asset('lib/css/normalize.css') }}"/>*/
/* 	<link rel="stylesheet" href="{{ asset('lib/css/animate.min.css') }}"/>*/
/* 	<link rel="stylesheet" href="{{ asset('lib/css/bootstrap.min.css') }}"/>*/
/* 	{% stylesheets '@AppBundle/Resources/public/css/*' filter='cssrewrite' %}*/
/* 	<link rel="stylesheet" href="{{ asset_url }}" />*/
/* 	{% endstylesheets %}*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* 	<script src="{{ asset('lib/scripts/require.js') }}"></script>*/
/* 	<script src="{{ asset('lib/scripts/jquery.min.js') }}"></script>*/
/* 	<script src="{{ asset('lib/scripts/angular.min.js') }}"></script>*/
/* 	<script src="{{ asset('lib/scripts/angular-route.min.js') }}"></script>*/
/* 	<script src="{{ asset('lib/scripts/bootstrap.min.js') }}"></script>*/
/* 	<script src="{{ asset('lib/scripts/html5shiv.min.js') }}"></script>*/
/* 	{% javascripts '@AppBundle/Resources/public/js/*' %}*/
/* 	<script src="{{ asset_url }}"></script>*/
/* 	{% endjavascripts %}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* 	<div id="wrapper">*/
/* 		<header>*/
/* 			<div id="logo-box">*/
/* 				<img src="{{ asset('images/logo.png') }}" alt="Logo"/>*/
/* 			</div>*/
/* 			{% block header_nav %}*/
/* 				<nav>*/
/* 					<ul>*/
/* 						<li class="botHome"><a href="{{ path('_home') }}">Home</a></li>*/
/* 						<li class="botHome"><a ng-click="gotoView('home/intro')">Intro</a></li>*/
/* 					</ul>*/
/* 				</nav>*/
/* 			{% endblock %}*/
/* 		</header>*/
/* 		<secction id="content">*/
/* 			{% block content %}{% endblock %}*/
/* 		</secction>*/
/* 		<footer>*/
/* 			{% block footer %}<p>@Symfonangular 2016</p>{% endblock %}*/
/* 		</footer>*/
/* 	</div>*/
/* {% endblock %}*/
/* */
