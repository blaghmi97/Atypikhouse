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

/* default/listeprisedevue.html.twig */
class __TwigTemplate_34d9a344bdb766030c6ff5333345b646 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "default/listeprisedevue.html.twig", 1);
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
            echo " : </strong> <span style=\"float:right\"> Date Publication : <small>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prise"], "dateprise", [], "any", false, false, false, 24), "d-m-Y H:i"), "html", null, true);
            echo "</small>
   ";
            // line 25
            if (((twig_get_attribute($this->env, $this->source, $context["prise"], "user", [], "any", false, false, false, 25) == twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 25)) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
                // line 26
                echo "  <a  href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supprimerprise", ["id" => twig_get_attribute($this->env, $this->source, $context["prise"], "id", [], "any", false, false, false, 26)]), "html", null, true);
                echo "\" type=\"button\" class=\"close\" style=\"margin-left:10px;font-size:27 px\"> &times;</a>
";
            }
            // line 28
            echo "  </span></strong></div>
  <div class=\"card-body\">

<div id=\"carouselExemple\" class=\"carousel slide\" data-ride=\"carousel\" data-interval=\"3000\">

        <ol class=\"carousel-indicators\">
       
         ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["prise"], "photos2", [], "any", false, false, false, 35));
            foreach ($context['_seq'] as $context["index"] => $context["photo"]) {
                // line 36
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
            // line 38
            echo "         </ol>

        <div class=\"carousel-inner\">

          ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["prise"], "photos2", [], "any", false, false, false, 42));
            foreach ($context['_seq'] as $context["index"] => $context["photo"]) {
                // line 43
                echo "    
      <div class=\"carousel-item ";
                // line 44
                if (($context["index"] == 0)) {
                    echo "  active ";
                }
                echo "\" >
           
        <img src=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["photo"], "Source", [], "any", false, false, false, 46))), "html", null, true);
                echo "\" class=\"d-block w-100\" alt=\"";
                echo twig_escape_filter($this->env, $context["index"], "html", null, true);
                echo "\" style=\"width:850px; height:400px ;\">
      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['index'], $context['photo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "   
    ";
            // line 50
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["prise"], "photos2", [], "any", false, false, false, 50))) {
                // line 51
                echo "       <div class=\"carousel-item active\" >
      <img src=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/no-image.png"), "html", null, true);
                echo "\" class=\"d-block w-100\" alt=\"\" style=\"width:850px; height:400px ;\">
      </div>
   ";
            }
            // line 55
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
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prise"], "commentaire", [], "any", false, false, false, 78), "html", null, true);
            echo "</p>
         </div>
        </div>
        </div>

<div class=\"row\">
        <div class=\"col-md-4\">
         <div class=\"form-group\">
         <a href=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["prise"], "reservation", [], "any", false, false, false, 86), "habitat", [], "any", false, false, false, 86), "id", [], "any", false, false, false, 86)]), "html", null, true);
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
        // line 96
        echo "</div>
</div>
</div>
</div>

     
";
    }

    // line 105
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 106
        echo "
 ";
    }

    // line 109
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 110
        echo "
<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\"
        integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">

";
    }

    public function getTemplateName()
    {
        return "default/listeprisedevue.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 110,  236 => 109,  231 => 106,  227 => 105,  217 => 96,  201 => 86,  190 => 78,  165 => 55,  159 => 52,  156 => 51,  154 => 50,  151 => 49,  140 => 46,  133 => 44,  130 => 43,  126 => 42,  120 => 38,  107 => 36,  103 => 35,  94 => 28,  88 => 26,  86 => 25,  80 => 24,  76 => 22,  72 => 21,  59 => 10,  57 => 9,  52 => 6,  48 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/listeprisedevue.html.twig", "C:\\wamp64\\www\\Atypik\\templates\\default\\listeprisedevue.html.twig");
    }
}
