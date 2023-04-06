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

/* base.html.twig */
class __TwigTemplate_c3a3855685d6cfba55c67d87e36222e4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'list' => [$this, 'block_list'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <html lang=\"fr\">
        <meta charset=\"UTF-8\" />
        <title> AtypikHouse | Votre plateforme pour résérver votre habitat partout en europe </title>
        <meta name=\"description\" content=\"Découvrez le surprenant monde de l’habitat alternatif partout en europe.\"/>
        <meta name=\"keywords\" content=\"Cabanes mobiles ,nomades, cabanes , habitat alternatif, maisons alternatives,habitat léger,AtypikHouse\"/>
        <meta name=\"ROBOTS\" content=\"INDEX, FOLLOW\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"author\" content=\"AtypikHouse\">
        
        ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "        <link rel=\"icon\" type=\"image/JPG\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("icons/at.JPG"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/bootstrap.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/front.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("f.css"), "html", null, true);
        echo "\" />
        <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\"
        integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\"
        crossorigin=\"anonymous\"></script>

      
      
       <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"
        integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\"
        crossorigin=\"anonymous\"></script>
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
       
 
    </head>
    <body>

 <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
  <a class=\"navbar-brand\" href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">ATYPIKHOUSE</a>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>

  <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
    <ul class=\"navbar-nav mr-auto\">
      ";
        // line 44
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PARTENAIRE")) {
            // line 45
            echo "      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
            // line 46
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("habitat_Add");
            echo "\"><i style=\"font-size:15px\" class=\"fa fa-plus\"></i> Ajouter une annonce</a>
      </li>
      ";
        }
        // line 49
        echo "
      ";
        // line 50
        if (((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 50), "roles", [], "any", false, false, false, 50)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null) == "ROLE_USER")) {
            // line 51
            echo "      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
            // line 52
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partenaire");
            echo "\"><i style=\"font-size:15px\" class=\"fa fa-plus\"></i> Devenir Partenaire</a>
      </li>
      ";
        }
        // line 55
        echo "      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Annonces");
        echo "\"><i style=\"font-size:15px\" class=\"fa fa-search\"></i> Rechercher</a>
      </li>
           <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listeprises");
        echo "\"><i style=\"font-size:15px\" class=\"fa fa-bullhorn\"></i> Les prises de vue</a>
      </li>
      
    </ul>

     <ul class=\"navbar-nav navbar-right\">
      ";
        // line 65
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 66
            echo "      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
            // line 67
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminpage");
            echo "\"><i style=\"font-size:15px\" class=\"fa fa-cogs\"></i>  Administration</a>
      </li>
      ";
        }
        // line 70
        echo "     ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 71
            echo "      <li class=\"nav-item dropdown\" style=\"margin-right: 60px;\">
        <a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><i style=\"font-size:15px\" class=\"fa fa-user\"></i>  ";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 72), "username", [], "any", false, false, false, 72), "html", null, true);
            echo "</a>
        <div class=\"dropdown-menu\"  >
          <a class=\"dropdown-item\" href=\"";
            // line 74
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mesprises");
            echo "\"><i style=\"font-size:18px;\" class=\"fa fa-clipboard\"></i> Mes prise de vue</a>
          ";
            // line 75
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PARTENAIRE")) {
                // line 76
                echo "          <a class=\"dropdown-item\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mesannonces");
                echo "\"><i style=\"font-size:18px;\" class=\"fa fa-list-ul\"></i> Mes Annonces</a>
          ";
            }
            // line 78
            echo "          <a class=\"dropdown-item\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mesreservations");
            echo "\"><i style=\"font-size:18px;\" class=\"fa fa-shopping-cart\"></i> Mes réservations</a>
          <a class=\"dropdown-item\" href=\"";
            // line 79
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("messagerie");
            echo "\"><i style=\"font-size:18px;\" class=\"fa fa-envelope\"></i> Ma messagerie</a>

          <div class=\"dropdown-divider\"></div>
          <a class=\"dropdown-item\" href=\"";
            // line 82
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\"><i style=\"font-size:18px;\" class=\"fa fa-sign-out\"></i> Se Déconnecter</a>
        </div>
      </li>
      ";
        } else {
            // line 86
            echo "      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
            // line 87
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\"><i style=\"font-size:18px\" class=\"fa fa-sign-in\"></i> Se Connecter</a>
      </li>
      ";
        }
        // line 90
        echo "    </ul>
   
  </div>
</nav>



<style>


footer{


position:relative;

bottom:0;

width:100%;

padding-top:400px;

height:50px;

}



</style>
";
        // line 118
        $this->displayBlock('list', $context, $blocks);
        // line 119
        echo "
 ";
        // line 120
        $this->displayBlock('body', $context, $blocks);
        // line 121
        echo "
        ";
        // line 122
        $this->displayBlock('javascripts', $context, $blocks);
        // line 123
        echo "
<footer style=\"position:relative; bottom:0; width:100%;\">
        <div class=\"container-fluid\" style=\"padding: 50px 80px; background: #a0f2cf;\" align=\"center\">
            <div class=\"row justify-content-center\">
                <div class=\"col-md-1 col-2\">
            <a href=\"https://www.facebook.com/AtypikHome/\">
                <i class=\"fa fa-facebook fa-lg white-text mr-md-5 mr-3 fa-2x\"></i>
           

            </a>
           
            </div>
            <div class=\"col-md-1 col-2\">
            <a href=\"https://www.twitter.com/AtypikHome/\">
                    <i class=\"fa fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x\"></i>
                  
              
            </a>

            
             </div>
            <div class=\"col-md-1 col-2\">
            <a href=\"https://www.google.com/AtypikHome/\">
                    <i class=\"fa fa-google-plus fa-lg white-text mr-md-5 mr-3 fa-2x\"></i>
                
             </a>
             
              </div>
            <div class=\"col-md-1 col-2\">
            <a href=\"https://www.instagram.com/AtypikHome/\">
             <center>       <i class=\"fa fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x\"></i></center>
             
             </a>
             
             </div>
             </div>
             <br>
           <hr> 
            <div class=\"row justify-content-center\">
                <div class=\"col-md-3 col-12\">
           <a href=\"";
        // line 163
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mentions");
        echo "\" >Mentions légales</a>   
                </div>
                <div class=\"col-md-3 col-12\">
           <a href=\"";
        // line 166
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("politique");
        echo "\">Politique de confidentialité</a> 
           </div>
                <div class=\"col-md-3 col-12\">
             <a href=\"";
        // line 169
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cgu");
        echo "\">CGU</a>   
                </div>  
                
                <div class=\"col-md-3 col-12\">
             <a href=\"";
        // line 173
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cgv");
        echo "\">CGV</a>   
                </div>        
        </div>
      </div>
        <div class=\"col-md-12 col-12\" style=\"background: #ffffff;\">
            <p style=\"color: black; \" align=\"center\">
                &copy; 2020 : AtypikHouse
            </p>
        </div>
    </footer>
       


    </body>
</html>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "       
        
        ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 118
    public function block_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list"));

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 120
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 122
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  374 => 122,  362 => 120,  350 => 118,  341 => 14,  334 => 13,  310 => 173,  303 => 169,  297 => 166,  291 => 163,  249 => 123,  247 => 122,  244 => 121,  242 => 120,  239 => 119,  237 => 118,  207 => 90,  201 => 87,  198 => 86,  191 => 82,  185 => 79,  180 => 78,  174 => 76,  172 => 75,  168 => 74,  163 => 72,  160 => 71,  157 => 70,  151 => 67,  148 => 66,  146 => 65,  137 => 59,  131 => 56,  128 => 55,  122 => 52,  119 => 51,  117 => 50,  114 => 49,  108 => 46,  105 => 45,  103 => 44,  93 => 37,  73 => 20,  69 => 19,  65 => 18,  60 => 17,  58 => 13,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "C:\\wamp64\\www\\Atypik\\templates\\base.html.twig");
    }
}
