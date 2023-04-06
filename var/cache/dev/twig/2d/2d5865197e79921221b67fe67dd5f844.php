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

/* default/mentions.html.twig */
class __TwigTemplate_ea53ecf6ac08cea881ed9e9e82f1f086 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/mentions.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default/mentions.html.twig", 1);
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
        echo " <br>
 <div class=\"container\">
<center><h2>Mentions Légales</h2></center>
<br>
<div>
<h4>Responsable du site</h4>
<p>AtypikHouse est une société de type SARL au capital de 10 000€ crée par 3 associés, destinée à la location
d’habitations insolites, comme les cabanes dans les arbres, les yourtes ou les cabanes flottantes et elle est
basée dans la localité de Pierrefonds, dans le département de l’Oise et cherche à mettre en place un service
de location d’habitat alternatif en France et en Europe.
<pre>
N° Siret : 333.483.667.001.97
Téléphone : 01.51.00.90.22 
Fax : 01.51.00.90.22
Mail : AtypikHouse@gmail.com
</pre>

</p>
</div>

<br>
<div><h4>POLITIQUE DE CONFIDENTIALITE</h4>
<p>Toutes les informations fournies par l'utilisateur sont strictement confidentielles. En aucun cas, elles ne seront cédées, louées ou simplement transmises à quelque personne, organisme ou société commerciale que ce soit autrement que pour répondre à une injonction des autorités judiciaires. Ces informations ne feront pas l'objet d'envoi de lettres d'information non sollicitées, ni d'utilisation massive. 
Le site web n'a mis en place aucune procédure de récupération de cookies sur les formulaires ni pour la navigation sur le site.
</p>
</div>
<br>
<div><h4>CONTENU DU SITE INTERNET</h4>
<p>
AtypikHouse met tout en œuvre pour offrir à l'utilisateur des informations et/ou des outils disponibles et vérifiés mais ne saurait être tenu pour responsable des erreurs,
 d'une absence de disponibilité des informations et/ou de la présence de virus sur son site.

Si la totalité des données fournies sur le Site Internet d'Habitat Pluriel a pour objet de délivrer l'information la plus précise possible à l'utilisateur, le processus de validation indispensable à la mise en ligne d'une offre de qualité,
 tant en termes de présentation qu'en termes de précision des informations, peut entraîner un décalage entre les informations effectivement disponibles et celles présentées sur le Site Internet.
  Ainsi, les informations présentées sur le Site Internet sont toujours destinées à informer du mieux possible, au moment de la consultation par l'utilisateur, 
  sans qu'il soit permis de considérer que les informations y figurant revêtent un caractère contractuel ou définitif.
</p>
</div>

<div><h4>PROTECTION DES DONNEES PERSONNELLES</h4>
<p>En application de la loi n°78-17 du 6 janvier 1978 relative à l'informatique,
 aux fichiers et aux libertés, vous disposez des droits d'opposition (art.26 de la loi),
  d'accès (art.34 à 38 de la loi) et de rectification (art.36 de la loi) des données vous concernant.
   Ainsi, vous pouvez exiger que soient rectifiées, complétées,
    mises à jour ou effacées les informations vous concernant qui sont inexactes,
 incomplètes, équivoques, périmées ou dont la collecte ou l'utilisation.</p>
</div>

<div><h4>CREDITS</h4><br>

<div class=\"row\">
<div class=\"col-md-4\">
<pre>
Site réalisé par WebAgency
53, Cours Pierre Puget
75012 Paris
+33 (0)4.91.00.14.00
WebAgency.fr
</pre>
</div>
<div class=\"col-md-4\">
<pre>
Site hébergé par Namecheap
2 avenue des déportés
13100 Aix en Provence France
TEL : 0899690019
www.namecheap.com
</pre>
</div>
<div class=\"col-md-4\">
<pre>
Conception graphique par WebAgency
53, Cours Pierre Puget
75012 Paris
+33 (0)4.91.00.14.00
WebAgency.fr
</pre>
</div>
</div>
</div></div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "default/mentions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/mentions.html.twig", "C:\\wamp64\\www\\Atypik\\templates\\default\\mentions.html.twig");
    }
}
