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

/* default/mesprisedevue.html.twig */
class __TwigTemplate_7ebeee3f487b8c3b166eb6d011d4b924 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "default/mesprisedevue.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div class=\"container\">
<br>

";
        // line 9
        if (twig_test_empty(($context["prises"] ?? null))) {
            // line 10
            echo "
<div class=\"card border-info mb-3\" >
  <div class=\"card-header\"> </div>
  <div class=\"card-body\">
  <br><br><br>
     <center> <h2> Aucune Prise de vue </h2> </center>
<br><br>
</div>
</div>

";
        }
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["prises"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["prise"]) {
            // line 22
            echo "     
<div class=\"card border-info mb-3\" >
  <div class=\"card-header\"><strong >";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["prise"], "user", [], "any", false, false, false, 24), "username", [], "any", false, false, false, 24), "html", null, true);
            echo " : </strong> 
  <span style=\"float:right\"> Date Publication : <small>";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prise"], "dateprise", [], "any", false, false, false, 25), "d-m-Y H:i"), "html", null, true);
            echo "</small>
 ";
            // line 26
            if ((twig_get_attribute($this->env, $this->source, $context["prise"], "user", [], "any", false, false, false, 26) == twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 26))) {
                // line 27
                echo "  <a  href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supprimerprise", ["id" => twig_get_attribute($this->env, $this->source, $context["prise"], "id", [], "any", false, false, false, 27)]), "html", null, true);
                echo "\" type=\"button\" class=\"close\" style=\"margin-left:10px;font-size:27 px\"> &times;</a>
";
            }
            // line 29
            echo "  </span></strong>
  
  </div>
  <div class=\"card-body\">

<div id=\"carouselExemple\" class=\"carousel slide\" data-ride=\"carousel\" data-interval=\"3000\">

        <ol class=\"carousel-indicators\">
       
         ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["prise"], "photos2", [], "any", false, false, false, 38));
            foreach ($context['_seq'] as $context["index"] => $context["photo"]) {
                // line 39
                echo "        <li data-target=\"#carouselExemple\" data-slide-to=\"";
                echo twig_escape_filter($this->env, $context["index"], "html", null, true);
                echo "\" class=\"";
                if (($context["index"] == 0)) {
                    echo "  active ";
                }
                echo "\"></li>
         ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['index'], $context['photo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "         </ol>

        <div class=\"carousel-inner\">

          ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["prise"], "photos2", [], "any", false, false, false, 45));
            foreach ($context['_seq'] as $context["index"] => $context["photo"]) {
                // line 46
                echo "    
      <div class=\"carousel-item ";
                // line 47
                if (($context["index"] == 0)) {
                    echo "  active ";
                }
                echo "\" >
           
        <img src=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["photo"], "Source", [], "any", false, false, false, 49))), "html", null, true);
                echo "\" class=\"d-block w-100\" alt=\"";
                echo twig_escape_filter($this->env, $context["index"], "html", null, true);
                echo "\" style=\"width:850px; height:400px ;\">
      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['index'], $context['photo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "   
    ";
            // line 53
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["prise"], "photos2", [], "any", false, false, false, 53))) {
                // line 54
                echo "       <div class=\"carousel-item active\" >
      <img src=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/no-image.png"), "html", null, true);
                echo "\" class=\"d-block w-100\" alt=\"\" style=\"width:850px; height:400px ;\">
      </div>
   ";
            }
            // line 58
            echo "

        </div>
        <a href=\"#carouselExemple\" class=\"carousel-control-prev\" role=\"button\" data-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"ture\"></span>
            <span class=\"sr-only\">Previous</span>
        </a>
        <a href=\"#carouselExemple\" class=\"carousel-control-next\" role=\"button\" data-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
        </a>

    </div>
<hr>
<br>
<div class=\"row\">
        <div class=\"col-md-2\">
         <div class=\"form-group\">
           <label class=\"h6\">- Description :</label>
         </div>
        </div>
        <div class=\"col-md-10\">
         <div class=\"form-group\">
           <p>";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prise"], "commentaire", [], "any", false, false, false, 81), "html", null, true);
            echo "</p>
         </div>
        </div>
        </div>

<div class=\"row\">
        <div class=\"col-md-4\">
         <div class=\"form-group\">
         <a href=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["prise"], "reservation", [], "any", false, false, false, 89), "habitat", [], "any", false, false, false, 89), "id", [], "any", false, false, false, 89)]), "html", null, true);
            echo "\">  Voir l'habitat </a>
         </div>
        </div>
        </div>


    </div>
    </div>

     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prise'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "</div>
</div>
</div>
</div>

     
";
    }

    // line 108
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 109
        echo "
 ";
    }

    // line 112
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 113
        echo "
<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\"
        integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">

";
    }

    public function getTemplateName()
    {
        return "default/mesprisedevue.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 113,  240 => 112,  235 => 109,  231 => 108,  221 => 99,  205 => 89,  194 => 81,  169 => 58,  163 => 55,  160 => 54,  158 => 53,  155 => 52,  144 => 49,  137 => 47,  134 => 46,  130 => 45,  124 => 41,  111 => 39,  107 => 38,  96 => 29,  90 => 27,  88 => 26,  84 => 25,  80 => 24,  76 => 22,  72 => 21,  59 => 10,  57 => 9,  52 => 6,  48 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/mesprisedevue.html.twig", "C:\\wamp64\\www\\Atypik\\templates\\default\\mesprisedevue.html.twig");
    }
}
