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

/* default/demandePartenaire.html.twig */
class __TwigTemplate_8de5bd7de65479c17c3cf89f71572993 extends Template
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
        $this->parent = $this->loadTemplate("default/admin.html.twig", "default/demandePartenaire.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <h1>Liste des demandes de partenariat :</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Username</th>
                <th>Email</th>
                <th>Role</th>
                <th>Statut</th>
                <th>Activité</th>
                <th>Zone d'activité</th>
                <th>Connaissance</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dms"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 21
            echo "

           ";
            // line 23
            if (((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["d"], "user", [], "any", false, false, false, 23), "roles", [], "any", false, false, false, 23)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null) == "ROLE_USER")) {
                // line 24
                echo "
            <tr>
                <td>";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["d"], "user", [], "any", false, false, false, 26), "username", [], "any", false, false, false, 26), "html", null, true);
                echo "</a></td>
                <td>";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["d"], "user", [], "any", false, false, false, 27), "email", [], "any", false, false, false, 27), "html", null, true);
                echo "</td>
                <td>";
                // line 28
                echo twig_escape_filter($this->env, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["d"], "user", [], "any", false, false, false, 28), "roles", [], "any", false, false, false, 28)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null), "html", null, true);
                echo "</td>
                <td>";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "statut", [], "any", false, false, false, 29), "html", null, true);
                echo "</a></td>
                <td>";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "activite", [], "any", false, false, false, 30), "html", null, true);
                echo "</td>
                <td>";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "secteur", [], "any", false, false, false, 31), "html", null, true);
                echo "</td>
                <td>";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "connu", [], "any", false, false, false, 32), "html", null, true);
                echo "</td>
                <td> <a class=\"btn btn-info\" href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("usertopartenaire", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["d"], "user", [], "any", false, false, false, 33), "id", [], "any", false, false, false, 33)]), "html", null, true);
                echo "\">Accepter </a> </td>       

              
            </tr>

            ";
            }
            // line 39
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </tbody>
    </table>
    <div class=\"pagination\">

";
        // line 44
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["dms"] ?? null));
        echo "
     </div>
";
    }

    public function getTemplateName()
    {
        return "default/demandePartenaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 44,  125 => 40,  119 => 39,  110 => 33,  106 => 32,  102 => 31,  98 => 30,  94 => 29,  90 => 28,  86 => 27,  82 => 26,  78 => 24,  76 => 23,  72 => 21,  68 => 20,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/demandePartenaire.html.twig", "C:\\wamp64\\www\\Atypik\\templates\\default\\demandePartenaire.html.twig");
    }
}
