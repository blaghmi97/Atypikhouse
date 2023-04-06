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

/* default/annonces.html.twig */
class __TwigTemplate_f69935ef909faf48c7a441b6826b99e1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "default/annonces.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<div class=\"container\">
<br>
<div class=\"card border-info mb-3\" >
  <div class=\"card-header\">Rechercher</div>
  <div class=\"card-body\">
     ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
        <div class=\"row\">
                <div class=\"col-md-6\">
        <div class=\"form-group\">
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "type", [], "any", false, false, false, 13), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
        </div></div>
            <div class=\"col-md-6\">
         <div class=\"form-group\">
           ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "pays", [], "any", false, false, false, 17), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
             </div>
             </div></div>
             <div class=\"row\">
             <div class=\"col-md-12\">
         <div class=\"form-group\">
           <input type=\"submit\" class=\"btn btn-success btn-block\" value=\"Rechercher\" />
              </div>
              </div></div>
        
     

    ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "


<hr>
<div class=\"row center\">
";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["habitats"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["habitat"]) {
            // line 35
            echo "

<div class=\"col-md-4\"  style=\"margin-top: 15px\">
<a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_show", ["id" => twig_get_attribute($this->env, $this->source, $context["habitat"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\">
<div class=\"card\" >
   
       ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["habitat"], "photos", [], "any", false, false, false, 41), 0, 1));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 42
                echo "             <img class=\"card-img-top\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["image"], "Src", [], "any", false, false, false, 42))), "html", null, true);
                echo "\" alt=\"ff \" height=\"250 px\" width=\"100 px\">
       ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "
        ";
            // line 45
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["habitat"], "photos", [], "any", false, false, false, 45))) {
                // line 46
                echo "              <img class=\"card-img-top\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/no-image.png"), "html", null, true);
                echo "\" alt=\"gf \" height=\"250 px\" width=\"100 px\">
        ";
            }
            // line 48
            echo "  <div class=\"card-body\">
    <h5 class=\"card-title\">";
            // line 49
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["habitat"], "titre", [], "any", false, false, false, 49), 0, 15), "html", null, true);
            echo " ..</h5>
     <hr>
    <p class=\"card-text\">";
            // line 51
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["habitat"], "description", [], "any", false, false, false, 51), 0, 15), "html", null, true);
            echo " ...</p>
    <hr>
    <small float=\"right\">";
            // line 53
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["habitat"], "datePub", [], "any", false, false, false, 53), "d-m-Y H:i"), "html", null, true);
            echo "</small>
  </div>
</div></a>
</div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['habitat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "
</div> <br>
</div>
</div>
<div class=\"pagination\">

";
        // line 65
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["habitats"] ?? null));
        echo "
</div>
</div>




";
    }

    // line 74
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "default/annonces.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 74,  167 => 65,  159 => 59,  147 => 53,  142 => 51,  137 => 49,  134 => 48,  128 => 46,  126 => 45,  123 => 44,  114 => 42,  110 => 41,  104 => 38,  99 => 35,  95 => 34,  87 => 29,  72 => 17,  65 => 13,  58 => 9,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/annonces.html.twig", "C:\\wamp64\\www\\Atypik\\templates\\default\\annonces.html.twig");
    }
}
