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

/* default/Afficher.html.twig */
class __TwigTemplate_26b0d0e5bdba3ff6c9b0fbaca730dc09 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/Afficher.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default/Afficher.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 5
        echo "<script>
function message(){
  


document.querySelector(\"#contact\").style.display = \"block\";
\t\t\t\t
}
  


</script>
 ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 18
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "<div class=\"container\">
<br>

 <div class=\"card border-info mb-3\" >
  <div class=\"card-header\"><strong >";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["habitat"] ?? null), "user", [], "any", false, false, false, 23), "username", [], "any", false, false, false, 23), "html", null, true);
        echo " : </strong> <span style=\"float:right\"> Date Publication : <small>";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["habitat"] ?? null), "datePub", [], "any", false, false, false, 23), "d-m-Y H:i"), "html", null, true);
        echo "</small></span></strong></div>
  <div class=\"card-body\">
           
           
        <div class=\"row\">
           <div class=\"col-md-10 col-10\" style=\"font-size:20px\">
              <div class=\"form-group\">
                 <p > <b>- Titre :</b>  ";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["habitat"] ?? null), "titre", [], "any", false, false, false, 30), "html", null, true);
        echo "</p>
              </div>
            </div>
   
        </div>
     

<div id=\"carouselExemple\" class=\"carousel slide\" data-ride=\"carousel\" data-interval=\"3000\">

        <ol class=\"carousel-indicators\">
       
         ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["habitat"] ?? null), "photos", [], "any", false, false, false, 41));
        foreach ($context['_seq'] as $context["index"] => $context["photo"]) {
            // line 42
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
        // line 44
        echo "         </ol>

        <div class=\"carousel-inner\">

          ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["habitat"] ?? null), "photos", [], "any", false, false, false, 48));
        foreach ($context['_seq'] as $context["index"] => $context["photo"]) {
            // line 49
            echo "    
      <div class=\"carousel-item ";
            // line 50
            if (($context["index"] == 0)) {
                echo "  active ";
            }
            echo "\" >
           
        <img src=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["photo"], "Src", [], "any", false, false, false, 52))), "html", null, true);
            echo "\" class=\"d-block w-100\" alt=\"";
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\" style=\"width:850px; height:400px ;\">
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "   
    ";
        // line 56
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["habitat"] ?? null), "photos", [], "any", false, false, false, 56))) {
            // line 57
            echo "       <div class=\"carousel-item active\" >
      <img src=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/no-image.png"), "html", null, true);
            echo "\" class=\"d-block w-100\" alt=\"\" style=\"width:850px; height:400px ;\">
      </div>
   ";
        }
        // line 61
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
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["habitat"] ?? null), "type", [], "any", false, false, false, 84), "html", null, true);
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
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["habitat"] ?? null), "nombreCouchage", [], "any", false, false, false, 94), "html", null, true);
        echo "</p>
             </div>
           </div>
        </div>

        <div class=\"row\">
        <div class=\"col-md-3 col-6\">
         <div class=\"form-group\">
           <label class=\"h6\">- Surface :</label>
         </div>
        </div>
         <div class=\"col-md-3 col-6\">
         <div class=\"form-group\">
           <p>";
        // line 107
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["habitat"] ?? null), "surface", [], "any", false, false, false, 107), "html", null, true);
        echo " m2</p>
         </div>
        </div>
          <div class=\"col-md-3 col-6\">
         <div class=\"form-group\">
           <label class=\"h6\">- Prix :</label>
         </div>
        </div>
         <div class=\"col-md-3 col-6\">
         <div class=\"form-group\">
           <p>";
        // line 117
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["habitat"] ?? null), "prix", [], "any", false, false, false, 117), "html", null, true);
        echo "  €.</p>
         </div>
        </div>
        </div>
        <div class=\"row\">
        <div class=\"col-md-3 col-5\">
         <div class=\"form-group\">
           <label class=\"h6\">-Adresse :</label>
         </div>
        </div>
        <div class=\"col-md-9 col-7\">
         <div class=\"form-group\">
           <p>";
        // line 129
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["habitat"] ?? null), "adresse", [], "any", false, false, false, 129), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["habitat"] ?? null), "ville", [], "any", false, false, false, 129), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["habitat"] ?? null), "codepostale", [], "any", false, false, false, 129), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["habitat"] ?? null), "pays", [], "any", false, false, false, 129), "html", null, true);
        echo " .</p>
         </div>
        </div>
        </div>
        <div class=\"row\">
        <div class=\"col-md-3 col-5\">
         <div class=\"form-group\">
           <label class=\"h6\">- Description :</label>
         </div>
        </div>
        <div class=\"col-md-9 col-7\">
         <div class=\"form-group\">
           <p>";
        // line 141
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["habitat"] ?? null), "description", [], "any", false, false, false, 141), "html", null, true);
        echo "</p>
         </div>
        </div>
        </div>
<hr>


<div class=\"alert alert-dismissible alert-light\" id=\"contact\" style=\" display: none;\">
  <div class=\"row\">

  <div class=\"col-md-10 col-10\">
     <form action=\"";
        // line 152
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("envoimessage");
        echo "\" method=\"post\">
               <input name=\"contexte\" type=\"text\" class=\"form-control\" required  />
               <input hidden name=\"id\" type=\"number\" value=\"";
        // line 154
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["habitat"] ?? null), "id", [], "any", false, false, false, 154), "html", null, true);
        echo "\"  />
</div>
              
        <div class=\"col-md-2 col-2\">
                         <input class=\"btn btn-success btn-block\" type=\"submit\" value=\"Envoyer\" />
 
        </div> 
        </form> 
        </div>
      
      </div>




     ";
        // line 169
        if ((twig_get_attribute($this->env, $this->source, ($context["habitat"] ?? null), "user", [], "any", false, false, false, 169) == twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 169))) {
            // line 170
            echo "   <div class=\"row\">
     <div class=\"col-md-4 col-12\">
           <a class=\"btn btn-success btn-block\" href=\"";
            // line 172
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reserver", ["id" => twig_get_attribute($this->env, $this->source, ($context["habitat"] ?? null), "id", [], "any", false, false, false, 172)]), "html", null, true);
            echo "\">Gérer les diponibilités</a> 
   </div>
   <div class=\"col-md-4 col-12\">
            <a class=\"btn btn-success btn-block\" href=\"";
            // line 175
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editannonce", ["id" => twig_get_attribute($this->env, $this->source, ($context["habitat"] ?? null), "id", [], "any", false, false, false, 175)]), "html", null, true);
            echo "\">Editer</a>
   </div>

   <div class=\"col-md-4 col-12\">
   
            ";
            // line 180
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? null), 'form_start');
            echo "
                <input onclick=\"return confirm('Vouler vraiment supprimer votre annonce !')\" class=\"btn btn-danger btn-block\" type=\"submit\" value=\"Supprimer\">
            ";
            // line 182
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? null), 'form_end');
            echo "
    </div>

    ";
        } else {
            // line 186
            echo "    <br> 
    <div class=\"row\" >
   <div class=\"col-md-4 col-12\">
           <a class=\"btn btn-success btn-block\" href=\"";
            // line 189
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reserver", ["id" => twig_get_attribute($this->env, $this->source, ($context["habitat"] ?? null), "id", [], "any", false, false, false, 189)]), "html", null, true);
            echo "\">Résérver</a> 
   </div>
   <div class=\"col-md-4 col-12\" >
              <button class=\"btn btn-primary btn-block\" onclick='message()' >Contacter </button>
    </div>
     ";
            // line 194
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 195
                echo "   <div class=\"col-md-4 col-12\">
   
            ";
                // line 197
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? null), 'form_start');
                echo "
                <input onclick=\"return confirm('Vouler vraiment supprimer votre annonce !')\" class=\"btn btn-danger btn-block\" type=\"submit\" value=\"Supprimer\">
            ";
                // line 199
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? null), 'form_end');
                echo "
    </div>
   ";
            }
            // line 202
            echo "    ";
        }
        // line 203
        echo "        
          
 </div>      
</div></div>


     ";
        // line 209
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["commentaires"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
            // line 210
            echo "    <div class=\"alert alert-dismissible alert-light\">
       ";
            // line 211
            if (((twig_get_attribute($this->env, $this->source, $context["commentaire"], "user", [], "any", false, false, false, 211) == twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 211)) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
                // line 212
                echo "              <a  href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supprimercommentaire", ["id" => twig_get_attribute($this->env, $this->source, ($context["habitat"] ?? null), "id", [], "any", false, false, false, 212), "idd" => twig_get_attribute($this->env, $this->source, $context["commentaire"], "id", [], "any", false, false, false, 212)]), "html", null, true);
                echo "\" type=\"button\" class=\"close\" >&times;</a>    
      ";
            }
            // line 214
            echo "      <h5 class=\"alert-heading\" >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["commentaire"], "user", [], "any", false, false, false, 214), "username", [], "any", false, false, false, 214), "html", null, true);
            echo "<small style=\"float:right\"> ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "dateCommentaire", [], "any", false, false, false, 214), "d-m-Y H:i"), "html", null, true);
            echo " </small></h5> 
      <hr>
      <p class=\"mb-0\">";
            // line 216
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "texte", [], "any", false, false, false, 216), "html", null, true);
            echo "</p>
    </div>
     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 219
        echo "</div>
</div>



     
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 230
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 231
        echo "<style>

</style>
<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\"
        integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "default/Afficher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  446 => 231,  439 => 230,  426 => 219,  417 => 216,  409 => 214,  403 => 212,  401 => 211,  398 => 210,  394 => 209,  386 => 203,  383 => 202,  377 => 199,  372 => 197,  368 => 195,  366 => 194,  358 => 189,  353 => 186,  346 => 182,  341 => 180,  333 => 175,  327 => 172,  323 => 170,  321 => 169,  303 => 154,  298 => 152,  284 => 141,  263 => 129,  248 => 117,  235 => 107,  219 => 94,  206 => 84,  181 => 61,  175 => 58,  172 => 57,  170 => 56,  167 => 55,  156 => 52,  149 => 50,  146 => 49,  142 => 48,  136 => 44,  123 => 42,  119 => 41,  105 => 30,  93 => 23,  87 => 19,  80 => 18,  61 => 5,  54 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/Afficher.html.twig", "C:\\wamp64\\www\\Atypik\\templates\\default\\Afficher.html.twig");
    }
}
