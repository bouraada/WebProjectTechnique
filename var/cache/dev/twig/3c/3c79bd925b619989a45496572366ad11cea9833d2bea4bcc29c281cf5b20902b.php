<?php

/* :Admin:listejoueurs.html.twig */
class __TwigTemplate_dac25b906fe1391f795c8159f6c466b359696a264c731b28588a795176e61867 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", ":Admin:listejoueurs.html.twig", 1);
        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Admin:listejoueurs.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Admin:listejoueurs.html.twig"));

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

        echo " Mes joueurs ";
        
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

        // line 6
        echo "    <div id=\"page-wrapper\">

        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">
                    Mes joueurs :
                </h1>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\"> Joueurs disponible : </div>

                    <div class=\"panel-body\">
                        <table width=\"100%\" class=\"table table-striped table-bordered table-hover\" id=\"dataTables-example\">
                            <thead>
                                <tr>
                                    <th>Rendering engine</th>
                                    <th>Browser</th>
                                    <th>Platform(s)</th>
                                    <th>Engine version</th>
                                    <th>CSS grade</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr class=\"gradeA\">
                                    <td>Presto</td>
                                    <td>Opera 7.5</td>
                                    <td>Win 95+ / OSX.2+</td>
                                    <td class=\"center\">-</td>
                                    <td class=\"center\">A</td>
                                </tr>
                                <tr class=\"gradeC\">
                                    <td>Misc</td>
                                    <td>IE Mobile</td>
                                    <td>Windows Mobile 6</td>
                                    <td class=\"center\">-</td>
                                    <td class=\"center\">C</td>
                                </tr>
                                <tr class=\"gradeC\">
                                    <td>Misc</td>
                                    <td>PSP browser</td>
                                    <td>PSP</td>
                                    <td class=\"center\">-</td>
                                    <td class=\"center\">C</td>
                                </tr>
                                <tr class=\"gradeU\">
                                    <td>Other browsers</td>
                                    <td>All others</td>
                                    <td>-</td>
                                    <td class=\"center\">-</td>
                                    <td class=\"center\">U</td>
                                </tr>
                                <tr class=\"gradeA\">
                                    <td>Presto</td>
                                    <td>Opera 7.5</td>
                                    <td>Win 95+ / OSX.2+</td>
                                    <td class=\"center\">-</td>
                                    <td class=\"center\">A</td>
                                </tr>
                                <tr class=\"gradeC\">
                                    <td>Misc</td>
                                    <td>IE Mobile</td>
                                    <td>Windows Mobile 6</td>
                                    <td class=\"center\">-</td>
                                    <td class=\"center\">C</td>
                                </tr>
                                <tr class=\"gradeC\">
                                    <td>Misc</td>
                                    <td>PSP browser</td>
                                    <td>PSP</td>
                                    <td class=\"center\">-</td>
                                    <td class=\"center\">C</td>
                                </tr>
                                <tr class=\"gradeU\">
                                    <td>Other browsers</td>
                                    <td>All others</td>
                                    <td>-</td>
                                    <td class=\"center\">-</td>
                                    <td class=\"center\">U</td>
                                </tr>
                                <tr class=\"gradeA\">
                                    <td>Presto</td>
                                    <td>Opera 7.5</td>
                                    <td>Win 95+ / OSX.2+</td>
                                    <td class=\"center\">-</td>
                                    <td class=\"center\">A</td>
                                </tr>
                                <tr class=\"gradeC\">
                                    <td>Misc</td>
                                    <td>IE Mobile</td>
                                    <td>Windows Mobile 6</td>
                                    <td class=\"center\">-</td>
                                    <td class=\"center\">C</td>
                                </tr>
                                <tr class=\"gradeC\">
                                    <td>Misc</td>
                                    <td>PSP browser</td>
                                    <td>PSP</td>
                                    <td class=\"center\">-</td>
                                    <td class=\"center\">C</td>
                                </tr>
                                <tr class=\"gradeU\">
                                    <td>Other browsers</td>
                                    <td>All others</td>
                                    <td>-</td>
                                    <td class=\"center\">-</td>
                                    <td class=\"center\">U</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>

            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\"> Joueurs Indisponible : </div>

                    <div class=\"panel-body\">
                        <table width=\"100%\" class=\"table table-striped table-bordered table-hover\" id=\"dataTables-example\">
                            <thead>
                            <tr>
                                <th>Rendering engine</th>
                                <th>Browser</th>
                                <th>Platform(s)</th>
                                <th>Engine version</th>
                                <th>CSS grade</th>
                            </tr>
                            </thead>
                            <tbody>

                            <tr class=\"gradeA\">
                                <td>Presto</td>
                                <td>Opera 7.5</td>
                                <td>Win 95+ / OSX.2+</td>
                                <td class=\"center\">-</td>
                                <td class=\"center\">A</td>
                            </tr>
                            <tr class=\"gradeC\">
                                <td>Misc</td>
                                <td>IE Mobile</td>
                                <td>Windows Mobile 6</td>
                                <td class=\"center\">-</td>
                                <td class=\"center\">C</td>
                            </tr>
                            <tr class=\"gradeC\">
                                <td>Misc</td>
                                <td>PSP browser</td>
                                <td>PSP</td>
                                <td class=\"center\">-</td>
                                <td class=\"center\">C</td>
                            </tr>
                            <tr class=\"gradeU\">
                                <td>Other browsers</td>
                                <td>All others</td>
                                <td>-</td>
                                <td class=\"center\">-</td>
                                <td class=\"center\">U</td>
                            </tr>
                            <tr class=\"gradeA\">
                                <td>Presto</td>
                                <td>Opera 7.5</td>
                                <td>Win 95+ / OSX.2+</td>
                                <td class=\"center\">-</td>
                                <td class=\"center\">A</td>
                            </tr>
                            <tr class=\"gradeC\">
                                <td>Misc</td>
                                <td>IE Mobile</td>
                                <td>Windows Mobile 6</td>
                                <td class=\"center\">-</td>
                                <td class=\"center\">C</td>
                            </tr>
                            <tr class=\"gradeC\">
                                <td>Misc</td>
                                <td>PSP browser</td>
                                <td>PSP</td>
                                <td class=\"center\">-</td>
                                <td class=\"center\">C</td>
                            </tr>
                            <tr class=\"gradeU\">
                                <td>Other browsers</td>
                                <td>All others</td>
                                <td>-</td>
                                <td class=\"center\">-</td>
                                <td class=\"center\">U</td>
                            </tr>
                            <tr class=\"gradeA\">
                                <td>Presto</td>
                                <td>Opera 7.5</td>
                                <td>Win 95+ / OSX.2+</td>
                                <td class=\"center\">-</td>
                                <td class=\"center\">A</td>
                            </tr>
                            <tr class=\"gradeC\">
                                <td>Misc</td>
                                <td>IE Mobile</td>
                                <td>Windows Mobile 6</td>
                                <td class=\"center\">-</td>
                                <td class=\"center\">C</td>
                            </tr>
                            <tr class=\"gradeC\">
                                <td>Misc</td>
                                <td>PSP browser</td>
                                <td>PSP</td>
                                <td class=\"center\">-</td>
                                <td class=\"center\">C</td>
                            </tr>
                            <tr class=\"gradeU\">
                                <td>Other browsers</td>
                                <td>All others</td>
                                <td>-</td>
                                <td class=\"center\">-</td>
                                <td class=\"center\">U</td>
                            </tr>
                            </tbody>
                        </table>

                    </div>
                </div>

            </div>
        </div>

    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return ":Admin:listejoueurs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'baseAdmin.html.twig' %}

{% block titre %} Mes joueurs {%endblock%}

{% block body %}
    <div id=\"page-wrapper\">

        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">
                    Mes joueurs :
                </h1>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\"> Joueurs disponible : </div>

                    <div class=\"panel-body\">
                        <table width=\"100%\" class=\"table table-striped table-bordered table-hover\" id=\"dataTables-example\">
                            <thead>
                                <tr>
                                    <th>Rendering engine</th>
                                    <th>Browser</th>
                                    <th>Platform(s)</th>
                                    <th>Engine version</th>
                                    <th>CSS grade</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr class=\"gradeA\">
                                    <td>Presto</td>
                                    <td>Opera 7.5</td>
                                    <td>Win 95+ / OSX.2+</td>
                                    <td class=\"center\">-</td>
                                    <td class=\"center\">A</td>
                                </tr>
                                <tr class=\"gradeC\">
                                    <td>Misc</td>
                                    <td>IE Mobile</td>
                                    <td>Windows Mobile 6</td>
                                    <td class=\"center\">-</td>
                                    <td class=\"center\">C</td>
                                </tr>
                                <tr class=\"gradeC\">
                                    <td>Misc</td>
                                    <td>PSP browser</td>
                                    <td>PSP</td>
                                    <td class=\"center\">-</td>
                                    <td class=\"center\">C</td>
                                </tr>
                                <tr class=\"gradeU\">
                                    <td>Other browsers</td>
                                    <td>All others</td>
                                    <td>-</td>
                                    <td class=\"center\">-</td>
                                    <td class=\"center\">U</td>
                                </tr>
                                <tr class=\"gradeA\">
                                    <td>Presto</td>
                                    <td>Opera 7.5</td>
                                    <td>Win 95+ / OSX.2+</td>
                                    <td class=\"center\">-</td>
                                    <td class=\"center\">A</td>
                                </tr>
                                <tr class=\"gradeC\">
                                    <td>Misc</td>
                                    <td>IE Mobile</td>
                                    <td>Windows Mobile 6</td>
                                    <td class=\"center\">-</td>
                                    <td class=\"center\">C</td>
                                </tr>
                                <tr class=\"gradeC\">
                                    <td>Misc</td>
                                    <td>PSP browser</td>
                                    <td>PSP</td>
                                    <td class=\"center\">-</td>
                                    <td class=\"center\">C</td>
                                </tr>
                                <tr class=\"gradeU\">
                                    <td>Other browsers</td>
                                    <td>All others</td>
                                    <td>-</td>
                                    <td class=\"center\">-</td>
                                    <td class=\"center\">U</td>
                                </tr>
                                <tr class=\"gradeA\">
                                    <td>Presto</td>
                                    <td>Opera 7.5</td>
                                    <td>Win 95+ / OSX.2+</td>
                                    <td class=\"center\">-</td>
                                    <td class=\"center\">A</td>
                                </tr>
                                <tr class=\"gradeC\">
                                    <td>Misc</td>
                                    <td>IE Mobile</td>
                                    <td>Windows Mobile 6</td>
                                    <td class=\"center\">-</td>
                                    <td class=\"center\">C</td>
                                </tr>
                                <tr class=\"gradeC\">
                                    <td>Misc</td>
                                    <td>PSP browser</td>
                                    <td>PSP</td>
                                    <td class=\"center\">-</td>
                                    <td class=\"center\">C</td>
                                </tr>
                                <tr class=\"gradeU\">
                                    <td>Other browsers</td>
                                    <td>All others</td>
                                    <td>-</td>
                                    <td class=\"center\">-</td>
                                    <td class=\"center\">U</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>

            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\"> Joueurs Indisponible : </div>

                    <div class=\"panel-body\">
                        <table width=\"100%\" class=\"table table-striped table-bordered table-hover\" id=\"dataTables-example\">
                            <thead>
                            <tr>
                                <th>Rendering engine</th>
                                <th>Browser</th>
                                <th>Platform(s)</th>
                                <th>Engine version</th>
                                <th>CSS grade</th>
                            </tr>
                            </thead>
                            <tbody>

                            <tr class=\"gradeA\">
                                <td>Presto</td>
                                <td>Opera 7.5</td>
                                <td>Win 95+ / OSX.2+</td>
                                <td class=\"center\">-</td>
                                <td class=\"center\">A</td>
                            </tr>
                            <tr class=\"gradeC\">
                                <td>Misc</td>
                                <td>IE Mobile</td>
                                <td>Windows Mobile 6</td>
                                <td class=\"center\">-</td>
                                <td class=\"center\">C</td>
                            </tr>
                            <tr class=\"gradeC\">
                                <td>Misc</td>
                                <td>PSP browser</td>
                                <td>PSP</td>
                                <td class=\"center\">-</td>
                                <td class=\"center\">C</td>
                            </tr>
                            <tr class=\"gradeU\">
                                <td>Other browsers</td>
                                <td>All others</td>
                                <td>-</td>
                                <td class=\"center\">-</td>
                                <td class=\"center\">U</td>
                            </tr>
                            <tr class=\"gradeA\">
                                <td>Presto</td>
                                <td>Opera 7.5</td>
                                <td>Win 95+ / OSX.2+</td>
                                <td class=\"center\">-</td>
                                <td class=\"center\">A</td>
                            </tr>
                            <tr class=\"gradeC\">
                                <td>Misc</td>
                                <td>IE Mobile</td>
                                <td>Windows Mobile 6</td>
                                <td class=\"center\">-</td>
                                <td class=\"center\">C</td>
                            </tr>
                            <tr class=\"gradeC\">
                                <td>Misc</td>
                                <td>PSP browser</td>
                                <td>PSP</td>
                                <td class=\"center\">-</td>
                                <td class=\"center\">C</td>
                            </tr>
                            <tr class=\"gradeU\">
                                <td>Other browsers</td>
                                <td>All others</td>
                                <td>-</td>
                                <td class=\"center\">-</td>
                                <td class=\"center\">U</td>
                            </tr>
                            <tr class=\"gradeA\">
                                <td>Presto</td>
                                <td>Opera 7.5</td>
                                <td>Win 95+ / OSX.2+</td>
                                <td class=\"center\">-</td>
                                <td class=\"center\">A</td>
                            </tr>
                            <tr class=\"gradeC\">
                                <td>Misc</td>
                                <td>IE Mobile</td>
                                <td>Windows Mobile 6</td>
                                <td class=\"center\">-</td>
                                <td class=\"center\">C</td>
                            </tr>
                            <tr class=\"gradeC\">
                                <td>Misc</td>
                                <td>PSP browser</td>
                                <td>PSP</td>
                                <td class=\"center\">-</td>
                                <td class=\"center\">C</td>
                            </tr>
                            <tr class=\"gradeU\">
                                <td>Other browsers</td>
                                <td>All others</td>
                                <td>-</td>
                                <td class=\"center\">-</td>
                                <td class=\"center\">U</td>
                            </tr>
                            </tbody>
                        </table>

                    </div>
                </div>

            </div>
        </div>

    </div>
{%endblock%}", ":Admin:listejoueurs.html.twig", "/Applications/MAMP/htdocs/WebProject/ProjetTechniqueFinale/ProjetTechniqueFinale/app/Resources/views/Admin/listejoueurs.html.twig");
    }
}
