<?php

/* BaseAdmin.html.twig */
class __TwigTemplate_7f6d6f9911ab61248d513e9b8c134aea751ab8491283de5902020872994ffb36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'titre' => array($this, 'block_titre'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BaseAdmin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BaseAdmin.html.twig"));

        // line 1
        echo "<html lang=\"fr\">


    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">

        <link href=\"/Sb-Admin-2/vendor/metisMenu/metisMenu.min.css\" rel=\"stylesheet\">
        <link href=\"/CSS/sb-admin-2.css\" rel=\"stylesheet\">
        <link href=\"/Sb-Admin-2/vendor/morrisjs/morris.css\" rel=\"stylesheet\">
        <link href=\"/Sb-Admin-2/vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
        <link href=\"/Sb-Admin-2/vendor/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">

        ";
        // line 17
        $this->displayBlock('css', $context, $blocks);
        // line 18
        echo "
        <title>";
        // line 19
        $this->displayBlock('titre', $context, $blocks);
        echo "</title>

    </head>

    <body>
        <div id=\"wrapper\">
            <nav class=\"navbar navbar-default navbar-static-top\" role=\"navigation\" style=\"height: 20; margin-bottom: 0\">

                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" style=\"color: #b00000;  letter-spacing: 2px; font-weight: bold;\" href=\"/coach/dashboard\">
                        COACH'ME/";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "
                    </a>
                </div>

                <ul class=\"nav navbar-top-links navbar-right\">

                    <table>
                        <tr>
                            <td  style=\"width: 100px;\"><a style=\"color: #b00000\" href=\"#\"><i class=\"fa fa-user fa-fw\"></i> ";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "  </a>
                            </td>
                            <td style=\"width: 150px;\"><a style=\"color: #b00000\" href=\"/coach/profil\"><i class=\"fa fa-gear fa-fw\"></i> Mon compte</a>
                            </td>
                            <td style=\"width: 150px;\"> <a  style=\"color: #b00000\" href=\"/logout\"> <i class=\"fa fa-sign-out fa-fw\"> </i>Se deconnecter</a>

                            </td>

                        </tr>
                    </table>
                </ul>

                <div class=\"navbar-default sidebar\" role=\"navigation\">
                    <div class=\"sidebar-nav navbar-collapse\">
                        <ul class=\"nav\" id=\"side-menu\">
                            <li>
                                <a style=\"color: #b00000\" href=\"/coach/dashboard\"><i class=\"fa fa-dashboard fa-fw\"></i> Dashboard</a>
                            </li>
                            <li>
                                <a style=\"color: #b00000\"  href=\"/coach/monprogramme\"><i class=\"fa fa-bar-chart-o fa-fw\"></i> Mes programmes  </a>
                            </li>
                            <li>
                                <a style=\"color: #b00000\"  href=\"/coach/ajouterprogramme\"><i class=\"fa  fa-plus   fa-fw\"></i> Nouveau programme  </a>
                            </li>

                            <li>
                                <a style=\"color: #b00000\"  href=\"/coach/messeances\"><i class=\"fa fa-bolt fa-fw\"></i> Mes séances</a>
                            </li>
                            <li>
                                <a style=\"color: #b00000\"  href=\"/coach/ajouterseance\"><i class=\"fa  fa-plus   fa-fw\"></i> Nouvelle seance  </a>
                            </li>
                            <li>
                                <a style=\"color: #b00000\" href=\"/coach/calendrier\"><i class=\"fa fa-table fa-fw\"></i> Calendrier</a>
                            </li>
                            <li>
                                <a style=\"color: #b00000\" href=\"/coach/mesperformances\"><i class=\"fa fa-edit fa-fw\"></i> Mes performances</a>
                            </li>
                            <li>
                                <a style=\"color: #b00000\" href=\"/coach/boutique\"><i class=\"glyphicon  glyphicon-shopping-cart\"></i> Boutique </a> 
                            </li>
                            <li>
                                <a href=\"#\" style=\"color: #b00000\" ><i class=\"fa fa-sitemap fa-fw\"></i> Tout les programmes<span class=\"fa arrow\"></span></a>
                                <ul class=\"nav nav-second-level\">
                                    <li>
                                        <a href=\"/coach/ficheprogramme/force\">Force</a>
                                    </li>
                                    <li>
                                        <a href=\"/coach/ficheprogramme/endurance\">Endurance</a>
                                    </li>
                                    <li>
                                        <a href=\"/coach/ficheprogramme/minceur\">Minceur</a>
                                    </li>
                                    <li>
                                        <a href=\"/coach/ficheprogramme/detox\">Detox</a>
                                    </li>
                                    <li>
                                        <a href=\"/coach/ficheprogramme/prisedemasse\">Prise de masse musculaire</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a style=\"color: #b00000\"  href=\"/logout\"> <i class=\"fa fa-sign-out fa-fw\"> </i>Se deconnecter</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /.navbar-static-side -->
            </nav>  

            <div id=\"page-wrapper\">     
                ";
        // line 114
        $this->displayBlock('body', $context, $blocks);
        // line 116
        echo "    
            </div>     
        </div> 
        <div>
            <footer>
                ";
        // line 121
        $this->displayBlock('footer', $context, $blocks);
        // line 124
        echo "            </footer>
        </div>

        <script src=\"/Sb-Admin-2/vendor/jquery/jquery.min.js\"></script>
        <script src=\"/Sb-Admin-2/vendor/bootstrap/js/bootstrap.min.js\"></script>
        <script src=\"/Sb-Admin-2/vendor/metisMenu/metisMenu.min.js\"></script>
        <script src=\"/Sb-Admin-2/vendor/raphael/raphael.min.js\"></script>
        <script src=\"/Sb-Admin-2/vendor/morrisjs/morris.min.js\"></script>
        <script src=\"/Sb-Admin-2/dist/js/sb-admin-2.js\"></script>  

        ";
        // line 134
        $this->displayBlock('js', $context, $blocks);
        // line 137
        echo "

    </body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 17
    public function block_css($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_titre($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo "baseUser.html.twig";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 114
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 115
        echo "                    Block BODY basedashboard.html.twig
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 121
    public function block_footer($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 122
        echo "                    footer base anonyme html twig
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 134
    public function block_js($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        echo "  

        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "BaseAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 134,  261 => 122,  252 => 121,  241 => 115,  232 => 114,  214 => 19,  196 => 17,  182 => 137,  180 => 134,  168 => 124,  166 => 121,  159 => 116,  157 => 114,  83 => 43,  72 => 35,  53 => 19,  50 => 18,  48 => 17,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html lang=\"fr\">


    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">

        <link href=\"/Sb-Admin-2/vendor/metisMenu/metisMenu.min.css\" rel=\"stylesheet\">
        <link href=\"/CSS/sb-admin-2.css\" rel=\"stylesheet\">
        <link href=\"/Sb-Admin-2/vendor/morrisjs/morris.css\" rel=\"stylesheet\">
        <link href=\"/Sb-Admin-2/vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
        <link href=\"/Sb-Admin-2/vendor/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">

        {% block css %} {% endblock%}

        <title>{% block titre %}baseUser.html.twig{% endblock%}</title>

    </head>

    <body>
        <div id=\"wrapper\">
            <nav class=\"navbar navbar-default navbar-static-top\" role=\"navigation\" style=\"height: 20; margin-bottom: 0\">

                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" style=\"color: #b00000;  letter-spacing: 2px; font-weight: bold;\" href=\"/coach/dashboard\">
                        COACH'ME/{{ app.user.username  }}
                    </a>
                </div>

                <ul class=\"nav navbar-top-links navbar-right\">

                    <table>
                        <tr>
                            <td  style=\"width: 100px;\"><a style=\"color: #b00000\" href=\"#\"><i class=\"fa fa-user fa-fw\"></i> {{ app.user.username  }}  </a>
                            </td>
                            <td style=\"width: 150px;\"><a style=\"color: #b00000\" href=\"/coach/profil\"><i class=\"fa fa-gear fa-fw\"></i> Mon compte</a>
                            </td>
                            <td style=\"width: 150px;\"> <a  style=\"color: #b00000\" href=\"/logout\"> <i class=\"fa fa-sign-out fa-fw\"> </i>Se deconnecter</a>

                            </td>

                        </tr>
                    </table>
                </ul>

                <div class=\"navbar-default sidebar\" role=\"navigation\">
                    <div class=\"sidebar-nav navbar-collapse\">
                        <ul class=\"nav\" id=\"side-menu\">
                            <li>
                                <a style=\"color: #b00000\" href=\"/coach/dashboard\"><i class=\"fa fa-dashboard fa-fw\"></i> Dashboard</a>
                            </li>
                            <li>
                                <a style=\"color: #b00000\"  href=\"/coach/monprogramme\"><i class=\"fa fa-bar-chart-o fa-fw\"></i> Mes programmes  </a>
                            </li>
                            <li>
                                <a style=\"color: #b00000\"  href=\"/coach/ajouterprogramme\"><i class=\"fa  fa-plus   fa-fw\"></i> Nouveau programme  </a>
                            </li>

                            <li>
                                <a style=\"color: #b00000\"  href=\"/coach/messeances\"><i class=\"fa fa-bolt fa-fw\"></i> Mes séances</a>
                            </li>
                            <li>
                                <a style=\"color: #b00000\"  href=\"/coach/ajouterseance\"><i class=\"fa  fa-plus   fa-fw\"></i> Nouvelle seance  </a>
                            </li>
                            <li>
                                <a style=\"color: #b00000\" href=\"/coach/calendrier\"><i class=\"fa fa-table fa-fw\"></i> Calendrier</a>
                            </li>
                            <li>
                                <a style=\"color: #b00000\" href=\"/coach/mesperformances\"><i class=\"fa fa-edit fa-fw\"></i> Mes performances</a>
                            </li>
                            <li>
                                <a style=\"color: #b00000\" href=\"/coach/boutique\"><i class=\"glyphicon  glyphicon-shopping-cart\"></i> Boutique </a> 
                            </li>
                            <li>
                                <a href=\"#\" style=\"color: #b00000\" ><i class=\"fa fa-sitemap fa-fw\"></i> Tout les programmes<span class=\"fa arrow\"></span></a>
                                <ul class=\"nav nav-second-level\">
                                    <li>
                                        <a href=\"/coach/ficheprogramme/force\">Force</a>
                                    </li>
                                    <li>
                                        <a href=\"/coach/ficheprogramme/endurance\">Endurance</a>
                                    </li>
                                    <li>
                                        <a href=\"/coach/ficheprogramme/minceur\">Minceur</a>
                                    </li>
                                    <li>
                                        <a href=\"/coach/ficheprogramme/detox\">Detox</a>
                                    </li>
                                    <li>
                                        <a href=\"/coach/ficheprogramme/prisedemasse\">Prise de masse musculaire</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a style=\"color: #b00000\"  href=\"/logout\"> <i class=\"fa fa-sign-out fa-fw\"> </i>Se deconnecter</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /.navbar-static-side -->
            </nav>  

            <div id=\"page-wrapper\">     
                {% block body %}
                    Block BODY basedashboard.html.twig
                {% endblock body %}    
            </div>     
        </div> 
        <div>
            <footer>
                {% block footer %}
                    footer base anonyme html twig
                {% endblock footer %}
            </footer>
        </div>

        <script src=\"/Sb-Admin-2/vendor/jquery/jquery.min.js\"></script>
        <script src=\"/Sb-Admin-2/vendor/bootstrap/js/bootstrap.min.js\"></script>
        <script src=\"/Sb-Admin-2/vendor/metisMenu/metisMenu.min.js\"></script>
        <script src=\"/Sb-Admin-2/vendor/raphael/raphael.min.js\"></script>
        <script src=\"/Sb-Admin-2/vendor/morrisjs/morris.min.js\"></script>
        <script src=\"/Sb-Admin-2/dist/js/sb-admin-2.js\"></script>  

        {% block js %}  

        {% endblock js%}


    </body>

</html>", "BaseAdmin.html.twig", "/Applications/MAMP/htdocs/Finale/coachme/app/Resources/views/BaseAdmin.html.twig");
    }
}
