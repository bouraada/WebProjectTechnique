<?php

/* FOSUserBundle/views/Registration/register.html.twig */
class __TwigTemplate_f252864b575541a7b3ae0a8fa57d6b1fb580162073510a0a08f5985ae2ee9528 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle/views/Registration/register.html.twig", 1);
        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle/views/Registration/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle/views/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_titre($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo " inscription ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 9
        echo "    <div class=\"login\">
        ";
        // line 10
        if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 11
            echo "            <h1>Inscription</h1>
            <form action=\"";
            // line 12
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\" method=\"POST\" class=\"form-horizontal\" role=\"form\">
                    ";
            // line 13
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
                        <div class=\"form-group\">
                            <label for=\"username\" class=\"col-md-2 control_label\">Login :</label>
                            <div class=\"col-md-3\">
                                <input class=\"form-control\" type=\"text\" id=\"username\" name=\"fos_user_registration_form[username]\" required=\"required\" />
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"email\" class=\"col-md-2 control_label\">Email :</label>
                            <div class=\"col-md-3\">
                                <input class=\"form-control\" type=\"email\" id=\"email\" name=\"fos_user_registration_form[email]\" required=\"required\" />
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"plainPassword_first\" class=\"col-md-2 control_label\">Mot de passe :</label>
                            <div class=\"col-md-3\">
                                <input class=\"form-control\" type=\"password\" id=\"plainPassword_first\" name=\"fos_user_registration_form[plainPassword][first]\" value=\"Hedwige_45Hp\" required=\"required\" />
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"plainPassword_second\" class=\"col-md-2 control_label\">Confirmation du mot de passe :</label>
                            <div class=\"col-md-3\">
                                <input class=\"form-control\" type=\"password\" id=\"plainPassword_second\" name=\"fos_user_registration_form[plainPassword][second]\" value=\"Hedwige_45Hp\" required=\"required\" />
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"col-md-offset-2 col-md-10\">
                                <button type=\"submit\" class=\"btn btn-primary\">Valider <span class=\"glyphicon glyphicon-ok\"></span></button>
                            </div>
                        </div>
                    ";
            // line 43
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'widget');
            echo "
                </form>
        ";
        }
        // line 46
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle/views/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 46,  113 => 43,  80 => 13,  76 => 12,  73 => 11,  71 => 10,  68 => 9,  59 => 8,  41 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block titre %} inscription {% endblock%}


{% block fos_user_content %}
    <div class=\"login\">
        {% if not is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
            <h1>Inscription</h1>
            <form action=\"{{ path('fos_user_registration_register') }}\" method=\"POST\" class=\"form-horizontal\" role=\"form\">
                    {{form_errors(form)}}
                        <div class=\"form-group\">
                            <label for=\"username\" class=\"col-md-2 control_label\">Login :</label>
                            <div class=\"col-md-3\">
                                <input class=\"form-control\" type=\"text\" id=\"username\" name=\"fos_user_registration_form[username]\" required=\"required\" />
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"email\" class=\"col-md-2 control_label\">Email :</label>
                            <div class=\"col-md-3\">
                                <input class=\"form-control\" type=\"email\" id=\"email\" name=\"fos_user_registration_form[email]\" required=\"required\" />
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"plainPassword_first\" class=\"col-md-2 control_label\">Mot de passe :</label>
                            <div class=\"col-md-3\">
                                <input class=\"form-control\" type=\"password\" id=\"plainPassword_first\" name=\"fos_user_registration_form[plainPassword][first]\" value=\"Hedwige_45Hp\" required=\"required\" />
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"plainPassword_second\" class=\"col-md-2 control_label\">Confirmation du mot de passe :</label>
                            <div class=\"col-md-3\">
                                <input class=\"form-control\" type=\"password\" id=\"plainPassword_second\" name=\"fos_user_registration_form[plainPassword][second]\" value=\"Hedwige_45Hp\" required=\"required\" />
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"col-md-offset-2 col-md-10\">
                                <button type=\"submit\" class=\"btn btn-primary\">Valider <span class=\"glyphicon glyphicon-ok\"></span></button>
                            </div>
                        </div>
                    {{ form_widget(form._token) }}
                </form>
        {% endif %}
    </div>
{% endblock fos_user_content %}
", "FOSUserBundle/views/Registration/register.html.twig", "/Applications/MAMP/htdocs/Finale/coachme/app/Resources/views/FOSUserBundle/views/Registration/register.html.twig");
    }
}
