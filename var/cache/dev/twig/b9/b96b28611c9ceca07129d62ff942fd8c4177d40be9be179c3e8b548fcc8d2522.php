<?php

/* User/profil.html.twig */
class __TwigTemplate_76651f09caaaa9a3c5e1c6861c20fbbe54b9bb51ab456bf948c28ec61b083eaf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BaseDashboard.html.twig", "User/profil.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "User/profil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "User/profil.html.twig"));

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
                            <label class=\"col-md-4 control-label\" for=\"Prenom\">pseudo</label>  
                            <div class=\"col-md-4\">
                                <div class=\"input-group\">
                                    <div class=\"input-group-addon\">
                                        ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "
                                    </div>
                                </div>
                            </div>
                        </div>  

                        <div class=\"form-group\">
                            <label class=\"col-md-4 control-label\" for=\"Email Address\">Email Address</label>  
                            <div class=\"col-md-4\">
                                <div class=\"input-group\">
                                    <div class=\"input-group-addon\"> <i class=\"fa fa-user\"></i>
                                        ";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
        echo "
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"col-md-4 control-label\" for=\"pseudo\">Etat </label>  
                            <div class=\"col-md-4\">
                                <div class=\"input-group\">
                                    <div class=\"input-group-addon\">
                                        ";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "enabled", array()), "html", null, true);
        echo "
                                    </div>
                                </div>
                            </div>
                        </div>    


                        <div class=\"form-group\">
                            <label class=\"col-md-4 control-label\" for=\"Age\">Role</label>  
                            <div class=\"col-md-4\">
                                <div class=\"input-group\">
                                    <div class=\"input-group-addon\">
                                        ";
        // line 60
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 61
            echo "    Administrator
";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 63
            echo "    User
";
        } else {
            // line 65
            echo "    Anonymous
";
        }
        // line 67
        echo "                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"col-md-4 control-label\" for=\"Mobile\">Mobile</label>  
                            <div class=\"col-md-4\">
                                <div class=\"input-group\">
                                    <div class=\"input-group-addon\">
                                        ";
        // line 77
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "lastLogin", array()), "none", "none", null, null, "EEEE"), "html", null, true);
        echo "
                                        ";
        // line 78
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "lastLogin", array()), "h:m"), "html", null, true);
        echo "
                                    </div>
                                </div>


                            </div>
                        </div>

                    </fieldset>
                </form>
                <a class=\"btn btn-danger btn-block\" href=\" /profile/edit\"> Modifier votre profil</a>
                <a class=\"btn btn-danger btn-block\" href=\"/profile/change-password\">Modifier votre mot de passe</a>
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
        return "User/profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 78,  159 => 77,  147 => 67,  143 => 65,  139 => 63,  135 => 61,  133 => 60,  118 => 48,  104 => 37,  90 => 26,  59 => 5,  41 => 3,  11 => 1,);
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
                            <label class=\"col-md-4 control-label\" for=\"Prenom\">pseudo</label>  
                            <div class=\"col-md-4\">
                                <div class=\"input-group\">
                                    <div class=\"input-group-addon\">
                                        {{  app.user.username}}
                                    </div>
                                </div>
                            </div>
                        </div>  

                        <div class=\"form-group\">
                            <label class=\"col-md-4 control-label\" for=\"Email Address\">Email Address</label>  
                            <div class=\"col-md-4\">
                                <div class=\"input-group\">
                                    <div class=\"input-group-addon\"> <i class=\"fa fa-user\"></i>
                                        {{  app.user.email}}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"col-md-4 control-label\" for=\"pseudo\">Etat </label>  
                            <div class=\"col-md-4\">
                                <div class=\"input-group\">
                                    <div class=\"input-group-addon\">
                                        {{  app.user.enabled}}
                                    </div>
                                </div>
                            </div>
                        </div>    


                        <div class=\"form-group\">
                            <label class=\"col-md-4 control-label\" for=\"Age\">Role</label>  
                            <div class=\"col-md-4\">
                                <div class=\"input-group\">
                                    <div class=\"input-group-addon\">
                                        {% if is_granted('ROLE_ADMIN') %}
    Administrator
{% elseif is_granted('ROLE_USER') %}
    User
{% else %}
    Anonymous
{% endif %}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"col-md-4 control-label\" for=\"Mobile\">Mobile</label>  
                            <div class=\"col-md-4\">
                                <div class=\"input-group\">
                                    <div class=\"input-group-addon\">
                                        {{  app.user.lastLogin |localizeddate('none', 'none', null, null, 'EEEE')}}
                                        {{  app.user.lastLogin |date(\"h:m\")}}
                                    </div>
                                </div>


                            </div>
                        </div>

                    </fieldset>
                </form>
                <a class=\"btn btn-danger btn-block\" href=\" /profile/edit\"> Modifier votre profil</a>
                <a class=\"btn btn-danger btn-block\" href=\"/profile/change-password\">Modifier votre mot de passe</a>
            </div>
            <div class=\"col-md-2 hidden-xs\">
            </div>


        </div>
    </div>



    <script src=\"js/jquery.js\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"js/bootstrap.min.js\"></script>


{% endblock %}


", "User/profil.html.twig", "/Applications/MAMP/htdocs/Finale/coachme/app/Resources/views/User/profil.html.twig");
    }
}
