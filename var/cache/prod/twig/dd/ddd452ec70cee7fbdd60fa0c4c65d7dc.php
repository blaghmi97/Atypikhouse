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

/* default/search.html.twig */
class __TwigTemplate_c34ce31da8cdaf7c821b390885b78531 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "default/search.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "
<div class=\"container \">
<br>
<div class=\"card border-info mb-3\" >
  <div class=\"card-header\">Ajouter une habitat</div>
  <div class=\"card-body\">

    ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
        <div class=\"row\">
                <div class=\"col-md-4\">
        <div class=\"form-group\">
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "type", [], "any", false, false, false, 16), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
        </div></div>
            <div class=\"col-md-4\">
         <div class=\"form-group\">
      ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "pays", [], "any", false, false, false, 20), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
             </div>
             </div>
             <div class=\"col-md-4\">
         <div class=\"form-group\">
     <input type=\"submit\" class=\"btn btn-success btn-block\" value=\"Rechercher\" />
              </div>
              </div></div>
        
     
 
    ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
<br>
 </div>
    </div> </div>
    ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["habitats"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["habitat"]) {
            // line 36
            echo "

<div class=\"col-md-4\"  style=\"margin-top: 15px\">
<a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_show", ["id" => twig_get_attribute($this->env, $this->source, $context["habitat"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\">
<div class=\"card\" >
   
       ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["habitat"], "photos", [], "any", false, false, false, 42), 0, 1));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 43
                echo "             <img class=\"card-img-top\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["image"], "Src", [], "any", false, false, false, 43))), "html", null, true);
                echo "\" alt=\"ff \" height=\"250 px\" width=\"100 px\">
       ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "
        ";
            // line 46
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["habitat"], "photos", [], "any", false, false, false, 46))) {
                // line 47
                echo "              <img class=\"card-img-top\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/no-image.png"), "html", null, true);
                echo "\" alt=\"gf \" height=\"250 px\" width=\"100 px\">
        ";
            }
            // line 49
            echo "  <div class=\"card-body\">
    <h5 class=\"card-title\">";
            // line 50
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["habitat"], "titre", [], "any", false, false, false, 50), 0, 15), "html", null, true);
            echo " ..</h5>
     <hr>
    <p class=\"card-text\">";
            // line 52
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["habitat"], "description", [], "any", false, false, false, 52), 0, 15), "html", null, true);
            echo " ...</p>
    <hr>
    <small float=\"right\">";
            // line 54
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["habitat"], "datePub", [], "any", false, false, false, 54), "d-m-Y H:i"), "html", null, true);
            echo "</small>
  </div>
</div></a>
</div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['habitat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "    
    








";
    }

    // line 72
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "default/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 72,  159 => 60,  147 => 54,  142 => 52,  137 => 50,  134 => 49,  128 => 47,  126 => 46,  123 => 45,  114 => 43,  110 => 42,  104 => 39,  99 => 36,  95 => 35,  88 => 31,  74 => 20,  67 => 16,  60 => 12,  51 => 5,  47 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/search.html.twig", "C:\\wamp64\\www\\Atypik\\templates\\default\\search.html.twig");
    }
}
