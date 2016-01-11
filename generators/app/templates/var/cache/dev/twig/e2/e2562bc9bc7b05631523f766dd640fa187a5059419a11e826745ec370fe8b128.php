<?php

/* AppBundle::base.html.twig */
class __TwigTemplate_3857d4ad5877cc9091e32cbb95c9fdadc94f86269490617660341418a1a5dc09 extends Twig_Template
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
        $__internal_b30aaa0bdb2d8da354b0120da5c4d85408cc25cde6a8d1bb0024ef397e6a07ec = $this->env->getExtension("native_profiler");
        $__internal_b30aaa0bdb2d8da354b0120da5c4d85408cc25cde6a8d1bb0024ef397e6a07ec->enter($__internal_b30aaa0bdb2d8da354b0120da5c4d85408cc25cde6a8d1bb0024ef397e6a07ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b30aaa0bdb2d8da354b0120da5c4d85408cc25cde6a8d1bb0024ef397e6a07ec->leave($__internal_b30aaa0bdb2d8da354b0120da5c4d85408cc25cde6a8d1bb0024ef397e6a07ec_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ed4544d9b5f988d74412cf2ec657b9528396f677c09e2ab98b25ac25621f1455 = $this->env->getExtension("native_profiler");
        $__internal_ed4544d9b5f988d74412cf2ec657b9528396f677c09e2ab98b25ac25621f1455->enter($__internal_ed4544d9b5f988d74412cf2ec657b9528396f677c09e2ab98b25ac25621f1455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3e7b5a2_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/3e7b5a2_part_1_styles_1.css");
            // line 8
            echo "\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t";
            // asset "3e7b5a2_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3e7b5a2_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/3e7b5a2_part_1_styles.css_2.css");
            echo "\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t";
        } else {
            // asset "3e7b5a2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3e7b5a2") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/3e7b5a2.css");
            echo "\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t";
        }
        unset($context["asset_url"]);
        
        $__internal_ed4544d9b5f988d74412cf2ec657b9528396f677c09e2ab98b25ac25621f1455->leave($__internal_ed4544d9b5f988d74412cf2ec657b9528396f677c09e2ab98b25ac25621f1455_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f33a79868ce592a5729249c24ee7db243805c8235b27f0fe3512a48140b9d88e = $this->env->getExtension("native_profiler");
        $__internal_f33a79868ce592a5729249c24ee7db243805c8235b27f0fe3512a48140b9d88e->enter($__internal_f33a79868ce592a5729249c24ee7db243805c8235b27f0fe3512a48140b9d88e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bb54fd1_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/bb54fd1_part_1_init_1.js");
            // line 20
            echo "\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t";
        } else {
            // asset "bb54fd1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bb54fd1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/bb54fd1.js");
            echo "\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t";
        }
        unset($context["asset_url"]);
        
        $__internal_f33a79868ce592a5729249c24ee7db243805c8235b27f0fe3512a48140b9d88e->leave($__internal_f33a79868ce592a5729249c24ee7db243805c8235b27f0fe3512a48140b9d88e_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_3b77424de14ba12c18584ba51e345ee32189ace11c3d8f8a43a5e51fae2b2729 = $this->env->getExtension("native_profiler");
        $__internal_3b77424de14ba12c18584ba51e345ee32189ace11c3d8f8a43a5e51fae2b2729->enter($__internal_3b77424de14ba12c18584ba51e345ee32189ace11c3d8f8a43a5e51fae2b2729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3b77424de14ba12c18584ba51e345ee32189ace11c3d8f8a43a5e51fae2b2729->leave($__internal_3b77424de14ba12c18584ba51e345ee32189ace11c3d8f8a43a5e51fae2b2729_prof);

    }

    // line 30
    public function block_header_nav($context, array $blocks = array())
    {
        $__internal_c5738683d3787e97d909bc9d3bf3e54e37f4d2ab1db2eefa4ca9c9ccdac033ad = $this->env->getExtension("native_profiler");
        $__internal_c5738683d3787e97d909bc9d3bf3e54e37f4d2ab1db2eefa4ca9c9ccdac033ad->enter($__internal_c5738683d3787e97d909bc9d3bf3e54e37f4d2ab1db2eefa4ca9c9ccdac033ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_nav"));

        // line 31
        echo "\t\t\t\t<nav>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li class=\"botHome\"><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("_home");
        echo "\">Home</a></li>
\t\t\t\t\t\t<li class=\"botHome\"><a ng-click=\"gotoView('/intro')\">Intro</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</nav>
\t\t\t";
        
        $__internal_c5738683d3787e97d909bc9d3bf3e54e37f4d2ab1db2eefa4ca9c9ccdac033ad->leave($__internal_c5738683d3787e97d909bc9d3bf3e54e37f4d2ab1db2eefa4ca9c9ccdac033ad_prof);

    }

    // line 40
    public function block_content($context, array $blocks = array())
    {
        $__internal_023923e34e4e864f37fe30759d18e0c7d7f4b4bf35a6c007da300501104b2bc9 = $this->env->getExtension("native_profiler");
        $__internal_023923e34e4e864f37fe30759d18e0c7d7f4b4bf35a6c007da300501104b2bc9->enter($__internal_023923e34e4e864f37fe30759d18e0c7d7f4b4bf35a6c007da300501104b2bc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_023923e34e4e864f37fe30759d18e0c7d7f4b4bf35a6c007da300501104b2bc9->leave($__internal_023923e34e4e864f37fe30759d18e0c7d7f4b4bf35a6c007da300501104b2bc9_prof);

    }

    // line 43
    public function block_footer($context, array $blocks = array())
    {
        $__internal_cbd784e5c1b58db48354d4cc1f2d0b914cdfc5b03a1275aefdbf560eb8b65016 = $this->env->getExtension("native_profiler");
        $__internal_cbd784e5c1b58db48354d4cc1f2d0b914cdfc5b03a1275aefdbf560eb8b65016->enter($__internal_cbd784e5c1b58db48354d4cc1f2d0b914cdfc5b03a1275aefdbf560eb8b65016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        echo "<p>@Symfonangular 2016</p>";
        
        $__internal_cbd784e5c1b58db48354d4cc1f2d0b914cdfc5b03a1275aefdbf560eb8b65016->leave($__internal_cbd784e5c1b58db48354d4cc1f2d0b914cdfc5b03a1275aefdbf560eb8b65016_prof);

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
        return array (  213 => 43,  202 => 40,  190 => 33,  186 => 31,  180 => 30,  171 => 44,  169 => 43,  165 => 41,  163 => 40,  159 => 38,  157 => 30,  152 => 28,  147 => 25,  141 => 24,  122 => 20,  118 => 19,  114 => 18,  110 => 17,  106 => 16,  102 => 15,  98 => 14,  93 => 13,  87 => 12,  62 => 8,  58 => 7,  54 => 6,  50 => 5,  45 => 4,  39 => 3,  11 => 1,);
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
/* 						<li class="botHome"><a ng-click="gotoView('/intro')">Intro</a></li>*/
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
