<?php

/* User/inscription.html.twig */
class __TwigTemplate_0f4c68a4ab804d953443773f81623195789783ee96a9c65e1692a004b24ddaf7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BaseDashboard.html.twig", "User/inscription.html.twig", 1);
        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'css' => array($this, 'block_css'),
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "User/inscription.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "User/inscription.html.twig"));

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

        echo " inscription";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_css($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 6
        echo "    label > input{ /* HIDE RADIO */
        visibility: hidden; /* Makes input not-clickable */
        position: absolute; /* Remove input from document flow */
    }


    .badgebox
    {
        opacity: 0;
    }

    .badgebox + .badge
    {
        /* Move the check mark away when unchecked */
        text-indent: -999999px;
        /* Makes the badge's width stay the same checked and unchecked */
            width: 27px;
    }

    .badgebox:focus + .badge
    {
        /* Set something to make the badge looks focused */
        /* This really depends on the application, in my case it was: */

        /* Adding a light border */
        box-shadow: inset 0px 0px 5px;
        /* Taking the difference out of the padding */
    }

    .badgebox:checked + .badge
    {
        /* Move the check mark back when checked */
            text-indent: 0;
            border:2px solid black;
    }
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 44
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "   
    <div class=\"row\"> <div class=\"col-lg-12\"> <h1 class=\"page-header\">Mon abonnement</h1> </div> </div>    

    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"col-lg-12\">

                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\"> Votre situation : </div>
                    <div class=\"panel-body\">
                        <div>
                            <p class=\"col-md-12\"> Nous voulons adapter votre entraînement en fonction de votre niveau sportif.Rappelez-vous, ce n'est pas d'où vous partez, mais bien où vous voulez arriver qui compte. </p>

                            <form>
                                
                                <div class=\"form-row\">
                                    <h4 class=\"col-lg-12\"> Vous etes :</h4>

                                    <div class=\"form-group col-md-6\">
                                        <label for=\"femme\" class=\"btn btn-info col-md-12\"> FEMME 
                                            <input type=\"radio\" name=\"sexe\" id=\"femme\" class=\"badgebox\" value=\"femme\">
                                            <span class=\"badge\">&check;</span>
                                        </label>
                                    </div>
                                    <div class=\"form-group col-md-6\">
                                        <label for=\"homme\" class=\"btn btn-info col-md-12\"> HOMME  
                                            <input type=\"radio\" name=\"sexe\" id=\"homme\" class=\"badgebox\" value=\"homme\">
                                            <span class=\"badge\">&check;</span>
                                        </label>
                                    </div>
                                </div>
                                
                                
                                <div class=\"form-group col-lg-12\">
                                    <label for=\"inputAddress\">Addresse</label>
                                    <div class=\"form-group input-group\">
                                        <span class=\"input-group-addon\"> <i class=\"fa fa-map-marker \"></i> </span>
                                        <input type=\"text\" class=\"form-control\" id=\"inputAddress\" placeholder=\"11 rue Chevalier de la barre, 75018, Paris\">
                                    </div>
                                </div>
                                
                                
                                <div class=\"form-row\">
                                    <p class=\"col-lg-12\">Nous voulons adapter votre entraînement en fonction de votre niveau sportif. Rappelez-vous, ce n'est pas d'où vous partez, mais bien où vous voulez arriver qui compte.</p>
                                    <h4 class=\"col-lg-12\"> Votre forme actuelle </h4>
                                    
                                    <div class=\"form-group col-md-12\">
                                        <label for=\"bienenforme\" class=\"btn btn-info col-md-12\"> Je suis vraiment en forme 
                                            <input type=\"radio\" name=\"forme\" id=\"bienenforme\" class=\"badgebox\" value=\"bienenforme\">
                                            <span class=\"badge\">&check;</span>
                                        </label>
                                    </div>
                                    <div class=\"form-group col-md-12\">
                                        <label for=\"assezenforme\" class=\"btn btn-info col-md-12\"> Je suis assez en forme
                                            <input type=\"radio\" name=\"forme\" id=\"assezenforme\" class=\"badgebox\" value=\"assezenforme\">
                                            <span class=\"badge\">&check;</span>
                                        </label>
                                    </div>
                                    <div class=\"form-group col-md-12\">
                                        <label for=\"pasdeforme\" class=\"btn btn-info col-md-12\"> Je ne suis pas en forme
                                            <input type=\"radio\" name=\"forme\" id=\"pasdeforme\" class=\"badgebox\" value=\"pasdeforme\">
                                            <span class=\"badge\">&check;</span>
                                        </label>
                                    </div>
                                </div>
                                
                                
                                
                                <div class=\"form-row\">
                                    <h4 class=\"col-lg-12\"> Votre objectif </h4>
                                    <div class=\"form-group col-md-4\">
                                        <label for=\"semuscler\" class=\"btn btn-info btn-lg col-md-12\"> Se muscler 
                                            <input type=\"radio\" name=\"objectif\" id=\"semuscler\" class=\"badgebox\" value=\"semuscler\">
                                            <span class=\"badge\">&check;</span>
                                        </label>
                                    </div>
                                    <div class=\"form-group col-md-4\">
                                        <label for=\"mincir\" class=\"btn btn-info btn-lg  col-md-12\"> Mincir
                                            <input type=\"radio\" name=\"objectif\" id=\"mincir\" class=\"badgebox\" value=\"mincir\">
                                            <span class=\"badge\">&check;</span>
                                        </label>
                                    </div>
                                     <div class=\"form-group col-md-4\">
                                        <label for=\"forme\" class=\"btn btn-info btn-lg  col-md-12\"> Etre en forme 
                                            <input type=\"radio\" name=\"objectif\" id=\"forme\" class=\"badgebox\" value=\"forme\">
                                            <span class=\"badge\">&check;</span>
                                        </label>
                                    </div>
                                </div>
                                
                                <div style=\"margin: 100px 10px;\" > &nbsp; </div>
                               
                                <div class=\"text-center mt-5\" >
                                    <h2 class=\"text-uppercase\" > Votre parcours commence</h2>
                                    
                                    <div class=\"form-group col-md-12\">
                                        <p> Soyez en forme comme jamais<p>
                                        
                                        <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\">Suivent</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "User/inscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 44,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
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

{% block titre %} inscription{% endblock%}

{% block css %}
    label > input{ /* HIDE RADIO */
        visibility: hidden; /* Makes input not-clickable */
        position: absolute; /* Remove input from document flow */
    }


    .badgebox
    {
        opacity: 0;
    }

    .badgebox + .badge
    {
        /* Move the check mark away when unchecked */
        text-indent: -999999px;
        /* Makes the badge's width stay the same checked and unchecked */
            width: 27px;
    }

    .badgebox:focus + .badge
    {
        /* Set something to make the badge looks focused */
        /* This really depends on the application, in my case it was: */

        /* Adding a light border */
        box-shadow: inset 0px 0px 5px;
        /* Taking the difference out of the padding */
    }

    .badgebox:checked + .badge
    {
        /* Move the check mark back when checked */
            text-indent: 0;
            border:2px solid black;
    }
{% endblock%}
    
    
{% block body %}   
    <div class=\"row\"> <div class=\"col-lg-12\"> <h1 class=\"page-header\">Mon abonnement</h1> </div> </div>    

    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"col-lg-12\">

                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\"> Votre situation : </div>
                    <div class=\"panel-body\">
                        <div>
                            <p class=\"col-md-12\"> Nous voulons adapter votre entraînement en fonction de votre niveau sportif.Rappelez-vous, ce n'est pas d'où vous partez, mais bien où vous voulez arriver qui compte. </p>

                            <form>
                                
                                <div class=\"form-row\">
                                    <h4 class=\"col-lg-12\"> Vous etes :</h4>

                                    <div class=\"form-group col-md-6\">
                                        <label for=\"femme\" class=\"btn btn-info col-md-12\"> FEMME 
                                            <input type=\"radio\" name=\"sexe\" id=\"femme\" class=\"badgebox\" value=\"femme\">
                                            <span class=\"badge\">&check;</span>
                                        </label>
                                    </div>
                                    <div class=\"form-group col-md-6\">
                                        <label for=\"homme\" class=\"btn btn-info col-md-12\"> HOMME  
                                            <input type=\"radio\" name=\"sexe\" id=\"homme\" class=\"badgebox\" value=\"homme\">
                                            <span class=\"badge\">&check;</span>
                                        </label>
                                    </div>
                                </div>
                                
                                
                                <div class=\"form-group col-lg-12\">
                                    <label for=\"inputAddress\">Addresse</label>
                                    <div class=\"form-group input-group\">
                                        <span class=\"input-group-addon\"> <i class=\"fa fa-map-marker \"></i> </span>
                                        <input type=\"text\" class=\"form-control\" id=\"inputAddress\" placeholder=\"11 rue Chevalier de la barre, 75018, Paris\">
                                    </div>
                                </div>
                                
                                
                                <div class=\"form-row\">
                                    <p class=\"col-lg-12\">Nous voulons adapter votre entraînement en fonction de votre niveau sportif. Rappelez-vous, ce n'est pas d'où vous partez, mais bien où vous voulez arriver qui compte.</p>
                                    <h4 class=\"col-lg-12\"> Votre forme actuelle </h4>
                                    
                                    <div class=\"form-group col-md-12\">
                                        <label for=\"bienenforme\" class=\"btn btn-info col-md-12\"> Je suis vraiment en forme 
                                            <input type=\"radio\" name=\"forme\" id=\"bienenforme\" class=\"badgebox\" value=\"bienenforme\">
                                            <span class=\"badge\">&check;</span>
                                        </label>
                                    </div>
                                    <div class=\"form-group col-md-12\">
                                        <label for=\"assezenforme\" class=\"btn btn-info col-md-12\"> Je suis assez en forme
                                            <input type=\"radio\" name=\"forme\" id=\"assezenforme\" class=\"badgebox\" value=\"assezenforme\">
                                            <span class=\"badge\">&check;</span>
                                        </label>
                                    </div>
                                    <div class=\"form-group col-md-12\">
                                        <label for=\"pasdeforme\" class=\"btn btn-info col-md-12\"> Je ne suis pas en forme
                                            <input type=\"radio\" name=\"forme\" id=\"pasdeforme\" class=\"badgebox\" value=\"pasdeforme\">
                                            <span class=\"badge\">&check;</span>
                                        </label>
                                    </div>
                                </div>
                                
                                
                                
                                <div class=\"form-row\">
                                    <h4 class=\"col-lg-12\"> Votre objectif </h4>
                                    <div class=\"form-group col-md-4\">
                                        <label for=\"semuscler\" class=\"btn btn-info btn-lg col-md-12\"> Se muscler 
                                            <input type=\"radio\" name=\"objectif\" id=\"semuscler\" class=\"badgebox\" value=\"semuscler\">
                                            <span class=\"badge\">&check;</span>
                                        </label>
                                    </div>
                                    <div class=\"form-group col-md-4\">
                                        <label for=\"mincir\" class=\"btn btn-info btn-lg  col-md-12\"> Mincir
                                            <input type=\"radio\" name=\"objectif\" id=\"mincir\" class=\"badgebox\" value=\"mincir\">
                                            <span class=\"badge\">&check;</span>
                                        </label>
                                    </div>
                                     <div class=\"form-group col-md-4\">
                                        <label for=\"forme\" class=\"btn btn-info btn-lg  col-md-12\"> Etre en forme 
                                            <input type=\"radio\" name=\"objectif\" id=\"forme\" class=\"badgebox\" value=\"forme\">
                                            <span class=\"badge\">&check;</span>
                                        </label>
                                    </div>
                                </div>
                                
                                <div style=\"margin: 100px 10px;\" > &nbsp; </div>
                               
                                <div class=\"text-center mt-5\" >
                                    <h2 class=\"text-uppercase\" > Votre parcours commence</h2>
                                    
                                    <div class=\"form-group col-md-12\">
                                        <p> Soyez en forme comme jamais<p>
                                        
                                        <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\">Suivent</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>    
{% endblock %}


", "User/inscription.html.twig", "/Applications/MAMP/htdocs/Finale/coachme/app/Resources/views/User/inscription.html.twig");
    }
}
