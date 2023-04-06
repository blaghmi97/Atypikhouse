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

/* @WebProfiler/Icon/no.svg */
class __TwigTemplate_85efd339b249b6b7c5ea49d9a8616d82 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Icon/no.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"28\" height=\"28\" viewBox=\"0 0 12 12\"><path fill=\"#B0413E\" d=\"M10.4 8.4L8 6l2.4-2.4c.8-.8.7-1.6.2-2.2-.6-.5-1.4-.6-2.2.2L6 4 3.6 1.6C2.8.8 2 .9 1.4 1.4c-.5.6-.6 1.4.2 2.2L4 6 1.6 8.4c-.8.8-.7 1.6-.2 2.2.6.6 1.4.6 2.2-.2L6 8l2.4 2.4c.8.8 1.6.7 2.2.2.5-.6.6-1.4-.2-2.2z\"/></svg>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Icon/no.svg";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Icon/no.svg", "C:\\wamp64\\www\\Atypik\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Icon\\no.svg");
    }
}
