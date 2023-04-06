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

/* default/Description.html.twig */
class __TwigTemplate_776aacfaaccb355412e61864cc0908ea extends Template
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
        $this->parent = $this->loadTemplate("default/admin.html.twig", "default/Description.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
    <h1>La description de notre site ATYPIKHOUSE actuelle : </h1>
<br> 
<hr>
<br>
    <p> ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["atyp"] ?? null), "description", [], "any", false, false, false, 9), "html", null, true);
        echo " </p>
<br><br><br>  
     

      <form action=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editdescr");
        echo "\" method=\"post\">
  
    <div class=\"row\">

    <h3> La nouvelle description d'AtypikHouse  : </h3>
    <br>
    <div class=\"col-md-8 col-8\">
    <input name=\"descr\" type=\"textarea\" class=\"form-control\" required />
    </div>
       
    <div class=\"col-md-4 col-4\">
    <input class=\"btn btn-success btn-block\" type=\"submit\" value=\"Modifier\" />
    </div>
     
    </div>
    </form>
   
";
    }

    public function getTemplateName()
    {
        return "default/Description.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 13,  57 => 9,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/Description.html.twig", "C:\\wamp64\\www\\Atypik\\templates\\default\\Description.html.twig");
    }
}
