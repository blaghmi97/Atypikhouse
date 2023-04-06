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

/* default/Chat.html.twig */
class __TwigTemplate_38ababd8c1ac7cb3e8c4697efebd5661 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "default/Chat.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<div class=\"container\">
<br>
<div class=\"row\">





<div class=\"col-md-12\">
<div class=\"card bg-light \" id=\"card2\">
  <div class=\"card-header\">Messages recus</div>
  <div class=\"card-body\">
   
  ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["messages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 18
            echo "
<div class=\"toast show\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\">
  <div class=\"toast-header\">
    <strong class=\"mr-auto\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "Fromuser", [], "any", false, false, false, 21), "username", [], "any", false, false, false, 21), "html", null, true);
            echo "</strong>
    <small>";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "datemessage", [], "any", false, false, false, 22), "d-m-Y H:i"), "html", null, true);
            echo "</small>
  </div>
  <div class=\"toast-body\">
    ";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "contexte", [], "any", false, false, false, 25), "html", null, true);
            echo " <br>
  ";
            // line 26
            if (twig_get_attribute($this->env, $this->source, $context["message"], "habitat", [], "any", false, false, false, 26)) {
                // line 27
                echo "    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "habitat", [], "any", false, false, false, 27), "id", [], "any", false, false, false, 27)]), "html", null, true);
                echo "\">Voir l'annonce</a>
    ";
            }
            // line 29
            echo "    <hr>
    <label>Répondre :</label>
    <form action=\"";
            // line 31
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("repondre");
            echo "\" method=\"post\">
    <input hidden name=\"id\" type=\"number\" value=\"";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "FromUser", [], "any", false, false, false, 32), "id", [], "any", false, false, false, 32), "html", null, true);
            echo "\" />
    <input hidden name=\"hid\" type=\"number\" value=\"";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "habitat", [], "any", false, false, false, 33), "id", [], "any", false, false, false, 33), "html", null, true);
            echo "\" />
    <div class=\"row\">

    <div class=\"col-md-8 col-8\">
    <input name=\"contexte\" type=\"text\" class=\"form-control\" required />
    </div>
       
    <div class=\"col-md-4 col-4\">
    <input class=\"btn btn-success btn-block\" type=\"submit\" value=\"Envoyer\" />
   
    </div>
     
    </div>
    </form>
  </div>
</div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo " 
  </div>
 
  
</div>

  
  </div>

  </div>
</div>




";
    }

    // line 66
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        echo "
<style>
#card1{
height : 550px;
overflow-x:hidden;
overflow-y:scroll;
}
#card2{
height : 500px;
overflow-x:hidden;
overflow-y:scroll;
}

</style>
";
    }

    public function getTemplateName()
    {
        return "default/Chat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 67,  151 => 66,  132 => 49,  109 => 33,  105 => 32,  101 => 31,  97 => 29,  91 => 27,  89 => 26,  85 => 25,  79 => 22,  75 => 21,  70 => 18,  66 => 17,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/Chat.html.twig", "C:\\wamp64\\www\\Atypik\\templates\\default\\Chat.html.twig");
    }
}
