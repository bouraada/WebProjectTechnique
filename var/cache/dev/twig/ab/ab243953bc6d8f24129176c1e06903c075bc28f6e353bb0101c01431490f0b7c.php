<?php

/* User/profilEdit.html.twig */
class __TwigTemplate_5369b4faae4b9b1403eebf2e5467b4b80d9a29d3ba588b368e85fd8df70baf69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BaseDashboard.html.twig", "User/profilEdit.html.twig", 1);
        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BaseDashboard.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "User/profilEdit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "User/profilEdit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_titre($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo "Mon profil";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "   
    
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">MON PROFIL</h1>
        </div>
    </div>

<div class=\"container\">
    <div class=\"col-md-2 hidden-xs\">
  </div>
<div class=\"row\">
<div class=\"col-md-10 \">
<form class=\"form-horizontal\">
<fieldset>
    
 <div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"Nom\">Nom</label>  
  <div class=\"col-md-4\">
 <div class=\"input-group\">
       <div class=\"input-group-addon\">
        <i class=\"fa fa-user\">
        </i>
       </div>
       <input id=\"Nom\" name=\"Nom\" type=\"text\" placeholder=\"";
        // line 29
        if ($this->getAttribute(($context["abonne"] ?? null), "NomAbonne", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["abonne"] ?? $this->getContext($context, "abonne")), "NomAbonne", array()), "html", null, true);
        }
        echo "\" class=\"form-control input-md\">
      </div>
  </div>
</div>

      
<div class=\"form-group\">
<label class=\"col-md-4 control-label\" for=\"Prenom\">Prenom</label>  
<div class=\"col-md-4\">
 <div class=\"input-group\">
       <div class=\"input-group-addon\">
        <i class=\"fa fa-user\">
        </i>
       </div>
       <input id=\"Prenom\" name=\"Prenom\" type=\"text\" placeholder=\"";
        // line 43
        if ($this->getAttribute(($context["abonne"] ?? null), "NomAbonne", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["abonne"] ?? $this->getContext($context, "abonne")), "PrenomAbonne", array()), "html", null, true);
        }
        echo "\" class=\"form-control input-md\">
      </div>
  </div>
   </div>  
      
  <div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"pseudo\">pseudo</label>  
  <div class=\"col-md-4\">
    <div class=\"input-group\">
       <div class=\"input-group-addon\"> <i class=\"fa fa-user\">        </i>       </div>
       <input id=\"pseudo\" name=\"pseudo\" type=\"text\" placeholder=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "\" class=\"form-control input-md\">
    </div>
  </div>
</div>    
      

<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"Age\">Age</label>  
  <div class=\"col-md-4\">

  <div class=\"input-group\">
       <div class=\"input-group-addon\">
     <i class=\"fa fa-birthday-cake\"></i>
        
       </div>
       <input id=\"age\" name=\"age\" type=\"text\" placeholder=\"";
        // line 68
        if ($this->getAttribute(($context["abonne"] ?? null), "ageAbonne", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["abonne"] ?? $this->getContext($context, "abonne")), "ageAbonne", array()), "html", null, true);
        }
        echo "\" class=\"form-control input-md\">
      </div>
  
    
  </div>
</div>



<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"Adresse\">Votre adresse</label>  
  <div class=\"col-md-4\">
  <input id=\"Adresse\" name=\"Adresse\" type=\"text\" placeholder=\"";
        // line 80
        if ($this->getAttribute(($context["abonne"] ?? null), "NomAbonne", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["abonne"] ?? $this->getContext($context, "abonne")), "adresseAbonne", array()), "html", null, true);
        }
        echo "\" class=\"form-control input-md \">
  </div>
</div>
    

<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"Mobile\">Mobile</label>  
  <div class=\"col-md-4\">
  <div class=\"input-group\">
       <div class=\"input-group-addon\">
     <i class=\"fa fa-phone\"></i>
        
       </div>
    <input id=\"mobile\" name=\"mobile\" type=\"text\" placeholder=\"";
        // line 93
        if ($this->getAttribute(($context["abonne"] ?? null), "NomAbonne", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["abonne"] ?? $this->getContext($context, "abonne")), "mobileAbonne", array()), "html", null, true);
        }
        echo "\" class=\"form-control input-md\">
    
      </div>

  
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"Email Address\">Email Address</label>  
  <div class=\"col-md-4\">
  <div class=\"input-group\">
       <div class=\"input-group-addon\">
     <i class=\"fa fa-envelope-o\"></i>
        
       </div>
    <input id=\"Email Address\" name=\"Email Address\" type=\"text\" placeholder=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
        echo "\" class=\"form-control input-md\">
    
      </div>
  
  </div>
</div>

    <div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"radios\">Programme abonné:</label>
  <div class=\"col-md-4\"> 
      
    <label class=\"radio-inline\" for=\"radios-1\">
      <input type=\"radio\" name=\"radios\" id=\"radios-1\" value=\"1\" >
      Force
    </label> 
      
    <label class=\"radio-inline\" for=\"radios-2\">
      <input type=\"radio\" name=\"radios\" id=\"radios-2\" value=\"2\">
      Endurance
    </label>
      
          <label class=\"radio-inline\" for=\"radios-3\">
      <input type=\"radio\" name=\"radios\" id=\"radios-3\" value=\"3\">
      Minceur
    </label>
      
          <label class=\"radio-inline\" for=\"radios-4\">
      <input type=\"radio\" name=\"radios\" id=\"radios-4\" value=\"4\">
      Detox
    </label>
      
          <label class=\"radio-inline\" for=\"radios-5\">
      <input type=\"radio\" name=\"radios\" id=\"radios-5\" value=\"5\">
      Prise de masse musculaire
    </label>
      
  </div>
</div>

      
      
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"Age\">Paiement</label>  
  <div class=\"col-md-4\">
          <form action=\"/charge\" method=\"post\" id=\"payment-form\">
      <div class=\"form-row\">
        <label for=\"card-element\">
          Credit or debit card
        </label>
        <div id=\"card-element\">
          <!-- A Stripe Element will be inserted here. -->
        </div>

        <!-- Used to display form errors. -->
        <div id=\"card-errors\" role=\"alert\"></div>
      </div>

      <button>Submit Payment</button>
    </form>
  </div>
</div>
      
      
<div class=\"form-group\">
  <label class=\"col-md-10 control-label\" ></label>  
  <div class=\"col-md-10\">
  <a href=\"\" class=\"btn btn-success\"><span class=\"glyphicon glyphicon-thumbs-up\"></span> Submit</a>
  <a href=\"#\" class=\"btn btn-danger\" value=\"\"><span class=\"glyphicon glyphicon-remove-sign\"></span> Clear</a>
    


  </div>
</div>

</fieldset>
</form>
    
   <a class=\"btn btn-warning btn-block\" href=\"/profile/change-password\">changer de mot de passe</a>
   <a class=\"btn btn-warning btn-block\" href=\" /profile/edit\"> Modifier votre profil</a>
</div>
<div class=\"col-md-2 hidden-xs\">
  </div>


</div>
   </div>

    
    
    <script src=\"js/jquery.js\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"js/bootstrap.min.js\"></script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "User/profilEdit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 109,  180 => 93,  162 => 80,  145 => 68,  127 => 53,  112 => 43,  93 => 29,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'BaseDashboard.html.twig' %}

{% block titre %}Mon profil{% endblock%}

{% block body %}   
    
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">MON PROFIL</h1>
        </div>
    </div>

<div class=\"container\">
    <div class=\"col-md-2 hidden-xs\">
  </div>
<div class=\"row\">
<div class=\"col-md-10 \">
<form class=\"form-horizontal\">
<fieldset>
    
 <div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"Nom\">Nom</label>  
  <div class=\"col-md-4\">
 <div class=\"input-group\">
       <div class=\"input-group-addon\">
        <i class=\"fa fa-user\">
        </i>
       </div>
       <input id=\"Nom\" name=\"Nom\" type=\"text\" placeholder=\"{% if abonne.NomAbonne is defined %}{{ abonne.NomAbonne }}{% endif %}\" class=\"form-control input-md\">
      </div>
  </div>
</div>

      
<div class=\"form-group\">
<label class=\"col-md-4 control-label\" for=\"Prenom\">Prenom</label>  
<div class=\"col-md-4\">
 <div class=\"input-group\">
       <div class=\"input-group-addon\">
        <i class=\"fa fa-user\">
        </i>
       </div>
       <input id=\"Prenom\" name=\"Prenom\" type=\"text\" placeholder=\"{% if abonne.NomAbonne is defined %}{{ abonne.PrenomAbonne }}{% endif %}\" class=\"form-control input-md\">
      </div>
  </div>
   </div>  
      
  <div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"pseudo\">pseudo</label>  
  <div class=\"col-md-4\">
    <div class=\"input-group\">
       <div class=\"input-group-addon\"> <i class=\"fa fa-user\">        </i>       </div>
       <input id=\"pseudo\" name=\"pseudo\" type=\"text\" placeholder=\"{{  app.user.username}}\" class=\"form-control input-md\">
    </div>
  </div>
</div>    
      

<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"Age\">Age</label>  
  <div class=\"col-md-4\">

  <div class=\"input-group\">
       <div class=\"input-group-addon\">
     <i class=\"fa fa-birthday-cake\"></i>
        
       </div>
       <input id=\"age\" name=\"age\" type=\"text\" placeholder=\"{% if abonne.ageAbonne is defined %}{{ abonne.ageAbonne }}{% endif %}\" class=\"form-control input-md\">
      </div>
  
    
  </div>
</div>



<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"Adresse\">Votre adresse</label>  
  <div class=\"col-md-4\">
  <input id=\"Adresse\" name=\"Adresse\" type=\"text\" placeholder=\"{% if abonne.NomAbonne is defined %}{{ abonne.adresseAbonne }}{% endif %}\" class=\"form-control input-md \">
  </div>
</div>
    

<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"Mobile\">Mobile</label>  
  <div class=\"col-md-4\">
  <div class=\"input-group\">
       <div class=\"input-group-addon\">
     <i class=\"fa fa-phone\"></i>
        
       </div>
    <input id=\"mobile\" name=\"mobile\" type=\"text\" placeholder=\"{% if abonne.NomAbonne is defined %}{{ abonne.mobileAbonne }}{% endif %}\" class=\"form-control input-md\">
    
      </div>

  
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"Email Address\">Email Address</label>  
  <div class=\"col-md-4\">
  <div class=\"input-group\">
       <div class=\"input-group-addon\">
     <i class=\"fa fa-envelope-o\"></i>
        
       </div>
    <input id=\"Email Address\" name=\"Email Address\" type=\"text\" placeholder=\"{{  app.user.email}}\" class=\"form-control input-md\">
    
      </div>
  
  </div>
</div>

    <div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"radios\">Programme abonné:</label>
  <div class=\"col-md-4\"> 
      
    <label class=\"radio-inline\" for=\"radios-1\">
      <input type=\"radio\" name=\"radios\" id=\"radios-1\" value=\"1\" >
      Force
    </label> 
      
    <label class=\"radio-inline\" for=\"radios-2\">
      <input type=\"radio\" name=\"radios\" id=\"radios-2\" value=\"2\">
      Endurance
    </label>
      
          <label class=\"radio-inline\" for=\"radios-3\">
      <input type=\"radio\" name=\"radios\" id=\"radios-3\" value=\"3\">
      Minceur
    </label>
      
          <label class=\"radio-inline\" for=\"radios-4\">
      <input type=\"radio\" name=\"radios\" id=\"radios-4\" value=\"4\">
      Detox
    </label>
      
          <label class=\"radio-inline\" for=\"radios-5\">
      <input type=\"radio\" name=\"radios\" id=\"radios-5\" value=\"5\">
      Prise de masse musculaire
    </label>
      
  </div>
</div>

      
      
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"Age\">Paiement</label>  
  <div class=\"col-md-4\">
          <form action=\"/charge\" method=\"post\" id=\"payment-form\">
      <div class=\"form-row\">
        <label for=\"card-element\">
          Credit or debit card
        </label>
        <div id=\"card-element\">
          <!-- A Stripe Element will be inserted here. -->
        </div>

        <!-- Used to display form errors. -->
        <div id=\"card-errors\" role=\"alert\"></div>
      </div>

      <button>Submit Payment</button>
    </form>
  </div>
</div>
      
      
<div class=\"form-group\">
  <label class=\"col-md-10 control-label\" ></label>  
  <div class=\"col-md-10\">
  <a href=\"\" class=\"btn btn-success\"><span class=\"glyphicon glyphicon-thumbs-up\"></span> Submit</a>
  <a href=\"#\" class=\"btn btn-danger\" value=\"\"><span class=\"glyphicon glyphicon-remove-sign\"></span> Clear</a>
    


  </div>
</div>

</fieldset>
</form>
    
   <a class=\"btn btn-warning btn-block\" href=\"/profile/change-password\">changer de mot de passe</a>
   <a class=\"btn btn-warning btn-block\" href=\" /profile/edit\"> Modifier votre profil</a>
</div>
<div class=\"col-md-2 hidden-xs\">
  </div>


</div>
   </div>

    
    
    <script src=\"js/jquery.js\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"js/bootstrap.min.js\"></script>


{% endblock %}


", "User/profilEdit.html.twig", "/Applications/MAMP/htdocs/Finale/coachme/app/Resources/views/User/profilEdit.html.twig");
    }
}
