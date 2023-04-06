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

/* default/mesreservations.html.twig */
class __TwigTemplate_b27ad0a38876c460f8a04102821bfa4f extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "default/mesreservations.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        echo "<div class=\"card border-info mb-3\" >
  <div class=\"card-header\">Mes Résérvations :</div>
  <div class=\"card-body\">
  ";
        // line 14
        if (twig_test_empty(($context["reservations"] ?? null))) {
            // line 15
            echo "

  <br><br>
     <center> <h2> Aucune Résérvation </h2> </center>
<br>


";
        }
        // line 23
        echo "<div class=\"row\">


";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reservations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 27
            echo "

<div class=\"col-md-4\" style=\"margin-top: 15px\">
<a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_show", ["id" => twig_get_attribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\">
<div class=\"card\">
   
       ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "habitat", [], "any", false, false, false, 33), "photos", [], "any", false, false, false, 33), 0, 1));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 34
                echo "

  <img class=\"card-img-top\" src=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["image"], "Src", [], "any", false, false, false, 36))), "html", null, true);
                echo "\" alt=\"ff \" height=\"250 px\" width=\"100 px\">
  
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "           ";
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "habitat", [], "any", false, false, false, 39), "photos", [], "any", false, false, false, 39))) {
                // line 40
                echo "      <img class=\"card-img-top\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/no-image.png"), "html", null, true);
                echo "\" alt=\"gf \" height=\"250 px\" width=\"100 px\">
           ";
            }
            // line 42
            echo "  <div class=\"card-body\">
    <p class=\"card-text\">- De : ";
            // line 43
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "dateDebut", [], "any", false, false, false, 43), "d-m-Y"), "html", null, true);
            echo " Jusq'au : ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "dateFin", [], "any", false, false, false, 43), "d-m-Y"), "html", null, true);
            echo ".</p>
     <p class=\"card-text\">- Nombre de nuit : ";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "nombreNuit", [], "any", false, false, false, 44), "html", null, true);
            echo ". - Prix : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "prixTotal", [], "any", false, false, false, 44), "html", null, true);
            echo "  €.</p>
    <hr>
    <small>- Résérvé le : ";
            // line 46
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "dateReservation", [], "any", false, false, false, 46), "d-m-Y"), "html", null, true);
            echo " .</small>
  </div>

</div>
</a>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "</div>


<br>

</div>

</div>
<div class=\"pagination\">

";
        // line 63
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["reservations"] ?? null));
        echo "
</div>
</div>
";
    }

    // line 68
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "default/mesreservations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 68,  175 => 63,  163 => 53,  150 => 46,  143 => 44,  137 => 43,  134 => 42,  128 => 40,  125 => 39,  116 => 36,  112 => 34,  108 => 33,  102 => 30,  97 => 27,  93 => 26,  88 => 23,  78 => 15,  76 => 14,  71 => 11,  62 => 8,  59 => 7,  55 => 6,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/mesreservations.html.twig", "C:\\wamp64\\www\\Atypik\\templates\\default\\mesreservations.html.twig");
    }
}
