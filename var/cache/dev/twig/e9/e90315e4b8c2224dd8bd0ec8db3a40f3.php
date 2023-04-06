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

/* default/cgv.html.twig */
class __TwigTemplate_4758f8691849a0ca68c3fd45a300d62b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/cgv.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default/cgv.html.twig", 1);
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
        echo "<br>
 <div class=\"container\">
<center><h2>Conditions générales de vente</h2></center>
<br>
<div><h4>1 – Glossaire</h4>
<p><b>Hébergement : </b>Logement mis à disposition pour la location.

<b>Compte : </b>Espace utilisateur permettant aux propriétaires d’hébergement d’accéder aux services du site.

<b>Domaine : </b>Lieu sur lequel se trouvent les hébergements.

<b>Offre domaine : </b>Service d’activation d’un domaine d’hébergement durant une année.

<b>Pack visibilité : </b>Service de mise en avant des hébergements.

<b>Article journaliste et traduction en anglais : </b>Rédaction d’un article par un professionnel concernant un domaine et traduction en anglais par notre prestataire.
</p>
</div>


<hr>
<div><h4>2 - Propriété du contenu de atypikhouse.com</h4>
<p>
AtypikHouse, éditeur du site atypikhouse.com, ayant pour adresse url www. atypikhouse.com, ne vous autorise à montrer et reproduire les informations et éléments graphiques contenus dans ce site que pour votre usage personnel et à condition que les informations et éléments graphiques ne soient utilisés que pour des usages éducatifs ou informatifs, en particulier est exclu tout usage à titre commercial ou de vente.
</p>

</div>
<hr>
<div><h4>3 – Dégagement de responsabilité</h4>
<p>
Ce site internet a été réalisé dans le cadre d’un projet. Aucune des annonces publiées n’est valide. Les localisations des hébergements sont des adresses extraites de Google Maps et n’indiquent pas réellement l’emplacement d’un hébergement insolite.

Toutes les données présentes sont donc fictives.

Les informations disponibles sur le site www.atypikehouse.com, vous sont proposées gratuitement par AtypikHouse qui prend toutes les précautions possibles pour s’assurer que ces informations sont correctes et à jour. Toutefois AtypikHouse n’est ni représentant ni garant de façon implicite ou explicite de l’exactitude, de l’exhaustivité ou de tout autre aspect de l’information présente sur les sites et n’accepte aucune responsabilité liée à l’usage que vous en ferez.

Le site et tout éléments qui y sont présents vous sont proposés à la condition que vous vous assuriez de leur pertinence avant de les utiliser. Parce que AtypikHouse n’a ni connaissance ni contrôle sur l’usage qui en sera fait, elle peut seulement fournir ces éléments ‘tels quels’ et sans garantie d’aucune sorte. En conséquence, AtypikHouse exclu toute garantie implicite ou explicite, y compris mais pas uniquement, toute adéquation à un usage particulier. AtypikHouse rejette également toute responsabilité concernant l’utilisation des informations et éléments du présent site en violation de tous brevets, droits d’auteur, noms de marque d’une tierce partie quelconque.</p>
</div>
<hr>
<div><h4>4 – Limitation de responsabilité</h4>
<p>
AtypikHouse et tout autre participant ou co-producteur de ce site décline toute responsabilité concernant les éventuels dommages ou blessures résultant de votre accès ou utilisation du site ou des informations qu’il contient ou encore de votre incapacité à accéder ou utiliser le site ou de télécharger un élément quelconque du site. Toute responsabilité, due à la négligence ou autre, pour toutes pertes, dommages ou blessures qui soient directs, accidentels, consécutifs, indirects, punitifs ou de toute autre nature, qui pourraient arriver directement, indirectement, du fait de votre utilisation ou incapacité d’utiliser le site, y compris mais non limité à tout événement causé par : des informations incomplètes ou inexactes, des virus informatiques, des bugs logiciels, une action ou inaction humaine, un système informatique, ligne téléphonique, du matériel informatique, un mauvais fonctionnement d’un logiciel, toutes autres erreurs, fautes ou retards dans les transmissions des réseaux et des ordinateurs est exclue.
</p>
</div>

<hr>
<div><h4>5 – Compétences des tribunaux</h4>
<p>
Ces termes et conditions sont de la compétence des tribunaux français. Vous acceptez expressément que tout litige ou action en justice provenant ou relatif à ces termes et conditions ou votre utilisation du site soit de la compétence exclusive des tribunaux français. Ces termes et conditions constituent l’accord entre AtypikHouse et vous sur les conditions d’utilisation du site. Si une partie de ces termes et conditions devient invalide ou inapplicable, le reste continuera néanmoins à s’appliquer.</p>
</div>
<hr>
<div><h4>6 – Liens hypertexte</h4>
<p>
Le site contient des hyperliens vers d’autres sites liés à la SARL AtypikeHouse ainsi qu’à d’autres sites indépendants. AtypikHouse n’est pas responsable du contenu de ces sites indépendants et ne fait pas siens ou n’approuve pas les produits ou informations présents ou mentionnés par ces sites.</p>
</div>

<hr>

<div><h4>7 – Services</h4>
<p>
AtypikHouse, permet par le biais du site atypikoHouse.com aux propriétaires d’hébergements de présenter leurs hébergements insolites destinés à la location. Les visiteurs du site peuvent quant à eux gratuitement consulter ces hébergements.

Une offre domaine à 150 euros TTC active ou renouvelle sur une période de un an, une ou plusieurs annonces. Une annonce correspond au descriptif d’un ou de plusieurs hébergements sensiblement identiques. Il est possible de créer au sein d’un même compte plusieurs domaines comme il est possible également de présenter plusieurs hébergements dans un même compte.

Un Pack visibilité, à 10 euros TTC par hébergement et par mois, permet de mettre en avant un hébergement sur une période allant de un mois à douze mois, grâce notamment à un affichage aléatoire en page d’accueil et un affichage permanent en tête de liste d’une catégorie selon la durée sélectionnée.

L’offre article journaliste et traduction en anglais, comme son nom l’indique, permet la rédaction par un professionnel d’un article sur le domaine avec sa traduction en anglais faite par notre prestataire. Son tarif est de 50 euros TTC.

Nous proposons également un service de mise en relation entre des personnes souhaitant acquérir à la vente un hébergement insolite et nos différents fournisseurs.</p>

</div>

<hr>
<div><h4>8 – Paiement</h4>
<p>
Le prix des abonnements est indiqué sur le site en euros et toutes taxes comprises.

Le client peut effectuer le règlement par carte bancaire.

Le paiement sécurisé en ligne par carte bancaire est réalisé par notre prestataire de paiement Stripe. Les informations transmises sont chiffrées dans les règles de l’art et ne peuvent être lues au cours du transport sur le réseau. Les coordonnées bancaires saisies lors du paiement sur l’interface de notre prestataire ne sont en aucun cas enregistrées sur la base de données du site www.atypikhouse.com. Une fois le paiement lancé par le Client, la transaction est immédiatement débitée après vérification des informations. Conformément à l’article L. 132-2 du Code monétaire et financier, l’engagement de payer donné par carte est irrévocable. En communiquant ses informations bancaires lors de la vente, le Client autorise AtypikHouse à débiter sa carte du montant relatif au prix indiqué. Le Client confirme qu’il est bien le titulaire légal de la carte à débiter et qu’il est légalement en droit d’en faire usage. En cas d’erreur, ou d’impossibilité de débiter la carte, la vente est immédiatement résolue de plein droit et la commande annulée.

Le passage du mode paiement par carte bancaire au mode prélèvement automatique annuel est possible à tous moments via votre compte utilisateur.

Le passage du mode prélèvement automatique vers le mode paiement bancaire est possible également avant la date de reconduction du forfait, sur demande.

Si vous souhaitez arrêter un prélèvement automatique, vous devez adresser un courrier de résiliation à la société AtypikHouse ou bien formuler votre demande par mail à l’adresse suivante : contact@atypikhouse.com afin que celui-ci cesse de présenter des prélèvements à votre banque. A défaut de courrier de résiliation ou de mail envoyé un mois avant la date anniversaire de l’abonnement AtypikHouse reconduira automatiquement l’abonnement et ainsi le prélèvement automatique. L’insertion d’un RIB dans un compte entraîne la facturation d’une année entière.

La durée des abonnements est de 1 an et commence au jour du règlement. Chaque nouvelle année commencée sera facturée. De même, une résiliation en cours d’abonnement n’entraînera aucun remboursement de AtypikHouse.

Les tarifs proposés comprennent les rabais et ristournes que la société AtypikHouse serait amenée à octroyer compte tenu de ses résultats ou de la prise en charge par l’acheteur de certaines prestations.

Aucun escompte ne sera consenti en cas de paiement anticipé.

En application de l’article L 441-6 du code de commerce, des pénalités de retard sont exigibles, sans qu’un rappel soit nécessaire, le jour suivant la date de règlement figurant sur la facture. Le taux d’intérêt de ces pénalités est fixé à trois fois le taux d’intérêt légal en vigueur au jour de l’échéance. Ces pénalités seront appliquées par mois de retard et calculées à compter de l’échéance initiale de la facture restée impayée jusqu’au paiement intégral du prix, tout mois civil commencé étant dû dans son intégralité.

Tout retard de paiement donnera lieu, en plus des pénalités de retard, au versement d’une indemnité forfaitaire pour frais de recouvrement dont le montant sera de 40 euros (cf. décret n° 2012-1115 du 02.10.2012). Cette indemnité sera due de plein droit et sans formalité par le client en situation de retard. Lorsque les frais de recouvrement seront supérieurs au montant de l’indemnité forfaitaire, AtypikHouse se réserve la possibilité de demander, sur justificatifs, une indemnisation complémentaire, conformément à la Loi n° 2012-387 du 22 mars 2012.

</p>

</div>

<hr>
<div><h4>9 – Délai de rétractation</h4>
<p>
La réglementation applicable aux ventes et aux achats sur internet ou à distance a été modifiée par la « loi Hamon », qui renforce les droits des consommateurs qui achètent via des sites de commerce en ligne. La loi Hamon a été publiée au Journal officiel du 18 mars 2014 (loi n° 2014-344 du 17 mars 2014 relative à la consommation).

Dans le cadre d’une vente à distance, par correspondance ou en ligne par internet, le consommateur dispose d’un droit de rétractation qui lui permet de changer d’avis et de revenir sur son achat. Il doit alors exercer son droit de rétractation dans un délai de 14 jours et ce sans avoir à justifier de motifs ni à payer de pénalités, à l’exception, le cas échéant, des frais de retour.

Le délai court à compter :

De la réception du colis lorsque l’achat concerne un bien ;
De l’acceptation de l’offre lorsque l’achat concerne un service.
En matière de services, la loi prévoit néanmoins que ce droit de rétractation n’est pas applicable aux contrats ayant pour objet la prestation de services notamment pour du contenu numérique fourni sur un support immatériel et contrat d’abonnement à ces prestations dont l’exécution a commencé avec votre accord.

Dans ces conditions, votre paiement entraînera l’annulation de ce délai de rétractation.</p>

</div>


<hr>
<div><h4>10 – Modifications et consentement</h4>
<p>
AtypikHouse se réserve le droit de modifier ces termes et conditions à tout moment et pour quelque raison que ce soit. Nous nous réservons également le droit de faire des changements à tout moment, sans information préalable ou obligation, concernant les informations contenues dans le site. En entrant sur le site, vous reconnaissez et acceptez que vous serez soumis à ce type de modifications. De la même façon vous devrez périodiquement consulter cette page pour vous assurer des termes et conditions en vigueur. Toute demande ayant trait au consentement ou à l’approbation selon ces termes et conditions et toute autre demande concernant le site doit être faite auprès du web-master à l’adresse e-mail suivante : contact@atypikhouse.com</p>

</div>
<hr>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "default/cgv.html.twig";
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
        return new Source("", "default/cgv.html.twig", "C:\\wamp64\\www\\Atypik\\templates\\default\\cgv.html.twig");
    }
}
