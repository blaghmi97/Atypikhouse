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

/* default/index.html.twig */
class __TwigTemplate_ce317a7b9ab8b4dbe5079e6efd64ac0d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "      <style>

.cookie-container {
  position: fixed;
  bottom: -50%;
  left: 0;
  right: 0;
  background: #2f3640;
  color: #f5f6fa;
  padding: 0 32px;
  box-shadow: 0 -2px 16px rgba(47, 54, 64, 0.39);

  transition: 400ms;
}

.cookie-container.active {
  bottom: 0;
}

.cookie-container a {
  color: #f5f6fa;
}

.cookie-btn {
  background: #ffffff;
  border: 0;
  padding: 12px 48px;
  font-size: 18px;
  margin-bottom: 16px;
  border-radius: 8px;
  cursor: pointer;
}

.jumbotron{
      background-image: url(\"uploads/images/hbb.jpg\");
    background-size: cover;

    background-repeat: no-repeat;
}


#ck1{
color: #ffffff !important;
}
#ck2{
  color: #ffffff !important;
}
#ck3{
  color: #000000 !important;
}
#aty{

    background-image: url(\"uploads/images/habitat.jpg\");
    background-size: cover;

    background-repeat: no-repeat;

}


</style>
        
        ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 71
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 72
        echo " 

<div class=\"jumbotron\">
  <h1  align=\"center\" style=\"font-size:45px\">ATYPIKHOUSE</h1><br>
  <h2  align=\"center\" style=\"font-size:25px\">Découvrez le surprenant monde de l’habitat alternatif.</h2><br>
  <hr class=\"my-4\">
  <h3 class=\"lead \" align=\"center\">";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["atypik"] ?? null), "description", [], "any", false, false, false, 78), "html", null, true);
        echo "</h3>
  <br><hr><br><br><br>
  <p class=\"lead\" align=\"center\">
    <a class=\"btn btn-primary btn-lg\" href=\"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\" role=\"button\">Inscrivez-vous !</a>
  </p>
</div>


<div class=\"container\">
 <h3>Nos dernières annonces :</h3>
<div class=\"row center\">
";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["habitats"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["habitat"]) {
            // line 90
            echo "

<div class=\"col-md-4 col-12\"  style=\"margin-top: 15px\">
<a href=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_show", ["id" => twig_get_attribute($this->env, $this->source, $context["habitat"], "id", [], "any", false, false, false, 93)]), "html", null, true);
            echo "\">
<div class=\"card\" >
   
       ";
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["habitat"], "photos", [], "any", false, false, false, 96), 0, 1));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 97
                echo "             <img class=\"card-img-top\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["image"], "Src", [], "any", false, false, false, 97))), "html", null, true);
                echo "\" alt=\"Habitat alternatif \" height=\"250 px\" width=\"100 px\">
       ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo "
        ";
            // line 100
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["habitat"], "photos", [], "any", false, false, false, 100))) {
                // line 101
                echo "              <img class=\"card-img-top\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/no-image.png"), "html", null, true);
                echo "\" alt=\"reserver habitat \" height=\"250 px\" width=\"100 px\">
        ";
            }
            // line 103
            echo "  <div class=\"card-body\">
    <h4 class=\"card-title\">";
            // line 104
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["habitat"], "titre", [], "any", false, false, false, 104), 0, 15), "html", null, true);
            echo " ..</h4>
     <hr>
    <p class=\"card-text\">";
            // line 106
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["habitat"], "description", [], "any", false, false, false, 106), 0, 15), "html", null, true);
            echo " ...</p>
    <hr>
    <small float=\"right\">";
            // line 108
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["habitat"], "datePub", [], "any", false, false, false, 108), "d-m-Y H:i"), "html", null, true);
            echo "</small>
  </div>
</div></a>
</div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['habitat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "</div></div>
<br> <br>


<div id=\"aty\" class=\"col-12\">
  <br> <br>
 <h4 style=\"font-size:40px\"> <center><strong>Pourquoi choisir AtypikHouse !</strong> </center></h4>
 <br><br>
<div class=\"row \" style=\"margin-top: 15px;\">

<div class=\"col-md-4 col-12\">
  <div class=\"card text-white bg-primary mb-3\" style=\"max-width: 38rem; margin-top: 15px; opacity: 0.9;\">
  <br>
  <div class=\"card-body\">
  <center>  <image src=\"uploads/images/credit-card-100x100.webp\" alt=\"paiement-atypikhouse\">  </center>
  <br>
    <h5 class=\"card-text\" style=\"text-align: center; font-size:23px\">Un système de paiement simple et sécurisé .</h5>
  </div>
</div>
</div>

<div class=\"col-md-4 col-12\"  style=\"margin-top: 15px\">
  <div class=\"card text-white bg-primary mb-3\" style=\"max-width: 38rem; opacity: 0.9;\">
  <br>
  <div class=\"card-body\">
  <center>  <image src=\"uploads/images/quality-100x100.webp\" alt=\"qualité-atypikhouse\">  </center>
  <br>
    <h5 class=\"card-text\" style=\"text-align: center; font-size:23px\">Un service unique, complet et de qualité .</h5>
  </div>
</div>
</div>

<div class=\"col-md-4 col-12\"  style=\"margin-top: 15px\">
  <div class=\"card text-white bg-primary mb-3\" style=\"max-width: 38rem; opacity: 0.9;\">
  <br>
  <div class=\"card-body\">
  <center>  <image src=\"uploads/images/monitor-100x100.webp\" alt=\"intuitive-atypikhouse\">  </center>
  <br>
    <h5 class=\"card-text\" style=\"text-align: center; font-size:23px\">Une réservation intuitive et instantanée .</h5>
  </div>
</div>
</div>
</div>
</div>
<br><br>



<div>
<div class=\"col-md-12\">
<center><h5 style=\"font-size:30px\"> Ce que pensent nos clients .</h5></center> <br>
<div class=\"row justify-content-around\">
<div class=\"col-md-5 \">
<figure class=\"text-center\" >
  <blockquote class=\"blockquote\">
    <p class=\"mb-0\" >Expérience vraimenent à recomander, nous avons résérvé une habitat par le biais d'AtypikHouse c'était vraimenent cool et professionel. A bientot !</p>
  
  </blockquote>
  <figcaption class=\"blockquote-footer\">
    <cite title=\"Source Title\" style=\"color: #000000 ;\">ALEX</cite>
  </figcaption>
</figure>
</div>

<div class=\"col-md-5\">

<figure class=\"text-center\">
  <blockquote class=\"blockquote\">
    <p class=\"mb-0\">Bonne idée de faire une telle plateforme, Merci à vous </p>
  
  </blockquote>
  <figcaption class=\"blockquote-footer\">
    <cite title=\"Source Title\" style=\"color: #000000 ;\">Aurelie</cite>
  </figcaption>
</figure>
</div>

</div>

</div>








</div></div>
</div></div>
  </div>
<br>







 <div class=\"cookie-container\">
     <p style=\"font-size:25px\" id=\"ck1\">Controler l'utilisation de vos données personnelles.</p>
      <p id=\"ck2\">
        Nous utilisons des technologies comme les coockies pour stocker et/ou accéder à des informations sur le terminal,comme des identifiants uniques,traiter des données personnelles non sensibles comme l'adresse IP.
      </p>

      <button class=\"cookie-btn\" id=\"ck3\">
        Accepter et fermer
      </button>
    </div>



</div>

</div>




";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 234
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 235
        echo "<script>
const cookieContainer = document.querySelector(\".cookie-container\");
const cookieButton = document.querySelector(\".cookie-btn\");

cookieButton.addEventListener(\"click\", () => {
  cookieContainer.classList.remove(\"active\");
  localStorage.setItem(\"cookieBannerDisplayed\", \"true\");
});

setTimeout(() => {
  if (!localStorage.getItem(\"cookieBannerDisplayed\")) {
    cookieContainer.classList.add(\"active\");
  }
}, 2000);
</script>


";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  359 => 235,  352 => 234,  226 => 113,  214 => 108,  209 => 106,  204 => 104,  201 => 103,  195 => 101,  193 => 100,  190 => 99,  181 => 97,  177 => 96,  171 => 93,  166 => 90,  162 => 89,  151 => 81,  145 => 78,  137 => 72,  130 => 71,  61 => 6,  54 => 5,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/index.html.twig", "C:\\wamp64\\www\\Atypik\\templates\\default\\index.html.twig");
    }
}
