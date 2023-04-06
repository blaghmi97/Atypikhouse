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

/* default/verification-res.html.twig */
class __TwigTemplate_af13c06e4f992f9cccc0d6866a75d4c9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "default/verification-res.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div class=\"container\">
<br>
<div class=\"card border-primary \" >

        <div class=\"card-header\">Votre demande de résérvation :</small></span></strong></div>
            <div class=\"card-body\">

<div class=\"row\">
        <div class=\"col-md-3 col-6\">
         <div class=\"form-group\">
           <label class=\"h6\">- Date Début :</label>
         </div>
        </div>
         <div class=\"col-md-3 col-6\">
         <div class=\"form-group\">
           <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["reservation"] ?? null), "dateDebut", [], "any", false, false, false, 21), "d-m-Y"), "html", null, true);
        echo "</p>
         </div>
        </div>
          <div class=\"col-md-3 col-6\">
         <div class=\"form-group\">
           <label class=\"h6\">- Date Fin :</label>
         </div>
        </div>
         <div class=\"col-md-3 col-6\">
         <div class=\"form-group\">
           <p>";
        // line 31
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["reservation"] ?? null), "dateFin", [], "any", false, false, false, 31), "d-m-Y"), "html", null, true);
        echo "</p>
         </div>
        </div>
        </div>
        <div class=\"row\">
        <div class=\"col-md-3 col-6\">
         <div class=\"form-group\">
           <label class=\"h6\">- Nombre des jours :</label>
         </div>
        </div>
         <div class=\"col-md-3 col-6\">
         <div class=\"form-group\">
           <p>";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["reservation"] ?? null), "nombreNuit", [], "any", false, false, false, 43), "html", null, true);
        echo " Jours</p>
         </div>
        </div>
          <div class=\"col-md-3 col-6\">
         <div class=\"form-group\">
           <label class=\"h6\">- Prix totale :</label>
         </div>
        </div>
         <div class=\"col-md-3col-6\">
         <div class=\"form-group\">
           <p>";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["reservation"] ?? null), "prixTotal", [], "any", false, false, false, 53), "html", null, true);
        echo "  €.</p>
         </div>
        </div>
        </div>

        <hr>

                   <form action=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("checkout");
        echo "\" method=\"post\" id=\"payment-form\">
      

<input name=\"habitat\" type=\"number\" hidden value=\"";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["reservation"] ?? null), "habitat", [], "any", false, false, false, 63), "id", [], "any", false, false, false, 63), "html", null, true);
        echo "\" />
<input name=\"nb\" type=\"number\" hidden value=\"";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["reservation"] ?? null), "nombreNuit", [], "any", false, false, false, 64), "html", null, true);
        echo "\" />
<input name=\"prix\" type=\"number\" hidden value=\"";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["reservation"] ?? null), "prixTotal", [], "any", false, false, false, 65), "html", null, true);
        echo "\" />
<input name=\"dated\" type=\"text\" hidden value=\"";
        // line 66
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["reservation"] ?? null), "dateDebut", [], "any", false, false, false, 66), "Y-m-d"), "html", null, true);
        echo "\" />
<input name=\"datef\" type=\"text\" hidden value=\"";
        // line 67
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["reservation"] ?? null), "dateFin", [], "any", false, false, false, 67), "Y-m-d"), "html", null, true);
        echo "\" />

  <div class=\"col-md-6 col-md-offset-3\">
    <label for=\"card-element\" class=\"form-group\">
      Credit or debit card
    </label> <br/>
    <div id=\"card-element\" class=\"form-group\">
      <!-- A Stripe Element will be inserted here. -->
    </div>

    <!-- Used to display Element errors. -->
    <div id=\"card-errors\" role=\"alert\" class=\"form-group\"></div>
  </div>
  <button type=\"submit\" class=\"btn btn-success btn-block\">Valider et Payer</button>
</form>

    
</div>
</div>
</div>


       





";
    }

    // line 98
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 99
        echo " <script src=\"https://js.stripe.com/v3/\"></script>
<script>

var stripe = Stripe('pk_test_51IAcQ2H4vWt6fF11MTNXPwtolU5a83LoDBPM3W76m26M34gP8eAFTjkNhCGJB58zAzxW5O423IcPe8TMHuR1814F00CltaaPUl');
var elements = stripe.elements();
// Custom styling can be passed to options when creating an Element.
var style = {
  base: {
    // Add your base input styles here. For example:
    fontSize: '16px',
    color: '#32325d',
  },
};

// Create an instance of the card Element.
var card = elements.create('card', {style: style}

);
// Add an instance of the card Element into the `card-element` <div>.
card.mount('#card-element');
card.addEventListener('change',function(event){
    var displayError = document.getElementById('card-errors');
    if (event.error){
        displayError.textContent = event.error.message;

    }else{
           displayError.textContent = '';

    }

});

// Create a token or display an error when the form is submitted.
var form = document.getElementById('payment-form');
form.addEventListener('submit', function(event) {
  event.preventDefault();
  stripe.createToken(card).then(function(result) {
    if (result.error) {
      // Inform the customer that there was an error.
      var errorElement = document.getElementById('card-errors');
      errorElement.textContent = result.error.message;
    } else {
      // Send the token to your server.
      stripeTokenHandler(result.token);
      

    }
  });
});
function stripeTokenHandler(token) {
  // Insert the token ID into the form so it gets submitted to the server
  var form = document.getElementById('payment-form');
  var hiddenInput = document.createElement('input');
  hiddenInput.setAttribute('type', 'hidden');
  hiddenInput.setAttribute('name', 'stripeToken');
  hiddenInput.setAttribute('value', token.id);
  form.appendChild(hiddenInput);
  // Submit the form
  form.submit();
}


</script>



";
    }

    // line 168
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 169
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/verification-res.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 169,  249 => 168,  179 => 99,  175 => 98,  142 => 67,  138 => 66,  134 => 65,  130 => 64,  126 => 63,  120 => 60,  110 => 53,  97 => 43,  82 => 31,  69 => 21,  52 => 6,  48 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/verification-res.html.twig", "C:\\wamp64\\www\\Atypik\\templates\\default\\verification-res.html.twig");
    }
}
