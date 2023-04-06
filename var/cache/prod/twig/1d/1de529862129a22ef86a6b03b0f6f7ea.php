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

/* default/graphique.html.twig */
class __TwigTemplate_7275405dfccea118d953a9da8b90617f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $this->parent = $this->loadTemplate("default/admin.html.twig", "default/graphique.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <h1>Les statistique de notre AtypikHouse :</h1>

   <div class=\"col-md-7\">

  <canvas id=\"myChart\" width=\"30\" height=\"30\"></canvas>

</div>
";
    }

    // line 15
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "  <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>

<script>
   
   \$Cabane =0;
   \$Caravane =0;
   \$Mf = 0;
   \$Yourte = 0;
   \$Chalet = 0;
   \$autre = 0;

";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["habitats"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["habitat"]) {
            // line 28
            echo "
    ";
            // line 29
            if ((twig_get_attribute($this->env, $this->source, $context["habitat"], "type", [], "any", false, false, false, 29) == "Cabane")) {
                // line 30
                echo "        \$Cabane = \$Cabane +1;
    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 31
$context["habitat"], "type", [], "any", false, false, false, 31) == "Caravane")) {
                // line 32
                echo "
        \$Caravane = \$Caravane +1;
    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 34
$context["habitat"], "type", [], "any", false, false, false, 34) == "Maison flottante")) {
                // line 35
                echo "        \$Mf = \$Mf +1;
    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 36
$context["habitat"], "type", [], "any", false, false, false, 36) == "Yourte")) {
                // line 37
                echo "
        \$Yourte = \$Yourte +1;
    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 39
$context["habitat"], "type", [], "any", false, false, false, 39) == "Chalet")) {
                // line 40
                echo "  
        \$Chalet = \$Chalet +1;
    ";
            } else {
                // line 43
                echo "         \$autre = \$autre + 1;
    ";
            }
            // line 45
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['habitat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "

  const labels = [
    'Cabane',
    'Caravane',
    'Maison flottante',
    'Yourte',
    'Chalet',
    'Autres ..',
 
  ];

  const data = {
    labels: labels,
    datasets: [{
      label: 'Nos résérvatons',
    backgroundColor: [
                 'rgba(255, 99, 132, 0.5)',
                  'rgba(54, 162, 235, 0.5)',
                  'rgba(255, 206, 86, 0.5)',
                  'rgba(75, 192, 192, 0.5)',
                  'rgba(255, 159, 64, 0.5)',
                   'rgba(15, 192, 192, 0.5)',
    ],
      borderColor: 'rgb(255, 99, 132)',
      hoverOffset: 4 ,
      data: [\$Cabane, \$Caravane, \$Mf, \$Yourte, \$Chalet, \$autre],
      
    }]
  };

  const config = {
    type: 'pie',
    data: data,
    options: {}
  };
</script>



<script>
  const myChart = new Chart(
    document.getElementById('myChart'),
    config 
  );
</script>




 ";
    }

    public function getTemplateName()
    {
        return "default/graphique.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 47,  119 => 45,  115 => 43,  110 => 40,  108 => 39,  104 => 37,  102 => 36,  99 => 35,  97 => 34,  93 => 32,  91 => 31,  88 => 30,  86 => 29,  83 => 28,  79 => 27,  66 => 16,  62 => 15,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/graphique.html.twig", "C:\\wamp64\\www\\Atypik\\templates\\default\\graphique.html.twig");
    }
}
