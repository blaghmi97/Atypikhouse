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

/* default/reservation2.html.twig */
class __TwigTemplate_d34dde4019b9e8af8c7483b5d5d646f1 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "default/reservation2.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div class=\"container\">
<br>
<div class=\"card border-primary mb-3\" >
        <div class=\"card-header\">Résérvation : <small>";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["reservation"] ?? null), "dateReservation", [], "any", false, false, false, 9), "d-m-Y H:i"), "html", null, true);
        echo "</small></span></strong></div>
            <div class=\"card-body\">
        <div class=\"row\">
           <div class=\"col-md-2 col-3\">
              <div class=\"form-group\">
                 <label class=\"h5\">- Titre :</label>
              </div>
            </div>
        <div class=\"col-md-10 col-9\">
         <div class=\"form-group\">
           <label class=\"h5\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["reservation"] ?? null), "habitat", [], "any", false, false, false, 19), "titre", [], "any", false, false, false, 19), "html", null, true);
        echo "</label>
         </div>
        </div>
        </div>
     

<div id=\"carouselExemple\" class=\"carousel slide\" data-ride=\"carousel\" data-interval=\"3000\">

        <ol class=\"carousel-indicators\">
       
         ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["reservation"] ?? null), "habitat", [], "any", false, false, false, 29), "photos", [], "any", false, false, false, 29));
        foreach ($context['_seq'] as $context["index"] => $context["photo"]) {
            // line 30
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
        // line 32
        echo "         </ol>

        <div class=\"carousel-inner\">

          ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["reservation"] ?? null), "habitat", [], "any", false, false, false, 36), "photos", [], "any", false, false, false, 36));
        foreach ($context['_seq'] as $context["index"] => $context["photo"]) {
            // line 37
            echo "    
      <div class=\"carousel-item ";
            // line 38
            if (($context["index"] == 0)) {
                echo "  active ";
            }
            echo "\" >
           
        <img src=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["photo"], "Src", [], "any", false, false, false, 40))), "html", null, true);
            echo "\" class=\"d-block w-100\" alt=\"";
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\" style=\"width:850px; height:400px ;\">
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "   
    ";
        // line 44
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["reservation"] ?? null), "habitat", [], "any", false, false, false, 44), "photos", [], "any", false, false, false, 44))) {
            // line 45
            echo "       <div class=\"carousel-item active\" >
      <img src=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/no-image.png"), "html", null, true);
            echo "\" class=\"d-block w-100\" alt=\"\" style=\"width:850px; height:400px ;\">
      </div>
   ";
        }
        // line 49
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
           <div class=\"col-md-3 col-6\">
              <div class=\"form-group\">
                 <label class=\"h6\">- Type d'habitat :</label>
              </div>
            </div>
            <div class=\"col-md-3 col-6\">
              <div class=\"form-group\">
               <p >";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["reservation"] ?? null), "habitat", [], "any", false, false, false, 72), "type", [], "any", false, false, false, 72), "html", null, true);
        echo "</p>
              </div>
            </div>
           <div class=\"col-md-3 col-6\">
             <div class=\"form-group\">
               <label class=\"h6\">- Nombre de couchage :</label>
             </div>
           </div>
           <div class=\"col-md-3 col-6\">
             <div class=\"form-group\">
               <p>";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["reservation"] ?? null), "habitat", [], "any", false, false, false, 82), "nombreCouchage", [], "any", false, false, false, 82), "html", null, true);
        echo "</p>
             </div>
           </div>
        </div>
        

                <div class=\"row\">
        <div class=\"col-md-3 col-3\">
         <div class=\"form-group\">
           <label class=\"h6\">- Surface :</label>
         </div>
        </div>
         <div class=\"col-md-3 col-3\">
         <div class=\"form-group\">
           <p>";
        // line 96
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["reservation"] ?? null), "habitat", [], "any", false, false, false, 96), "surface", [], "any", false, false, false, 96), "html", null, true);
        echo " m2</p>
         </div>
        </div>
          <div class=\"col-md-3 col-3\">
         <div class=\"form-group\">
           <label class=\"h6\">- Prix :</label>
         </div>
        </div>
         <div class=\"col-md-3 col-3\">
         <div class=\"form-group\">
           <p>";
        // line 106
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["reservation"] ?? null), "habitat", [], "any", false, false, false, 106), "prix", [], "any", false, false, false, 106), "html", null, true);
        echo "  €.</p>
         </div>
        </div>
        </div>
        <div class=\"row\">
        <div class=\"col-md-3 col-3\">
         <div class=\"form-group\">
           <label class=\"h6\">-Adresse :</label>
         </div>
        </div>
        <div class=\"col-md-9 col-9\">
         <div class=\"form-group\">
           <p>";
        // line 118
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["reservation"] ?? null), "habitat", [], "any", false, false, false, 118), "adresse", [], "any", false, false, false, 118), "html", null, true);
        echo "</p>
         </div>
        </div>
        </div>

<hr>
<div class=\"row\">
        <div class=\"col-md-3 col-6\">
         <div class=\"form-group\">
           <label class=\"h6\">- Date Début :</label>
         </div>
        </div>
         <div class=\"col-md-3 col-6\">
         <div class=\"form-group\">
           <p>";
        // line 132
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["reservation"] ?? null), "dateDebut", [], "any", false, false, false, 132), "d-m-Y"), "html", null, true);
        echo "</p>
         </div>
        </div>
          <div class=\"col-md-3 col-6\">
         <div class=\"form-group\">
           <label class=\"h6\">- Date Fin :</label>
         </div>
        </div>
         <div class=\"col-md-3 col-6\">
         <div class=\"form-group\">
           <p>";
        // line 142
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["reservation"] ?? null), "dateFin", [], "any", false, false, false, 142), "d-m-Y"), "html", null, true);
        echo "</p>
         </div>
        </div>
        </div>
        <div class=\"row\">
        <div class=\"col-md-3 col-6\">
         <div class=\"form-group\">
           <label class=\"h6\">- Nombre des jours :</label>
         </div>
        </div>
         <div class=\"col-md-3 col-6\">
         <div class=\"form-group\">
           <p>";
        // line 154
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["reservation"] ?? null), "nombreNuit", [], "any", false, false, false, 154), "html", null, true);
        echo " Jours</p>
         </div>
        </div>
          <div class=\"col-md-3 col-6\">
         <div class=\"form-group\">
           <label class=\"h6\">- Prix totale :</label>
         </div>
        </div>
         <div class=\"col-md-3 col-6\">
         <div class=\"form-group\">
           <p>";
        // line 164
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["reservation"] ?? null), "prixTotal", [], "any", false, false, false, 164), "html", null, true);
        echo "  €.</p>
         </div>
        </div>
        </div>
<hr>
   <div class=\"row\">
   <div class=\"col-md-4 col-4\">
        
                <a class=\"btn btn-success btn-block\" href=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commenter", ["id" => twig_get_attribute($this->env, $this->source, ($context["reservation"] ?? null), "id", [], "any", false, false, false, 172)]), "html", null, true);
        echo "\">Commenter</a>
    </div>
   <div class=\"col-md-4 col-4\">
        
                <a class=\"btn btn-success btn-block\" href=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("newprisedevue", ["id" => twig_get_attribute($this->env, $this->source, ($context["reservation"] ?? null), "id", [], "any", false, false, false, 176)]), "html", null, true);
        echo "\">Prise de vue</a>
    </div>
    <div class=\"col-md-4 col-4\">
               ";
        // line 179
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? null), 'form_start');
        echo "
                <input class=\"btn btn-danger btn-block\" type=\"submit\" value=\"Annuler\">
            ";
        // line 181
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? null), 'form_end');
        echo "
   </div>

    </div>
    
</div>
</div>
</div>
";
    }

    // line 192
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 193
        echo "
 ";
    }

    // line 196
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 197
        echo "
<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\"
        integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">

";
    }

    public function getTemplateName()
    {
        return "default/reservation2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  341 => 197,  337 => 196,  332 => 193,  328 => 192,  315 => 181,  310 => 179,  304 => 176,  297 => 172,  286 => 164,  273 => 154,  258 => 142,  245 => 132,  228 => 118,  213 => 106,  200 => 96,  183 => 82,  170 => 72,  145 => 49,  139 => 46,  136 => 45,  134 => 44,  131 => 43,  120 => 40,  113 => 38,  110 => 37,  106 => 36,  100 => 32,  87 => 30,  83 => 29,  70 => 19,  57 => 9,  52 => 6,  48 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/reservation2.html.twig", "C:\\wamp64\\www\\Atypik\\templates\\default\\reservation2.html.twig");
    }
}
