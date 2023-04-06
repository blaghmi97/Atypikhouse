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

/* default/commenter.html.twig */
class __TwigTemplate_14e05fc98c15d47ef6747a55d28c6ad8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/commenter.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default/commenter.html.twig", 1);
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

<div class=\"card border-primary\" >
        <div class=\"card-header\"><strong >";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["habitat"] ?? null), "user", [], "any", false, false, false, 8), "username", [], "any", false, false, false, 8), "html", null, true);
        echo " : </strong> <span style=\"align=\"right\"\"> <small>";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["habitat"] ?? null), "datePub", [], "any", false, false, false, 8), "d-m-Y H:i"), "html", null, true);
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
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["habitat"] ?? null), "titre", [], "any", false, false, false, 18), "html", null, true);
        echo "</label>
         </div>
        </div>
        </div>
     

<div id=\"carouselExemple\" class=\"carousel slide\" data-ride=\"carousel\" data-interval=\"3000\">

        <ol class=\"carousel-indicators\">
       
         ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["habitat"] ?? null), "photos", [], "any", false, false, false, 28));
        foreach ($context['_seq'] as $context["index"] => $context["photo"]) {
            // line 29
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
        // line 31
        echo "         </ol>

        <div class=\"carousel-inner\">

          ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["habitat"] ?? null), "photos", [], "any", false, false, false, 35));
        foreach ($context['_seq'] as $context["index"] => $context["photo"]) {
            // line 36
            echo "    
      <div class=\"carousel-item ";
            // line 37
            if (($context["index"] == 0)) {
                echo "  active ";
            }
            echo "\" >
           
        <img src=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["photo"], "Src", [], "any", false, false, false, 39))), "html", null, true);
            echo "\" class=\"d-block w-100\" alt=\"";
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\" style=\"width:850px; height:400px ;\">
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "   
    ";
        // line 43
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["habitat"] ?? null), "photos", [], "any", false, false, false, 43))) {
            // line 44
            echo "       <div class=\"carousel-item active\" >
      <img src=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/no-image.png"), "html", null, true);
            echo "\" class=\"d-block w-100\" alt=\"\" style=\"width:850px; height:400px ;\">
      </div>
   ";
        }
        // line 48
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
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["habitat"] ?? null), "type", [], "any", false, false, false, 71), "html", null, true);
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
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["habitat"] ?? null), "nombreCouchage", [], "any", false, false, false, 81), "html", null, true);
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
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["habitat"] ?? null), "surface", [], "any", false, false, false, 95), "html", null, true);
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
        // line 106
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["habitat"] ?? null), "prix", [], "any", false, false, false, 106), "html", null, true);
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
        // line 118
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["habitat"] ?? null), "adresse", [], "any", false, false, false, 118), "html", null, true);
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
        // line 130
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["habitat"] ?? null), "description", [], "any", false, false, false, 130), "html", null, true);
        echo "</p>
         </div>
        </div>
        </div>
<hr>
      <div class=\"row\">
        <div class=\"col-md-12\">
         ";
        // line 137
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
         <div class=\"form-group\">
   
               ";
        // line 140
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "texte", [], "any", false, false, false, 140), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                 
        </div>
        </div>
      </div>
        <div class=\"row\">
        <div class=\"col-md-12\">
        <input class=\"btn btn-success btn-block\" type=\"submit\" value=\"Commenter\" />
    ";
        // line 148
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
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
        return "default/commenter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 148,  270 => 140,  264 => 137,  254 => 130,  239 => 118,  224 => 106,  210 => 95,  193 => 81,  180 => 71,  155 => 48,  149 => 45,  146 => 44,  144 => 43,  141 => 42,  130 => 39,  123 => 37,  120 => 36,  116 => 35,  110 => 31,  97 => 29,  93 => 28,  80 => 18,  65 => 8,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/commenter.html.twig", "C:\\wamp64\\www\\Atypik\\templates\\default\\commenter.html.twig");
    }
}
