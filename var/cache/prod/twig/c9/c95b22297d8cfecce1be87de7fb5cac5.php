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

/* default/cgu.html.twig */
class __TwigTemplate_ec208156eda02763978c9a1be7ac60b8 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "default/cgu.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo " <br>
 <div class=\"container\">
<center><h2>Conditions générales d'utilisation</h2></center>
<br>
<div><h4>Introduction</h4>
<p>Les présentes conditions générales représentent l'intégralité des engagements entre LocService et les internautes.
 Si une ou plusieurs des dispositions des présentes conditions générales étaient invalidées pour quelque cause que ce soit les autres dispositions garderont toute leur validité. En cas de difficulté d'interprétation entre l'un des titres et les clauses auxquelles ils se rapportent, le titre litigieux sera déclaré inexistant. Les présentes conditions générales, les règles de fond et les règles de forme, sont régies par la loi française.
 AtypikHouse se réserve la faculté de modifier les dispositions des présentes conditions générales.
</p>
</div>
<hr>
<div><h4>Informatique et liberté</h4>
<p>LocService est respectueux de votre vie privée et de vos données personnelles, conformément à la RGPD.
LocService a fait l'objet d'une déclaration auprès de la CNIL (Récépissé déclaration n° 1094070 en date du 17 Mai 2005).
Pour tenir compte de nouveaux traitements informatiques, nous avons procédé à une nouvelle déclaration CNIL (Récépissé déclaration N° 1863068 en date du 1 juin 2015).
Conformément à la loi (article 34 de la loi \"Informatique et Libertés\"), vous disposez d'un droit d'accès de rectification et de suppression des données qui vous concernent.
</p>
</div>
<hr>

<div><h4>Disponibilité du service</h4>
<p>AtypikHouse s'efforce de proposer un service disponible 7 jours sur 7 et 24 heures sur 24.
 Cependant AtypikHouse ne pourrait être tenu comme responsable de la non disponibilité de locservice.fr 
 quelles que soient les raisons : indisponibilité de votre fournisseur d'accès, de notre hébergeur, 
 opération de maintenance, etc…</p>
</div>
<hr>

<div><h4>Conditions pour les propriétaires</h4>
<p>Le propriétaire s'engage à louer un logement décent et ne pratiquer aucune discrimination dans sa sélection de locataires ou de colocataires.

Le propriétaire s'engage à ne pas proposer de locations saisonnières ou de vacances.

Le propriétaire reconnaît qu'il ne travaille pas pour un professionnel de l'immobilier (agence, marchand de listes, notaire, administrateur de biens, …). Il s'engage à proposer sa location sans frais d'intermédiaires.
La responsabilité de AtypikHouse ne saurait être engagée, directement ou indirectement, dans les futures relations entre les propriétaires et les (co)locataires.

Le propriétaire accepte que AtypikHouse puisse représenter et/ou reproduire les informations concernant les locations, de façon totale ou partielle (caractéristiques, descriptifs, photos, ...) sur des sites d'annonces immobilières de partenaires afin de renforcer la promotion de leurs offres. Bien évidemment, LocService s'engage à ce que les coordonnées des propriétaires ne soient jamais divulguées sur ces sites.

Les photos et descriptifs des locations enregistrées doivent être conformes à la réalité et ne concerner que le logement en question.

Tout envoi de messages ou photos contenant des propos diffamatoires, insultants, injurieux et plus généralement contraires à la loi française pourra entrainer la suppression de l'Espace Propriétaire sans préavis, et entraîner un bannissement temporaire ou définitif du propriétaire.</p>
</div>
<hr>

<div><h4>Conditions pour les colocataires en recherche</h4>
<p>AtypikHouse s'efforce de proposer un service disponible 7 jours sur 7 et 24 heures sur 24.
 Cependant AtypikHouse ne pourrait être tenu comme responsable de la non disponibilité de locservice.fr 
 quelles que soient les raisons : indisponibilité de votre fournisseur d'accès, de notre hébergeur, 
 opération de maintenance, etc…</p>
</div>
<hr>

<div><h4>Prix - Paiement - Facture</h4>
<p>AtypikHouse est gratuit pour tous les particuliers qui proposent un logement sans frais d’agence qu’ils soient propriétaires ou colocataires occupants.

Pour les locataires ou colocataires en recherche, le prix de la diffusion de la demande aux particuliers qui proposent un logement est de une seule fois 29 € TTC ou 24 € TTC pour les étudiants (tarifs au 03-02-2020). En aucun cas LocService ne touchera une commission sur la mise en relation. LocService n'intervient ni dans la conclusion de contrats de location, ni dans l'état des lieux ou dans le paiement du loyer.

Les demandes de location ou colocation sont par carte bancaire ou PayPal. Les demandes payées par PayPal ou carte bancaire, via le site sécurisé du Crédit Mutuel, sont diffusées immédiatement. Les demandes payées par chèque sont publiées dès l'encaissement du chèque.
</p>
</div>
<hr>
</div>
";
    }

    public function getTemplateName()
    {
        return "default/cgu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/cgu.html.twig", "C:\\wamp64\\www\\Atypik\\templates\\default\\cgu.html.twig");
    }
}
