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

/* default/proprites.html.twig */
class __TwigTemplate_6b1647d2144cf64b058a31bc09dbbb49 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "default/admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/proprites.html.twig"));

        $this->parent = $this->loadTemplate("default/admin.html.twig", "default/proprites.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 5), "flashbag", [], "any", false, false, false, 5), "get", [0 => "success"], "method", false, false, false, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 6
            echo "<br>
<div class=\"alert alert-dismissible alert-success\">
  <h4 class=\"alert-heading\"> ";
            // line 8
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</h4>
</div>
<br>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
    <h1>Gestions des propriétés :</h1>
   <br>
<div class=\"card border-info mb-3\" >
  <div class=\"card-header\">Ajouter une propriété :</div>
  <div class=\"card-body\">
 <form action=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Ajoutprodyn");
        echo "\" method=\"post\">
  <div class=\"row\">
    <div class=\"col-md-3 col-3\">
    <label for=\"type\"> <B> <U>Type d'habitat :</B> </U></label>
    </div>
    
    <div class=\"col-md-3 col-3\">
    <div class=\"form-group\">
   <select class=\"form-control\" name=\"type\" id=\"type\" >
        <option value=\"Cabane\">Cabane</option>
        <option value=\"Caravale\">Caravale</option>
        <option value=\"Chalet\">Chalet</option>
        <option value=\"Maison container\">Maison container</option>
        <option value=\"Maison flottante\">Maison flottante</option>
        <option value=\"Maison mobile\">Maison mobile</option>
        <option value=\"Yourte\">Yourte</option>
    </select>
    </div>
    </div>

       <div class=\"col-md-3 col-3\">
    <label for=\"inp\"> <B> <U>Type d'Input :</B> </U></label>
    </div>

    <div class=\"col-md-3 col-3\">
    <div class=\"form-group\">
   <select class=\"form-control\" name=\"inp\" id=\"inp\" >
        <option value=\"number\">Entier</option>
        <option value=\"float\">Float</option>
        <option value=\"text\">String</option>
        <option value=\"date\">Date</option>
    </select>
    </div>
    </div>
</div>

  <div class=\"row\">
    <div class=\"col-md-4 col-4\">
    <label for=\"pro\"> <B> <U>La propriété :</B> </U></label>
    </div>
    <div class=\"col-md-5 col-5\">
    <div class=\"form-group\">
   

  <input type=\"text\" class=\"form-control\" id=\"pro\" name=\"pro\" required>

    </div>
    </div>

</div>


<input class=\"btn btn-success btn-block\" type=\"submit\" value=\"Envoyer\" />
</form>
</div>
</div>
<br><br>

 <h4> Chercher les propriétés par type d'habitat : </h4>
 <br>


<form action=\"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chercheprop");
        echo "\" method=\"post\">
 <div class=\"row\">
    <div class=\"col-md-3 col-3\">
    <label for=\"typ\"> <B> <U>Type d'habitat :</B> </U></label>
    </div>
    <div class=\"col-5\">
    <div class=\"form-group\">
   <select class=\"form-control\" name=\"typ\" id=\"typ\" >
        <option value=\"Cabane\">Cabane</option>
        <option value=\"Caravale\">Caravale</option>
        <option value=\"Chalet\">Chalet</option>
        <option value=\"Maison container\">Maison container</option>
        <option value=\"Maison flottante\">Maison flottante</option>
        <option value=\"Maison mobile\">Maison mobile</option>
        <option value=\"Yourte\">Yourte</option>
    </select>
    </div>
    </div>
        <div class=\"col-4\">
    <div class=\"form-group\">
    <input class=\"btn btn-info btn-block\" type=\"submit\" value=\"Chercher\" />
       </form>
          </div>
</div></div>


<br><hr><br>
    <table class=\"table\">
        <thead>
            <tr>
                <th>Nom de la Propriété</th>
                <th>Type d'habitat</th>
                <th>Type d'input</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["props"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 118
            echo "            <tr>
                <td> ";
            // line 119
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "Nom", [], "any", false, false, false, 119), "html", null, true);
            echo " </td>
                <td> ";
            // line 120
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "habitat", [], "any", false, false, false, 120), "html", null, true);
            echo " </td>
                <td> ";
            // line 121
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "input", [], "any", false, false, false, 121), "html", null, true);
            echo " </td>
                <td> <a onclick=\"return confirm('Vouler vraiment supprimer cette propriété !')\" href=\"";
            // line 122
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supprimerpropriete", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 122)]), "html", null, true);
            echo "\" class=\"btn btn-danger\" >Supprimer</a> </td>
                
            </tr>
            
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "        </tbody>
    </table>
    <div class=\"pagination\">


";
        // line 132
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["props"] ?? null));
        echo "

     </div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "default/proprites.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 132,  223 => 127,  212 => 122,  208 => 121,  204 => 120,  200 => 119,  197 => 118,  193 => 117,  153 => 80,  88 => 18,  80 => 12,  70 => 8,  66 => 6,  62 => 5,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/proprites.html.twig", "C:\\wamp64\\www\\Atypik\\templates\\default\\proprites.html.twig");
    }
}
