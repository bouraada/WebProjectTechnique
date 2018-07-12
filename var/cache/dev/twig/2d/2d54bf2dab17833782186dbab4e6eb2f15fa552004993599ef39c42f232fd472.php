<?php

/* User/boutique.html.twig */
class __TwigTemplate_e316845d766cab5fca273d8598f3f0513538b785d76ae17c1d2b219becbc1e50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BaseDashboard.html.twig", "User/boutique.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "User/boutique.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "User/boutique.html.twig"));

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

        echo "Boutique";
        
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
        echo "
    <style>
        .stylecss {
            font-family:Impact;
            text-transform: uppercase;
            size: 20px;
        }
        .seance {
            border : 12px solid white ;
            text-align: center;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "   
    <div class=\"row\">


        <div class=\"col-lg-12\">
            <div class=\"panel panel-success\">
                <div class=\"panel-heading\">
                    SOLDE  
                </div>
                <div class=\"panel-body\">
                    <table >
                        <tr>
                            ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["programmesList"] ?? $this->getContext($context, "programmesList")));
        foreach ($context['_seq'] as $context["_key"] => $context["program"]) {
            // line 34
            echo "                                ";
            if (($this->getAttribute($context["program"], "statut", array()) == 1)) {
                // line 35
                echo "                                    <td lang=\"fr\" class=\" seance col-md-3 btn-success  border-l\" height=\"250\" width=\"500\">
                                        <h2 class=\"text-uppercase stylecss\"> ";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["program"], "titre", array()), "html", null, true);
                echo "</h2>
                                        <br/><br/><br/>
                                        <p> ";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["program"], "description", array()), "html", null, true);
                echo " </p>
                                        <br/>
                                        <p>";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["program"], "idUser", array()), "username", array()), "html", null, true);
                echo "                                             
                                        </p>
                                    </td>
                                ";
            }
            // line 44
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['program'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class=\"col-lg-12\">
            <div class=\"panel panel-info\">
                <div class=\"panel-heading\">
                    A NE PAS RATER
                </div>
                <div class=\"panel-body\">
                    <table >
                        <tr>
                            ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["programmesList"] ?? $this->getContext($context, "programmesList")));
        foreach ($context['_seq'] as $context["_key"] => $context["program"]) {
            // line 60
            echo "                                ";
            if (($this->getAttribute($context["program"], "statut", array()) == 1)) {
                // line 61
                echo "                                    <td lang=\"fr\" class=\" seance btn-info  border-l\" height=\"350\" width=\"500\">
                                        <h2 class=\"text-uppercase\"> ";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute($context["program"], "titre", array()), "html", null, true);
                echo "</h2>
                                        <br/><br/><br/>
                                        <p> ";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($context["program"], "description", array()), "html", null, true);
                echo " </p>
                                        <br/>
                                        <p>";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["program"], "idUser", array()), "username", array()), "html", null, true);
                echo "                                             
                                        </p>
                                    </td>
                                ";
            }
            // line 70
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['program'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <table >
            <tr>
                ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["programmesList"] ?? $this->getContext($context, "programmesList")));
        foreach ($context['_seq'] as $context["_key"] => $context["program"]) {
            // line 80
            echo "                    <td lang=\"fr\" class=\" seance btn-danger col-md-3 border-l\" >
                        <h2 class=\"text-uppercase stylecss\"> ";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["program"], "titre", array()), "html", null, true);
            echo "</h2>
                        <br/><br/><br/>
                        <p> ";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["program"], "description", array()), "html", null, true);
            echo " </p>
                        <br/>
                        <p>";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["program"], "idUser", array()), "username", array()), "html", null, true);
            echo "                                             
                        </p>
                    </td>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['program'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "            </tr>
        </table>
    </div>    

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "User/boutique.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 89,  222 => 85,  217 => 83,  212 => 81,  209 => 80,  205 => 79,  195 => 71,  189 => 70,  182 => 66,  177 => 64,  172 => 62,  169 => 61,  166 => 60,  162 => 59,  146 => 45,  140 => 44,  133 => 40,  128 => 38,  123 => 36,  120 => 35,  117 => 34,  113 => 33,  91 => 21,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
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

{% block titre %}Boutique{% endblock%}

{% block css %}

    <style>
        .stylecss {
            font-family:Impact;
            text-transform: uppercase;
            size: 20px;
        }
        .seance {
            border : 12px solid white ;
            text-align: center;
        }
    </style>
{% endblock%}


{% block body %}   
    <div class=\"row\">


        <div class=\"col-lg-12\">
            <div class=\"panel panel-success\">
                <div class=\"panel-heading\">
                    SOLDE  
                </div>
                <div class=\"panel-body\">
                    <table >
                        <tr>
                            {% for program in programmesList %}
                                {% if program.statut == 1 %}
                                    <td lang=\"fr\" class=\" seance col-md-3 btn-success  border-l\" height=\"250\" width=\"500\">
                                        <h2 class=\"text-uppercase stylecss\"> {{ program.titre }}</h2>
                                        <br/><br/><br/>
                                        <p> {{ program.description }} </p>
                                        <br/>
                                        <p>{{ program.idUser.username }}                                             
                                        </p>
                                    </td>
                                {% endif %}
                            {% endfor %}
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class=\"col-lg-12\">
            <div class=\"panel panel-info\">
                <div class=\"panel-heading\">
                    A NE PAS RATER
                </div>
                <div class=\"panel-body\">
                    <table >
                        <tr>
                            {% for program in programmesList %}
                                {% if program.statut == 1 %}
                                    <td lang=\"fr\" class=\" seance btn-info  border-l\" height=\"350\" width=\"500\">
                                        <h2 class=\"text-uppercase\"> {{ program.titre }}</h2>
                                        <br/><br/><br/>
                                        <p> {{ program.description }} </p>
                                        <br/>
                                        <p>{{ program.idUser.username }}                                             
                                        </p>
                                    </td>
                                {% endif %}
                            {% endfor %}
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <table >
            <tr>
                {% for program in programmesList %}
                    <td lang=\"fr\" class=\" seance btn-danger col-md-3 border-l\" >
                        <h2 class=\"text-uppercase stylecss\"> {{ program.titre }}</h2>
                        <br/><br/><br/>
                        <p> {{ program.description }} </p>
                        <br/>
                        <p>{{ program.idUser.username }}                                             
                        </p>
                    </td>
                {% endfor %}
            </tr>
        </table>
    </div>    

{% endblock %}


", "User/boutique.html.twig", "/Applications/MAMP/htdocs/Finale/coachme/app/Resources/views/User/boutique.html.twig");
    }
}
