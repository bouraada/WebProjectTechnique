<?php

/* :LandingPage:index.html.twig */
class __TwigTemplate_d6e185a193dfd4d893575caf410d845f756a9ef495ac7bbc8ab1198a5a9cefd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LandingPage.html.twig", ":LandingPage:index.html.twig", 1);
        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LandingPage.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":LandingPage:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":LandingPage:index.html.twig"));

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

        echo "Acceuil";
        
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
    
    <nav class=\"navbar navbar-expand-lg navbar-light fixed-top\" id=\"mainNav\">
        <div class=\"container\">
            <a class=\"navbar-brand js-scroll-trigger\" href=\"/acceuil\">Coach'Me</a>
            <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                Menu
                <i class=\"fa fa-bars\"></i>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
                <ul class=\"navbar-nav ml-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link js-scroll-trigger\" href=\"#aPropos\">A Propos</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link js-scroll-trigger\" href=\"#inscription\">Inscription</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link js-scroll-trigger\" href=\"#contact\">Contact</a>
                    </li>

                    ";
        // line 26
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY"))) {
            // line 27
            echo "                        <li>
                            <a class=\"nav-link js-scroll-trigger\" href=\"/dashboard\"> Dashboard </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link js-scroll-trigger\" href=\"";
            // line 31
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                                ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " :
                                <i class=\"fa fa-fw fa-sign-out\"> </i>
                            </a>
                        </li>
                    ";
        }
        // line 37
        echo "
                    ";
        // line 38
        if (( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED") &&  !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY"))) {
            // line 39
            echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link js-scroll-trigger\" href=\"/login\"> Connexion </a>
                        </li>
                    ";
        }
        // line 43
        echo "                </ul>
            </div>
        </div>
    </nav>
    <header class=\"masthead\">
        <div class=\"intro-body\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12 mx-auto\">
                        <h2 class=\"brand-heading\">Coach'Me </h2>
                        <p class=\"intro-text\"> Votre entraineur a porté de main  <i class=\"fa fa-gittip fa-fw\"></i></p>
                        <a href=\"#aPropos\" class=\"btn btn-circle js-scroll-trigger\">
                            <i class=\"fa fa-angle-double-down animated\"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section id=\"aPropos\" class=\"content-section text-center\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 mx-auto\">
                    <h2>A PROPOS DE Coach'Me</h2>
                    <p>Coach'Me est une application web développé en Symfony 3.4 par l'équipe numero 6, dans le cadre du projet technique option web, du M2
                        <a href=\"https://www.hitema.fr/formation-developpeur-application-mobile-et-iot/\"> Developpement Logiciel</a> à l'HITEMA </p>
                    <p>Ceci est une plateforme en ligne permettant de mettre en relation des coachs et des utilisateurs qui souhaitent suivre un ou plusieurs programmes.</p>
                                    </div>
            </div>
        </div>
    </section>


    <section id=\"inscription\" class=\"download-section content-section text-center\">
        <div class=\"container\">
            <div class=\"col-lg-8 mx-auto\">
                <h2>Pas encore abonné ?</h2>
                <p>Rejoignez-nous, et profitez d'une experience unique </p>
                <a href=\"/register\" class=\"btn btn-default btn-lg\">Inscription</a>
                <h1> </h1>
                <p>Vous-avez déja un compte ? </p>
                <a href=\"/login\" class=\"btn btn-default btn-lg\">Connexion</a>
            </h1>
        </div>
    </section>

    <section id=\"contact\" class=\"content-section text-center\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 mx-auto\">
                    <h2>CONTACTEZ-NOUS </h2>
                    <p>Nos services restent à votre disposition sur notre site officiel ou sur le web </p>
                    <ul class=\"list-inline banner-social-buttons\">
                        <li class=\"list-inline-item\">
                            <a href=\"https://github.com/bouraada/WebProjectTechnique\" class=\"btn btn-default btn-lg\">
                                <i class=\"fa fa-github fa-fw\"></i>
                                <span class=\"network-name\">GitHub</span>
                            </a>
                        </li>
                        <li class=\"list-inline-item\">
                            <a href=\"https://fr-fr.facebook.com/ecolehitema/\" class=\"btn btn-default btn-lg\">
                                <i class=\"fa fa-facebook fa-fw\"></i>
                                <span class=\"network-name\">Facebook</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return ":LandingPage:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 43,  115 => 39,  113 => 38,  110 => 37,  102 => 32,  98 => 31,  92 => 27,  90 => 26,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'LandingPage.html.twig' %}

{% block titre %}Acceuil{% endblock%}

{% block body %} 
    
    <nav class=\"navbar navbar-expand-lg navbar-light fixed-top\" id=\"mainNav\">
        <div class=\"container\">
            <a class=\"navbar-brand js-scroll-trigger\" href=\"/acceuil\">Coach'Me</a>
            <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                Menu
                <i class=\"fa fa-bars\"></i>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
                <ul class=\"navbar-nav ml-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link js-scroll-trigger\" href=\"#aPropos\">A Propos</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link js-scroll-trigger\" href=\"#inscription\">Inscription</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link js-scroll-trigger\" href=\"#contact\">Contact</a>
                    </li>

                    {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") or is_granted(\"IS_AUTHENTICATED_FULLY\") %}
                        <li>
                            <a class=\"nav-link js-scroll-trigger\" href=\"/dashboard\"> Dashboard </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link js-scroll-trigger\" href=\"{{ path('fos_user_security_logout') }}\">
                                {{ app.user.username}} :
                                <i class=\"fa fa-fw fa-sign-out\"> </i>
                            </a>
                        </li>
                    {% endif %}

                    {% if not is_granted(\"IS_AUTHENTICATED_REMEMBERED\") and not is_granted(\"IS_AUTHENTICATED_FULLY\") %}
                        <li class=\"nav-item\">
                            <a class=\"nav-link js-scroll-trigger\" href=\"/login\"> Connexion </a>
                        </li>
                    {% endif %}
                </ul>
            </div>
        </div>
    </nav>
    <header class=\"masthead\">
        <div class=\"intro-body\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12 mx-auto\">
                        <h2 class=\"brand-heading\">Coach'Me </h2>
                        <p class=\"intro-text\"> Votre entraineur a porté de main  <i class=\"fa fa-gittip fa-fw\"></i></p>
                        <a href=\"#aPropos\" class=\"btn btn-circle js-scroll-trigger\">
                            <i class=\"fa fa-angle-double-down animated\"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section id=\"aPropos\" class=\"content-section text-center\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 mx-auto\">
                    <h2>A PROPOS DE Coach'Me</h2>
                    <p>Coach'Me est une application web développé en Symfony 3.4 par l'équipe numero 6, dans le cadre du projet technique option web, du M2
                        <a href=\"https://www.hitema.fr/formation-developpeur-application-mobile-et-iot/\"> Developpement Logiciel</a> à l'HITEMA </p>
                    <p>Ceci est une plateforme en ligne permettant de mettre en relation des coachs et des utilisateurs qui souhaitent suivre un ou plusieurs programmes.</p>
                                    </div>
            </div>
        </div>
    </section>


    <section id=\"inscription\" class=\"download-section content-section text-center\">
        <div class=\"container\">
            <div class=\"col-lg-8 mx-auto\">
                <h2>Pas encore abonné ?</h2>
                <p>Rejoignez-nous, et profitez d'une experience unique </p>
                <a href=\"/register\" class=\"btn btn-default btn-lg\">Inscription</a>
                <h1> </h1>
                <p>Vous-avez déja un compte ? </p>
                <a href=\"/login\" class=\"btn btn-default btn-lg\">Connexion</a>
            </h1>
        </div>
    </section>

    <section id=\"contact\" class=\"content-section text-center\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 mx-auto\">
                    <h2>CONTACTEZ-NOUS </h2>
                    <p>Nos services restent à votre disposition sur notre site officiel ou sur le web </p>
                    <ul class=\"list-inline banner-social-buttons\">
                        <li class=\"list-inline-item\">
                            <a href=\"https://github.com/bouraada/WebProjectTechnique\" class=\"btn btn-default btn-lg\">
                                <i class=\"fa fa-github fa-fw\"></i>
                                <span class=\"network-name\">GitHub</span>
                            </a>
                        </li>
                        <li class=\"list-inline-item\">
                            <a href=\"https://fr-fr.facebook.com/ecolehitema/\" class=\"btn btn-default btn-lg\">
                                <i class=\"fa fa-facebook fa-fw\"></i>
                                <span class=\"network-name\">Facebook</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </section>
{% endblock %}
", ":LandingPage:index.html.twig", "/Applications/MAMP/htdocs/WebProject/ProjetTechniqueFinale/ProjetTechniqueFinale/app/Resources/views/LandingPage/index.html.twig");
    }
}
