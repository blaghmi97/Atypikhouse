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

/* default/partenaire.html.twig */
class __TwigTemplate_49c9186970cf5c600d8a97d3ad4805f6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/partenaire.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default/partenaire.html.twig", 1);
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
        echo "
<div class=\"container \">
";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 6), "flashbag", [], "any", false, false, false, 6), "get", [0 => "success"], "method", false, false, false, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 7
            echo "<br>
<div class=\"alert alert-dismissible alert-success\">
  <h4 class=\"alert-heading\"> ";
            // line 9
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</h4>
</div>
<br>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "<h2> REJOIGNEZ L'AVENTURE ET BOOSTEZ VOS VENTES ! </h2>
<br><br>
<div class=\"card border-info mb-3\" >
  <div class=\"card-header\">Devenir Partenaire avec ATYPIKHOUSE :</div>
  <div class=\"card-body\">

<form action=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dm_partenaire");
        echo "\" method=\"post\">



    <div class=\"row\">
    <div class=\"col-md-3 col-3\">
    <label for=\"statut\"><B> <U> Je suis :</B> </U></label>
    </div>
    <div class=\"col-md-3 col-3\">
       <input class=\"form-check-input\" type=\"radio\" name=\"statut\" id=\"Particulier\" value=\"Particulier\" required>
                     <label class=\"form-check-label\" for=\"Particulier\">
                              un Particulier
                      </label>
    </div>
    <div class=\"col-md-3 col-3\">
       <input class=\"form-check-input\" type=\"radio\" name=\"statut\" id=\"Professionnel\" value=\"Professionnel\">
                      <label class=\"form-check-label\" for=\"Professionnel\">
                              un Professionnel
                      </label>
    </div>
        <div class=\"col-md-3 col-3\">
       <input class=\"form-check-input\" type=\"radio\" name=\"statut\" id=\"Association\" value=\"Association\">
                            <label class=\"form-check-label\" for=\"Association\">
                              une Association
                      </label>
    </div>
    </div>

<br><hr><br>

    <div class=\"row\">
    <div class=\"col-md-4 col-4\">
    <label > <B> <U>  C'est mon activité : </B></U></label>
    </div>
    <div class=\"col-md-4 col-4\">
       <input class=\"form-check-input\" type=\"radio\" name=\"activite\" id=\"Principale\" value=\"Principale\" required>
              <label class=\"form-check-label\" for=\"Principale\">
          Principale
        </label>
    </div>
    <div class=\"col-md-4 col-4\">
       <input class=\"form-check-input\" type=\"radio\" name=\"activite\" id=\"Secondaire\" value=\"Secondaire\">
                     <label class=\"form-check-label\" for=\"Secondaire\">
                           Secondaire
                    </label>
    </div>
    </div>

<br><hr><br>

    <div class=\"row\">
    <div class=\"col-md-4 col-4\">
    <label > <B> <U>J'ai des biens :</B> </U></label>
    </div>
    <div class=\"col-md-4 col-4\">
       <input class=\"form-check-input\" type=\"radio\" name=\"lieu\" id=\"En France\" value=\"En France\" required>
              <label class=\"form-check-label\" for=\"En France\">
           Seulement en France
        </label>
    </div>
    <div class=\"col-md-4 col-4\">
       <input class=\"form-check-input\" type=\"radio\" name=\"lieu\" id=\"En Europe\" value=\"En Europe\">
              <label class=\"form-check-label\" for=\"En Europe\">
          Partout en Enrope
        </label>
    </div>
    </div>

<br><hr><br>

        <div class=\"row\">
    <div class=\"col-md-4 col-4\">
    <label for=\"conn\"> <B> <U>Comment vous nous-avez connu ?</B> </U></label>
    </div>

    <div class=\"col-md-6 col-6\">
    <div class=\"form-group\">
   
   <select class=\"form-control\" name=\"connu\" id=\"conn\" >
        <option value=\"Moteur de recherche\">Moteur de recherche</option>
        <option value=\"Bouche à oreille\">Bouche à oreille</option>
        <option value=\"Réseaux Sociaux\">Réseaux Sociaux</option>
        <option value=\"Autres\">Autres</option>
       
      </select>
    </div>
    </div>
    </div>
</div>


<br><hr>
    <div class=\"col-md-12 col-12\">
    <input class=\"btn btn-success btn-block\" type=\"submit\" value=\"Envoyer\" />
   
    </div>
     <br>

    </div>
    </form>

<br>
 </div>
    </div> </div>
    
    
    
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "default/partenaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 19,  81 => 13,  71 => 9,  67 => 7,  63 => 6,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/partenaire.html.twig", "C:\\wamp64\\www\\Atypik\\templates\\default\\partenaire.html.twig");
    }
}
