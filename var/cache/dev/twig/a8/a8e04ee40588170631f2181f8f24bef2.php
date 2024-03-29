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

/* @WebProfiler/Collector/request.html.twig */
class __TwigTemplate_f05aac38c01f1b724e86f193c8547c4c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/request.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/request.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        $macros["helper"] = $this;
        // line 5
        echo "    ";
        ob_start(function () { return ''; });
        // line 6
        echo "        ";
        echo twig_call_macro($macros["helper"], "macro_set_handler", [twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "controller", [], "any", false, false, false, 6)], 6, $context, $this->getSourceContext());
        echo "
    ";
        $context["request_handler"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "redirect", [], "any", false, false, false, 9)) {
            // line 10
            echo "        ";
            ob_start(function () { return ''; });
            // line 11
            echo "            ";
            echo twig_call_macro($macros["helper"], "macro_set_handler", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "redirect", [], "any", false, false, false, 11), "controller", [], "any", false, false, false, 11), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "redirect", [], "any", false, false, false, 11), "route", [], "any", false, false, false, 11), ((("GET" != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "redirect", [], "any", false, false, false, 11), "method", [], "any", false, false, false, 11))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "redirect", [], "any", false, false, false, 11), "method", [], "any", false, false, false, 11)) : (""))], 11, $context, $this->getSourceContext());
            echo "
        ";
            $context["redirect_handler"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 13
            echo "    ";
        }
        // line 14
        echo "
    ";
        // line 15
        if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "forwardtoken", [], "any", false, false, false, 15)) {
            // line 16
            echo "        ";
            $context["forward_profile"] = twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "childByToken", [0 => twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "forwardtoken", [], "any", false, false, false, 16)], "method", false, false, false, 16);
            // line 17
            echo "        ";
            ob_start(function () { return ''; });
            // line 18
            echo "            ";
            echo twig_call_macro($macros["helper"], "macro_set_handler", [((($context["forward_profile"] ?? null)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["forward_profile"] ?? null), "collector", [0 => "request"], "method", false, false, false, 18), "controller", [], "any", false, false, false, 18)) : ("n/a"))], 18, $context, $this->getSourceContext());
            echo "
        ";
            $context["forward_handler"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 20
            echo "    ";
        }
        // line 21
        echo "
    ";
        // line 22
        $context["request_status_code_color"] = (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "statuscode", [], "any", false, false, false, 22) >= 400)) ? ("red") : ((((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "statuscode", [], "any", false, false, false, 22) >= 300)) ? ("yellow") : ("green"))));
        // line 23
        echo "
    ";
        // line 24
        ob_start(function () { return ''; });
        // line 25
        echo "        <span class=\"sf-toolbar-status sf-toolbar-status-";
        echo twig_escape_filter($this->env, ($context["request_status_code_color"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "statuscode", [], "any", false, false, false, 25), "html", null, true);
        echo "</span>
        ";
        // line 26
        if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "route", [], "any", false, false, false, 26)) {
            // line 27
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "redirect", [], "any", false, false, false, 27)) {
                echo twig_include($this->env, $context, "@WebProfiler/Icon/redirect.svg");
            }
            // line 28
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "forwardtoken", [], "any", false, false, false, 28)) {
                echo twig_include($this->env, $context, "@WebProfiler/Icon/forward.svg");
            }
            // line 29
            echo "            <span class=\"sf-toolbar-label\">";
            ((("GET" != twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "method", [], "any", false, false, false, 29))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "method", [], "any", false, false, false, 29), "html", null, true))) : (print ("")));
            echo " @</span>
            <span class=\"sf-toolbar-value sf-toolbar-info-piece-additional\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "route", [], "any", false, false, false, 30), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 33
        echo "
    ";
        // line 34
        ob_start(function () { return ''; });
        // line 35
        echo "        <div class=\"sf-toolbar-info-group\">
            <div class=\"sf-toolbar-info-piece\">
                <b>HTTP status</b>
                <span>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "statuscode", [], "any", false, false, false, 38), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "statustext", [], "any", false, false, false, 38), "html", null, true);
        echo "</span>
            </div>

            ";
        // line 41
        if (("GET" != twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "method", [], "any", false, false, false, 41))) {
            // line 42
            echo "<div class=\"sf-toolbar-info-piece\">
                    <b>Method</b>
                    <span>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "method", [], "any", false, false, false, 44), "html", null, true);
            echo "</span>
                </div>";
        }
        // line 47
        echo "
            <div class=\"sf-toolbar-info-piece\">
                <b>Controller</b>
                <span>";
        // line 50
        echo twig_escape_filter($this->env, ($context["request_handler"] ?? null), "html", null, true);
        echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Route name</b>
                <span>";
        // line 55
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "route", [], "any", true, true, false, 55)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "route", [], "any", false, false, false, 55), "n/a")) : ("n/a")), "html", null, true);
        echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Has session</b>
                <span>";
        // line 60
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "sessionmetadata", [], "any", false, false, false, 60))) {
            echo "yes";
        } else {
            echo "no";
        }
        echo "</span>
            </div>
        </div>

        ";
        // line 64
        if (array_key_exists("redirect_handler", $context)) {
            // line 65
            echo "<div class=\"sf-toolbar-info-group\">
                <div class=\"sf-toolbar-info-piece\">
                    <b>
                        <span class=\"sf-toolbar-redirection-status sf-toolbar-status-yellow\">";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "redirect", [], "any", false, false, false, 68), "status_code", [], "any", false, false, false, 68), "html", null, true);
            echo "</span>
                        Redirect from
                    </b>
                    <span>
                        ";
            // line 72
            echo twig_escape_filter($this->env, ($context["redirect_handler"] ?? null), "html", null, true);
            echo "
                        (<a href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "redirect", [], "any", false, false, false, 73), "token", [], "any", false, false, false, 73)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "redirect", [], "any", false, false, false, 73), "token", [], "any", false, false, false, 73), "html", null, true);
            echo "</a>)
                    </span>
                </div>
            </div>
        ";
        }
        // line 78
        echo "
        ";
        // line 79
        if (array_key_exists("forward_handler", $context)) {
            // line 80
            echo "            <div class=\"sf-toolbar-info-group\">
                <div class=\"sf-toolbar-info-piece\">
                    <b>Forwarded to</b>
                    <span>
                        ";
            // line 84
            echo twig_escape_filter($this->env, ($context["forward_handler"] ?? null), "html", null, true);
            echo "
                        (<a href=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "forwardtoken", [], "any", false, false, false, 85)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "forwardtoken", [], "any", false, false, false, 85), "html", null, true);
            echo "</a>)
                    </span>
                </div>
            </div>
        ";
        }
        // line 90
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 91
        echo "
    ";
        // line 92
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => ($context["profiler_url"] ?? null)]);
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 95
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 96
        echo "    <span class=\"label\">
        <span class=\"icon\">";
        // line 97
        echo twig_include($this->env, $context, "@WebProfiler/Icon/request.svg");
        echo "</span>
        <strong>Request / Response</strong>
    </span>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 102
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 103
        echo "    ";
        $macros["helper"] = $this;
        // line 104
        echo "
    <h2>
        ";
        // line 106
        echo twig_call_macro($macros["helper"], "macro_set_handler", [twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "controller", [], "any", false, false, false, 106)], 106, $context, $this->getSourceContext());
        echo "
    </h2>

    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">Request</h3>

            <div class=\"tab-content\">
                <h3>GET Parameters</h3>

                ";
        // line 116
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestquery", [], "any", false, false, false, 116), "all", [], "any", false, false, false, 116))) {
            // line 117
            echo "                    <div class=\"empty\">
                        <p>No GET parameters</p>
                    </div>
                ";
        } else {
            // line 121
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestquery", [], "any", false, false, false, 121), "maxDepth" => 1], false);
            echo "
                ";
        }
        // line 123
        echo "
                <h3>POST Parameters</h3>

                ";
        // line 126
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestrequest", [], "any", false, false, false, 126), "all", [], "any", false, false, false, 126))) {
            // line 127
            echo "                    <div class=\"empty\">
                        <p>No POST parameters</p>
                    </div>
                ";
        } else {
            // line 131
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestrequest", [], "any", false, false, false, 131), "maxDepth" => 1], false);
            echo "
                ";
        }
        // line 133
        echo "
                <h4>Uploaded Files</h4>

                ";
        // line 136
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestfiles", [], "any", false, false, false, 136))) {
            // line 137
            echo "                    <div class=\"empty\">
                        <p>No files were uploaded</p>
                    </div>
                ";
        } else {
            // line 141
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestfiles", [], "any", false, false, false, 141), "maxDepth" => 1], false);
            echo "
                ";
        }
        // line 143
        echo "
                <h3>Request Attributes</h3>

                ";
        // line 146
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestattributes", [], "any", false, false, false, 146), "all", [], "any", false, false, false, 146))) {
            // line 147
            echo "                    <div class=\"empty\">
                        <p>No attributes</p>
                    </div>
                ";
        } else {
            // line 151
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestattributes", [], "any", false, false, false, 151)], false);
            echo "
                ";
        }
        // line 153
        echo "
                <h3>Request Headers</h3>
                ";
        // line 155
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestheaders", [], "any", false, false, false, 155), "labels" => [0 => "Header", 1 => "Value"], "maxDepth" => 1], false);
        echo "

                <h3>Request Content</h3>

                ";
        // line 159
        if ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "content", [], "any", false, false, false, 159) == false)) {
            // line 160
            echo "                    <div class=\"empty\">
                        <p>Request content not available (it was retrieved as a resource).</p>
                    </div>
                ";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 163
($context["collector"] ?? null), "content", [], "any", false, false, false, 163)) {
            // line 164
            echo "                    <div class=\"sf-tabs\">
                        ";
            // line 165
            $context["prettyJson"] = ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "isJsonRequest", [], "any", false, false, false, 165)) ? (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "prettyJson", [], "any", false, false, false, 165)) : (null));
            // line 166
            echo "                        ";
            if ( !(null === ($context["prettyJson"] ?? null))) {
                // line 167
                echo "                        <div class=\"tab\">
                            <h3 class=\"tab-title\">Pretty</h3>
                            <div class=\"tab-content\">
                                <div class=\"card\" style=\"max-height: 500px; overflow-y: auto;\">
                                    <pre class=\"break-long-words\">";
                // line 171
                echo twig_escape_filter($this->env, ($context["prettyJson"] ?? null), "html", null, true);
                echo "</pre>
                                </div>
                            </div>
                        </div>
                        ";
            }
            // line 176
            echo "
                        <div class=\"tab\">
                            <h3 class=\"tab-title\">Raw</h3>
                            <div class=\"tab-content\">
                                <div class=\"card\">
                                    <pre class=\"break-long-words\">";
            // line 181
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "content", [], "any", false, false, false, 181), "html", null, true);
            echo "</pre>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
        } else {
            // line 187
            echo "                    <div class=\"empty\">
                        <p>No content</p>
                    </div>
                ";
        }
        // line 191
        echo "            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Response</h3>

            <div class=\"tab-content\">
                <h3>Response Headers</h3>

                ";
        // line 200
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "responseheaders", [], "any", false, false, false, 200), "labels" => [0 => "Header", 1 => "Value"], "maxDepth" => 1], false);
        echo "
            </div>
        </div>

        <div class=\"tab ";
        // line 204
        echo (((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestcookies", [], "any", false, false, false, 204), "all", [], "any", false, false, false, 204)) && twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "responsecookies", [], "any", false, false, false, 204), "all", [], "any", false, false, false, 204)))) ? ("disabled") : (""));
        echo "\">
            <h3 class=\"tab-title\">Cookies</h3>

            <div class=\"tab-content\">
                <h3>Request Cookies</h3>

                ";
        // line 210
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestcookies", [], "any", false, false, false, 210), "all", [], "any", false, false, false, 210))) {
            // line 211
            echo "                    <div class=\"empty\">
                        <p>No request cookies</p>
                    </div>
                ";
        } else {
            // line 215
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestcookies", [], "any", false, false, false, 215)], false);
            echo "
                ";
        }
        // line 217
        echo "
                <h3>Response Cookies</h3>

                ";
        // line 220
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "responsecookies", [], "any", false, false, false, 220), "all", [], "any", false, false, false, 220))) {
            // line 221
            echo "                    <div class=\"empty\">
                        <p>No response cookies</p>
                    </div>
                ";
        } else {
            // line 225
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "responsecookies", [], "any", false, false, false, 225)], true);
            echo "
                ";
        }
        // line 227
        echo "            </div>
        </div>

        <div class=\"tab ";
        // line 230
        echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "sessionmetadata", [], "any", false, false, false, 230))) ? ("disabled") : (""));
        echo "\">
            <h3 class=\"tab-title\">Session</h3>

            <div class=\"tab-content\">
                <h3>Session Metadata</h3>

                ";
        // line 236
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "sessionmetadata", [], "any", false, false, false, 236))) {
            // line 237
            echo "                    <div class=\"empty\">
                        <p>No session metadata</p>
                    </div>
                ";
        } else {
            // line 241
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", ["data" => twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "sessionmetadata", [], "any", false, false, false, 241)], false);
            echo "
                ";
        }
        // line 243
        echo "
                <h3>Session Attributes</h3>

                ";
        // line 246
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "sessionattributes", [], "any", false, false, false, 246))) {
            // line 247
            echo "                    <div class=\"empty\">
                        <p>No session attributes</p>
                    </div>
                ";
        } else {
            // line 251
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", ["data" => twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "sessionattributes", [], "any", false, false, false, 251), "labels" => [0 => "Attribute", 1 => "Value"]], false);
            echo "
                ";
        }
        // line 253
        echo "            </div>
        </div>

        <div class=\"tab ";
        // line 256
        echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "flashes", [], "any", false, false, false, 256))) ? ("disabled") : (""));
        echo "\">
            <h3 class=\"tab-title\">Flashes</h3>

            <div class=\"tab-content\">
                <h3>Flashes</h3>

                ";
        // line 262
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "flashes", [], "any", false, false, false, 262))) {
            // line 263
            echo "                    <div class=\"empty\">
                        <p>No flash messages were created.</p>
                    </div>
                ";
        } else {
            // line 267
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", ["data" => twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "flashes", [], "any", false, false, false, 267)], false);
            echo "
                ";
        }
        // line 269
        echo "            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Server Parameters</h3>
            <div class=\"tab-content\">
                <h3>Server Parameters</h3>
                <h4>Defined in .env</h4>
                ";
        // line 277
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "dotenvvars", [], "any", false, false, false, 277)], false);
        echo "

                <h4>Defined as regular env variables</h4>
                ";
        // line 280
        $context["requestserver"] = [];
        // line 281
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestserver", [], "any", false, false, false, 281), function ($_____, $__key__) use ($context, $macros) { $context["_"] = $_____; $context["key"] = $__key__; return !twig_in_filter($context["key"], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "dotenvvars", [], "any", false, false, false, 281), "keys", [], "any", false, false, false, 281)); }));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 282
            echo "                    ";
            $context["requestserver"] = twig_array_merge(($context["requestserver"] ?? null), [$context["key"] => $context["value"]]);
            // line 283
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 284
        echo "                ";
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", ["data" => ($context["requestserver"] ?? null)], false);
        echo "
            </div>
        </div>

        ";
        // line 288
        if (twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "parent", [], "any", false, false, false, 288)) {
            // line 289
            echo "        <div class=\"tab\">
            <h3 class=\"tab-title\">Parent Request</h3>

            <div class=\"tab-content\">
                <h3>
                    <a href=\"";
            // line 294
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "parent", [], "any", false, false, false, 294), "token", [], "any", false, false, false, 294)]), "html", null, true);
            echo "\">Return to parent request</a>
                    <small>(token = ";
            // line 295
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "parent", [], "any", false, false, false, 295), "token", [], "any", false, false, false, 295), "html", null, true);
            echo ")</small>
                </h3>

                ";
            // line 298
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "parent", [], "any", false, false, false, 298), "getcollector", [0 => "request"], "method", false, false, false, 298), "requestattributes", [], "any", false, false, false, 298)], false);
            echo "
            </div>
        </div>
        ";
        }
        // line 302
        echo "
        ";
        // line 303
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "children", [], "any", false, false, false, 303))) {
            // line 304
            echo "        <div class=\"tab\">
            <h3 class=\"tab-title\">Sub Requests <span class=\"badge\">";
            // line 305
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "children", [], "any", false, false, false, 305)), "html", null, true);
            echo "</span></h3>

            <div class=\"tab-content\">
                ";
            // line 308
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "children", [], "any", false, false, false, 308));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 309
                echo "                    <h3>
                        ";
                // line 310
                echo twig_call_macro($macros["helper"], "macro_set_handler", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "getcollector", [0 => "request"], "method", false, false, false, 310), "controller", [], "any", false, false, false, 310)], 310, $context, $this->getSourceContext());
                echo "
                        <small>(token = <a href=\"";
                // line 311
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => twig_get_attribute($this->env, $this->source, $context["child"], "token", [], "any", false, false, false, 311)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "token", [], "any", false, false, false, 311), "html", null, true);
                echo "</a>)</small>
                    </h3>

                    ";
                // line 314
                echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "getcollector", [0 => "request"], "method", false, false, false, 314), "requestattributes", [], "any", false, false, false, 314)], false);
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 316
            echo "            </div>
        </div>
        ";
        }
        // line 319
        echo "    </div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 322
    public function macro_set_handler($__controller__ = null, $__route__ = null, $__method__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "controller" => $__controller__,
            "route" => $__route__,
            "method" => $__method__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "set_handler"));

            // line 323
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "class", [], "any", true, true, false, 323)) {
                // line 324
                if (((array_key_exists("method", $context)) ? (_twig_default_filter(($context["method"] ?? null), false)) : (false))) {
                    echo "<span class=\"sf-toolbar-status sf-toolbar-redirection-method\">";
                    echo twig_escape_filter($this->env, ($context["method"] ?? null), "html", null, true);
                    echo "</span>";
                }
                // line 325
                $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "file", [], "any", false, false, false, 325), twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "line", [], "any", false, false, false, 325));
                // line 326
                if (($context["link"] ?? null)) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "class", [], "any", false, false, false, 326), "html", null, true);
                    echo "\">";
                } else {
                    echo "<span title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "class", [], "any", false, false, false, 326), "html", null, true);
                    echo "\">";
                }
                // line 328
                if (((array_key_exists("route", $context)) ? (_twig_default_filter(($context["route"] ?? null), false)) : (false))) {
                    // line 329
                    echo "@";
                    echo twig_escape_filter($this->env, ($context["route"] ?? null), "html", null, true);
                } else {
                    // line 331
                    echo twig_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->abbrClass(twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "class", [], "any", false, false, false, 331))), "html", null, true);
                    // line 332
                    ((twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "method", [], "any", false, false, false, 332)) ? (print (twig_escape_filter($this->env, (" :: " . twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "method", [], "any", false, false, false, 332)), "html", null, true))) : (print ("")));
                }
                // line 335
                if (($context["link"] ?? null)) {
                    echo "</a>";
                } else {
                    echo "</span>";
                }
            } else {
                // line 337
                echo "<span>";
                echo twig_escape_filter($this->env, ((array_key_exists("route", $context)) ? (_twig_default_filter(($context["route"] ?? null), ($context["controller"] ?? null))) : (($context["controller"] ?? null))), "html", null, true);
                echo "</span>";
            }
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  778 => 337,  771 => 335,  768 => 332,  766 => 331,  762 => 329,  760 => 328,  748 => 326,  746 => 325,  740 => 324,  737 => 323,  719 => 322,  711 => 319,  706 => 316,  698 => 314,  690 => 311,  686 => 310,  683 => 309,  679 => 308,  673 => 305,  670 => 304,  668 => 303,  665 => 302,  658 => 298,  652 => 295,  648 => 294,  641 => 289,  639 => 288,  631 => 284,  625 => 283,  622 => 282,  617 => 281,  615 => 280,  609 => 277,  599 => 269,  593 => 267,  587 => 263,  585 => 262,  576 => 256,  571 => 253,  565 => 251,  559 => 247,  557 => 246,  552 => 243,  546 => 241,  540 => 237,  538 => 236,  529 => 230,  524 => 227,  518 => 225,  512 => 221,  510 => 220,  505 => 217,  499 => 215,  493 => 211,  491 => 210,  482 => 204,  475 => 200,  464 => 191,  458 => 187,  449 => 181,  442 => 176,  434 => 171,  428 => 167,  425 => 166,  423 => 165,  420 => 164,  418 => 163,  413 => 160,  411 => 159,  404 => 155,  400 => 153,  394 => 151,  388 => 147,  386 => 146,  381 => 143,  375 => 141,  369 => 137,  367 => 136,  362 => 133,  356 => 131,  350 => 127,  348 => 126,  343 => 123,  337 => 121,  331 => 117,  329 => 116,  316 => 106,  312 => 104,  309 => 103,  302 => 102,  291 => 97,  288 => 96,  281 => 95,  272 => 92,  269 => 91,  266 => 90,  256 => 85,  252 => 84,  246 => 80,  244 => 79,  241 => 78,  231 => 73,  227 => 72,  220 => 68,  215 => 65,  213 => 64,  202 => 60,  194 => 55,  186 => 50,  181 => 47,  176 => 44,  172 => 42,  170 => 41,  162 => 38,  157 => 35,  155 => 34,  152 => 33,  149 => 32,  144 => 30,  139 => 29,  134 => 28,  129 => 27,  127 => 26,  120 => 25,  118 => 24,  115 => 23,  113 => 22,  110 => 21,  107 => 20,  101 => 18,  98 => 17,  95 => 16,  93 => 15,  90 => 14,  87 => 13,  81 => 11,  78 => 10,  76 => 9,  73 => 8,  67 => 6,  64 => 5,  61 => 4,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Collector/request.html.twig", "C:\\wamp64\\www\\Atypik\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\request.html.twig");
    }
}
