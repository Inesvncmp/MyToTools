<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* dashboard/index-dash.html.twig */
class __TwigTemplate_09454ef85d2777abe83df8b13c947d17 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index-dash.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index-dash.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/index-dash.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Log in!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"css/dash.css\" rel=\"stylesheet\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <div class=\" container-fluid \">
        <div class=\"row align-middle \" >
            <div class=\"col-2 sidebar\">
                <div class=\"row\">
                    <h4 class=\"mg-tb1 text-center fs-2\">MyToTools</h4>
                </div>
                <div class=\"row\">

                    <p><img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/profilpic.png"), "html", null, true);
        echo "\" class=\"pp-size\"> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 17, $this->source); })()), "identifiant", [], "any", false, false, false, 17), "html", null, true);
        echo "</p>
                    <hr>
                </div>

                <div class=\"row\">
                    <div class=\"d-flex align-items-start\">
                        <div class=\"d-grid gap-1 col-12 mx-auto\">
                            <a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        echo "\" class=\"btn btn-primary  sidebar-btn align-middle\" type=\"button\" ><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"currentColor\" class=\"bi bi-house-heart align-middle\" viewBox=\"0 0 16 16\">
                                    <path fill-rule=\"evenodd\" d=\"M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.707L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.646a.5.5 0 0 0 .708-.707L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207l-5-5-5 5V13.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7.207Zm-5-.225C9.664 5.309 13.825 8.236 8 12 2.175 8.236 6.336 5.309 8 6.982Z\"/>
                                </svg> Dashboard</a>
                            <a class=\"btn btn-primary sidebar-btn align-middle mg-tb-xs\" type=\"button \"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-brightness-high align-middle\" viewBox=\"0 0 16 16\">
                                    <path d=\"M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z\"/>
                                </svg> Aujourd'hui</a>
                            <a class=\"btn btn-primary sidebar-btn align-middle\" type=\"button\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-calendar4-week align-middle\" viewBox=\"0 0 16 16\">
                                    <path d=\"M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1H2zm13 3H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V5z\"/>
                                    <path d=\"M11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-2 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z\"/>
                                </svg> Planifi??</a>
                        </div>
                    </div>
                    <hr class=\"mg-t1\">
                </div>
                <div class=\"row list-group-sidebar\">

                        <a class=\"btn btn-primary  sidebar-btn\"  data-bs-toggle=\"collapse\" href=\"#collapseExample\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapseExample\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-plus-circle\" viewBox=\"0 0 16 16\">
                                <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
                                <path d=\"M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z\"/>
                            </svg> Nouvelle liste

                        </a>


                    <div class=\"row\">
                        <div class=\"col\">
                            <div class=\"collapse\" id=\"collapseExample\">

                                    <div class=\"mb-3 mg-t1\">
                                        <label for=\"nomListe\" class=\"form-label\">Nom de la liste:</label>
                                        <input type=\"text\" class=\"form-control\" id=\"createList\" placeholder=\"Nouvelle liste\">
                                    </div>
                                    <button type=\"submit\" id=\"saveCreateList\" class=\"btn btn-primary\">Envoyer</button>

                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"row mg-t1\">
                    <ul id=\"list\" class=\"list-group list-group-sidebar \">
                        ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listes"]) || array_key_exists("listes", $context) ? $context["listes"] : (function () { throw new RuntimeError('Variable "listes" does not exist.', 65, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["liste"]) {
            // line 66
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_liste_list", ["listId" => twig_get_attribute($this->env, $this->source, $context["liste"], "id", [], "any", false, false, false, 66)]), "html", null, true);
            echo "\"><li class=\"list-group-item d-flex justify-content-between align-items-center\">
                                    ";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["liste"], "nomlist", [], "any", false, false, false, 67), "html", null, true);
            echo "
                                    <span class=\"badge bg-primary rounded-pill\">14</span><button type=\"submit\" class=\"btn btn-outline-danger supprimerliste\" data-listId=\"";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["liste"], "id", [], "any", false, false, false, 68), "html", null, true);
            echo "\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-trash\" viewBox=\"0 0 16 16\">
                                    <path d=\"M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z\"/>
                                    <path fill-rule=\"evenodd\" d=\"M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z\"/>
                                    </svg>
                                    </button>
                                </li></a>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['liste'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "                    </ul>
                </div>

            </div>

            <div class=\"col-10 \">
                <div class=\"row mg-t2 pdng-2 \">
                    <div class=\"card mb-3 shadow-lg p-3 mb-5 bg-body rounded\" >
                        <div class=\"row g-0\">
                            <div class=\"col-md-4\">
                                <img src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/today.png"), "html", null, true);
        echo "\" class=\"img-fluid rounded-start\" style=\"width: 25rem\" alt=\"...\">
                            </div>
                            <div class=\"col-md-8\">
                                <div class=\"card-body\">
                                    <ul class=\"list-group\">

                                            <li class=\"list-group-item\">
                                                <input class=\"form-check-input me-1\" type=\"checkbox\" value=\"\" aria-label=\"...\">
                                                Appeler Mr.GILBERT
                                            </li>
                                            <li class=\"list-group-item\">
                                                <input class=\"form-check-input me-1\" type=\"checkbox\" value=\"\" aria-label=\"...\">
                                                Envoyer devis
                                            </li>
                                            <li class=\"list-group-item\">
                                                <input class=\"form-check-input me-1\" type=\"checkbox\" value=\"\" aria-label=\"...\">
                                                Compl??ter la feuile de ...
                                            </li>
                                            <li class=\"list-group-item\">
                                                <input class=\"form-check-input me-1\" type=\"checkbox\" value=\"\" aria-label=\"...\">
                                                Un truc hyper important
                                            </li>
                                            <li class=\"list-group-item\">
                                                <input class=\"form-check-input me-1\" type=\"checkbox\" value=\"\" aria-label=\"...\">
                                                Un truc aussi important
                                            </li>
                                            <li class=\"list-group-item\">
                                                <input class=\"form-check-input me-1\" type=\"checkbox\" value=\"\" aria-label=\"...\">
                                                Acheter des sandales
                                            </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"row \">

                    <div class=\"col-6 pdng-l2 \">
                        <h4>Cr??er une t??che</h4>
                        <form method=\"post\">
                            <div class=\"mb-3 row\">
                                <label for=\"task_name\" class=\"col-sm-2 col-form-label\">Nom:</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" class=\"form-control\" id=\"task_name\">
                                </div>
                            </div>
                            <select class=\"form-select mg-t1\" aria-label=\"Default select example\" id=\"task_list\">
                                <option selected>Choisir une liste:</option>
                                ";
        // line 138
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listes"]) || array_key_exists("listes", $context) ? $context["listes"] : (function () { throw new RuntimeError('Variable "listes" does not exist.', 138, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["liste"]) {
            // line 139
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["liste"], "id", [], "any", false, false, false, 139), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["liste"], "nomlist", [], "any", false, false, false, 139), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['liste'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "
                            </select>

                            <select class=\"form-select mg-t1 mg-b1\" aria-label=\"Default select example\" id=\"task_priority\">
                                <option selected>Choisir un ordre d'importance</option>
                                <option value=\"Urgent\">Urgent</option>
                                <option value=\"Important\">Important</option>
                                <option value=\"Normal\">Normal</option>
                            </select>



                            <div class=\"d-grid\">
                                <button class=\"btn btb-lg btn-primary\" type=\"submit\" id=\"create_task\">Envoyer</button>
                            </div>

                        </form>

                    </div>

                    <div class=\"col-6 pdng-l2 pdng-r2\">
                        <h4 class=\"spc-b1\">Mes Listes :</h4>
                        <ul class=\"list-group\">
                            ";
        // line 164
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listes"]) || array_key_exists("listes", $context) ? $context["listes"] : (function () { throw new RuntimeError('Variable "listes" does not exist.', 164, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["liste"]) {
            // line 165
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_liste_list", ["listId" => twig_get_attribute($this->env, $this->source, $context["liste"], "id", [], "any", false, false, false, 165)]), "html", null, true);
            echo "\"><li class=\"list-group-item d-flex justify-content-between align-items-center\">
                                        ";
            // line 166
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["liste"], "nomlist", [], "any", false, false, false, 166), "html", null, true);
            echo "
                                        <span class=\"badge bg-primary rounded-pill\">14</span>
                                    </li></a>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['liste'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        echo "                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/index-dash.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  332 => 170,  322 => 166,  317 => 165,  313 => 164,  288 => 141,  277 => 139,  273 => 138,  219 => 87,  207 => 77,  192 => 68,  188 => 67,  183 => 66,  179 => 65,  135 => 24,  123 => 17,  113 => 9,  103 => 8,  89 => 4,  79 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Log in!{% endblock %}
{% block stylesheets %}
    {{ parent() }}
    <link href=\"css/dash.css\" rel=\"stylesheet\">
{% endblock %}

{% block body %}
    <div class=\" container-fluid \">
        <div class=\"row align-middle \" >
            <div class=\"col-2 sidebar\">
                <div class=\"row\">
                    <h4 class=\"mg-tb1 text-center fs-2\">MyToTools</h4>
                </div>
                <div class=\"row\">

                    <p><img src=\"{{ asset('images/profilpic.png') }}\" class=\"pp-size\"> {{ user.identifiant }}</p>
                    <hr>
                </div>

                <div class=\"row\">
                    <div class=\"d-flex align-items-start\">
                        <div class=\"d-grid gap-1 col-12 mx-auto\">
                            <a href=\"{{ path('app_dashboard')}}\" class=\"btn btn-primary  sidebar-btn align-middle\" type=\"button\" ><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"currentColor\" class=\"bi bi-house-heart align-middle\" viewBox=\"0 0 16 16\">
                                    <path fill-rule=\"evenodd\" d=\"M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.707L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.646a.5.5 0 0 0 .708-.707L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207l-5-5-5 5V13.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7.207Zm-5-.225C9.664 5.309 13.825 8.236 8 12 2.175 8.236 6.336 5.309 8 6.982Z\"/>
                                </svg> Dashboard</a>
                            <a class=\"btn btn-primary sidebar-btn align-middle mg-tb-xs\" type=\"button \"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-brightness-high align-middle\" viewBox=\"0 0 16 16\">
                                    <path d=\"M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z\"/>
                                </svg> Aujourd'hui</a>
                            <a class=\"btn btn-primary sidebar-btn align-middle\" type=\"button\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-calendar4-week align-middle\" viewBox=\"0 0 16 16\">
                                    <path d=\"M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1H2zm13 3H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V5z\"/>
                                    <path d=\"M11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-2 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z\"/>
                                </svg> Planifi??</a>
                        </div>
                    </div>
                    <hr class=\"mg-t1\">
                </div>
                <div class=\"row list-group-sidebar\">

                        <a class=\"btn btn-primary  sidebar-btn\"  data-bs-toggle=\"collapse\" href=\"#collapseExample\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapseExample\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-plus-circle\" viewBox=\"0 0 16 16\">
                                <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
                                <path d=\"M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z\"/>
                            </svg> Nouvelle liste

                        </a>


                    <div class=\"row\">
                        <div class=\"col\">
                            <div class=\"collapse\" id=\"collapseExample\">

                                    <div class=\"mb-3 mg-t1\">
                                        <label for=\"nomListe\" class=\"form-label\">Nom de la liste:</label>
                                        <input type=\"text\" class=\"form-control\" id=\"createList\" placeholder=\"Nouvelle liste\">
                                    </div>
                                    <button type=\"submit\" id=\"saveCreateList\" class=\"btn btn-primary\">Envoyer</button>

                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"row mg-t1\">
                    <ul id=\"list\" class=\"list-group list-group-sidebar \">
                        {% for liste in listes %}
                            <a href=\"{{ path('app_liste_list', {listId: liste.id}) }}\"><li class=\"list-group-item d-flex justify-content-between align-items-center\">
                                    {{ liste.nomlist }}
                                    <span class=\"badge bg-primary rounded-pill\">14</span><button type=\"submit\" class=\"btn btn-outline-danger supprimerliste\" data-listId=\"{{ liste.id }}\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-trash\" viewBox=\"0 0 16 16\">
                                    <path d=\"M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z\"/>
                                    <path fill-rule=\"evenodd\" d=\"M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z\"/>
                                    </svg>
                                    </button>
                                </li></a>

                        {% endfor %}
                    </ul>
                </div>

            </div>

            <div class=\"col-10 \">
                <div class=\"row mg-t2 pdng-2 \">
                    <div class=\"card mb-3 shadow-lg p-3 mb-5 bg-body rounded\" >
                        <div class=\"row g-0\">
                            <div class=\"col-md-4\">
                                <img src=\"{{ asset('images/today.png') }}\" class=\"img-fluid rounded-start\" style=\"width: 25rem\" alt=\"...\">
                            </div>
                            <div class=\"col-md-8\">
                                <div class=\"card-body\">
                                    <ul class=\"list-group\">

                                            <li class=\"list-group-item\">
                                                <input class=\"form-check-input me-1\" type=\"checkbox\" value=\"\" aria-label=\"...\">
                                                Appeler Mr.GILBERT
                                            </li>
                                            <li class=\"list-group-item\">
                                                <input class=\"form-check-input me-1\" type=\"checkbox\" value=\"\" aria-label=\"...\">
                                                Envoyer devis
                                            </li>
                                            <li class=\"list-group-item\">
                                                <input class=\"form-check-input me-1\" type=\"checkbox\" value=\"\" aria-label=\"...\">
                                                Compl??ter la feuile de ...
                                            </li>
                                            <li class=\"list-group-item\">
                                                <input class=\"form-check-input me-1\" type=\"checkbox\" value=\"\" aria-label=\"...\">
                                                Un truc hyper important
                                            </li>
                                            <li class=\"list-group-item\">
                                                <input class=\"form-check-input me-1\" type=\"checkbox\" value=\"\" aria-label=\"...\">
                                                Un truc aussi important
                                            </li>
                                            <li class=\"list-group-item\">
                                                <input class=\"form-check-input me-1\" type=\"checkbox\" value=\"\" aria-label=\"...\">
                                                Acheter des sandales
                                            </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"row \">

                    <div class=\"col-6 pdng-l2 \">
                        <h4>Cr??er une t??che</h4>
                        <form method=\"post\">
                            <div class=\"mb-3 row\">
                                <label for=\"task_name\" class=\"col-sm-2 col-form-label\">Nom:</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" class=\"form-control\" id=\"task_name\">
                                </div>
                            </div>
                            <select class=\"form-select mg-t1\" aria-label=\"Default select example\" id=\"task_list\">
                                <option selected>Choisir une liste:</option>
                                {% for liste in listes %}
                                    <option value=\"{{ liste.id }}\">{{ liste.nomlist }}</option>
                                {% endfor %}

                            </select>

                            <select class=\"form-select mg-t1 mg-b1\" aria-label=\"Default select example\" id=\"task_priority\">
                                <option selected>Choisir un ordre d'importance</option>
                                <option value=\"Urgent\">Urgent</option>
                                <option value=\"Important\">Important</option>
                                <option value=\"Normal\">Normal</option>
                            </select>



                            <div class=\"d-grid\">
                                <button class=\"btn btb-lg btn-primary\" type=\"submit\" id=\"create_task\">Envoyer</button>
                            </div>

                        </form>

                    </div>

                    <div class=\"col-6 pdng-l2 pdng-r2\">
                        <h4 class=\"spc-b1\">Mes Listes :</h4>
                        <ul class=\"list-group\">
                            {% for liste in listes %}
                                <a href=\"{{ path('app_liste_list', {listId: liste.id}) }}\"><li class=\"list-group-item d-flex justify-content-between align-items-center\">
                                        {{ liste.nomlist }}
                                        <span class=\"badge bg-primary rounded-pill\">14</span>
                                    </li></a>
                            {% endfor %}
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>

{% endblock %}
", "dashboard/index-dash.html.twig", "/Users/inesvancamp/Documents/MyToTools/templates/dashboard/index-dash.html.twig");
    }
}
