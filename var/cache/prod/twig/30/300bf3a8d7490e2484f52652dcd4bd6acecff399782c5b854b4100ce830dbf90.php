<?php

/* User/Dashboard.html.twig */
class __TwigTemplate_e8f82afa80e0edb5d4997d7b5ee4bd3947c8ba3de62c2f01203d3b2ff346c426 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BaseDashboard.html.twig", "User/Dashboard.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_titre($context, array $blocks = array())
    {
        echo "Mon profil";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        echo "   
            <div class=\"row\">
                <div class=\"col-lg-12\">
                        <h1 class=\"page-header\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "username", array()), "html", null, true);
        echo "</h1>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-lg-8\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <i class=\"fa fa-bar-chart-o fa-fw\"></i> Mes perfermances 
                        </div>
                        <!-- /.panel-heading -->
                        <div class=\"panel-body\">
                            <div id=\"morris-area-chart\"></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <i class=\"fa fa-bar-chart-o fa-fw\"></i> Séances a venir 
                        </div>
                        <div class=\"panel-body\">
                            <div class=\"row\">
                                <div>
                                    <div class=\"table-responsive\">
                                        <table class=\"table table-bordered table-hover table-striped\">
                                            <thead>
                                                <tr>
                                                    <th>Code</th>
                                                    <th>Date</th>
                                                    <th>Nombre d'excercices</th>
                                                    <th>Programme</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>3326</td>
                                                    <td>10/07/2013</td>
                                                    <td>5</td>
                                                    <td>Force</td>
                                                </tr>
                                                <tr>
                                                    <td>3326</td>
                                                    <td>14/07/2013</td>
                                                    <td>3</td>
                                                    <td>Force</td>
                                                </tr>
                                                <tr>
                                                    <td>3326</td>
                                                    <td>17/07/2013</td>
                                                    <td>4</td>
                                                    <td>Endurance</td>
                                                </tr>
                                                <tr>
                                                    <td>3326</td>
                                                    <td>21/07/2013</td>
                                                    <td>5</td>
                                                    <td>Force</td>
                                                </tr>
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
                <!-- /.col-lg-8 -->
                <div class=\"col-lg-4\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <i class=\"fa fa-bell fa-fw\"></i> Notifications Panel
                        </div>
                        <!-- /.panel-heading -->
                        <div class=\"panel-body\">
                            <div class=\"list-group\">
                                <a href=\"#\" class=\"list-group-item\">
                                    <i class=\"fa fa-comment fa-fw\"></i> New Comment
                                    <span class=\"pull-right text-muted small\"><em>4 minutes ago</em>
                                    </span>
                                </a>
                                <a href=\"#\" class=\"list-group-item\">
                                    <i class=\"fa fa-twitter fa-fw\"></i> 3 New Followers
                                    <span class=\"pull-right text-muted small\"><em>12 minutes ago</em>
                                    </span>
                                </a>
                                <a href=\"#\" class=\"list-group-item\">
                                    <i class=\"fa fa-envelope fa-fw\"></i> Message Sent
                                    <span class=\"pull-right text-muted small\"><em>27 minutes ago</em>
                                    </span>
                                </a>
                                <a href=\"#\" class=\"list-group-item\">
                                    <i class=\"fa fa-tasks fa-fw\"></i> New Task
                                    <span class=\"pull-right text-muted small\"><em>43 minutes ago</em>
                                    </span>
                                </a>
                                <a href=\"#\" class=\"list-group-item\">
                                    <i class=\"fa fa-upload fa-fw\"></i> Server Rebooted
                                    <span class=\"pull-right text-muted small\"><em>11:32 AM</em>
                                    </span>
                                </a>
                                <a href=\"#\" class=\"list-group-item\">
                                    <i class=\"fa fa-bolt fa-fw\"></i> Server Crashed!
                                    <span class=\"pull-right text-muted small\"><em>11:13 AM</em>
                                    </span>
                                </a>
                                <a href=\"#\" class=\"list-group-item\">
                                    <i class=\"fa fa-warning fa-fw\"></i> Server Not Responding
                                    <span class=\"pull-right text-muted small\"><em>10:57 AM</em>
                                    </span>
                                </a>
                                <a href=\"#\" class=\"list-group-item\">
                                    <i class=\"fa fa-shopping-cart fa-fw\"></i> New Order Placed
                                    <span class=\"pull-right text-muted small\"><em>9:49 AM</em>
                                    </span>
                                </a>
                                <a href=\"#\" class=\"list-group-item\">
                                    <i class=\"fa fa-money fa-fw\"></i> Payment Received
                                    <span class=\"pull-right text-muted small\"><em>Yesterday</em>
                                    </span>
                                </a>
                            </div>
                            <!-- /.list-group -->
                            <a href=\"#\" class=\"btn btn-default btn-block\">View All Alerts</a>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <i class=\"fa fa-bar-chart-o fa-fw\"></i> Avancement
                        </div>
                        <div class=\"panel-body\">
                            <div id=\"morris-donut-chart\"></div>
                            <a href=\"#\" class=\"btn btn-default btn-block\">View Details</a>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <div class=\"chat-panel panel panel-default\">
                        <div class=\"panel-heading\">
                            <i class=\"fa fa-comments fa-fw\"></i> Chat
                            <div class=\"btn-group pull-right\">
                                <button type=\"button\" class=\"btn btn-default btn-xs dropdown-toggle\" data-toggle=\"dropdown\">
                                    <i class=\"fa fa-chevron-down\"></i>
                                </button>
                                <ul class=\"dropdown-menu slidedown\">
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"fa fa-refresh fa-fw\"></i> Refresh
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"fa fa-check-circle fa-fw\"></i> Available
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"fa fa-times fa-fw\"></i> Busy
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"fa fa-clock-o fa-fw\"></i> Away
                                        </a>
                                    </li>
                                    <li class=\"divider\"></li>
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"fa fa-sign-out fa-fw\"></i> Sign Out
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class=\"panel-body\">
                            <ul class=\"chat\">
                                <li class=\"left clearfix\">
                                    <span class=\"chat-img pull-left\">
                                        <img src=\"http://placehold.it/50/55C1E7/fff\" alt=\"User Avatar\" class=\"img-circle\" />
                                    </span>
                                    <div class=\"chat-body clearfix\">
                                        <div class=\"header\">
                                            <strong class=\"primary-font\">Jack Sparrow</strong>
                                            <small class=\"pull-right text-muted\">
                                                <i class=\"fa fa-clock-o fa-fw\"></i> 12 mins ago
                                            </small>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                                <li class=\"right clearfix\">
                                    <span class=\"chat-img pull-right\">
                                        <img src=\"http://placehold.it/50/FA6F57/fff\" alt=\"User Avatar\" class=\"img-circle\" />
                                    </span>
                                    <div class=\"chat-body clearfix\">
                                        <div class=\"header\">
                                            <small class=\" text-muted\">
                                                <i class=\"fa fa-clock-o fa-fw\"></i> 13 mins ago</small>
                                            <strong class=\"pull-right primary-font\">Bhaumik Patel</strong>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                                <li class=\"left clearfix\">
                                    <span class=\"chat-img pull-left\">
                                        <img src=\"http://placehold.it/50/55C1E7/fff\" alt=\"User Avatar\" class=\"img-circle\" />
                                    </span>
                                    <div class=\"chat-body clearfix\">
                                        <div class=\"header\">
                                            <strong class=\"primary-font\">Jack Sparrow</strong>
                                            <small class=\"pull-right text-muted\">
                                                <i class=\"fa fa-clock-o fa-fw\"></i> 14 mins ago</small>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                                <li class=\"right clearfix\">
                                    <span class=\"chat-img pull-right\">
                                        <img src=\"http://placehold.it/50/FA6F57/fff\" alt=\"User Avatar\" class=\"img-circle\" />
                                    </span>
                                    <div class=\"chat-body clearfix\">
                                        <div class=\"header\">
                                            <small class=\" text-muted\">
                                                <i class=\"fa fa-clock-o fa-fw\"></i> 15 mins ago</small>
                                            <strong class=\"pull-right primary-font\">Bhaumik Patel</strong>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- /.panel-body -->
                        <div class=\"panel-footer\">
                            <div class=\"input-group\">
                                <input id=\"btn-input\" type=\"text\" class=\"form-control input-sm\" placeholder=\"Type your message here...\" />
                                <span class=\"input-group-btn\">
                                    <button class=\"btn btn-warning btn-sm\" id=\"btn-chat\">
                                        Send
                                    </button>
                                </span>
                            </div>
                        </div>
                        <!-- /.panel-footer -->
                    </div>
                    <!-- /.panel .chat-panel -->
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
            
";
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
        return array (  42 => 8,  35 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "User/Dashboard.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/coachme/app/Resources/views/User/Dashboard.html.twig");
    }
}
