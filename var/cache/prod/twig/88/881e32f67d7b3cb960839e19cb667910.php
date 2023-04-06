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

/* default/editerannonce.html.twig */
class __TwigTemplate_d128f70331b29f6428c49e655f8e6888 extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "default/editerannonce.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "<div class=\"container \">
<br>
<div class=\"card border-info mb-3\" >
  <div class=\"card-header\">Modifier une habitat</div>
  <div class=\"card-body\">
    ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["edit_form"] ?? null), 'form_start');
        echo "

        <div class=\"form-group\">
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "type", [], "any", false, false, false, 13), 'row', ["attr" => ["class" => "form-control"]]);
        echo "   
               
        </div>
        <div class=\"form-group\">
                 ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "titre", [], "any", false, false, false, 17), 'row', ["attr" => ["class" => "form-control"]]);
        echo "   
        </div>
        <div class=\"row\">
        <div class=\"col-md-4\">
         <div class=\"form-group\">
         ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "nombreCouchage", [], "any", false, false, false, 22), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
            </div>
            <div class=\"col-md-4\">
         <div class=\"form-group\">
          ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "surface", [], "any", false, false, false, 27), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
             </div>
             </div>
             <div class=\"col-md-4\">
         <div class=\"form-group\">
           ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "prix", [], "any", false, false, false, 32), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
              </div>
              </div></div>
         <div class=\"form-group\">
            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "adresse", [], "any", false, false, false, 36), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
               </div>
              <div class=\"row\">
        <div class=\"col-md-4\">
         <div class=\"form-group\">
        
         ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "codepostale", [], "any", false, false, false, 42), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
            </div>
            <div class=\"col-md-4\">
         <div class=\"form-group\">
          ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "ville", [], "any", false, false, false, 47), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
             </div>
             </div>
             <div class=\"col-md-4\">
         <div class=\"form-group\">
           ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "pays", [], "any", false, false, false, 52), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
              </div>
              </div></div>
         <div class=\"form-group\">
               ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "description", [], "any", false, false, false, 56), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                  </div>
   
<br>

";
        // line 61
        if (($context["props"] ?? null)) {
            // line 62
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["props"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 63
                echo "                      ";
                if ((twig_get_attribute($this->env, $this->source, $context["p"], "habitat", [], "any", false, false, false, 63) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 63), "cookies", [], "any", false, false, false, 63), "get", [0 => "name"], "method", false, false, false, 63))) {
                    // line 64
                    echo "                
         <div class=\"row\">
           <div class=\"col-md-3\">
              <div class=\"form-group\">
                 <label class=\"h6\" >";
                    // line 68
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "Nom", [], "any", false, false, false, 68), "html", null, true);
                    echo " :</label>
              </div>
            </div>
            <div class=\"col-md-9\">
              <div class=\"form-group\">
               <input name=\"";
                    // line 73
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "Nom", [], "any", false, false, false, 73), "html", null, true);
                    echo "\" type=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "input", [], "any", false, false, false, 73), "html", null, true);
                    echo "\" class=\"form-control\"  required/>
              </div>
            </div>
            </div>              
                    ";
                }
                // line 77
                echo " 
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "                  <br>
                  ";
        }
        // line 81
        echo "            </div>


  <div class=\"row\">
    ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["photos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
            // line 86
            echo "<div class=\"col-4\" >
<div class=\"form-group\">
<div class=\"toast show\">
<div class=\"toast-header\">
<a onclick=\"return confirm('Vouler vraiment supprimer la photo !')\" href=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supprimerphoto", ["id" => twig_get_attribute($this->env, $this->source, $context["photo"], "id", [], "any", false, false, false, 90)]), "html", null, true);
            echo "\" class=\"btn btn-danger btn-block\">Supprimer</a>
  </div>
  <div class=\"toast-body\">
    <img src=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["photo"], "Src", [], "any", false, false, false, 93))), "html", null, true);
            echo "\" width=\"100%\" height=\"100%\">
  </div>
</div>
</div></div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "    </div>
<br>

         <div class=\"form-group\">
                 ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "photos", [], "any", false, false, false, 102), "Src", [], "any", false, false, false, 102), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                  
            </div>
            <br>


            <div class=\"row\">
            <div class=\"col-md-6\">
        <input type=\"submit\" class=\"btn btn-success btn-block\" value=\"Editer\" />
    ";
        // line 111
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["edit_form"] ?? null), 'form_end');
        echo "
</div>
    <div class=\"col-md-6\">
            ";
        // line 114
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? null), 'form_start');
        echo "
                <input onclick=\"return confirm('Vouler vraiment supprimer cet annonce !')\" class=\"btn btn-danger btn-block\" type=\"submit\" value=\"Supprimer\">
            ";
        // line 116
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? null), 'form_end');
        echo "
     </div>
 </div>
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
       if (selectPlayer.value != \"\"){
        selectPlayer.addEventListener('change', function() {
           var playerValue = selectPlayer.value ; 
           var x = selectPlayer.selectedIndex;
           document.cookie = \"name = \" + playerValue;
              location.reload();
        } ) ;
   
     document.getElementById('habitat_type').value = getCookie(\"name\");}
           
</script>
";
    }

    public function getTemplateName()
    {
        return "default/editerannonce.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 116,  243 => 114,  237 => 111,  225 => 102,  219 => 98,  208 => 93,  202 => 90,  196 => 86,  192 => 85,  186 => 81,  182 => 79,  175 => 77,  165 => 73,  157 => 68,  151 => 64,  148 => 63,  143 => 62,  141 => 61,  133 => 56,  126 => 52,  118 => 47,  110 => 42,  101 => 36,  94 => 32,  86 => 27,  78 => 22,  70 => 17,  63 => 13,  57 => 10,  50 => 5,  46 => 4,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/editerannonce.html.twig", "C:\\wamp64\\www\\Atypik\\templates\\default\\editerannonce.html.twig");
    }
}
