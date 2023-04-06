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

/* default/mesannonces.html.twig */
class __TwigTemplate_5714c057512b877409616f498b3e3e59 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'stylesheets' => [$this, 'block_stylesheets'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/mesannonces.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default/mesannonces.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
<br>
";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 6), "flashbag", [], "any", false, false, false, 6), "get", [0 => "success"], "method", false, false, false, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 7
            echo "<div class=\"alert alert-dismissible alert-success\">
  <h4 class=\"alert-heading\"> ";
            // line 8
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</h4>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "




<div class=\"card border-info mb-3\" >
  <div class=\"card-header\">Mes Annonces :</div>
  <div class=\"card-body\">
      
      ";
        // line 20
        if (twig_test_empty(($context["habitats"] ?? null))) {
            // line 21
            echo "

  <br><br><br>
  
  
     <center> <h2> Aucune Prise de vue </h2> </center>
<br><br>


";
        }
        // line 31
        echo "<div class=\"row\">


";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["habitats"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["habitat"]) {
            // line 35
            echo "

<div class=\"col-md-4 col-lg-4\" style=\"margin-top: 15px\">
<a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_show", ["id" => twig_get_attribute($this->env, $this->source, $context["habitat"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\">
<div class=\"card\">
   
       ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["habitat"], "photos", [], "any", false, false, false, 41), 0, 1));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 42
                echo "                  <img class=\"card-img-top\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["image"], "Src", [], "any", false, false, false, 42))), "html", null, true);
                echo "\" alt=\"ff \" height=\"250 px\" width=\"100 px\">
       ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "       
       ";
            // line 45
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["habitat"], "photos", [], "any", false, false, false, 45))) {
                // line 46
                echo "          <img class=\"card-img-top\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/no-image.png"), "html", null, true);
                echo "\" alt=\"gf \" height=\"250 px\" width=\"100 px\">
       ";
            }
            // line 48
            echo "
  <div class=\"card-body\">
    <h5 class=\"card-title\">";
            // line 50
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["habitat"], "titre", [], "any", false, false, false, 50), 0, 25), "html", null, true);
            echo " ...</h5>
     <hr>
    <p class=\"card-text\">";
            // line 52
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["habitat"], "description", [], "any", false, false, false, 52), 0, 35), "html", null, true);
            echo " ...</p>
    <hr>
    <small align=\"center\">";
            // line 54
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["habitat"], "datePub", [], "any", false, false, false, 54), "d-m-Y H:i"), "html", null, true);
            echo "</small>
  </div>
</div>
</a>
</div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['habitat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "</div>

</div>
</div>
<div class=\"pagination\">

";
        // line 67
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["habitats"] ?? null));
        echo "
</div>
</div>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 73
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "default/mesannonces.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 73,  184 => 67,  176 => 61,  163 => 54,  158 => 52,  153 => 50,  149 => 48,  143 => 46,  141 => 45,  138 => 44,  129 => 42,  125 => 41,  119 => 38,  114 => 35,  110 => 34,  105 => 31,  93 => 21,  91 => 20,  80 => 11,  71 => 8,  68 => 7,  64 => 6,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/mesannonces.html.twig", "C:\\wamp64\\www\\Atypik\\templates\\default\\mesannonces.html.twig");
    }
}
