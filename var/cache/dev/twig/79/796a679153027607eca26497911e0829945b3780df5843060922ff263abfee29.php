<?php

/* User/Dashboard.html.twig */
class __TwigTemplate_be53d42bb15e47c8a8bf5f100aae1c943b94e37209e7a5972559231a5cf35f3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BaseDashboard.html.twig", "User/Dashboard.html.twig", 1);
        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'body' => array($this, 'block_body'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BaseDashboard.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "User/Dashboard.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "User/Dashboard.html.twig"));

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
            <h1 class=\"page-header \">Bienvenue<span class=\"text-uppercase \"> ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo " </span> </h1>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <i class=\"fa fa-bar-chart-o fa-fw\"></i> Synthése des séances par mois en 2018 :
                </div>

                <div class=\"panel-body\">
                    <div id=\"morris-area-chart\"></div>
                </div>
            </div>

            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <i class=\"fa fa-bar-chart-o fa-fw\"></i> Séances a venir :
                </div>
                <div class=\"panel-body\">
                    <div class=\"row\">
                        <div>
                            <div class=\"table-responsive\">
                                <table class=\"table table-bordered table-hover table-striped\">
                                    <thead>
                                        <tr>
                                            <th width=\"10px\">Catégorie</th>
                                            <th>Date</th>
                                            <th>Debut</th>
                                            <th>Fin</th> 
                                            <th>Entraineur</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        
                                            ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["seancesList"] ?? $this->getContext($context, "seancesList")));
        foreach ($context['_seq'] as $context["_key"] => $context["seance"]) {
            echo "  
                                                ";
            // line 46
            if ((twig_date_format_filter($this->env, "now", "Y-m-d") < twig_date_format_filter($this->env, $this->getAttribute($context["seance"], "debut", array()), "Y-m-d"))) {
                // line 47
                echo "                                                    <tr>
                                                    <td> ";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["seance"], "statut", array()), "html", null, true);
                echo " </td>
                                                    <td>";
                // line 49
                echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($context["seance"], "debut", array()), "none", "none", null, null, "EEEE"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($context["seance"], "debut", array()), "none", "none", null, null, "d MMMM "), "html", null, true);
                echo " </td>                                                    
                                                    <td>";
                // line 50
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["seance"], "debut", array()), "H:i"), "html", null, true);
                echo " </td>
                                                    <td>";
                // line 51
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["seance"], "fin", array()), "H:i"), "html", null, true);
                echo " </td>
                                                    <td>";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["seance"], "idUser", array()), "username", array()), "html", null, true);
                echo "</td>
                                                    </tr>
                                                ";
            }
            // line 55
            echo "                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['seance'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                                        

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.panel-body -->
            </div>
        </div>

    </div>
    <!-- /.row -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 75
    public function block_js($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        echo "   
    <script>

        ";
        // line 78
        $context["janvierCount"] = 0;
        echo " ";
        $context["avrilCount"] = 0;
        echo " ";
        $context["aoutCount"] = 0;
        echo " ";
        $context["novembreCount"] = 0;
        // line 79
        echo "        ";
        $context["fevrierCount"] = 0;
        echo " ";
        $context["maiCount"] = 0;
        echo " ";
        $context["septembreCount"] = 0;
        echo " ";
        $context["decembreCount"] = 0;
        // line 80
        echo "        ";
        $context["marsCount"] = 0;
        echo " ";
        $context["juinCount"] = 0;
        echo " ";
        $context["octobreCount"] = 0;
        echo " ";
        $context["juilletCount"] = 0;
        // line 81
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["seancesList"] ?? $this->getContext($context, "seancesList")));
        foreach ($context['_seq'] as $context["_key"] => $context["seance"]) {
            // line 82
            echo "        ";
            if ((twig_date_format_filter($this->env, $this->getAttribute($context["seance"], "debut", array()), "m") == 1)) {
                $context["janvierCount"] = (($context["janvierCount"] ?? $this->getContext($context, "janvierCount")) + 1);
            }
            // line 83
            echo "    ";
            if ((twig_date_format_filter($this->env, $this->getAttribute($context["seance"], "debut", array()), "m") == 2)) {
                $context["fevrierCount"] = (($context["fevrierCount"] ?? $this->getContext($context, "fevrierCount")) + 1);
            }
            // line 84
            if ((twig_date_format_filter($this->env, $this->getAttribute($context["seance"], "debut", array()), "m") == 3)) {
                $context["marsCount"] = (($context["marsCount"] ?? $this->getContext($context, "marsCount")) + 1);
            }
            // line 85
            if ((twig_date_format_filter($this->env, $this->getAttribute($context["seance"], "debut", array()), "m") == 4)) {
                $context["avrilCount"] = (($context["avrilCount"] ?? $this->getContext($context, "avrilCount")) + 1);
            }
            // line 86
            if ((twig_date_format_filter($this->env, $this->getAttribute($context["seance"], "debut", array()), "m") == 5)) {
                $context["maiCount"] = (($context["maiCount"] ?? $this->getContext($context, "maiCount")) + 1);
            }
            // line 87
            if ((twig_date_format_filter($this->env, $this->getAttribute($context["seance"], "debut", array()), "m") == 6)) {
                $context["juinCount"] = (($context["juinCount"] ?? $this->getContext($context, "juinCount")) + 1);
            }
            // line 88
            if ((twig_date_format_filter($this->env, $this->getAttribute($context["seance"], "debut", array()), "m") == 7)) {
                $context["juilletCount"] = (($context["juilletCount"] ?? $this->getContext($context, "juilletCount")) + 1);
            }
            // line 89
            if ((twig_date_format_filter($this->env, $this->getAttribute($context["seance"], "debut", array()), "m") == 8)) {
                $context["aoutCount"] = (($context["aoutCount"] ?? $this->getContext($context, "aoutCount")) + 1);
            }
            // line 90
            if ((twig_date_format_filter($this->env, $this->getAttribute($context["seance"], "debut", array()), "m") == 9)) {
                $context["septembreCount"] = (($context["septembreCount"] ?? $this->getContext($context, "septembreCount")) + 1);
            }
            // line 91
            if ((twig_date_format_filter($this->env, $this->getAttribute($context["seance"], "debut", array()), "m") == 10)) {
                $context["octobreCount"] = (($context["octobreCount"] ?? $this->getContext($context, "octobreCount")) + 1);
            }
            // line 92
            if ((twig_date_format_filter($this->env, $this->getAttribute($context["seance"], "debut", array()), "m") == 11)) {
                $context["novembreCount"] = (($context["novembreCount"] ?? $this->getContext($context, "novembreCount")) + 1);
            }
            // line 93
            if ((twig_date_format_filter($this->env, $this->getAttribute($context["seance"], "debut", array()), "m") == 12)) {
                $context["decembreCount"] = (($context["decembreCount"] ?? $this->getContext($context, "decembreCount")) + 1);
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['seance'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "
        Morris.Area({
        element: 'morris-area-chart',
                data: [{
                period: '2018-Q1',
                        total:";
        // line 100
        echo twig_escape_filter($this->env, ($context["janvierCount"] ?? $this->getContext($context, "janvierCount")), "html", null, true);
        echo "
                }, {
                period: '2018-02',
                        total:";
        // line 103
        echo twig_escape_filter($this->env, ($context["fevrierCount"] ?? $this->getContext($context, "fevrierCount")), "html", null, true);
        echo "
                }, {
                period: '2018-03',
                        total:";
        // line 106
        echo twig_escape_filter($this->env, ($context["marsCount"] ?? $this->getContext($context, "marsCount")), "html", null, true);
        echo "
                }, {
                period: '2018-04',
                        total:";
        // line 109
        echo twig_escape_filter($this->env, ($context["avrilCount"] ?? $this->getContext($context, "avrilCount")), "html", null, true);
        echo "
                }, {
                period: '2018-05',
                        total:";
        // line 112
        echo twig_escape_filter($this->env, ($context["maiCount"] ?? $this->getContext($context, "maiCount")), "html", null, true);
        echo "
                }, {
                period: '2018-06',
                        total:";
        // line 115
        echo twig_escape_filter($this->env, ($context["juinCount"] ?? $this->getContext($context, "juinCount")), "html", null, true);
        echo "
                }, {
                period: '2018-07',
                        total:";
        // line 118
        echo twig_escape_filter($this->env, ($context["juilletCount"] ?? $this->getContext($context, "juilletCount")), "html", null, true);
        echo "
                }, {
                period: '2018-08',
                        total:";
        // line 121
        echo twig_escape_filter($this->env, ($context["aoutCount"] ?? $this->getContext($context, "aoutCount")), "html", null, true);
        echo "
                }, {
                period: '2018-09',
                        total:";
        // line 124
        echo twig_escape_filter($this->env, ($context["septembreCount"] ?? $this->getContext($context, "septembreCount")), "html", null, true);
        echo "
                }, {
                period: '2018 - 10',
                        total:";
        // line 127
        echo twig_escape_filter($this->env, ($context["octobreCount"] ?? $this->getContext($context, "octobreCount")), "html", null, true);
        echo "
                }, {
                period: '2018-11',
                        total:";
        // line 130
        echo twig_escape_filter($this->env, ($context["novembreCount"] ?? $this->getContext($context, "novembreCount")), "html", null, true);
        echo "
                }, {
                period: '2018-12',
                        total:";
        // line 133
        echo twig_escape_filter($this->env, ($context["decembreCount"] ?? $this->getContext($context, "decembreCount")), "html", null, true);
        echo "
                }],
                xkey: 'period',
                ykeys: ['total'],
                pointSize: 2,
                labels: ['Total séances '],
                hideHover: 'auto',
                resize: true

        });
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "User/Dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  351 => 133,  345 => 130,  339 => 127,  333 => 124,  327 => 121,  321 => 118,  315 => 115,  309 => 112,  303 => 109,  297 => 106,  291 => 103,  285 => 100,  278 => 95,  270 => 93,  266 => 92,  262 => 91,  258 => 90,  254 => 89,  250 => 88,  246 => 87,  242 => 86,  238 => 85,  234 => 84,  229 => 83,  224 => 82,  219 => 81,  210 => 80,  201 => 79,  193 => 78,  180 => 75,  154 => 56,  148 => 55,  142 => 52,  138 => 51,  134 => 50,  128 => 49,  124 => 48,  121 => 47,  119 => 46,  113 => 45,  73 => 8,  60 => 5,  42 => 3,  11 => 1,);
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
            <h1 class=\"page-header \">Bienvenue<span class=\"text-uppercase \"> {{ app.user.username  }} </span> </h1>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <i class=\"fa fa-bar-chart-o fa-fw\"></i> Synthése des séances par mois en 2018 :
                </div>

                <div class=\"panel-body\">
                    <div id=\"morris-area-chart\"></div>
                </div>
            </div>

            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <i class=\"fa fa-bar-chart-o fa-fw\"></i> Séances a venir :
                </div>
                <div class=\"panel-body\">
                    <div class=\"row\">
                        <div>
                            <div class=\"table-responsive\">
                                <table class=\"table table-bordered table-hover table-striped\">
                                    <thead>
                                        <tr>
                                            <th width=\"10px\">Catégorie</th>
                                            <th>Date</th>
                                            <th>Debut</th>
                                            <th>Fin</th> 
                                            <th>Entraineur</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        
                                            {% for seance in seancesList %}  
                                                {% if \"now\"|date('Y-m-d') < seance.debut|date('Y-m-d') %}
                                                    <tr>
                                                    <td> {{ seance.statut}} </td>
                                                    <td>{{ seance.debut |localizeddate('none', 'none', null, null, 'EEEE')}} {{ seance.debut |localizeddate('none', 'none', null, null, 'd MMMM ')  }} </td>                                                    
                                                    <td>{{ seance.debut |date(\"H:i\")}} </td>
                                                    <td>{{ seance.fin |date(\"H:i\")}} </td>
                                                    <td>{{ seance.idUser.username }}</td>
                                                    </tr>
                                                {% endif %}
                                            {% endfor %}
                                        

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.panel-body -->
            </div>
        </div>

    </div>
    <!-- /.row -->

{% endblock %}


{% block js %}   
    <script>

        {% set janvierCount = 0 %} {% set avrilCount = 0 %} {% set aoutCount = 0 %} {% set novembreCount = 0 %}
        {% set fevrierCount = 0 %} {% set maiCount = 0 %} {% set septembreCount = 0 %} {% set decembreCount = 0 %}
        {% set marsCount = 0 %} {% set juinCount = 0 %} {% set octobreCount = 0 %} {% set juilletCount = 0 %}
        {% for seance in seancesList %}
        {%if seance.debut|date('m') == 1 %}{% set janvierCount = janvierCount + 1 %}{% endif %}
    {%if seance.debut|date('m') == 2 %}{% set fevrierCount = fevrierCount + 1 %}{% endif %}
{%if seance.debut|date('m') == 3 %}{% set marsCount = marsCount + 1 %}{% endif %}
{%if seance.debut|date('m') == 4 %}{% set avrilCount = avrilCount + 1 %}{% endif %}
{%if seance.debut|date('m') == 5 %}{% set maiCount = maiCount + 1 %}{% endif %}
{%if seance.debut|date('m') == 6 %}{% set juinCount = juinCount + 1 %}{% endif %}
{%if seance.debut|date('m') == 7 %}{% set juilletCount = juilletCount + 1 %}{% endif %}
{%if seance.debut|date('m') == 8 %}{% set aoutCount = aoutCount + 1 %}{% endif %}
{%if seance.debut|date('m') == 9 %}{% set septembreCount = septembreCount + 1 %}{% endif %}
{%if seance.debut|date('m') == 10 %}{% set octobreCount = octobreCount + 1 %}{% endif %}
{%if seance.debut|date('m') == 11%}{% set novembreCount = novembreCount + 1 %}{% endif %}
{%if seance.debut|date('m') == 12 %}{% set decembreCount = decembreCount + 1 %}{% endif %}
{% endfor %}

        Morris.Area({
        element: 'morris-area-chart',
                data: [{
                period: '2018-Q1',
                        total:{{janvierCount}}
                }, {
                period: '2018-02',
                        total:{{fevrierCount}}
                }, {
                period: '2018-03',
                        total:{{marsCount}}
                }, {
                period: '2018-04',
                        total:{{avrilCount}}
                }, {
                period: '2018-05',
                        total:{{maiCount}}
                }, {
                period: '2018-06',
                        total:{{juinCount}}
                }, {
                period: '2018-07',
                        total:{{juilletCount}}
                }, {
                period: '2018-08',
                        total:{{aoutCount}}
                }, {
                period: '2018-09',
                        total:{{septembreCount}}
                }, {
                period: '2018 - 10',
                        total:{{octobreCount}}
                }, {
                period: '2018-11',
                        total:{{novembreCount}}
                }, {
                period: '2018-12',
                        total:{{decembreCount}}
                }],
                xkey: 'period',
                ykeys: ['total'],
                pointSize: 2,
                labels: ['Total séances '],
                hideHover: 'auto',
                resize: true

        });
</script>
{% endblock %}

", "User/Dashboard.html.twig", "/Applications/MAMP/htdocs/Finale/coachme/app/Resources/views/User/Dashboard.html.twig");
    }
}
