<?php

/* DoctrineBundle:Collector:db.html.twig */
class __TwigTemplate_12ba74ea9dabe0a7fdfe9c5554a8abb52bd4357bac05ca5afd38a2b60ceafc20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
            'queries' => array($this, 'block_queries'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "isXmlHttpRequest", array())) ? ("@WebProfiler/Profiler/ajax_layout.html.twig") : ("@WebProfiler/Profiler/layout.html.twig")), "DoctrineBundle:Collector:db.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter((isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : null), 1)) : (1));
        // line 5
        echo "
    ";
        // line 6
        ob_start();
        // line 7
        echo "        ";
        if (((isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : null) == 1)) {
            // line 8
            echo "
            <img width=\"20\" height=\"28\" alt=\"Database\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAQRJREFUeNpi/P//PwM1ARMDlcGogZQDlpMnT7pxc3NbA9nhQKxOpL5rQLwJiPeBsI6Ozl+YBOOOHTv+AOllQNwtLS39F2owKYZ/gRq8G4i3ggxEToggWzvc3d2Pk+1lNL4fFAs6ODi8JzdS7mMRVyDVoAMHDsANdAPiOCC+jCQvQKqBQB/BDbwBxK5AHA3E/kB8nKJkA8TMQBwLxaBIKQbi70AvTADSBiSadwFXpCikpKQU8PDwkGTaly9fHFigkaKIJid4584dkiMFFI6jkTJII0WVmpHCAixZQEXWYhDeuXMnyLsVlEQKI45qFBQZ8eRECi4DBaAlDqle/8A48ip6gAADANdQY88Uc0oGAAAAAElFTkSuQmCC\" />
                <span class=\"sf-toolbar-value sf-toolbar-status ";
            // line 10
            if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "querycount", array()) > 50)) {
                echo "sf-toolbar-status-yellow";
            }
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "querycount", array()), "html", null, true);
            echo "</span>
                ";
            // line 11
            if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "querycount", array()) > 0)) {
                // line 12
                echo "                    <span class=\"sf-toolbar-info-piece-additional-detail\">in ";
                echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "time", array()) * 1000)), "html", null, true);
                echo " ms</span>
                ";
            }
            // line 14
            echo "                ";
            if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "invalidEntityCount", array()) > 0)) {
                // line 15
                echo "                    <span class=\"sf-toolbar-info-piece-additional sf-toolbar-status sf-toolbar-status-red\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "invalidEntityCount", array()), "html", null, true);
                echo "</span>
                ";
            }
            // line 17
            echo "
        ";
        } else {
            // line 19
            echo "
            ";
            // line 20
            if ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "querycount", array()) > 0) || ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "invalidEntityCount", array()) > 0))) {
                // line 21
                echo "                ";
                $context["status"] = ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "invalidEntityCount", array()) > 0)) ? ("red") : (((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "querycount", array()) > 50)) ? ("yellow") : (""))));
                // line 22
                echo "
                ";
                // line 23
                echo twig_include($this->env, $context, "@Doctrine/Collector/icon.svg");
                echo "

                ";
                // line 25
                if ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "querycount", array()) == 0) && ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "invalidEntityCount", array()) > 0))) {
                    // line 26
                    echo "                    <span class=\"sf-toolbar-value\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "invalidEntityCount", array()), "html", null, true);
                    echo "</span>
                    <span class=\"sf-toolbar-label\">errors</span>
                ";
                } else {
                    // line 29
                    echo "                    <span class=\"sf-toolbar-value\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "querycount", array()), "html", null, true);
                    echo "</span>
                    <span class=\"sf-toolbar-info-piece-additional-detail\">
                        <span class=\"sf-toolbar-label\">in</span>
                        <span class=\"sf-toolbar-value\">";
                    // line 32
                    echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "time", array()) * 1000)), "html", null, true);
                    echo "</span>
                        <span class=\"sf-toolbar-label\">ms</span>
                    </span>
                ";
                }
                // line 36
                echo "            ";
            }
            // line 37
            echo "
        ";
        }
        // line 39
        echo "    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 40
        echo "
    ";
        // line 41
        ob_start();
        // line 42
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Database Queries</b>
            <span class=\"sf-toolbar-status\">";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "querycount", array()), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Query time</b>
            <span>";
        // line 48
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "time", array()) * 1000)), "html", null, true);
        echo " ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Invalid entities</b>
            <span class=\"sf-toolbar-status ";
        // line 52
        echo ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "invalidEntityCount", array()) > 0)) ? ("sf-toolbar-status-red") : (""));
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "invalidEntityCount", array()), "html", null, true);
        echo "</span>
        </div>
        ";
        // line 54
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "cacheEnabled", array())) {
            // line 55
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Cache hits</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-green\">";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "cacheHitsCount", array()), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Cache misses</b>
                <span class=\"sf-toolbar-status ";
            // line 61
            echo ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "cacheMissesCount", array()) > 0)) ? ("sf-toolbar-status-yellow") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "cacheMissesCount", array()), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Cache puts</b>
                <span class=\"sf-toolbar-status ";
            // line 65
            echo ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "cachePutsCount", array()) > 0)) ? ("sf-toolbar-status-yellow") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "cachePutsCount", array()), "html", null, true);
            echo "</span>
            </div>
        ";
        } else {
            // line 68
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Second Level Cache</b>
                <span class=\"sf-toolbar-status\">disabled</span>
            </div>
        ";
        }
        // line 73
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 74
        echo "
    ";
        // line 75
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : null), "status" => ((array_key_exists("status", $context)) ? (_twig_default_filter((isset($context["status"]) ? $context["status"] : null), "")) : (""))));
        echo "
";
    }

    // line 78
    public function block_menu($context, array $blocks = array())
    {
        // line 79
        echo "    ";
        $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter((isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : null), 1)) : (1));
        // line 80
        echo "
    ";
        // line 81
        if (((isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : null) == 1)) {
            // line 82
            echo "
        <span class=\"label\">
            <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAYAAAB/E6/TAAABLUlEQVR42u3TP0vDQBiA8UK/gDiLzi0IhU4OEunk5OQUAhGSOBUCzqWfIKSzX8DRySF0URCcMjWLIJjFD9Cpk/D6HITecEPUuzhIAz8CIdyTP/f2iqI4qaqqDx8l5Ic2uIeP/bquezCokOAFF+oCN3t4gPzSEjc4NEPaCldQbzjELTYW0RJzHDchwwem+ons6ZBpLSJ7nueJC22h0V+FzmwWV0ee59vQNV67CGVZJmEYbkNjfpY6X6I0Qo4/3RMmTdDDspuQVsJvgkP3IdMbIkIjLPBoadG2646iKJI0Ta2wxm6OdnP0/Tk6DYJgHcfxpw21RtscDTDDnaVZ26474GkkSRIrrPEv5sgMTfHe+cA2O6wPH6vOBpYQNALneHb96XTEDI6dzpEZ0VzO0Rf3pP5LMLI4tAAAAABJRU5ErkJggg==\" alt=\"\" /></span>
            <strong>Doctrine</strong>
            <span class=\"count\">
                <span>";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "querycount", array()), "html", null, true);
            echo "</span>
                <span>";
            // line 88
            echo twig_escape_filter($this->env, sprintf("%0.0f", ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "time", array()) * 1000)), "html", null, true);
            echo " ms</span>
            </span>
        </span>

    ";
        } else {
            // line 93
            echo "
        <span class=\"label ";
            // line 94
            echo ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "invalidEntityCount", array()) > 0)) ? ("label-status-error") : (""));
            echo " ";
            echo ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "querycount", array()) == 0)) ? ("disabled") : (""));
            echo "\">
            <span class=\"icon\">";
            // line 95
            echo twig_include($this->env, $context, "@Doctrine/Collector/icon.svg");
            echo "</span>
            <strong>Doctrine</strong>
            ";
            // line 97
            if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "invalidEntityCount", array())) {
                // line 98
                echo "                <span class=\"count\">
                    <span>";
                // line 99
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "invalidEntityCount", array()), "html", null, true);
                echo "</span>
                </span>
            ";
            }
            // line 102
            echo "        </span>

    ";
        }
    }

    // line 107
    public function block_panel($context, array $blocks = array())
    {
        // line 108
        echo "    ";
        $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter((isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : null), 1)) : (1));
        // line 109
        echo "
    ";
        // line 110
        if (("explain" == (isset($context["page"]) ? $context["page"] : null))) {
            // line 111
            echo "        ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("DoctrineBundle:Profiler:explain", array("token" =>             // line 112
(isset($context["token"]) ? $context["token"] : null), "panel" => "db", "connectionName" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 114
(isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "connection"), "method"), "query" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 115
(isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "query"), "method"))));
            // line 116
            echo "
    ";
        } else {
            // line 118
            echo "        ";
            $this->displayBlock("queries", $context, $blocks);
            echo "
    ";
        }
    }

    // line 122
    public function block_queries($context, array $blocks = array())
    {
        // line 123
        echo "    ";
        if (((isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : null) == 1)) {
            // line 124
            echo "        <style>
            .hidden { display: none; }
            .queries-table td, .queries-table th { vertical-align: top; }
            .queries-table td > div { margin-bottom: 6px; }
            .highlight pre { margin: 0; white-space: pre-wrap; }
            .highlight .keyword   { color: #8959A8; font-weight: bold; }
            .highlight .word      { color: #222222; }
            .highlight .variable  { color: #916319; }
            .highlight .symbol    { color: #222222; }
            .highlight .comment   { color: #999999; }
            .highlight .backtick  { color: #718C00; }
            .highlight .string    { color: #718C00; }
            .highlight .number    { color: #F5871F; font-weight: bold; }
            .highlight .error     { color: #C82829; }
        </style>
    ";
        }
        // line 140
        echo "
    <h2>Queries</h2>

    ";
        // line 143
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "queries", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["connection"] => $context["queries"]) {
            // line 144
            echo "        ";
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "connections", array())) > 1)) {
                // line 145
                echo "            <h3>";
                echo twig_escape_filter($this->env, $context["connection"], "html", null, true);
                echo " <small>connection</small></h3>
        ";
            }
            // line 147
            echo "
        ";
            // line 148
            if (twig_test_empty($context["queries"])) {
                // line 149
                echo "            <div class=\"empty\">
                <p>No database queries were performed.</p>
            </div>
        ";
            } else {
                // line 153
                echo "            <table class=\"alt queries-table\">
                <thead>
                <tr>
                    <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 0, 'queries-";
                // line 156
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "')\" data-sort-direction=\"-1\" style=\"cursor: pointer;\">#<span class=\"text-muted\">&#9650;</span></th>
                    <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 1, 'queries-";
                // line 157
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "')\" style=\"cursor: pointer;\">Time<span></span></th>
                    <th style=\"width: 100%;\">Info</th>
                </tr>
                </thead>
                <tbody id=\"queries-";
                // line 161
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\">
                    ";
                // line 162
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["queries"]);
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["i"] => $context["query"]) {
                    // line 163
                    echo "                        <tr id=\"queryNo-";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                    echo "\">
                            <td>";
                    // line 164
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "</td>
                            <td class=\"nowrap\">";
                    // line 165
                    echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($context["query"], "executionMS", array()) * 1000)), "html", null, true);
                    echo "&nbsp;ms</td>
                            <td>
                                ";
                    // line 167
                    echo $this->env->getExtension('doctrine_extension')->formatQuery($this->getAttribute($context["query"], "sql", array()), true);
                    echo "

                                <div>
                                    <strong class=\"font-normal text-small\">Parameters</strong>: ";
                    // line 170
                    echo twig_escape_filter($this->env, $this->env->getExtension('yaml')->encode($this->getAttribute($context["query"], "params", array())), "html", null, true);
                    echo "
                                </div>

                                <div class=\"text-small font-normal\">
                                    <a href=\"#\" ";
                    // line 174
                    echo ((((isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : null) == 1)) ? ("onclick=\"return toggleRunnableQuery(this);\"") : (""));
                    echo " class=\"sf-toggle link-inverse\" data-toggle-selector=\"#formatted-query-";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                    echo "\" data-toggle-alt-content=\"Hide formatted query\">View formatted query</a>

                                    &nbsp;&nbsp;

                                    <a href=\"#\" ";
                    // line 178
                    echo ((((isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : null) == 1)) ? ("onclick=\"return toggleRunnableQuery(this);\"") : (""));
                    echo " class=\"sf-toggle link-inverse\" data-toggle-selector=\"#original-query-";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                    echo "\" data-toggle-alt-content=\"Hide runnable query\">View runnable query</a>

                                    ";
                    // line 180
                    if ($this->getAttribute($context["query"], "explainable", array())) {
                        // line 181
                        echo "                                        &nbsp;&nbsp;
                                        <a class=\"link-inverse\" href=\"";
                        // line 182
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("panel" => "db", "token" => (isset($context["token"]) ? $context["token"] : null), "page" => "explain", "connection" => $context["connection"], "query" => $context["i"])), "html", null, true);
                        echo "\" onclick=\"return explain(this);\" data-target-id=\"explain-";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "-";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                        echo "\">Explain query</a>
                                    ";
                    }
                    // line 184
                    echo "                                </div>

                                <div id=\"formatted-query-";
                    // line 186
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                    echo "\" class=\"sql-runnable hidden\">
                                    ";
                    // line 187
                    echo $this->env->getExtension('doctrine_extension')->formatQuery($this->getAttribute($context["query"], "sql", array()));
                    echo "
                                </div>

                                <div id=\"original-query-";
                    // line 190
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                    echo "\" class=\"sql-runnable hidden\">
                                    ";
                    // line 191
                    echo $this->env->getExtension('doctrine_extension')->formatQuery($this->env->getExtension('doctrine_extension')->replaceQueryParameters(($this->getAttribute($context["query"], "sql", array()) . ";"), $this->getAttribute($context["query"], "params", array())), true);
                    echo "
                                </div>

                                ";
                    // line 194
                    if ($this->getAttribute($context["query"], "explainable", array())) {
                        // line 195
                        echo "                                    <div id=\"explain-";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "-";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                        echo "\"></div>
                                ";
                    }
                    // line 197
                    echo "                            </td>
                        </tr>
                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['query'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 200
                echo "                </tbody>
            </table>
        ";
            }
            // line 203
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['connection'], $context['queries'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 204
        echo "
    <h2>Database Connections</h2>

    ";
        // line 207
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "connections", array())) {
            // line 208
            echo "        <div class=\"empty\">
            <p>There are no configured database connections.</p>
        </div>
    ";
        } else {
            // line 212
            echo "        ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", array("data" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "connections", array()), "labels" => array(0 => "Name", 1 => "Service")), false);
            echo "
    ";
        }
        // line 214
        echo "
    <h2>Entity Managers</h2>

    ";
        // line 217
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "managers", array())) {
            // line 218
            echo "        <div class=\"empty\">
            <p>There are no configured entity managers.</p>
        </div>
    ";
        } else {
            // line 222
            echo "        ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", array("data" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "managers", array()), "labels" => array(0 => "Name", 1 => "Service")), false);
            echo "
    ";
        }
        // line 224
        echo "
    <h2>Second Level Cache</h2>

    ";
        // line 227
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "cacheEnabled", array())) {
            // line 228
            echo "        <div class=\"empty\">
            <p>Second Level Cache is not enabled.</p>
        </div>
    ";
        } else {
            // line 232
            echo "        ";
            if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "cacheCounts", array())) {
                // line 233
                echo "            <div class=\"empty\">
                <p>Second level cache information is not available.</p>
            </div>
        ";
            } else {
                // line 237
                echo "            ";
                if (((isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : null) == 1)) {
                    // line 238
                    echo "                ";
                    echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", array("data" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "cacheCounts", array())), false);
                    echo "
            ";
                } else {
                    // line 240
                    echo "                <div class=\"metrics\">
                    <div class=\"metric\">
                        <span class=\"value\">";
                    // line 242
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "cacheCounts", array()), "hits", array()), "html", null, true);
                    echo "</span>
                        <span class=\"label\">Hits</span>
                    </div>

                    <div class=\"metric\">
                        <span class=\"value\">";
                    // line 247
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "cacheCounts", array()), "misses", array()), "html", null, true);
                    echo "</span>
                        <span class=\"label\">Misses</span>
                    </div>

                    <div class=\"metric\">
                        <span class=\"value\">";
                    // line 252
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "cacheCounts", array()), "puts", array()), "html", null, true);
                    echo "</span>
                        <span class=\"label\">Puts</span>
                    </div>
                </div>
            ";
                }
                // line 257
                echo "
            ";
                // line 258
                if ($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "cacheRegions", array()), "hits", array())) {
                    // line 259
                    echo "                <h3>Number of cache hits</h3>
                ";
                    // line 260
                    echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", array("data" => $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "cacheRegions", array()), "hits", array())), false);
                    echo "
            ";
                }
                // line 262
                echo "
            ";
                // line 263
                if ($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "cacheRegions", array()), "misses", array())) {
                    // line 264
                    echo "                <h3>Number of cache misses</h3>
                ";
                    // line 265
                    echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", array("data" => $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "cacheRegions", array()), "misses", array())), false);
                    echo "
            ";
                }
                // line 267
                echo "
            ";
                // line 268
                if ($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "cacheRegions", array()), "puts", array())) {
                    // line 269
                    echo "                <h3>Number of cache puts</h3>
                ";
                    // line 270
                    echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", array("data" => $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "cacheRegions", array()), "puts", array())), false);
                    echo "
            ";
                }
                // line 272
                echo "        ";
            }
            // line 273
            echo "    ";
        }
        // line 274
        echo "
    <h2>Entities Mapping</h2>

    ";
        // line 277
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "entities", array()));
        foreach ($context['_seq'] as $context["manager"] => $context["classes"]) {
            // line 278
            echo "        ";
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "managers", array())) > 1)) {
                // line 279
                echo "            <h3>";
                echo twig_escape_filter($this->env, $context["manager"], "html", null, true);
                echo " <small>entity manager</small></h3>
        ";
            }
            // line 281
            echo "
        ";
            // line 282
            if (twig_test_empty($context["classes"])) {
                // line 283
                echo "            <div class=\"empty\">
                <p>No loaded entities.</p>
            </div>
        ";
            } else {
                // line 287
                echo "            <table>
                <thead>
                <tr>
                    <th scope=\"col\">Class</th>
                    <th scope=\"col\">Mapping errors</th>
                </tr>
                </thead>
                <tbody>
                ";
                // line 295
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["classes"]);
                foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
                    // line 296
                    echo "                    ";
                    $context["contains_errors"] = ($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "mappingErrors", array(), "any", false, true), $context["manager"], array(), "array", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "mappingErrors", array(), "any", false, true), $context["manager"], array(), "array", false, true), $context["class"], array(), "array", true, true));
                    // line 297
                    echo "                    <tr class=\"";
                    echo (((isset($context["contains_errors"]) ? $context["contains_errors"] : null)) ? ("status-error") : (""));
                    echo "\">
                        <td>";
                    // line 298
                    echo twig_escape_filter($this->env, $context["class"], "html", null, true);
                    echo "</td>
                        <td class=\"font-normal\">
                            ";
                    // line 300
                    if ((isset($context["contains_errors"]) ? $context["contains_errors"] : null)) {
                        // line 301
                        echo "                                <ul>
                                    ";
                        // line 302
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "mappingErrors", array()), $context["manager"], array(), "array"), $context["class"], array(), "array"));
                        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                            // line 303
                            echo "                                        <li>";
                            echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                            echo "</li>
                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 305
                        echo "                                </ul>
                            ";
                    } else {
                        // line 307
                        echo "                                No errors.
                            ";
                    }
                    // line 309
                    echo "                        </td>
                    </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['class'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 312
                echo "                </tbody>
            </table>
        ";
            }
            // line 315
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['manager'], $context['classes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 316
        echo "
    <script type=\"text/javascript\">//<![CDATA[
        function explain(link) {
            \"use strict\";

            var targetId = link.getAttribute('data-target-id');
            var targetElement = document.getElementById(targetId);

            if (targetElement.style.display != 'block') {
                Sfjs.load(targetId, link.href, null, function(xhr, el) {
                    el.innerHTML = 'An error occurred while loading the query explanation.';
                });

                targetElement.style.display = 'block';
                link.innerHTML = 'Hide query explanation';
            } else {
                targetElement.style.display = 'none';
                link.innerHTML = 'Explain query';
            }

            return false;
        }

        function sortTable(header, column, targetId) {
            \"use strict\";

            var direction = parseInt(header.getAttribute('data-sort-direction')) || 1,
                items = [],
                target = document.getElementById(targetId),
                rows = target.children,
                headers = header.parentElement.children,
                i;

            for (i = 0; i < rows.length; ++i) {
                items.push(rows[i]);
            }

            for (i = 0; i < headers.length; ++i) {
                headers[i].removeAttribute('data-sort-direction');
                if (headers[i].children.length > 0) {
                    headers[i].children[0].innerHTML = '';
                }
            }

            header.setAttribute('data-sort-direction', (-1*direction).toString());
            header.children[0].innerHTML = direction > 0 ? '<span class=\"text-muted\">&#9650;</span>' : '<span class=\"text-muted\">&#9660;</span>';

            items.sort(function(a, b) {
                return direction * (parseFloat(a.children[column].innerHTML) - parseFloat(b.children[column].innerHTML));
            });

            for (i = 0; i < items.length; ++i) {
                Sfjs.removeClass(items[i], i % 2 ? 'even' : 'odd');
                Sfjs.addClass(items[i], i % 2 ? 'odd' : 'even');
                target.appendChild(items[i]);
            }
        }

        ";
        // line 374
        if (((isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : null) == 1)) {
            // line 375
            echo "            function toggleRunnableQuery(target) {
                var targetSelector = target.getAttribute('data-toggle-selector');
                var targetElement = document.querySelector(targetSelector);

                if (targetElement.style.display != 'block') {
                    targetElement.style.display = 'block';
                    target.innerHTML = 'Hide runnable query';
                } else {
                    targetElement.style.display = 'none';
                    target.innerHTML = 'View runnable query';
                }

                return false;
            }
        ";
        }
        // line 390
        echo "
        //]]></script>
";
    }

    public function getTemplateName()
    {
        return "DoctrineBundle:Collector:db.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  857 => 390,  840 => 375,  838 => 374,  778 => 316,  772 => 315,  767 => 312,  759 => 309,  755 => 307,  751 => 305,  742 => 303,  738 => 302,  735 => 301,  733 => 300,  728 => 298,  723 => 297,  720 => 296,  716 => 295,  706 => 287,  700 => 283,  698 => 282,  695 => 281,  689 => 279,  686 => 278,  682 => 277,  677 => 274,  674 => 273,  671 => 272,  666 => 270,  663 => 269,  661 => 268,  658 => 267,  653 => 265,  650 => 264,  648 => 263,  645 => 262,  640 => 260,  637 => 259,  635 => 258,  632 => 257,  624 => 252,  616 => 247,  608 => 242,  604 => 240,  598 => 238,  595 => 237,  589 => 233,  586 => 232,  580 => 228,  578 => 227,  573 => 224,  567 => 222,  561 => 218,  559 => 217,  554 => 214,  548 => 212,  542 => 208,  540 => 207,  535 => 204,  521 => 203,  516 => 200,  500 => 197,  492 => 195,  490 => 194,  484 => 191,  478 => 190,  472 => 187,  466 => 186,  462 => 184,  453 => 182,  450 => 181,  448 => 180,  439 => 178,  428 => 174,  421 => 170,  415 => 167,  410 => 165,  406 => 164,  399 => 163,  382 => 162,  378 => 161,  371 => 157,  367 => 156,  362 => 153,  356 => 149,  354 => 148,  351 => 147,  345 => 145,  342 => 144,  325 => 143,  320 => 140,  302 => 124,  299 => 123,  296 => 122,  288 => 118,  284 => 116,  282 => 115,  281 => 114,  280 => 112,  278 => 111,  276 => 110,  273 => 109,  270 => 108,  267 => 107,  260 => 102,  254 => 99,  251 => 98,  249 => 97,  244 => 95,  238 => 94,  235 => 93,  227 => 88,  223 => 87,  216 => 82,  214 => 81,  211 => 80,  208 => 79,  205 => 78,  199 => 75,  196 => 74,  193 => 73,  186 => 68,  178 => 65,  169 => 61,  162 => 57,  158 => 55,  156 => 54,  149 => 52,  142 => 48,  135 => 44,  131 => 42,  129 => 41,  126 => 40,  123 => 39,  119 => 37,  116 => 36,  109 => 32,  102 => 29,  95 => 26,  93 => 25,  88 => 23,  85 => 22,  82 => 21,  80 => 20,  77 => 19,  73 => 17,  67 => 15,  64 => 14,  58 => 12,  56 => 11,  48 => 10,  44 => 8,  41 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,  21 => 1,);
    }
}
/* {% extends app.request.isXmlHttpRequest ? '@WebProfiler/Profiler/ajax_layout.html.twig' : '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}*/
/*     {% set profiler_markup_version = profiler_markup_version|default(1) %}*/
/* */
/*     {% set icon %}*/
/*         {% if profiler_markup_version == 1 %}*/
/* */
/*             <img width="20" height="28" alt="Database" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAQRJREFUeNpi/P//PwM1ARMDlcGogZQDlpMnT7pxc3NbA9nhQKxOpL5rQLwJiPeBsI6Ozl+YBOOOHTv+AOllQNwtLS39F2owKYZ/gRq8G4i3ggxEToggWzvc3d2Pk+1lNL4fFAs6ODi8JzdS7mMRVyDVoAMHDsANdAPiOCC+jCQvQKqBQB/BDbwBxK5AHA3E/kB8nKJkA8TMQBwLxaBIKQbi70AvTADSBiSadwFXpCikpKQU8PDwkGTaly9fHFigkaKIJid4584dkiMFFI6jkTJII0WVmpHCAixZQEXWYhDeuXMnyLsVlEQKI45qFBQZ8eRECi4DBaAlDqle/8A48ip6gAADANdQY88Uc0oGAAAAAElFTkSuQmCC" />*/
/*                 <span class="sf-toolbar-value sf-toolbar-status {% if collector.querycount > 50 %}sf-toolbar-status-yellow{% endif %}">{{ collector.querycount }}</span>*/
/*                 {% if collector.querycount > 0 %}*/
/*                     <span class="sf-toolbar-info-piece-additional-detail">in {{ '%0.2f'|format(collector.time * 1000) }} ms</span>*/
/*                 {% endif %}*/
/*                 {% if collector.invalidEntityCount > 0 %}*/
/*                     <span class="sf-toolbar-info-piece-additional sf-toolbar-status sf-toolbar-status-red">{{ collector.invalidEntityCount }}</span>*/
/*                 {% endif %}*/
/* */
/*         {% else %}*/
/* */
/*             {% if collector.querycount > 0 or collector.invalidEntityCount > 0 %}*/
/*                 {% set status = collector.invalidEntityCount > 0 ? 'red' : collector.querycount > 50 ? 'yellow' %}*/
/* */
/*                 {{ include('@Doctrine/Collector/icon.svg') }}*/
/* */
/*                 {% if collector.querycount == 0 and collector.invalidEntityCount > 0 %}*/
/*                     <span class="sf-toolbar-value">{{ collector.invalidEntityCount }}</span>*/
/*                     <span class="sf-toolbar-label">errors</span>*/
/*                 {% else %}*/
/*                     <span class="sf-toolbar-value">{{ collector.querycount }}</span>*/
/*                     <span class="sf-toolbar-info-piece-additional-detail">*/
/*                         <span class="sf-toolbar-label">in</span>*/
/*                         <span class="sf-toolbar-value">{{ '%0.2f'|format(collector.time * 1000) }}</span>*/
/*                         <span class="sf-toolbar-label">ms</span>*/
/*                     </span>*/
/*                 {% endif %}*/
/*             {% endif %}*/
/* */
/*         {% endif %}*/
/*     {% endset %}*/
/* */
/*     {% set text %}*/
/*         <div class="sf-toolbar-info-piece">*/
/*             <b>Database Queries</b>*/
/*             <span class="sf-toolbar-status">{{ collector.querycount }}</span>*/
/*         </div>*/
/*         <div class="sf-toolbar-info-piece">*/
/*             <b>Query time</b>*/
/*             <span>{{ '%0.2f'|format(collector.time * 1000) }} ms</span>*/
/*         </div>*/
/*         <div class="sf-toolbar-info-piece">*/
/*             <b>Invalid entities</b>*/
/*             <span class="sf-toolbar-status {{ collector.invalidEntityCount > 0 ? 'sf-toolbar-status-red' : '' }}">{{ collector.invalidEntityCount }}</span>*/
/*         </div>*/
/*         {% if collector.cacheEnabled %}*/
/*             <div class="sf-toolbar-info-piece">*/
/*                 <b>Cache hits</b>*/
/*                 <span class="sf-toolbar-status sf-toolbar-status-green">{{ collector.cacheHitsCount }}</span>*/
/*             </div>*/
/*             <div class="sf-toolbar-info-piece">*/
/*                 <b>Cache misses</b>*/
/*                 <span class="sf-toolbar-status {{ collector.cacheMissesCount > 0 ? 'sf-toolbar-status-yellow' : '' }}">{{ collector.cacheMissesCount }}</span>*/
/*             </div>*/
/*             <div class="sf-toolbar-info-piece">*/
/*                 <b>Cache puts</b>*/
/*                 <span class="sf-toolbar-status {{ collector.cachePutsCount > 0 ? 'sf-toolbar-status-yellow' : '' }}">{{ collector.cachePutsCount }}</span>*/
/*             </div>*/
/*         {% else %}*/
/*             <div class="sf-toolbar-info-piece">*/
/*                 <b>Second Level Cache</b>*/
/*                 <span class="sf-toolbar-status">disabled</span>*/
/*             </div>*/
/*         {% endif %}*/
/*     {% endset %}*/
/* */
/*     {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, status: status|default('') }) }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     {% set profiler_markup_version = profiler_markup_version|default(1) %}*/
/* */
/*     {% if profiler_markup_version == 1 %}*/
/* */
/*         <span class="label">*/
/*             <span class="icon"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAYAAAB/E6/TAAABLUlEQVR42u3TP0vDQBiA8UK/gDiLzi0IhU4OEunk5OQUAhGSOBUCzqWfIKSzX8DRySF0URCcMjWLIJjFD9Cpk/D6HITecEPUuzhIAz8CIdyTP/f2iqI4qaqqDx8l5Ic2uIeP/bquezCokOAFF+oCN3t4gPzSEjc4NEPaCldQbzjELTYW0RJzHDchwwem+ons6ZBpLSJ7nueJC22h0V+FzmwWV0ee59vQNV67CGVZJmEYbkNjfpY6X6I0Qo4/3RMmTdDDspuQVsJvgkP3IdMbIkIjLPBoadG2646iKJI0Ta2wxm6OdnP0/Tk6DYJgHcfxpw21RtscDTDDnaVZ26474GkkSRIrrPEv5sgMTfHe+cA2O6wPH6vOBpYQNALneHb96XTEDI6dzpEZ0VzO0Rf3pP5LMLI4tAAAAABJRU5ErkJggg==" alt="" /></span>*/
/*             <strong>Doctrine</strong>*/
/*             <span class="count">*/
/*                 <span>{{ collector.querycount }}</span>*/
/*                 <span>{{ '%0.0f'|format(collector.time * 1000) }} ms</span>*/
/*             </span>*/
/*         </span>*/
/* */
/*     {% else %}*/
/* */
/*         <span class="label {{ collector.invalidEntityCount > 0 ? 'label-status-error' }} {{ collector.querycount == 0 ? 'disabled' }}">*/
/*             <span class="icon">{{ include('@Doctrine/Collector/icon.svg') }}</span>*/
/*             <strong>Doctrine</strong>*/
/*             {% if collector.invalidEntityCount %}*/
/*                 <span class="count">*/
/*                     <span>{{ collector.invalidEntityCount }}</span>*/
/*                 </span>*/
/*             {% endif %}*/
/*         </span>*/
/* */
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {% set profiler_markup_version = profiler_markup_version|default(1) %}*/
/* */
/*     {% if 'explain' == page %}*/
/*         {{ render(controller('DoctrineBundle:Profiler:explain', {*/
/*             token: token,*/
/*             panel: 'db',*/
/*             connectionName: app.request.query.get('connection'),*/
/*             query: app.request.query.get('query')*/
/*         })) }}*/
/*     {% else %}*/
/*         {{ block('queries') }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block queries %}*/
/*     {% if profiler_markup_version == 1 %}*/
/*         <style>*/
/*             .hidden { display: none; }*/
/*             .queries-table td, .queries-table th { vertical-align: top; }*/
/*             .queries-table td > div { margin-bottom: 6px; }*/
/*             .highlight pre { margin: 0; white-space: pre-wrap; }*/
/*             .highlight .keyword   { color: #8959A8; font-weight: bold; }*/
/*             .highlight .word      { color: #222222; }*/
/*             .highlight .variable  { color: #916319; }*/
/*             .highlight .symbol    { color: #222222; }*/
/*             .highlight .comment   { color: #999999; }*/
/*             .highlight .backtick  { color: #718C00; }*/
/*             .highlight .string    { color: #718C00; }*/
/*             .highlight .number    { color: #F5871F; font-weight: bold; }*/
/*             .highlight .error     { color: #C82829; }*/
/*         </style>*/
/*     {% endif %}*/
/* */
/*     <h2>Queries</h2>*/
/* */
/*     {% for connection, queries in collector.queries %}*/
/*         {% if collector.connections|length > 1 %}*/
/*             <h3>{{ connection }} <small>connection</small></h3>*/
/*         {% endif %}*/
/* */
/*         {% if queries is empty %}*/
/*             <div class="empty">*/
/*                 <p>No database queries were performed.</p>*/
/*             </div>*/
/*         {% else %}*/
/*             <table class="alt queries-table">*/
/*                 <thead>*/
/*                 <tr>*/
/*                     <th class="nowrap" onclick="javascript:sortTable(this, 0, 'queries-{{ loop.index }}')" data-sort-direction="-1" style="cursor: pointer;">#<span class="text-muted">&#9650;</span></th>*/
/*                     <th class="nowrap" onclick="javascript:sortTable(this, 1, 'queries-{{ loop.index }}')" style="cursor: pointer;">Time<span></span></th>*/
/*                     <th style="width: 100%;">Info</th>*/
/*                 </tr>*/
/*                 </thead>*/
/*                 <tbody id="queries-{{ loop.index }}">*/
/*                     {% for i, query in queries %}*/
/*                         <tr id="queryNo-{{ i }}-{{ loop.parent.loop.index }}">*/
/*                             <td>{{ loop.index }}</td>*/
/*                             <td class="nowrap">{{ '%0.2f'|format(query.executionMS * 1000) }}&nbsp;ms</td>*/
/*                             <td>*/
/*                                 {{ query.sql|doctrine_pretty_query(highlight_only = true) }}*/
/* */
/*                                 <div>*/
/*                                     <strong class="font-normal text-small">Parameters</strong>: {{ query.params|yaml_encode }}*/
/*                                 </div>*/
/* */
/*                                 <div class="text-small font-normal">*/
/*                                     <a href="#" {{ profiler_markup_version == 1 ? 'onclick="return toggleRunnableQuery(this);"' }} class="sf-toggle link-inverse" data-toggle-selector="#formatted-query-{{ i }}-{{ loop.parent.loop.index }}" data-toggle-alt-content="Hide formatted query">View formatted query</a>*/
/* */
/*                                     &nbsp;&nbsp;*/
/* */
/*                                     <a href="#" {{ profiler_markup_version == 1 ? 'onclick="return toggleRunnableQuery(this);"' }} class="sf-toggle link-inverse" data-toggle-selector="#original-query-{{ i }}-{{ loop.parent.loop.index }}" data-toggle-alt-content="Hide runnable query">View runnable query</a>*/
/* */
/*                                     {% if query.explainable %}*/
/*                                         &nbsp;&nbsp;*/
/*                                         <a class="link-inverse" href="{{ path('_profiler', { panel: 'db', token: token, page: 'explain', connection: connection, query: i }) }}" onclick="return explain(this);" data-target-id="explain-{{ i }}-{{ loop.parent.loop.index }}">Explain query</a>*/
/*                                     {% endif %}*/
/*                                 </div>*/
/* */
/*                                 <div id="formatted-query-{{ i }}-{{ loop.parent.loop.index }}" class="sql-runnable hidden">*/
/*                                     {{ query.sql|doctrine_pretty_query }}*/
/*                                 </div>*/
/* */
/*                                 <div id="original-query-{{ i }}-{{ loop.parent.loop.index }}" class="sql-runnable hidden">*/
/*                                     {{ (query.sql ~ ';')|doctrine_replace_query_parameters(query.params)|doctrine_pretty_query(highlight_only = true) }}*/
/*                                 </div>*/
/* */
/*                                 {% if query.explainable %}*/
/*                                     <div id="explain-{{ i }}-{{ loop.parent.loop.index }}"></div>*/
/*                                 {% endif %}*/
/*                             </td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*         {% endif %}*/
/*     {% endfor %}*/
/* */
/*     <h2>Database Connections</h2>*/
/* */
/*     {% if not collector.connections %}*/
/*         <div class="empty">*/
/*             <p>There are no configured database connections.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         {{ include('@WebProfiler/Profiler/table.html.twig', { data: collector.connections, labels: ['Name', 'Service'] }, with_context = false ) }}*/
/*     {% endif %}*/
/* */
/*     <h2>Entity Managers</h2>*/
/* */
/*     {% if not collector.managers %}*/
/*         <div class="empty">*/
/*             <p>There are no configured entity managers.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         {{ include('@WebProfiler/Profiler/table.html.twig', { data: collector.managers, labels: ['Name', 'Service'] }, with_context = false ) }}*/
/*     {% endif %}*/
/* */
/*     <h2>Second Level Cache</h2>*/
/* */
/*     {% if not collector.cacheEnabled %}*/
/*         <div class="empty">*/
/*             <p>Second Level Cache is not enabled.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         {% if not collector.cacheCounts %}*/
/*             <div class="empty">*/
/*                 <p>Second level cache information is not available.</p>*/
/*             </div>*/
/*         {% else %}*/
/*             {% if profiler_markup_version == 1 %}*/
/*                 {{ include('@WebProfiler/Profiler/table.html.twig', { data: collector.cacheCounts }, with_context = false) }}*/
/*             {% else %}*/
/*                 <div class="metrics">*/
/*                     <div class="metric">*/
/*                         <span class="value">{{ collector.cacheCounts.hits }}</span>*/
/*                         <span class="label">Hits</span>*/
/*                     </div>*/
/* */
/*                     <div class="metric">*/
/*                         <span class="value">{{ collector.cacheCounts.misses }}</span>*/
/*                         <span class="label">Misses</span>*/
/*                     </div>*/
/* */
/*                     <div class="metric">*/
/*                         <span class="value">{{ collector.cacheCounts.puts }}</span>*/
/*                         <span class="label">Puts</span>*/
/*                     </div>*/
/*                 </div>*/
/*             {% endif %}*/
/* */
/*             {% if collector.cacheRegions.hits %}*/
/*                 <h3>Number of cache hits</h3>*/
/*                 {{ include('@WebProfiler/Profiler/table.html.twig', { data: collector.cacheRegions.hits }, with_context = false) }}*/
/*             {% endif %}*/
/* */
/*             {% if collector.cacheRegions.misses %}*/
/*                 <h3>Number of cache misses</h3>*/
/*                 {{ include('@WebProfiler/Profiler/table.html.twig', { data: collector.cacheRegions.misses }, with_context = false) }}*/
/*             {% endif %}*/
/* */
/*             {% if collector.cacheRegions.puts %}*/
/*                 <h3>Number of cache puts</h3>*/
/*                 {{ include('@WebProfiler/Profiler/table.html.twig', { data: collector.cacheRegions.puts }, with_context = false) }}*/
/*             {% endif %}*/
/*         {% endif %}*/
/*     {% endif %}*/
/* */
/*     <h2>Entities Mapping</h2>*/
/* */
/*     {% for manager, classes in collector.entities %}*/
/*         {% if collector.managers|length > 1 %}*/
/*             <h3>{{ manager }} <small>entity manager</small></h3>*/
/*         {% endif %}*/
/* */
/*         {% if classes is empty %}*/
/*             <div class="empty">*/
/*                 <p>No loaded entities.</p>*/
/*             </div>*/
/*         {% else %}*/
/*             <table>*/
/*                 <thead>*/
/*                 <tr>*/
/*                     <th scope="col">Class</th>*/
/*                     <th scope="col">Mapping errors</th>*/
/*                 </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 {% for class in classes %}*/
/*                     {% set contains_errors = collector.mappingErrors[manager] is defined and collector.mappingErrors[manager][class] is defined %}*/
/*                     <tr class="{{ contains_errors ? 'status-error' }}">*/
/*                         <td>{{ class }}</td>*/
/*                         <td class="font-normal">*/
/*                             {% if contains_errors %}*/
/*                                 <ul>*/
/*                                     {% for error in collector.mappingErrors[manager][class] %}*/
/*                                         <li>{{ error }}</li>*/
/*                                     {% endfor %}*/
/*                                 </ul>*/
/*                             {% else %}*/
/*                                 No errors.*/
/*                             {% endif %}*/
/*                         </td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*         {% endif %}*/
/*     {% endfor %}*/
/* */
/*     <script type="text/javascript">//<![CDATA[*/
/*         function explain(link) {*/
/*             "use strict";*/
/* */
/*             var targetId = link.getAttribute('data-target-id');*/
/*             var targetElement = document.getElementById(targetId);*/
/* */
/*             if (targetElement.style.display != 'block') {*/
/*                 Sfjs.load(targetId, link.href, null, function(xhr, el) {*/
/*                     el.innerHTML = 'An error occurred while loading the query explanation.';*/
/*                 });*/
/* */
/*                 targetElement.style.display = 'block';*/
/*                 link.innerHTML = 'Hide query explanation';*/
/*             } else {*/
/*                 targetElement.style.display = 'none';*/
/*                 link.innerHTML = 'Explain query';*/
/*             }*/
/* */
/*             return false;*/
/*         }*/
/* */
/*         function sortTable(header, column, targetId) {*/
/*             "use strict";*/
/* */
/*             var direction = parseInt(header.getAttribute('data-sort-direction')) || 1,*/
/*                 items = [],*/
/*                 target = document.getElementById(targetId),*/
/*                 rows = target.children,*/
/*                 headers = header.parentElement.children,*/
/*                 i;*/
/* */
/*             for (i = 0; i < rows.length; ++i) {*/
/*                 items.push(rows[i]);*/
/*             }*/
/* */
/*             for (i = 0; i < headers.length; ++i) {*/
/*                 headers[i].removeAttribute('data-sort-direction');*/
/*                 if (headers[i].children.length > 0) {*/
/*                     headers[i].children[0].innerHTML = '';*/
/*                 }*/
/*             }*/
/* */
/*             header.setAttribute('data-sort-direction', (-1*direction).toString());*/
/*             header.children[0].innerHTML = direction > 0 ? '<span class="text-muted">&#9650;</span>' : '<span class="text-muted">&#9660;</span>';*/
/* */
/*             items.sort(function(a, b) {*/
/*                 return direction * (parseFloat(a.children[column].innerHTML) - parseFloat(b.children[column].innerHTML));*/
/*             });*/
/* */
/*             for (i = 0; i < items.length; ++i) {*/
/*                 Sfjs.removeClass(items[i], i % 2 ? 'even' : 'odd');*/
/*                 Sfjs.addClass(items[i], i % 2 ? 'odd' : 'even');*/
/*                 target.appendChild(items[i]);*/
/*             }*/
/*         }*/
/* */
/*         {% if profiler_markup_version == 1 %}*/
/*             function toggleRunnableQuery(target) {*/
/*                 var targetSelector = target.getAttribute('data-toggle-selector');*/
/*                 var targetElement = document.querySelector(targetSelector);*/
/* */
/*                 if (targetElement.style.display != 'block') {*/
/*                     targetElement.style.display = 'block';*/
/*                     target.innerHTML = 'Hide runnable query';*/
/*                 } else {*/
/*                     targetElement.style.display = 'none';*/
/*                     target.innerHTML = 'View runnable query';*/
/*                 }*/
/* */
/*                 return false;*/
/*             }*/
/*         {% endif %}*/
/* */
/*         //]]></script>*/
/* {% endblock %}*/
/* */
