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

/* default/politique.html.twig */
class __TwigTemplate_74d26b2069447a8a8490980d25f310e4 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "default/politique.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo " <br>
 <div class=\"container\">
<center><h2>Politique de Confidentialité</h2></center>
<br>
<div><h4>1.Collecte de l’information</h4>
<p>Nous recueillons des informations lorsque vous vous inscrivez sur notre site, lorsque vous vous connectez à votre compte, 
faites un achat,ou lorsque vous déposez une annonce et / ou lorsque vous vous déconnectez. 
Les informations recueillies incluent votre adresse e-mail,et / ou carte de crédit.
 
</p>
</div>
<br>

<div><h4>2. Utilisation des informations</h4>
<p>

Toute les informations que nous recueillons auprès de vous peuvent être utilisées pour 
: Personnaliser votre expérience et répondre à vos besoins individuels Fournir un contenu publicitaire personnalisé 
Améliorer notre site Web Améliorer le service client et vos besoins de prise en charge Vous contacter par e-mail.
</p>
</div>
<br>

<div><h4>3. Confidentialité du commerce en ligne</h4>
<p>

Nous sommes les seuls propriétaires des informations recueillies sur ce site.
 Vos informations personnelles ne seront pas vendues, échangées, transférées, 
 ou données à une autre société pour n’importe quel raison, sans votre consentement,
  en dehors de ce qui est nécessaire pour répondre à une demande et / ou une transaction.
</p></div>
<br>

<div><h4>4. Divulgation à des tiers</h4>
<p>

Nous ne vendons, n’échangeons et ne transférons pas vos informations personnelles identifiables à des tiers. Cela ne comprend pas les tierce parties de confiance qui nous aident à exploiter notre site Web ou à mener nos affaires, tant que ces parties conviennent de garder ces informations confidentielles. Nous pensons qu’il est nécessaire de partager des informations afin d’enquêter, de prévenir ou de prendre des mesures concernant des activités illégales, fraudes présumées, situations impliquant des menaces potentielles à la sécurité physique de toute personne, violations de nos conditions d’utilisation, ou quand la loi nous y contraint. Les informations non-privées, cependant, peuvent être fournies à d’autres parties pour le marketing, la publicité, ou d’autres utilisations.
</p></div>
<br>
<div><h4>5. Se désabonner</h4>
<p>

Nous avons mis en oeuvre une fonction \"se désabonner\" dans la rébrique profil ou cas ou lèutilisateur veut résilier son abonnement.</p>
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "default/politique.html.twig";
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
        return new Source("", "default/politique.html.twig", "C:\\wamp64\\www\\Atypik\\templates\\default\\politique.html.twig");
    }
}
