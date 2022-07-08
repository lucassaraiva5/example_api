<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @DoctrineMigrations/Collector/migrations.html.twig */
class __TwigTemplate_0cafee953f30e4f761991a655528cf878ea4ef5f4306df56a75526b1cf0e73c9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $macros["helper"] = $this->macros["helper"] = $this;
        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@DoctrineMigrations/Collector/migrations.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, true, false, 6), "unavailable_migrations_count", [], "any", true, true, false, 6)) {
            // line 7
            echo "        ";
            $context["unavailable_migrations"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 7, $this->source); })()), "data", [], "any", false, false, false, 7), "unavailable_migrations_count", [], "any", false, false, false, 7);
            // line 8
            echo "        ";
            $context["new_migrations"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 8, $this->source); })()), "data", [], "any", false, false, false, 8), "new_migrations", [], "any", false, false, false, 8));
            // line 9
            echo "        ";
            if (((1 === twig_compare((isset($context["unavailable_migrations"]) || array_key_exists("unavailable_migrations", $context) ? $context["unavailable_migrations"] : (function () { throw new RuntimeError('Variable "unavailable_migrations" does not exist.', 9, $this->source); })()), 0)) || (1 === twig_compare((isset($context["new_migrations"]) || array_key_exists("new_migrations", $context) ? $context["new_migrations"] : (function () { throw new RuntimeError('Variable "new_migrations" does not exist.', 9, $this->source); })()), 0)))) {
                // line 10
                echo "            ";
                $context["executed_migrations"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 10, $this->source); })()), "data", [], "any", false, false, false, 10), "executed_migrations", [], "any", false, false, false, 10));
                // line 11
                echo "            ";
                $context["available_migrations"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 11, $this->source); })()), "data", [], "any", false, false, false, 11), "available_migrations_count", [], "any", false, false, false, 11);
                // line 12
                echo "            ";
                $context["status_color"] = (((1 === twig_compare((isset($context["unavailable_migrations"]) || array_key_exists("unavailable_migrations", $context) ? $context["unavailable_migrations"] : (function () { throw new RuntimeError('Variable "unavailable_migrations" does not exist.', 12, $this->source); })()), 0))) ? ("yellow") : (""));
                // line 13
                echo "            ";
                $context["status_color"] = (((1 === twig_compare((isset($context["new_migrations"]) || array_key_exists("new_migrations", $context) ? $context["new_migrations"] : (function () { throw new RuntimeError('Variable "new_migrations" does not exist.', 13, $this->source); })()), 0))) ? ("red") : ((isset($context["status_color"]) || array_key_exists("status_color", $context) ? $context["status_color"] : (function () { throw new RuntimeError('Variable "status_color" does not exist.', 13, $this->source); })())));
                // line 14
                echo "
            ";
                // line 15
                ob_start(function () { return ''; });
                // line 16
                echo "                ";
                echo twig_include($this->env, $context, "@DoctrineMigrations/Collector/icon.svg");
                echo "
                <span class=\"sf-toolbar-value\">";
                // line 17
                echo twig_escape_filter($this->env, ((isset($context["new_migrations"]) || array_key_exists("new_migrations", $context) ? $context["new_migrations"] : (function () { throw new RuntimeError('Variable "new_migrations" does not exist.', 17, $this->source); })()) + (isset($context["unavailable_migrations"]) || array_key_exists("unavailable_migrations", $context) ? $context["unavailable_migrations"] : (function () { throw new RuntimeError('Variable "unavailable_migrations" does not exist.', 17, $this->source); })())), "html", null, true);
                echo "</span>
            ";
                $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 19
                echo "
            ";
                // line 20
                ob_start(function () { return ''; });
                // line 21
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Current</b>
                    <span>";
                // line 23
                (((1 === twig_compare((isset($context["executed_migrations"]) || array_key_exists("executed_migrations", $context) ? $context["executed_migrations"] : (function () { throw new RuntimeError('Variable "executed_migrations" does not exist.', 23, $this->source); })()), 0))) ? (print (twig_escape_filter($this->env, twig_last($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, twig_last($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 23, $this->source); })()), "data", [], "any", false, false, false, 23), "executed_migrations", [], "any", false, false, false, 23)), "version", [], "any", false, false, false, 23), "\\")), "html", null, true))) : (print ("n/a")));
                echo "</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Executed</b>
                    <span class=\"sf-toolbar-status\">";
                // line 27
                echo twig_escape_filter($this->env, (isset($context["executed_migrations"]) || array_key_exists("executed_migrations", $context) ? $context["executed_migrations"] : (function () { throw new RuntimeError('Variable "executed_migrations" does not exist.', 27, $this->source); })()), "html", null, true);
                echo "</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Executed Unavailable</b>
                    <span class=\"sf-toolbar-status ";
                // line 31
                echo (((1 === twig_compare((isset($context["unavailable_migrations"]) || array_key_exists("unavailable_migrations", $context) ? $context["unavailable_migrations"] : (function () { throw new RuntimeError('Variable "unavailable_migrations" does not exist.', 31, $this->source); })()), 0))) ? ("sf-toolbar-status-yellow") : (""));
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["unavailable_migrations"]) || array_key_exists("unavailable_migrations", $context) ? $context["unavailable_migrations"] : (function () { throw new RuntimeError('Variable "unavailable_migrations" does not exist.', 31, $this->source); })()), "html", null, true);
                echo "</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Available</b>
                    <span class=\"sf-toolbar-status\">";
                // line 35
                echo twig_escape_filter($this->env, (isset($context["available_migrations"]) || array_key_exists("available_migrations", $context) ? $context["available_migrations"] : (function () { throw new RuntimeError('Variable "available_migrations" does not exist.', 35, $this->source); })()), "html", null, true);
                echo "</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>New</b>
                    <span class=\"sf-toolbar-status ";
                // line 39
                echo (((1 === twig_compare((isset($context["new_migrations"]) || array_key_exists("new_migrations", $context) ? $context["new_migrations"] : (function () { throw new RuntimeError('Variable "new_migrations" does not exist.', 39, $this->source); })()), 0))) ? ("sf-toolbar-status-red") : (""));
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["new_migrations"]) || array_key_exists("new_migrations", $context) ? $context["new_migrations"] : (function () { throw new RuntimeError('Variable "new_migrations" does not exist.', 39, $this->source); })()), "html", null, true);
                echo "</span>
                </div>
            ";
                $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 42
                echo "
            ";
                // line 43
                echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new RuntimeError('Variable "profiler_url" does not exist.', 43, $this->source); })()), "status" => (isset($context["status_color"]) || array_key_exists("status_color", $context) ? $context["status_color"] : (function () { throw new RuntimeError('Variable "status_color" does not exist.', 43, $this->source); })())]);
                echo "
        ";
            }
            // line 45
            echo "    ";
        }
    }

    // line 49
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, true, false, 50), "unavailable_migrations_count", [], "any", true, true, false, 50)) {
            // line 51
            echo "        ";
            $context["unavailable_migrations"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 51, $this->source); })()), "data", [], "any", false, false, false, 51), "unavailable_migrations_count", [], "any", false, false, false, 51);
            // line 52
            echo "        ";
            $context["new_migrations"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 52, $this->source); })()), "data", [], "any", false, false, false, 52), "new_migrations", [], "any", false, false, false, 52));
            // line 53
            echo "        ";
            $context["label"] = (((1 === twig_compare((isset($context["unavailable_migrations"]) || array_key_exists("unavailable_migrations", $context) ? $context["unavailable_migrations"] : (function () { throw new RuntimeError('Variable "unavailable_migrations" does not exist.', 53, $this->source); })()), 0))) ? ("label-status-warning") : (""));
            // line 54
            echo "        ";
            $context["label"] = (((1 === twig_compare((isset($context["new_migrations"]) || array_key_exists("new_migrations", $context) ? $context["new_migrations"] : (function () { throw new RuntimeError('Variable "new_migrations" does not exist.', 54, $this->source); })()), 0))) ? ("label-status-error") : ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 54, $this->source); })())));
            // line 55
            echo "        <span class=\"label ";
            echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 55, $this->source); })()), "html", null, true);
            echo "\">
            <span class=\"icon\">";
            // line 56
            echo twig_include($this->env, $context, "@DoctrineMigrations/Collector/icon.svg");
            echo "</span>
            <strong>Migrations</strong>
            ";
            // line 58
            if (((1 === twig_compare((isset($context["unavailable_migrations"]) || array_key_exists("unavailable_migrations", $context) ? $context["unavailable_migrations"] : (function () { throw new RuntimeError('Variable "unavailable_migrations" does not exist.', 58, $this->source); })()), 0)) || (1 === twig_compare((isset($context["new_migrations"]) || array_key_exists("new_migrations", $context) ? $context["new_migrations"] : (function () { throw new RuntimeError('Variable "new_migrations" does not exist.', 58, $this->source); })()), 0)))) {
                // line 59
                echo "                <span class=\"count\">
                    <span>";
                // line 60
                echo twig_escape_filter($this->env, ((isset($context["new_migrations"]) || array_key_exists("new_migrations", $context) ? $context["new_migrations"] : (function () { throw new RuntimeError('Variable "new_migrations" does not exist.', 60, $this->source); })()) + (isset($context["unavailable_migrations"]) || array_key_exists("unavailable_migrations", $context) ? $context["unavailable_migrations"] : (function () { throw new RuntimeError('Variable "unavailable_migrations" does not exist.', 60, $this->source); })())), "html", null, true);
                echo "</span>
                </span>
            ";
            }
            // line 63
            echo "        </span>
    ";
        }
    }

    // line 67
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 68
        echo "    <h2>Doctrine Migrations</h2>
    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 71
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 71, $this->source); })()), "data", [], "any", false, false, false, 71), "executed_migrations", [], "any", false, false, false, 71)), "html", null, true);
        echo "</span>
            <span class=\"label\">Executed</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 75, $this->source); })()), "data", [], "any", false, false, false, 75), "unavailable_migrations_count", [], "any", false, false, false, 75), "html", null, true);
        echo "</span>
            <span class=\"label\">Executed Unavailable</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 79, $this->source); })()), "data", [], "any", false, false, false, 79), "available_migrations_count", [], "any", false, false, false, 79), "html", null, true);
        echo "</span>
            <span class=\"label\">Available</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">";
        // line 83
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 83, $this->source); })()), "data", [], "any", false, false, false, 83), "new_migrations", [], "any", false, false, false, 83)), "html", null, true);
        echo "</span>
            <span class=\"label\">New</span>
        </div>
    </div>

    <h3>Configuration</h3>
    <table>
        <thead>
            <tr>
                <th colspan=\"2\" class=\"colored font-normal\">Storage</th>
            </tr>
        </thead>
        <tr>
            <td class=\"font-normal\">Type</td>
            <td class=\"font-normal\">";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 97, $this->source); })()), "data", [], "any", false, false, false, 97), "storage", [], "any", false, false, false, 97), "html", null, true);
        echo "</td>
        </tr>
        ";
        // line 99
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, true, false, 99), "table", [], "any", true, true, false, 99)) {
            // line 100
            echo "            <tr>
                <td class=\"font-normal\">Table Name</td>
                <td class=\"font-normal\">";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 102, $this->source); })()), "data", [], "any", false, false, false, 102), "table", [], "any", false, false, false, 102), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        // line 105
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, true, false, 105), "column", [], "any", true, true, false, 105)) {
            // line 106
            echo "            <tr>
                <td class=\"font-normal\">Column Name</td>
                <td class=\"font-normal\">";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 108, $this->source); })()), "data", [], "any", false, false, false, 108), "column", [], "any", false, false, false, 108), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        // line 111
        echo "    </table>
    <table>
        <thead>
            <tr>
                <th colspan=\"2\" class=\"colored font-normal\">Database</th>
            </tr>
        </thead>
        <tr>
            <td class=\"font-normal\">Driver</td>
            <td class=\"font-normal\">";
        // line 120
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 120, $this->source); })()), "data", [], "any", false, false, false, 120), "driver", [], "any", false, false, false, 120), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td class=\"font-normal\">Name</td>
            <td class=\"font-normal\">";
        // line 124
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 124, $this->source); })()), "data", [], "any", false, false, false, 124), "name", [], "any", false, false, false, 124), "html", null, true);
        echo "</td>
        </tr>
    </table>
    <table>
        <thead>
            <tr>
                <th colspan=\"2\" class=\"colored font-normal\">Migration Namespaces</th>
            </tr>
        </thead>
        ";
        // line 133
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 133, $this->source); })()), "data", [], "any", false, false, false, 133), "namespaces", [], "any", false, false, false, 133));
        foreach ($context['_seq'] as $context["namespace"] => $context["directory"]) {
            // line 134
            echo "            <tr>
                <td class=\"font-normal\">";
            // line 135
            echo twig_escape_filter($this->env, $context["namespace"], "html", null, true);
            echo "</td>
                <td class=\"font-normal\">";
            // line 136
            echo twig_escape_filter($this->env, $context["directory"], "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['namespace'], $context['directory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        echo "    </table>

    <h3>Migrations</h3>
    <table>
        <thead>
            <tr>
                <th class=\"colored font-normal\">Version</th>
                <th class=\"colored font-normal\">Description</th>
                <th class=\"colored font-normal\">Status</th>
                <th class=\"colored font-normal\">Executed at</th>
                <th class=\"colored font-normal\">Execution time</th>
            </tr>
        </thead>
        ";
        // line 152
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 152, $this->source); })()), "data", [], "any", false, false, false, 152), "new_migrations", [], "any", false, false, false, 152));
        foreach ($context['_seq'] as $context["_key"] => $context["migration"]) {
            // line 153
            echo "            ";
            echo twig_call_macro($macros["helper"], "macro_render_migration", [$context["migration"]], 153, $context, $this->getSourceContext());
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['migration'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        echo "
        ";
        // line 156
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 156, $this->source); })()), "data", [], "any", false, false, false, 156), "executed_migrations", [], "any", false, false, false, 156)));
        foreach ($context['_seq'] as $context["_key"] => $context["migration"]) {
            // line 157
            echo "            ";
            echo twig_call_macro($macros["helper"], "macro_render_migration", [$context["migration"]], 157, $context, $this->getSourceContext());
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['migration'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        echo "    </table>
";
    }

    // line 162
    public function macro_render_migration($__migration__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "migration" => $__migration__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 163
            echo "    <tr>
        <td class=\"font-normal\">
            ";
            // line 165
            if (twig_get_attribute($this->env, $this->source, (isset($context["migration"]) || array_key_exists("migration", $context) ? $context["migration"] : (function () { throw new RuntimeError('Variable "migration" does not exist.', 165, $this->source); })()), "file", [], "any", false, false, false, 165)) {
                // line 166
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(twig_get_attribute($this->env, $this->source, (isset($context["migration"]) || array_key_exists("migration", $context) ? $context["migration"] : (function () { throw new RuntimeError('Variable "migration" does not exist.', 166, $this->source); })()), "file", [], "any", false, false, false, 166), 1), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["migration"]) || array_key_exists("migration", $context) ? $context["migration"] : (function () { throw new RuntimeError('Variable "migration" does not exist.', 166, $this->source); })()), "file", [], "any", false, false, false, 166), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["migration"]) || array_key_exists("migration", $context) ? $context["migration"] : (function () { throw new RuntimeError('Variable "migration" does not exist.', 166, $this->source); })()), "version", [], "any", false, false, false, 166), "html", null, true);
                echo "</a>
            ";
            } else {
                // line 168
                echo "                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["migration"]) || array_key_exists("migration", $context) ? $context["migration"] : (function () { throw new RuntimeError('Variable "migration" does not exist.', 168, $this->source); })()), "version", [], "any", false, false, false, 168), "html", null, true);
                echo "
            ";
            }
            // line 170
            echo "        </td>
        <td class=\"font-normal\">";
            // line 171
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["migration"]) || array_key_exists("migration", $context) ? $context["migration"] : (function () { throw new RuntimeError('Variable "migration" does not exist.', 171, $this->source); })()), "description", [], "any", false, false, false, 171), "html", null, true);
            echo "</td>
        <td class=\"font-normal\">
            ";
            // line 173
            if (twig_get_attribute($this->env, $this->source, (isset($context["migration"]) || array_key_exists("migration", $context) ? $context["migration"] : (function () { throw new RuntimeError('Variable "migration" does not exist.', 173, $this->source); })()), "is_new", [], "any", false, false, false, 173)) {
                // line 174
                echo "                <span class=\"label status-error\">NOT EXECUTED</span>
            ";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 175
(isset($context["migration"]) || array_key_exists("migration", $context) ? $context["migration"] : (function () { throw new RuntimeError('Variable "migration" does not exist.', 175, $this->source); })()), "is_unavailable", [], "any", false, false, false, 175)) {
                // line 176
                echo "                <span class=\"label status-warning\">UNAVAILABLE</span>
            ";
            } else {
                // line 178
                echo "                <span class=\"label status-success\">EXECUTED</span>
            ";
            }
            // line 180
            echo "        </td>
        <td class=\"font-normal\">";
            // line 181
            ((twig_get_attribute($this->env, $this->source, (isset($context["migration"]) || array_key_exists("migration", $context) ? $context["migration"] : (function () { throw new RuntimeError('Variable "migration" does not exist.', 181, $this->source); })()), "executed_at", [], "any", false, false, false, 181)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["migration"]) || array_key_exists("migration", $context) ? $context["migration"] : (function () { throw new RuntimeError('Variable "migration" does not exist.', 181, $this->source); })()), "executed_at", [], "any", false, false, false, 181)), "html", null, true))) : (print ("n/a")));
            echo "</td>
        <td class=\"font-normal\">";
            // line 182
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["migration"] ?? null), "execution_time", [], "any", true, true, false, 182)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["migration"] ?? null), "execution_time", [], "any", false, false, false, 182), "n/a")) : ("n/a")), "html", null, true);
            echo "</td>
    </tr>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@DoctrineMigrations/Collector/migrations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  441 => 182,  437 => 181,  434 => 180,  430 => 178,  426 => 176,  424 => 175,  421 => 174,  419 => 173,  414 => 171,  411 => 170,  405 => 168,  395 => 166,  393 => 165,  389 => 163,  376 => 162,  371 => 159,  362 => 157,  358 => 156,  355 => 155,  346 => 153,  342 => 152,  327 => 139,  318 => 136,  314 => 135,  311 => 134,  307 => 133,  295 => 124,  288 => 120,  277 => 111,  271 => 108,  267 => 106,  264 => 105,  258 => 102,  254 => 100,  252 => 99,  247 => 97,  230 => 83,  223 => 79,  216 => 75,  209 => 71,  204 => 68,  200 => 67,  194 => 63,  188 => 60,  185 => 59,  183 => 58,  178 => 56,  173 => 55,  170 => 54,  167 => 53,  164 => 52,  161 => 51,  158 => 50,  154 => 49,  149 => 45,  144 => 43,  141 => 42,  133 => 39,  126 => 35,  117 => 31,  110 => 27,  103 => 23,  99 => 21,  97 => 20,  94 => 19,  89 => 17,  84 => 16,  82 => 15,  79 => 14,  76 => 13,  73 => 12,  70 => 11,  67 => 10,  64 => 9,  61 => 8,  58 => 7,  55 => 6,  51 => 5,  46 => 1,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@DoctrineMigrations/Collector/migrations.html.twig", "/Users/lucassaraivacardoso/Documents/example_api_repository/vendor/doctrine/doctrine-migrations-bundle/Resources/views/Collector/migrations.html.twig");
    }
}
