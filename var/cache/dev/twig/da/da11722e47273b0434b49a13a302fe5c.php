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

/* default/prisedevue.html.twig */
class __TwigTemplate_e56976c09fc4f61fa1b7950f5edb7480 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/prisedevue.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default/prisedevue.html.twig", 1);
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
        echo "   
<div class=\"container\">
<br>

<div class=\"card border-info mb-3\" >
  <div class=\"card-header\"><strong >";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["habitat"] ?? null), "user", [], "any", false, false, false, 9), "username", [], "any", false, false, false, 9), "html", null, true);
        echo " : </strong> <span style=\"align=\"right\"\"> <small>";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["habitat"] ?? null), "datePub", [], "any", false, false, false, 9), "d-m-Y H:i"), "html", null, true);
        echo "</small></span></strong></div>
  <div class=\"card-body\">

        <div class=\"row\">
           <div class=\"col-md-2\">
              <div class=\"form-group\">
                 <label class=\"h5\">- Titre :</label>
              </div>
            </div>
        <div class=\"col-md-10\">
         <div class=\"form-group\">
           <label class=\"h5\">";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["habitat"] ?? null), "titre", [], "any", false, false, false, 20), "html", null, true);
        echo "</label>
         </div>
        </div>
        </div>
     

<div id=\"carouselExemple\" class=\"carousel slide\" data-ride=\"carousel\" data-interval=\"3000\">

        <ol class=\"carousel-indicators\">
       
         ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["habitat"] ?? null), "photos", [], "any", false, false, false, 30));
        foreach ($context['_seq'] as $context["index"] => $context["photo"]) {
            // line 31
            echo "        <li data-target=\"#carouselExemple\" data-slide-to=\"";
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\" class=\"";
            if (($context["index"] == 0)) {
                echo "  active ";
            }
            echo "\"></li>
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "         </ol>

        <div class=\"carousel-inner\">

          ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["habitat"] ?? null), "photos", [], "any", false, false, false, 37));
        foreach ($context['_seq'] as $context["index"] => $context["photo"]) {
            // line 38
            echo "    
      <div class=\"carousel-item ";
            // line 39
            if (($context["index"] == 0)) {
                echo "  active ";
            }
            echo "\" >
           
        <img src=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["photo"], "Src", [], "any", false, false, false, 41))), "html", null, true);
            echo "\" class=\"d-block w-100\" alt=\"";
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\" style=\"width:850px; height:400px ;\">
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "   
    ";
        // line 45
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["habitat"] ?? null), "photos", [], "any", false, false, false, 45))) {
            // line 46
            echo "       <div class=\"carousel-item active\" >
      <img src=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/no-image.png"), "html", null, true);
            echo "\" class=\"d-block w-100\" alt=\"\" style=\"width:850px; height:400px ;\">
      </div>
   ";
        }
        // line 50
        echo "

        </div>
        <a href=\"#carouselExemple\" class=\"carousel-control-prev\" role=\"button\" data-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"ture\"></span>
            <span class=\"sr-only\">Previous</span>
        </a>
        <a href=\"#carouselExemple\" class=\"carousel-control-next\" role=\"button\" data-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
        </a>

    </div>
<hr>
<br>
        <div class=\"row\">
           <div class=\"col-md-3\">
              <div class=\"form-group\">
                 <label class=\"h6\">- Type d'habitat :</label>
              </div>
            </div>
            <div class=\"col-md-3\">
              <div class=\"form-group\">
               <p >";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["habitat"] ?? null), "type", [], "any", false, false, false, 73), "html", null, true);
        echo "</p>
              </div>
            </div>
           <div class=\"col-md-3\">
             <div class=\"form-group\">
               <label class=\"h6\">- Nombre de couchage :</label>
             </div>
           </div>
           <div class=\"col-md-3\">
             <div class=\"form-group\">
               <p>";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["habitat"] ?? null), "nombreCouchage", [], "any", false, false, false, 83), "html", null, true);
        echo "</p>
             </div>
           </div>
        </div>
        

                <div class=\"row\">
        <div class=\"col-md-3\">
         <div class=\"form-group\">
           <label class=\"h6\">- Surface :</label>
         </div>
        </div>
         <div class=\"col-md-3\">
         <div class=\"form-group\">
           <p>";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["habitat"] ?? null), "surface", [], "any", false, false, false, 97), "html", null, true);
        echo " m2</p>
         </div>
        </div>
          <div class=\"col-md-3\">
         <div class=\"form-group\">
           <label class=\"h6\">- Prix :</label>
         </div>
        </div>
         <div class=\"col-md-3\">
         <div class=\"form-group\">
           <p>";
        // line 107
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["habitat"] ?? null), "prix", [], "any", false, false, false, 107), "html", null, true);
        echo "  €.</p>
         </div>
        </div>
        </div>
        <div class=\"row\">
        <div class=\"col-md-3\">
         <div class=\"form-group\">
           <label class=\"h6\">-Adresse :</label>
         </div>
        </div>
        <div class=\"col-md-9\">
         <div class=\"form-group\">
           <p>";
        // line 119
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["habitat"] ?? null), "adresse", [], "any", false, false, false, 119), "html", null, true);
        echo "</p>
         </div>
        </div>
        </div>
        <div class=\"row\">
        <div class=\"col-md-3\">
         <div class=\"form-group\">
           <label class=\"h6\">- Description :</label>
         </div>
        </div>
        <div class=\"col-md-9\">
         <div class=\"form-group\">
           <p>";
        // line 131
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["habitat"] ?? null), "description", [], "any", false, false, false, 131), "html", null, true);
        echo "</p>
         </div>
        </div>
        </div>
<hr>
      <div class=\"row\">
        <div class=\"col-md-12\">
         ";
        // line 138
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
         <div class=\"form-group\">
   
               ";
        // line 141
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "commentaire", [], "any", false, false, false, 141), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                 
        </div>
         <div class=\"form-group\">
   
               ";
        // line 146
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "photos2", [], "any", false, false, false, 146), "source", [], "any", false, false, false, 146), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                 
        </div>
        </div>
      </div>
        <div class=\"row\">
        <div class=\"col-md-12\">
        <input class=\"btn btn-success btn-block\" type=\"submit\" value=\"Commenter\" />
    ";
        // line 154
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
    </div> 
    </div>       
 </div>
    </div>      
</div>
    </div>
</div>
</div>
   
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "default/prisedevue.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 154,  279 => 146,  271 => 141,  265 => 138,  255 => 131,  240 => 119,  225 => 107,  212 => 97,  195 => 83,  182 => 73,  157 => 50,  151 => 47,  148 => 46,  146 => 45,  143 => 44,  132 => 41,  125 => 39,  122 => 38,  118 => 37,  112 => 33,  99 => 31,  95 => 30,  82 => 20,  66 => 9,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/prisedevue.html.twig", "C:\\wamp64\\www\\Atypik\\templates\\default\\prisedevue.html.twig");
    }
}
