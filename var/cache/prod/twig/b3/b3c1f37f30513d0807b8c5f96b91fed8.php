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

/* default/admin.html.twig */
class __TwigTemplate_523b45cafdd5ac0b6979adf1c3b46bff extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "default/admin.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "<div class=\"container-fluid\">
   <div class=\"row\">
        <div class=\"col-md-3 \">
        <br>

<div class=\"list-group\">
 <label class=\"list-group-item list-group-item-action active h3\">Gestion du site</label>
 <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("description");
        echo "\" class=\"list-group-item list-group-item-action h5\">Gestion de contenu</a>
  <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("statistique");
        echo "\" class=\"list-group-item list-group-item-action h5\">Nos Statistiques</a>
  <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users");
        echo "\" class=\"list-group-item list-group-item-action h5\">Gestion des Utilisateurs</a>
  <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_partenariat");
        echo "\" class=\"list-group-item list-group-item-action h5\">Gestion des Demandes de partenariat</a>
  <a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Annonces");
        echo "\" class=\"list-group-item list-group-item-action h5\">Gestion des Annonces et des commentaires</a>
  <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prop");
        echo "\" class=\"list-group-item list-group-item-action h5\">Gestion des propriétés</a>
  <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listeprises");
        echo "\" class=\"list-group-item list-group-item-action h5\">Gestion des Prises de vues</a>
</div>
        </div>
        <div class=\"col-md-9\">
";
        // line 24
        $this->displayBlock('content', $context, $blocks);
        // line 30
        echo "        <br>
           </div>

   </div>

</div>

";
    }

    // line 24
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "



";
    }

    // line 44
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "
 ";
    }

    // line 48
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 49,  127 => 48,  122 => 45,  118 => 44,  110 => 25,  106 => 24,  95 => 30,  93 => 24,  86 => 20,  82 => 19,  78 => 18,  74 => 17,  70 => 16,  66 => 15,  62 => 14,  53 => 7,  49 => 6,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/admin.html.twig", "C:\\wamp64\\www\\Atypik\\templates\\default\\admin.html.twig");
    }
}
