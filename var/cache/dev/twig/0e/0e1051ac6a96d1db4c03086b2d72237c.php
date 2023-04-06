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

/* default/AddAnnonce.html.twig */
class __TwigTemplate_013e92f54ae633f24ca0def67e319189 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/AddAnnonce.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default/AddAnnonce.html.twig", 1);
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
<div class=\"container \">
<br>
";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 7), "flashbag", [], "any", false, false, false, 7), "get", [0 => "Erreur"], "method", false, false, false, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 8
            echo "<div class=\"alert alert-dismissible alert-danger\">
  <h4 class=\"alert-heading\"> ";
            // line 9
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</h4>
</div>
<br>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "<div class=\"card border-info mb-3\" >
  <div class=\"card-header\">Ajouter une habitat</div>
  <div class=\"card-body\">

    ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
        <div class=\"form-group\">
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "type", [], "any", false, false, false, 19), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
        <div class=\"form-group\">
        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "titre", [], "any", false, false, false, 22), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
        <div class=\"row\">
        <div class=\"col-md-4 col-4\">
         <div class=\"form-group\">
         ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nombreCouchage", [], "any", false, false, false, 27), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
            </div>
            <div class=\"col-md-4 col-4\">
         <div class=\"form-group\">
          ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "surface", [], "any", false, false, false, 32), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
             </div>
             </div>
             <div class=\"col-md-4 col-4\">
         <div class=\"form-group\">
           ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "prix", [], "any", false, false, false, 37), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
              </div>
              </div></div>
         <div class=\"form-group\">
            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "adresse", [], "any", false, false, false, 41), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
               </div>
        <div class=\"row\">
        <div class=\"col-md-4 col-4\">
         <div class=\"form-group\">
         ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "codepostale", [], "any", false, false, false, 46), 'label', ["label" => "Code Postale"]);
        echo "
         ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "codepostale", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
            </div>
            <div class=\"col-md-4 col-4\">
         <div class=\"form-group\">
          ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "ville", [], "any", false, false, false, 52), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
             </div>
             </div>
             <div class=\"col-md-4 col-4\">
         <div class=\"form-group\">
           ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "pays", [], "any", false, false, false, 57), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
              </div>
              </div></div>
         <div class=\"form-group\">
               ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 61), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                  </div>
         <div class=\"form-group\">
                 ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "photos", [], "any", false, false, false, 64), "Src", [], "any", false, false, false, 64), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                  
            </div>
                   
            <div >
           ";
        // line 69
        if (($context["props"] ?? null)) {
            // line 70
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["props"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 71
                echo "                      ";
                if ((twig_get_attribute($this->env, $this->source, $context["p"], "habitat", [], "any", false, false, false, 71) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 71), "cookies", [], "any", false, false, false, 71), "get", [0 => "name"], "method", false, false, false, 71))) {
                    // line 72
                    echo "                
         <div class=\"row\">
           <div class=\"col-md-3\">
              <div class=\"form-group\">
                 <label class=\"h6\" >";
                    // line 76
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "Nom", [], "any", false, false, false, 76), "html", null, true);
                    echo " :</label>
              </div>
            </div>
            <div class=\"col-md-9\">
              <div class=\"form-group\">
               <input name=\"";
                    // line 81
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "Nom", [], "any", false, false, false, 81), "html", null, true);
                    echo "\" type=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "input", [], "any", false, false, false, 81), "html", null, true);
                    echo "\" class=\"form-control\"  required/>
              </div>
            </div>
            </div>              
                    ";
                }
                // line 85
                echo " 
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "                  ";
        }
        // line 88
        echo "            </div>
        <input type=\"submit\" class=\"btn btn-success btn-block\" value=\"Ajouter\" />
    ";
        // line 90
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
<br>
 </div>
    </div> 
    </div>

   
<script type=\"text/javascript\">
function getCookie(name) {
  const value = `; \${document.cookie}`;
  const parts = value.split(`; \${name}=`);
  if (parts.length === 2) return parts.pop().split(';').shift();
}
        const selectPlayer = document.getElementById('habitat_type') ;
        
        selectPlayer.addEventListener('change', function() {
           var playerValue = selectPlayer.value ; 
           var x = selectPlayer.selectedIndex;
           document.cookie = \"name = \" + playerValue;
              location.reload();
        } ) ;
   
     document.getElementById('habitat_type').value = getCookie(\"name\");
</script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "default/AddAnnonce.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 90,  222 => 88,  219 => 87,  212 => 85,  202 => 81,  194 => 76,  188 => 72,  185 => 71,  180 => 70,  178 => 69,  170 => 64,  164 => 61,  157 => 57,  149 => 52,  141 => 47,  137 => 46,  129 => 41,  122 => 37,  114 => 32,  106 => 27,  98 => 22,  92 => 19,  87 => 17,  81 => 13,  71 => 9,  68 => 8,  64 => 7,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/AddAnnonce.html.twig", "C:\\wamp64\\www\\Atypik\\templates\\default\\AddAnnonce.html.twig");
    }
}
