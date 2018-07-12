<?php

/* BaseDashboard.html.twig */
class __TwigTemplate_de2cb4d6eef84fc725d105636946129394126a17c0d523f087b326cdc827f3c9 extends Twig_Template
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
        // line 1
        echo "

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

    <style>
      
    </style>

    <title>";
        // line 20
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
                                    <i class=\"fa fa-tasks fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                                </a>
                                <ul class=\"dropdown-menu dropdown-tasks\">
                                    <li>
                                        <a href=\"#\">
                                            <div>

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
                                    <i class=\"fa fa-user fa-fw\"></i><i class=\"fa fa-caret-down\"></i>
                                </a> 
                                <ul class=\"dropdown-menu dropdown-user\">
                                    <li><a href=\"#\"><i class=\"fa fa-user fa-fw\"></i> ";
        // line 130
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "username", array()), "html", null, true);
        echo "  </a>
                                    </li>
                                    <li><a href=\"/user/profil/";
        // line 132
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()), "html", null, true);
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
        // line 196
        $this->displayBlock('body', $context, $blocks);
        // line 198
        echo "    
        </div>     
    </div> 
    <div>
        <footer>
            ";
        // line 203
        $this->displayBlock('footer', $context, $blocks);
        // line 206
        echo "        </footer>
    </div>
            
    <script src=\"Sb-Admin-2/vendor/jquery/jquery.min.js\"></script>
    <script src=\"Sb-Admin-2/vendor/bootstrap/js/bootstrap.min.js\"></script>
    <script src=\"Sb-Admin-2/vendor/metisMenu/metisMenu.min.js\"></script>
    <script src=\"Sb-Admin-2/vendor/raphael/raphael.min.js\"></script>
    <script src=\"Sb-Admin-2/vendor/morrisjs/morris.min.js\"></script>
    <script src=\"Sb-Admin-2/data/morris-data.js\"></script>
    <script src=\"Sb-Admin-2/dist/js/sb-admin-2.js\"></script>   
    </body>

";
    }

    // line 20
    public function block_titre($context, array $blocks = array())
    {
        echo "baseUser.html.twig";
    }

    // line 196
    public function block_body($context, array $blocks = array())
    {
        // line 197
        echo "                Block BODY base_annonyme.html.twig
            ";
    }

    // line 203
    public function block_footer($context, array $blocks = array())
    {
        // line 204
        echo "                    footer base anonyme html twig
            ";
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
        return array (  272 => 204,  269 => 203,  264 => 197,  261 => 196,  255 => 20,  239 => 206,  237 => 203,  230 => 198,  228 => 196,  161 => 132,  156 => 130,  43 => 20,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "BaseDashboard.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/coachme/app/Resources/views/BaseDashboard.html.twig");
    }
}
