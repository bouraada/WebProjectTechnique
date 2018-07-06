<?php

/* BaseDashboard.html.twig */
class __TwigTemplate_59efaf3777fe9a7906256fa3f2fdc5a74ad5588435b12252f5a762e1a676bfdc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BaseDashboard.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BaseDashboard.html.twig"));

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

    <title>";
        // line 16
        $this->displayBlock('titre', $context, $blocks);
        echo "</title

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
                <a class=\"navbar-brand\" style=\"color: #0075b0;  letter-spacing: 2px; font-weight: bold;\" href=\"/user/home\">
                   COACH'ME
                </a>
            </div>

            <ul class=\"nav navbar-top-links navbar-right\">
                <table>
                    <tr>
                        <th>
                            <li class=\"dropdown\">
                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                    <i class=\"fa fa-envelope fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                                </a>
                                <ul class=\"dropdown-menu dropdown-messages\">
                                    <li>
                                        <a href=\"#\">
                                            <div>
                                                <strong>Nasser Al-Khelaïfi</strong>
                                                <span class=\"pull-right text-muted\">
                                                        <em>Yesterday</em>
                                                    </span>
                                            </div>
                                            <div>Bonjour entraineur, je te contacte a propos de la derniere journée de L1, la perfor...</div>
                                        </a>
                                    </li>
                                    <li class=\"divider\"></li>
                                    <li>
                                        <a href=\"#\">
                                            <div>
                                                <strong>Arsène Wenger</strong>
                                                <span class=\"pull-right text-muted\">
                                                        <em>Yesterday</em>
                                                    </span>
                                            </div>
                                            <div>Bonjour Emry, la derniere performance de PSG était magnifique, j'ai vraiment apr...</div>
                                        </a>
                                    </li>
                                    <li class=\"divider\"></li>
                                    <li>
                                        <a href=\"#\">
                                            <div>
                                                <strong>Zinédine Zidane</strong>
                                                <span class=\"pull-right text-muted\">
                                                        <em>Yesterday</em>
                                                    </span>
                                            </div>
                                            <div>Ola Yunai, sera tu a l'écoute de notre propositoin pour Veratti ? </div>
                                        </a>
                                    </li>
                                    <li class=\"divider\"></li>
                                    <li>
                                        <a class=\"text-center\" href=\"#\">
                                            <strong> Tout les messages</strong>
                                            <i class=\"fa fa-angle-right\"></i>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </th>
                        
                        <th>
                            <li class=\"dropdown\">
                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                    <i class=\"fa fa-tasks fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                                </a>
                                <ul class=\"dropdown-menu dropdown-tasks\">
                                    <li>
                                        <a href=\"#\">
                                            <div>
                                                <p>
                                                    <strong>Task 1</strong>
                                                    <span class=\"pull-right text-muted\">40% Complete</span>
                                                </p>
                                                <div class=\"progress progress-striped active\">
                                                    <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 40%\">
                                                        <span class=\"sr-only\">40% Complete (success)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=\"divider\"></li>
                                    <li>
                                        <a href=\"#\">
                                            <div>
                                                <p>
                                                    <strong>Task 2</strong>
                                                    <span class=\"pull-right text-muted\">20% Complete</span>
                                                </p>
                                                <div class=\"progress progress-striped active\">
                                                    <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 20%\">
                                                        <span class=\"sr-only\">20% Complete</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=\"divider\"></li>
                                    <li>
                                        <a href=\"#\">
                                            <div>
                                                <p>
                                                    <strong>Task 3</strong>
                                                    <span class=\"pull-right text-muted\">60% Complete</span>
                                                </p>
                                                <div class=\"progress progress-striped active\">
                                                    <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%\">
                                                        <span class=\"sr-only\">60% Complete (warning)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=\"divider\"></li>
                                    <li>
                                        <a href=\"#\">
                                            <div>
                                                <p>
                                                    <strong>Task 4</strong>
                                                    <span class=\"pull-right text-muted\">80% Complete</span>
                                                </p>
                                                <div class=\"progress progress-striped active\">
                                                    <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 80%\">
                                                        <span class=\"sr-only\">80% Complete (danger)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=\"divider\"></li>
                                    <li>
                                        <a class=\"text-center\" href=\"#\">
                                            <strong>See All Tasks</strong>
                                            <i class=\"fa fa-angle-right\"></i>
                                        </a>
                                    </li>
                                </ul>
                                <!-- /.dropdown-tasks -->
                            </li>
                        </th> 
                        <th>
                            <li class=\"dropdown\">
                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                    <i class=\"fa fa-bell fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                                </a>
                                <ul class=\"dropdown-menu dropdown-alerts\">
                                    <li>
                                        <a href=\"#\">
                                            <div>
                                                <i class=\"fa fa-comment fa-fw\"></i> New Comment
                                                <span class=\"pull-right text-muted small\">4 minutes ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=\"divider\"></li>
                                    <li>
                                        <a href=\"#\">
                                            <div>
                                                <i class=\"fa fa-twitter fa-fw\"></i> 3 New Followers
                                                <span class=\"pull-right text-muted small\">12 minutes ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=\"divider\"></li>
                                    <li>
                                        <a href=\"#\">
                                            <div>
                                                <i class=\"fa fa-envelope fa-fw\"></i> Message Sent
                                                <span class=\"pull-right text-muted small\">4 minutes ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=\"divider\"></li>
                                    <li>
                                        <a href=\"#\">
                                            <div>
                                                <i class=\"fa fa-tasks fa-fw\"></i> New Task
                                                <span class=\"pull-right text-muted small\">4 minutes ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=\"divider\"></li>
                                    <li>
                                        <a href=\"#\">
                                            <div>
                                                <i class=\"fa fa-upload fa-fw\"></i> Server Rebooted
                                                <span class=\"pull-right text-muted small\">4 minutes ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=\"divider\"></li>
                                    <li>
                                        <a class=\"text-center\" href=\"#\">
                                            <strong>See All Alerts</strong>
                                            <i class=\"fa fa-angle-right\"></i>
                                        </a>
                                    </li>
                                </ul>
                                <!-- /.dropdown-alerts -->
                            </li>
                        </th>
                        <th>
                            <li class=\"dropdown\">
                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\"> 
                                    <i class=\"fa fa-user fa-fw\"></i><i class=\"fa fa-caret-down\"></i>
                                </a> 
                                <ul class=\"dropdown-menu dropdown-user\">
                                    <li><a href=\"#\"><i class=\"fa fa-user fa-fw\"></i> ";
        // line 238
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "  </a>
                                    </li>
                                    <li><a href=\"/user/profil/";
        // line 240
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
        echo "\"><i class=\"fa fa-gear fa-fw\"></i> Mon compte</a>
                                    </li>
                                    <li class=\"divider\"></li>
                                    <li>                                
                                        <a href=\"/logout\"> <i class=\"fa fa-sign-out fa-fw\"> </i>Se deconnecter</a>

                                    </li>
                                </ul>

                            </li>
                        </th>
                    </tr>
                </table>
            </ul>

            <div class=\"navbar-default sidebar\" role=\"navigation\">
                <div class=\"sidebar-nav navbar-collapse\">
                    <ul class=\"nav\" id=\"side-menu\">
                        <li>
                            <a href=\"/user/home\"><i class=\"fa fa-dashboard fa-fw\"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href=\"/user/monprogramme\"><i class=\"fa fa-bar-chart-o fa-fw\"></i> Mon programme  </a>
                        </li>
                        <li>
                            <a href=\"/user/messeances\"><i class=\"fa fa-bolt fa-fw\"></i> Mes séances</a>
                        </li>
                        <li>
                            <a href=\"/user/calendrier\"><i class=\"fa fa-table fa-fw\"></i> Calendrier</a>
                        </li>
                        <li>
                            <a href=\"/user/mesperformances\"><i class=\"fa fa-edit fa-fw\"></i>Mes performances</a>
                        </li>
                        <li>
                            <a href=\"#\"><i class=\"fa fa-sitemap fa-fw\"></i> Tous les programmes<span class=\"fa arrow\"></span></a>
                            <ul class=\"nav nav-second-level\">
                                <li>
                                    <a href=\"/user/ficheprogramme/force\">Force</a>
                                </li>
                                <li>
                                    <a href=\"/user/ficheprogramme/endurance\">Endurance</a>
                                </li>
                                <li>
                                    <a href=\"/user/ficheprogramme/minceur\">Minceur</a>
                                </li>
                                <li>
                                    <a href=\"/user/ficheprogramme/detox\">Detox</a>
                                </li>
                                <li>
                                    <a href=\"/user/ficheprogramme/prisedemasse\">Prise de masse musculaire</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href=\"/logout\"> <i class=\"fa fa-sign-out fa-fw\"> </i>Se deconnecter</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /.navbar-static-side -->
        </nav>  
                
        <div id=\"page-wrapper\">     
            ";
        // line 304
        $this->displayBlock('body', $context, $blocks);
        // line 306
        echo "    
        </div>     
    </div> 
    <div>
        <footer>
            ";
        // line 311
        $this->displayBlock('footer', $context, $blocks);
        // line 314
        echo "        </footer>
    </div>
            
    <script src=\"/Sb-Admin-2/vendor/jquery/jquery.min.js\"></script>
    <script src=\"/Sb-Admin-2/vendor/bootstrap/js/bootstrap.min.js\"></script>
    <script src=\"/Sb-Admin-2/vendor/metisMenu/metisMenu.min.js\"></script>
    <script src=\"/Sb-Admin-2/vendor/raphael/raphael.min.js\"></script>
    <script src=\"/Sb-Admin-2/vendor/morrisjs/morris.min.js\"></script>
    <script src=\"/Sb-Admin-2/data/morris-data.js\"></script>
    <script src=\"/Sb-Admin-2/dist/js/sb-admin-2.js\"></script>
    
    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 16
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

    // line 304
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 305
        echo "                Block BODY base_annonyme.html.twig
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 311
    public function block_footer($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 312
        echo "                    footer base anonyme html twig
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "BaseDashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  423 => 312,  414 => 311,  403 => 305,  394 => 304,  376 => 16,  353 => 314,  351 => 311,  344 => 306,  342 => 304,  275 => 240,  270 => 238,  45 => 16,  28 => 1,);
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

    <title>{% block titre %}baseUser.html.twig{% endblock%}</title

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
                <a class=\"navbar-brand\" style=\"color: #0075b0;  letter-spacing: 2px; font-weight: bold;\" href=\"/user/home\">
                   COACH'ME
                </a>
            </div>

            <ul class=\"nav navbar-top-links navbar-right\">
                <table>
                    <tr>
                        <th>
                            <li class=\"dropdown\">
                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                    <i class=\"fa fa-envelope fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                                </a>
                                <ul class=\"dropdown-menu dropdown-messages\">
                                    <li>
                                        <a href=\"#\">
                                            <div>
                                                <strong>Nasser Al-Khelaïfi</strong>
                                                <span class=\"pull-right text-muted\">
                                                        <em>Yesterday</em>
                                                    </span>
                                            </div>
                                            <div>Bonjour entraineur, je te contacte a propos de la derniere journée de L1, la perfor...</div>
                                        </a>
                                    </li>
                                    <li class=\"divider\"></li>
                                    <li>
                                        <a href=\"#\">
                                            <div>
                                                <strong>Arsène Wenger</strong>
                                                <span class=\"pull-right text-muted\">
                                                        <em>Yesterday</em>
                                                    </span>
                                            </div>
                                            <div>Bonjour Emry, la derniere performance de PSG était magnifique, j'ai vraiment apr...</div>
                                        </a>
                                    </li>
                                    <li class=\"divider\"></li>
                                    <li>
                                        <a href=\"#\">
                                            <div>
                                                <strong>Zinédine Zidane</strong>
                                                <span class=\"pull-right text-muted\">
                                                        <em>Yesterday</em>
                                                    </span>
                                            </div>
                                            <div>Ola Yunai, sera tu a l'écoute de notre propositoin pour Veratti ? </div>
                                        </a>
                                    </li>
                                    <li class=\"divider\"></li>
                                    <li>
                                        <a class=\"text-center\" href=\"#\">
                                            <strong> Tout les messages</strong>
                                            <i class=\"fa fa-angle-right\"></i>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </th>
                        
                        <th>
                            <li class=\"dropdown\">
                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                    <i class=\"fa fa-tasks fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                                </a>
                                <ul class=\"dropdown-menu dropdown-tasks\">
                                    <li>
                                        <a href=\"#\">
                                            <div>
                                                <p>
                                                    <strong>Task 1</strong>
                                                    <span class=\"pull-right text-muted\">40% Complete</span>
                                                </p>
                                                <div class=\"progress progress-striped active\">
                                                    <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 40%\">
                                                        <span class=\"sr-only\">40% Complete (success)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=\"divider\"></li>
                                    <li>
                                        <a href=\"#\">
                                            <div>
                                                <p>
                                                    <strong>Task 2</strong>
                                                    <span class=\"pull-right text-muted\">20% Complete</span>
                                                </p>
                                                <div class=\"progress progress-striped active\">
                                                    <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 20%\">
                                                        <span class=\"sr-only\">20% Complete</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=\"divider\"></li>
                                    <li>
                                        <a href=\"#\">
                                            <div>
                                                <p>
                                                    <strong>Task 3</strong>
                                                    <span class=\"pull-right text-muted\">60% Complete</span>
                                                </p>
                                                <div class=\"progress progress-striped active\">
                                                    <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%\">
                                                        <span class=\"sr-only\">60% Complete (warning)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=\"divider\"></li>
                                    <li>
                                        <a href=\"#\">
                                            <div>
                                                <p>
                                                    <strong>Task 4</strong>
                                                    <span class=\"pull-right text-muted\">80% Complete</span>
                                                </p>
                                                <div class=\"progress progress-striped active\">
                                                    <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 80%\">
                                                        <span class=\"sr-only\">80% Complete (danger)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=\"divider\"></li>
                                    <li>
                                        <a class=\"text-center\" href=\"#\">
                                            <strong>See All Tasks</strong>
                                            <i class=\"fa fa-angle-right\"></i>
                                        </a>
                                    </li>
                                </ul>
                                <!-- /.dropdown-tasks -->
                            </li>
                        </th> 
                        <th>
                            <li class=\"dropdown\">
                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                    <i class=\"fa fa-bell fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                                </a>
                                <ul class=\"dropdown-menu dropdown-alerts\">
                                    <li>
                                        <a href=\"#\">
                                            <div>
                                                <i class=\"fa fa-comment fa-fw\"></i> New Comment
                                                <span class=\"pull-right text-muted small\">4 minutes ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=\"divider\"></li>
                                    <li>
                                        <a href=\"#\">
                                            <div>
                                                <i class=\"fa fa-twitter fa-fw\"></i> 3 New Followers
                                                <span class=\"pull-right text-muted small\">12 minutes ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=\"divider\"></li>
                                    <li>
                                        <a href=\"#\">
                                            <div>
                                                <i class=\"fa fa-envelope fa-fw\"></i> Message Sent
                                                <span class=\"pull-right text-muted small\">4 minutes ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=\"divider\"></li>
                                    <li>
                                        <a href=\"#\">
                                            <div>
                                                <i class=\"fa fa-tasks fa-fw\"></i> New Task
                                                <span class=\"pull-right text-muted small\">4 minutes ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=\"divider\"></li>
                                    <li>
                                        <a href=\"#\">
                                            <div>
                                                <i class=\"fa fa-upload fa-fw\"></i> Server Rebooted
                                                <span class=\"pull-right text-muted small\">4 minutes ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=\"divider\"></li>
                                    <li>
                                        <a class=\"text-center\" href=\"#\">
                                            <strong>See All Alerts</strong>
                                            <i class=\"fa fa-angle-right\"></i>
                                        </a>
                                    </li>
                                </ul>
                                <!-- /.dropdown-alerts -->
                            </li>
                        </th>
                        <th>
                            <li class=\"dropdown\">
                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\"> 
                                    <i class=\"fa fa-user fa-fw\"></i><i class=\"fa fa-caret-down\"></i>
                                </a> 
                                <ul class=\"dropdown-menu dropdown-user\">
                                    <li><a href=\"#\"><i class=\"fa fa-user fa-fw\"></i> {{ app.user.username  }}  </a>
                                    </li>
                                    <li><a href=\"/user/profil/{{ app.user.id }}\"><i class=\"fa fa-gear fa-fw\"></i> Mon compte</a>
                                    </li>
                                    <li class=\"divider\"></li>
                                    <li>                                
                                        <a href=\"/logout\"> <i class=\"fa fa-sign-out fa-fw\"> </i>Se deconnecter</a>

                                    </li>
                                </ul>

                            </li>
                        </th>
                    </tr>
                </table>
            </ul>

            <div class=\"navbar-default sidebar\" role=\"navigation\">
                <div class=\"sidebar-nav navbar-collapse\">
                    <ul class=\"nav\" id=\"side-menu\">
                        <li>
                            <a href=\"/user/home\"><i class=\"fa fa-dashboard fa-fw\"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href=\"/user/monprogramme\"><i class=\"fa fa-bar-chart-o fa-fw\"></i> Mon programme  </a>
                        </li>
                        <li>
                            <a href=\"/user/messeances\"><i class=\"fa fa-bolt fa-fw\"></i> Mes séances</a>
                        </li>
                        <li>
                            <a href=\"/user/calendrier\"><i class=\"fa fa-table fa-fw\"></i> Calendrier</a>
                        </li>
                        <li>
                            <a href=\"/user/mesperformances\"><i class=\"fa fa-edit fa-fw\"></i>Mes performances</a>
                        </li>
                        <li>
                            <a href=\"#\"><i class=\"fa fa-sitemap fa-fw\"></i> Tous les programmes<span class=\"fa arrow\"></span></a>
                            <ul class=\"nav nav-second-level\">
                                <li>
                                    <a href=\"/user/ficheprogramme/force\">Force</a>
                                </li>
                                <li>
                                    <a href=\"/user/ficheprogramme/endurance\">Endurance</a>
                                </li>
                                <li>
                                    <a href=\"/user/ficheprogramme/minceur\">Minceur</a>
                                </li>
                                <li>
                                    <a href=\"/user/ficheprogramme/detox\">Detox</a>
                                </li>
                                <li>
                                    <a href=\"/user/ficheprogramme/prisedemasse\">Prise de masse musculaire</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href=\"/logout\"> <i class=\"fa fa-sign-out fa-fw\"> </i>Se deconnecter</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /.navbar-static-side -->
        </nav>  
                
        <div id=\"page-wrapper\">     
            {% block body %}
                Block BODY base_annonyme.html.twig
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
    <script src=\"/Sb-Admin-2/data/morris-data.js\"></script>
    <script src=\"/Sb-Admin-2/dist/js/sb-admin-2.js\"></script>
    
    </body>
</html>
", "BaseDashboard.html.twig", "/Applications/MAMP/htdocs/WebProject/ProjetTechniqueFinale/ProjetTechniqueFinale/app/Resources/views/BaseDashboard.html.twig");
    }
}
