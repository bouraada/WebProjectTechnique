<?php

/* User/Payement.html.twig */
class __TwigTemplate_ec20fa53b3beae5cd00b7bc4443f314c301ee6ad0045947917ff3009bd1d9fe2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "User/Payement.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "User/Payement.html.twig"));

        // line 1
        echo "<html>
    <head>
        <title>Payement</title>
        <style>
            .StripeElement {
                background-color: white;
                height: 40px;
                padding: 10px 12px;
                border-radius: 4px;
                border: 1px solid transparent;
                box-shadow: 0 1px 3px 0 #e6ebf1;
                -webkit-transition: box-shadow 150ms ease;
                transition: box-shadow 150ms ease;
              }

              .StripeElement--focus {
                box-shadow: 0 1px 3px 0 #cfd7df;
              }

              .StripeElement--invalid {
                border-color: #fa755a;
              }

              .StripeElement--webkit-autofill {
                background-color: #fefde5 !important;
              }
        </style>
    </head> 
    
    <body>  
    <div class=\"row\"> <div class=\"col-lg-12\"> <h1 class=\"page-header\">Payement</h1> </div> </div>    

    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"col-lg-12\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\"> Payement: </div>
                    <div class=\"panel-body\">
                        <form action=\"#\" method=\"post\" id=\"payment-form\">
                            <div class=\"form-row\">
                                <label for=\"card-element\">Numero de carte </label>
                                <div id=\"card-element\">
                                <!-- A Stripe Element will be inserted here. -->
                                </div>

                                <!-- Used to display form errors. -->
                                <div id=\"card-errors\" role=\"alert\"></div>
                            </div>

                            <button>Payer</button>
                        </form>
                        <div style=\"margin: 100px 10px;\" > &nbsp; </div>
                        <div class=\"text-center mt-5\" >

                            <div class=\"form-group col-md-12\">
                                <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\">Suivent</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
        <script src=\"https://js.stripe.com/v3/\"></script>
        <script>
            // Create a Stripe client.
            var stripe = Stripe('pk_test_g6do5S237ekq10r65BnxO6S0');

            // Create an instance of Elements.
            var elements = stripe.elements();

            // Custom styling can be passed to options when creating an Element.
            // (Note that this demo uses a wider set of styles than the guide below.)
            var style = {
              base: {
                color: '#32325d',
                lineHeight: '18px',
                fontFamily: '\"Helvetica Neue\", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px',
                '::placeholder': {
                  color: '#aab7c4'
                }
              },
              invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
              }
            };

            // Create an instance of the card Element.
            var card = elements.create('card', {style: style});

            // Add an instance of the card Element into the `card-element` <div>.
            card.mount('#card-element');

            // Handle real-time validation errors from the card Element.
            card.addEventListener('change', function(event) {
              var displayError = document.getElementById('card-errors');
              if (event.error) {
                displayError.textContent = event.error.message;
              } else {
                displayError.textContent = '';
              }
            });

            // Handle form submission.
            var form = document.getElementById('payment-form');
            form.addEventListener('submit', function(event) {
              event.preventDefault();

              stripe.createToken(card).then(function(result) {
                if (result.error) {
                  // Inform the user if there was an error.
                  var errorElement = document.getElementById('card-errors');
                  errorElement.textContent = result.error.message;
                } else {
                  // Send the token to your server.
                  stripeTokenHandler(result.token);
                }
              });
            });
        </script>
    </div>
    </body>
</html>


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "User/Payement.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
    <head>
        <title>Payement</title>
        <style>
            .StripeElement {
                background-color: white;
                height: 40px;
                padding: 10px 12px;
                border-radius: 4px;
                border: 1px solid transparent;
                box-shadow: 0 1px 3px 0 #e6ebf1;
                -webkit-transition: box-shadow 150ms ease;
                transition: box-shadow 150ms ease;
              }

              .StripeElement--focus {
                box-shadow: 0 1px 3px 0 #cfd7df;
              }

              .StripeElement--invalid {
                border-color: #fa755a;
              }

              .StripeElement--webkit-autofill {
                background-color: #fefde5 !important;
              }
        </style>
    </head> 
    
    <body>  
    <div class=\"row\"> <div class=\"col-lg-12\"> <h1 class=\"page-header\">Payement</h1> </div> </div>    

    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"col-lg-12\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\"> Payement: </div>
                    <div class=\"panel-body\">
                        <form action=\"#\" method=\"post\" id=\"payment-form\">
                            <div class=\"form-row\">
                                <label for=\"card-element\">Numero de carte </label>
                                <div id=\"card-element\">
                                <!-- A Stripe Element will be inserted here. -->
                                </div>

                                <!-- Used to display form errors. -->
                                <div id=\"card-errors\" role=\"alert\"></div>
                            </div>

                            <button>Payer</button>
                        </form>
                        <div style=\"margin: 100px 10px;\" > &nbsp; </div>
                        <div class=\"text-center mt-5\" >

                            <div class=\"form-group col-md-12\">
                                <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\">Suivent</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
        <script src=\"https://js.stripe.com/v3/\"></script>
        <script>
            // Create a Stripe client.
            var stripe = Stripe('pk_test_g6do5S237ekq10r65BnxO6S0');

            // Create an instance of Elements.
            var elements = stripe.elements();

            // Custom styling can be passed to options when creating an Element.
            // (Note that this demo uses a wider set of styles than the guide below.)
            var style = {
              base: {
                color: '#32325d',
                lineHeight: '18px',
                fontFamily: '\"Helvetica Neue\", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px',
                '::placeholder': {
                  color: '#aab7c4'
                }
              },
              invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
              }
            };

            // Create an instance of the card Element.
            var card = elements.create('card', {style: style});

            // Add an instance of the card Element into the `card-element` <div>.
            card.mount('#card-element');

            // Handle real-time validation errors from the card Element.
            card.addEventListener('change', function(event) {
              var displayError = document.getElementById('card-errors');
              if (event.error) {
                displayError.textContent = event.error.message;
              } else {
                displayError.textContent = '';
              }
            });

            // Handle form submission.
            var form = document.getElementById('payment-form');
            form.addEventListener('submit', function(event) {
              event.preventDefault();

              stripe.createToken(card).then(function(result) {
                if (result.error) {
                  // Inform the user if there was an error.
                  var errorElement = document.getElementById('card-errors');
                  errorElement.textContent = result.error.message;
                } else {
                  // Send the token to your server.
                  stripeTokenHandler(result.token);
                }
              });
            });
        </script>
    </div>
    </body>
</html>


", "User/Payement.html.twig", "/Applications/MAMP/htdocs/Finale/coachme/app/Resources/views/User/Payement.html.twig");
    }
}
