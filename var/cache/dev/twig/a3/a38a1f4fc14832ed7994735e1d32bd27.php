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

/* liste/index-list.html.twig */
class __TwigTemplate_14d5b69943a0d7819e46b3cf97d82cf1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "liste/index-list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "liste/index-list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "liste/index-list.html.twig", 1);
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
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/listpage.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\" container-fluid \">
        <div class=\"row align-middle \" >
            <div class=\"col-2 sidebar\">
                <div class=\"row\">
                    <h4 class=\"mg-tb1 text-center fs-2\">MyToTools</h4>
                </div>
                <div class=\"row\">

                    <p><img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/profilpic.png"), "html", null, true);
        echo "\" class=\"pp-size\"> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 18, $this->source); })()), "identifiant", [], "any", false, false, false, 18), "html", null, true);
        echo "</p>
                    <hr>
                </div>

                <div class=\"row\">
                    <div class=\"d-flex align-items-start\">
                        <div class=\"d-grid gap-1 col-12 mx-auto\">
                            <a href=\"";
        // line 25
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
                                </svg> Planifié</a>
                        </div>
                    </div>
                    <hr class=\"mg-t1\">
                </div>
                <div class=\"row list-group-sidebar\">

                    <a class=\"btn btn-primary sidebar-btn\"  data-bs-toggle=\"collapse\" href=\"#collapseExample\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapseExample\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-plus-circle\" viewBox=\"0 0 16 16\">
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
                                <button type=\"submit\" id=\"saveCreateList\">Envoyer</button>

                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"row mg-t1\">
                    <ul id=\"list\" class=\"list-group list-group-sidebar \">
                        ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listes"]) || array_key_exists("listes", $context) ? $context["listes"] : (function () { throw new RuntimeError('Variable "listes" does not exist.', 66, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["liste"]) {
            // line 67
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_liste_list", ["listId" => twig_get_attribute($this->env, $this->source, $context["liste"], "id", [], "any", false, false, false, 67)]), "html", null, true);
            echo "\"><li class=\"list-group-item d-flex justify-content-between align-items-center\">
                                    ";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["liste"], "nomlist", [], "any", false, false, false, 68), "html", null, true);
            echo "
                                    <span class=\"badge bg-primary rounded-pill\">14</span><button type=\"submit\" class=\"btn btn-outline-danger supprimerliste\" data-listId=\"";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["liste"], "id", [], "any", false, false, false, 69), "html", null, true);
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
        // line 78
        echo "                    </ul>
                </div>

            </div>

            <div class=\"col-10 bodydashboard\">
                <div >
                    <h4 class=\"mg-t1\">Créer une nouvelle tâche :</h4>
                    <form method=\"post\" class=\"col-11 d-flex align-items-center nouvelletache\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Nom de la tache\" id=\"task_name\">
                        <select class=\"form-select  mg-t1 mg-b1\" aria-label=\"Default select example\" id=\"task_priority\">
                            <option selected>Choisir un ordre d'importance</option>
                            <option value=\"Urgent\">Urgent</option>
                            <option value=\"Important\">Important</option>
                            <option value=\"Normal\">Normal</option>
                        </select>

                        <select class=\"form-select\" id=\"task_list\">
                            <option selected>Choisir la liste</option>
                            ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listes"]) || array_key_exists("listes", $context) ? $context["listes"] : (function () { throw new RuntimeError('Variable "listes" does not exist.', 97, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["liste"]) {
            // line 98
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["liste"], "id", [], "any", false, false, false, 98), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["liste"], "nomlist", [], "any", false, false, false, 98), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['liste'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "                        </select>
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Créer la tache\" id=\"create_task\"/>
                    </form>

                    <ul class=\"list-group \">
                        ";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["listeDetails"]) || array_key_exists("listeDetails", $context) ? $context["listeDetails"] : (function () { throw new RuntimeError('Variable "listeDetails" does not exist.', 105, $this->source); })()), "taches", [], "any", false, false, false, 105));
        foreach ($context['_seq'] as $context["_key"] => $context["tache"]) {
            // line 106
            echo "                            <li class=\"list-group-item\" id=\"li-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tache"], "id", [], "any", false, false, false, 106), "html", null, true);
            echo "\">
                                ";
            // line 107
            if ((twig_get_attribute($this->env, $this->source, $context["tache"], "active", [], "any", false, false, false, 107) == false)) {
                // line 108
                echo "                                    <input class=\"form-check-input me-1 toggletache\" type=\"checkbox\" value=\"\" aria-label=\"...\" data-tacheId=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tache"], "id", [], "any", false, false, false, 108), "html", null, true);
                echo "\">
                                    ";
                // line 109
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tache"], "no�mtache", [], "any", false, false, false, 109), "html", null, true);
                echo "
                                ";
            } else {
                // line 111
                echo "                                    <input class=\"form-check-input me-1 toggletache\" type=\"checkbox\" value=\"\" aria-label=\"...\" data-tacheId=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tache"], "id", [], "any", false, false, false, 111), "html", null, true);
                echo "\" checked>
                                    <span class=\"text-decoration-line-through\">";
                // line 112
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tache"], "no�mtache", [], "any", false, false, false, 112), "html", null, true);
                echo "</span>
                                ";
            }
            // line 114
            echo "
                                <button type=\"button\" class=\"btn btn-outline-danger supprimertache \" data-tacheId=\"";
            // line 115
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tache"], "id", [], "any", false, false, false, 115), "html", null, true);
            echo "\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-trash\" viewBox=\"0 0 16 16\">
                                        <path d=\"M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z\"/>
                                        <path fill-rule=\"evenodd\" d=\"M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z\"/>
                                    </svg>
                                </button>
                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tache'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "                    </ul>
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
        return "liste/index-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  301 => 123,  287 => 115,  284 => 114,  279 => 112,  274 => 111,  269 => 109,  264 => 108,  262 => 107,  257 => 106,  253 => 105,  246 => 100,  235 => 98,  231 => 97,  210 => 78,  195 => 69,  191 => 68,  186 => 67,  182 => 66,  138 => 25,  126 => 18,  116 => 10,  106 => 9,  94 => 5,  89 => 4,  79 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Log in!{% endblock %}
{% block stylesheets %}
    {{ parent() }}
    <link href=\"{{ asset('css/listpage.css') }}\" rel=\"stylesheet\">
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
                                </svg> Planifié</a>
                        </div>
                    </div>
                    <hr class=\"mg-t1\">
                </div>
                <div class=\"row list-group-sidebar\">

                    <a class=\"btn btn-primary sidebar-btn\"  data-bs-toggle=\"collapse\" href=\"#collapseExample\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapseExample\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-plus-circle\" viewBox=\"0 0 16 16\">
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
                                <button type=\"submit\" id=\"saveCreateList\">Envoyer</button>

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

            <div class=\"col-10 bodydashboard\">
                <div >
                    <h4 class=\"mg-t1\">Créer une nouvelle tâche :</h4>
                    <form method=\"post\" class=\"col-11 d-flex align-items-center nouvelletache\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Nom de la tache\" id=\"task_name\">
                        <select class=\"form-select  mg-t1 mg-b1\" aria-label=\"Default select example\" id=\"task_priority\">
                            <option selected>Choisir un ordre d'importance</option>
                            <option value=\"Urgent\">Urgent</option>
                            <option value=\"Important\">Important</option>
                            <option value=\"Normal\">Normal</option>
                        </select>

                        <select class=\"form-select\" id=\"task_list\">
                            <option selected>Choisir la liste</option>
                            {% for liste in listes %}
                                <option value=\"{{ liste.id }}\">{{ liste.nomlist }}</option>
                            {% endfor %}
                        </select>
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Créer la tache\" id=\"create_task\"/>
                    </form>

                    <ul class=\"list-group \">
                        {% for tache in listeDetails.taches %}
                            <li class=\"list-group-item\" id=\"li-{{ tache.id }}\">
                                {% if tache.active == false %}
                                    <input class=\"form-check-input me-1 toggletache\" type=\"checkbox\" value=\"\" aria-label=\"...\" data-tacheId=\"{{ tache.id }}\">
                                    {{ tache.no�mtache }}
                                {% else %}
                                    <input class=\"form-check-input me-1 toggletache\" type=\"checkbox\" value=\"\" aria-label=\"...\" data-tacheId=\"{{ tache.id }}\" checked>
                                    <span class=\"text-decoration-line-through\">{{ tache.no�mtache }}</span>
                                {% endif %}

                                <button type=\"button\" class=\"btn btn-outline-danger supprimertache \" data-tacheId=\"{{ tache.id }}\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-trash\" viewBox=\"0 0 16 16\">
                                        <path d=\"M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z\"/>
                                        <path fill-rule=\"evenodd\" d=\"M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z\"/>
                                    </svg>
                                </button>
                            </li>
                        {% endfor %}
                    </ul>
                </div>
            </div>




        </div>
    </div>




{% endblock %}
", "liste/index-list.html.twig", "/Users/inesvancamp/Documents/MyToTools/templates/liste/index-list.html.twig");
    }
}
