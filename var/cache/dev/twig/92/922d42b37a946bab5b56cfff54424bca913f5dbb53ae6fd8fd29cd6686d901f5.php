<?php

/* Admin/MesSeances.html.twig */
class __TwigTemplate_e9ec5ee7419f7ef9fdde95806793b3115de73476fe79756b9c81431be71816da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BaseAdmin.html.twig", "Admin/MesSeances.html.twig", 1);
        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'css' => array($this, 'block_css'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BaseAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/MesSeances.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/MesSeances.html.twig"));

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

        echo "Mes Seances";
        
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
            <h1 class=\"page-header\">SEANCES</h1>
        </div>
    </div> 

    <div class=\"form-row\">
        ";
        // line 30
        if (array_key_exists("seancesList", $context)) {
            // line 31
            echo "            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    Mes Séances :
                </div>
                <div class=\"panel-body\">
                    <!-- Nav tabs -->
                    <ul class=\"nav nav-tabs\">
                        <li class=\"active\"><a href=\"#home\" data-toggle=\"tab\">A venir</a>
                        </li>
                        <li><a href=\"#profile\" data-toggle=\"tab\">Passé</a>
                        </li>

                    </ul>
                    <div class=\"tab-content\">
                        <div class=\"tab-pane fade in active\" id=\"home\">
                            <table >
                                <tr>
                                    ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["seancesList"] ?? $this->getContext($context, "seancesList")));
            foreach ($context['_seq'] as $context["_key"] => $context["seance"]) {
                echo "  
                                        ";
                // line 49
                if ((twig_date_format_filter($this->env, "now", "Y-m-d") < twig_date_format_filter($this->env, $this->getAttribute($context["seance"], "debut", array()), "Y-m-d"))) {
                    // line 50
                    echo "                                            <td lang=\"fr\" class=\" seance col-md-3 btn-info  border-l\" height=\"350\" width=\"500\">
                                                <h2 class=\"stylecss\">";
                    // line 51
                    echo twig_escape_filter($this->env, $this->getAttribute($context["seance"], "statut", array()), "html", null, true);
                    echo " </H2>
                                                <br/><br/><br/>
                                                <p> ";
                    // line 53
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["seance"], "idUser", array()), "username", array()), "html", null, true);
                    echo " </p>
                                                <br/>
                                                <p class=\"glyphicon glyphicon-calendar\"/>
                                                ";
                    // line 56
                    echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($context["seance"], "debut", array()), "none", "none", null, null, "EEEE"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($context["seance"], "debut", array()), "none", "none", null, null, "d MMMM "), "html", null, true);
                    echo "
                                                </p>                                                 
                                                <p class=\"glyphicon glyphicon-time\"/> 
                                                ";
                    // line 59
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["seance"], "debut", array()), "h:m"), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["seance"], "fin", array()), "h:m"), "html", null, true);
                    echo "
                                                </p>
                                            </td>
                                        ";
                }
                // line 63
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['seance'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "                                </tr>
                            </table>

                        </div>
                        <div class=\"tab-pane fade\" id=\"profile\">
                            <table >
                                <tr>
                                    ";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["seancesList"] ?? $this->getContext($context, "seancesList")));
            foreach ($context['_seq'] as $context["_key"] => $context["seance"]) {
                echo " 
                                        ";
                // line 72
                if ((twig_date_format_filter($this->env, "now", "Y-m-d") > twig_date_format_filter($this->env, $this->getAttribute($context["seance"], "debut", array()), "Y-m-d"))) {
                    // line 73
                    echo "                                            <td lang=\"fr\" class=\" seance col-md-3 btn-danger  border-l\" height=\"350\" width=\"500\">
                                                <h2 class=\"stylecss\"> ";
                    // line 74
                    echo twig_escape_filter($this->env, $this->getAttribute($context["seance"], "statut", array()), "html", null, true);
                    echo "  </H2>
                                                <br/><br/><br/>
                                                <p> ";
                    // line 76
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["seance"], "idUser", array()), "username", array()), "html", null, true);
                    echo " </p>
                                                <br/>
                                                <p class=\"glyphicon glyphicon-calendar\"/>
                                                ";
                    // line 79
                    echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($context["seance"], "debut", array()), "none", "none", null, null, "EEEE"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($context["seance"], "debut", array()), "none", "none", null, null, "d MMMM "), "html", null, true);
                    echo "
                                                </p>                                                 
                                                <p class=\"glyphicon glyphicon-time\"/> 
                                                ";
                    // line 82
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["seance"], "debut", array()), "h:m"), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["seance"], "fin", array()), "h:m"), "html", null, true);
                    echo "
                                                </p>
                                            </td>
                                        ";
                }
                // line 86
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['seance'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.panel-body -->
            </div>







        ";
        }
        // line 102
        echo "


    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Admin/MesSeances.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 102,  230 => 87,  224 => 86,  215 => 82,  207 => 79,  201 => 76,  196 => 74,  193 => 73,  191 => 72,  185 => 71,  176 => 64,  170 => 63,  161 => 59,  153 => 56,  147 => 53,  142 => 51,  139 => 50,  137 => 49,  131 => 48,  112 => 31,  110 => 30,  91 => 21,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'BaseAdmin.html.twig' %}

{% block titre %}Mes Seances{% endblock%}

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
            <h1 class=\"page-header\">SEANCES</h1>
        </div>
    </div> 

    <div class=\"form-row\">
        {% if seancesList is defined %}
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    Mes Séances :
                </div>
                <div class=\"panel-body\">
                    <!-- Nav tabs -->
                    <ul class=\"nav nav-tabs\">
                        <li class=\"active\"><a href=\"#home\" data-toggle=\"tab\">A venir</a>
                        </li>
                        <li><a href=\"#profile\" data-toggle=\"tab\">Passé</a>
                        </li>

                    </ul>
                    <div class=\"tab-content\">
                        <div class=\"tab-pane fade in active\" id=\"home\">
                            <table >
                                <tr>
                                    {% for seance in seancesList %}  
                                        {% if \"now\"|date('Y-m-d') < seance.debut|date('Y-m-d') %}
                                            <td lang=\"fr\" class=\" seance col-md-3 btn-info  border-l\" height=\"350\" width=\"500\">
                                                <h2 class=\"stylecss\">{{ seance.statut}} </H2>
                                                <br/><br/><br/>
                                                <p> {{ seance.idUser.username }} </p>
                                                <br/>
                                                <p class=\"glyphicon glyphicon-calendar\"/>
                                                {{ seance.debut |localizeddate('none', 'none', null, null, 'EEEE')}} {{ seance.debut |localizeddate('none', 'none', null, null, 'd MMMM ')  }}
                                                </p>                                                 
                                                <p class=\"glyphicon glyphicon-time\"/> 
                                                {{ seance.debut |date(\"h:m\")}} - {{ seance.fin |date(\"h:m\")}}
                                                </p>
                                            </td>
                                        {% endif %}
                                    {% endfor %}
                                </tr>
                            </table>

                        </div>
                        <div class=\"tab-pane fade\" id=\"profile\">
                            <table >
                                <tr>
                                    {% for seance in seancesList %} 
                                        {% if \"now\"|date('Y-m-d') > seance.debut|date('Y-m-d') %}
                                            <td lang=\"fr\" class=\" seance col-md-3 btn-danger  border-l\" height=\"350\" width=\"500\">
                                                <h2 class=\"stylecss\"> {{ seance.statut}}  </H2>
                                                <br/><br/><br/>
                                                <p> {{ seance.idUser.username }} </p>
                                                <br/>
                                                <p class=\"glyphicon glyphicon-calendar\"/>
                                                {{ seance.debut |localizeddate('none', 'none', null, null, 'EEEE')}} {{ seance.debut |localizeddate('none', 'none', null, null, 'd MMMM ')  }}
                                                </p>                                                 
                                                <p class=\"glyphicon glyphicon-time\"/> 
                                                {{ seance.debut |date(\"h:m\")}} - {{ seance.fin |date(\"h:m\")}}
                                                </p>
                                            </td>
                                        {% endif %}
                                    {% endfor %}
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.panel-body -->
            </div>







        {% endif %}



    {% endblock %}
", "Admin/MesSeances.html.twig", "/Applications/MAMP/htdocs/Finale/coachme/app/Resources/views/Admin/MesSeances.html.twig");
    }
}
