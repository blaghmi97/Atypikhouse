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

/* @Twig/layout.html.twig */
class __TwigTemplate_a1efa487d48a95f6240d65297b6ba551 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'before_html' => [$this, 'block_before_html'],
            'title' => [$this, 'block_title'],
            'head' => [$this, 'block_head'],
            'body' => [$this, 'block_body'],
            'after_html' => [$this, 'block_after_html'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $__internal_compile_0 = (("The template \"" . $this->getTemplateName()) . "\" is deprecated since Symfony 4.4, will be removed in 5.0.");
        @trigger_error($__internal_compile_0." (\"@Twig/layout.html.twig\" at line 1).", E_USER_DEPRECATED);
        // line 2
        $this->displayBlock('before_html', $context, $blocks);
        // line 3
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 10
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 11
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 12
        $this->displayBlock('head', $context, $blocks);
        // line 13
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 17
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc/";
        // line 20
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/index.html\">
                        <span class=\"icon\">";
        // line 21
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 28
        $this->displayBlock('body', $context, $blocks);
        // line 29
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        // line 32
        $this->displayBlock('after_html', $context, $blocks);
    }

    // line 2
    public function block_before_html($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 12
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 28
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 32
    public function block_after_html($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 32,  129 => 28,  123 => 12,  117 => 9,  111 => 2,  107 => 32,  100 => 29,  98 => 28,  88 => 21,  84 => 20,  78 => 17,  72 => 13,  70 => 12,  66 => 11,  62 => 10,  58 => 9,  52 => 6,  47 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Twig/layout.html.twig", "C:\\wamp64\\www\\Atypik\\vendor\\symfony\\twig-bundle\\Resources\\views\\layout.html.twig");
    }
}
