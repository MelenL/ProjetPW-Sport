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

/* contacts/contacts.html.twig */
class __TwigTemplate_45e7284a509160a03250c5030856a3df extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'tableLicencies' => [$this, 'block_tableLicencies'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contacts/contacts.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contacts/contacts.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contacts/contacts.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "LeCoach | Contacts";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
    ";
        // line 7
        $this->displayBlock('tableLicencies', $context, $blocks);
        // line 172
        echo "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_tableLicencies($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tableLicencies"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tableLicencies"));

        // line 8
        echo "        <div class=\"bg-table4 bg-cover\">
            <div class=\"flex flex-col items-center justify-center h-screen\">
            <div class=\" animate-ease-in animate-fill-forwards bg-yellow-300 shadow-md sm:rounded-lg p-10 flex items-center justify-center mx-64\">
                <div class=\"w-full\">
                    <h1 class=\"font-gasoek text-5xl text-white items-center text-center justify-center\">Listes des <mark class=\"text-yellow-300 px-3 py-2 rounded-lg bg-white\">Contacts</mark></h1>
                    <br>
                    <br>
                    <div class=\"relative bg-white shadow-md dark:bg-gray-800 sm:rounded-lg\">
                        <div class=\"flex flex-col items-center justify-between p-4 space-y-3 md:flex-row md:space-y-0 md:space-x-4\">
                            <div class=\"w-full md:w-1/2\">
                                <form class=\"flex items-center\">
                                    <label for=\"simple-search\" class=\"sr-only font-regular\">Search</label>
                                    <div class=\"relative w-full\">
                                        <div class=\"absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none\">
                                            <svg aria-hidden=\"true\" class=\"w-5 h-5 text-gray-500 dark:text-gray-400\" fill=\"currentColor\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\">
                                                <path fill-rule=\"evenodd\" d=\"M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z\" clip-rule=\"evenodd\" />
                                            </svg>
                                        </div>
                                        <input type=\"text\" id=\"simple-search\" class=\"block w-full p-2 pl-10 text-sm text-gray-900 border font-regular border-gray-300 rounded-lg bg-gray-50 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500\" placeholder=\"Rechercher un contact\" required=\"\">
                                    </div>
                                </form>
                            </div>
                            ";
        // line 30
        if (((isset($context["selectedCategory"]) || array_key_exists("selectedCategory", $context) ? $context["selectedCategory"] : (function () { throw new RuntimeError('Variable "selectedCategory" does not exist.', 30, $this->source); })()) != null)) {
            // line 31
            echo "                                <div>
                                    <mark class=\"px-2 py-2 text-xl font-gasoek text-white bg-red-500 rounded\">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["selectedCategory"]) || array_key_exists("selectedCategory", $context) ? $context["selectedCategory"] : (function () { throw new RuntimeError('Variable "selectedCategory" does not exist.', 32, $this->source); })()), "nomCategorie", [], "any", false, false, false, 32), "html", null, true);
            echo "</mark>
                                </div>
                                <div>
                                    <mark class=\"px-2 py-2 text-xl font-gasoek text-white bg-gray-900 rounded\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["selectedCategory"]) || array_key_exists("selectedCategory", $context) ? $context["selectedCategory"] : (function () { throw new RuntimeError('Variable "selectedCategory" does not exist.', 35, $this->source); })()), "codeRaccourci", [], "any", false, false, false, 35), "html", null, true);
            echo "</mark>
                                </div>
                            ";
        }
        // line 38
        echo "
                            <div class=\"flex flex-col items-stretch justify-end flex-shrink-0 w-full space-y-2 md:w-auto md:flex-row md:space-y-0 md:items-center md:space-x-3\">
                                <div class=\"flex items-center w-full space-x-3 md:w-auto\">
                                    <button id=\"filterDropdownButton\" data-dropdown-toggle=\"filterDropdown\" class=\"flex items-center justify-center w-full px-4 py-2 text-sm font-gasoek text-gray-900 bg-white border border-gray-200 rounded-lg md:w-auto focus:outline-none hover:bg-gray-100 hover:text-primary-500 ease-in duration-200 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700\" type=\"button\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" aria-hidden=\"true\" class=\"w-4 h-4 mr-2 text-gray-400\" viewbox=\"0 0 20 20\" fill=\"currentColor\">
                                            <path fill-rule=\"evenodd\" d=\"M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z\" clip-rule=\"evenodd\" />
                                        </svg>
                                        Catégorie
                                        <svg class=\"-mr-1 ml-1.5 w-5 h-5\" fill=\"currentColor\" viewbox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\" aria-hidden=\"true\">
                                            <path clip-rule=\"evenodd\" fill-rule=\"evenodd\" d=\"M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z\" />
                                        </svg>
                                    </button>
                                    <div id=\"filterDropdown\" class=\"z-10 hidden w-48 p-3 bg-white rounded-lg shadow dark:bg-gray-700\">
                                        <h6 class=\"mb-3 flex items-center text-center justify-center text-sm font-gasoek text-gray-900 dark:text-white\">
                                            Catégories
                                        </h6>
                                        <form action=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contacts");
        echo "\" method=\"get\" id=\"categoryForm\">
                                            <ul class=\"space-y-2 text-sm\" aria-labelledby=\"dropdownDefault\">
                                                ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 56, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 57
            echo "                                                    <a href=\"#\" class=\"flex items-center text-center justify-center px-2 py-1 font-regular text-gray-600 rounded-md dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-600\">
                                                        <li>
                                                            <span class=\"mr-2\" onclick=\"selectCategory(";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 59), "html", null, true);
            echo ")\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "nomCategorie", [], "any", false, false, false, 59), "html", null, true);
            echo " • <span class=\"font-gasoek\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "codeRaccourci", [], "any", false, false, false, 59), "html", null, true);
            echo "</span></span>

                                                        </li>
                                                    </a>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                                            </ul>
                                            <input type=\"hidden\" name=\"category\" id=\"selectedCategory\" value=\"\">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class=\"relative overflow-x-auto shadow-md sm:rounded-lg\">
                        <table class=\"search-table w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400\">
                            <thead class=\"text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 text-center\">
                            <tr>
                                <th scope=\"col\" class=\"px-6 py-3 font-regular\">
                                    Nom
                                </th>
                                <th scope=\"col\" class=\"px-6 py-3 font-regular\">
                                    Prénom
                                </th>
                                <th scope=\"col\" class=\"px-8 py-3 font-regular\">
                                    Email
                                </th>
                                <th scope=\"col\" class=\"px-8 py-3 font-regular\">
                                    N° de téléphone
                                </th>
                            </tr>
                            </thead>
                            <tbody class=\"text-center\">
                            ";
        // line 93
        if (twig_test_empty((isset($context["contacts"]) || array_key_exists("contacts", $context) ? $context["contacts"] : (function () { throw new RuntimeError('Variable "contacts" does not exist.', 93, $this->source); })()))) {
            // line 94
            echo "                                <tr class=\"bg-white border-b dark:bg-gray-800 dark:border-gray-700\">
                                    <td class=\"animate-infinite animate-pulse px-6 py-32 font-regular text-xl text-gray-900 whitespace-nowrap dark:text-white\" colspan=\"4\">
                                        Veuillez séléctionner une <span class=\"\">catégorie</span>
                                    </td>

                                </tr>
                            ";
        } else {
            // line 101
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["contacts"]) || array_key_exists("contacts", $context) ? $context["contacts"] : (function () { throw new RuntimeError('Variable "contacts" does not exist.', 101, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
                // line 102
                echo "                                    <tr class=\"bg-white border-b dark:bg-gray-800 dark:border-gray-700\">
                                        <td class=\"px-6 py-4 font-regular text-gray-900 whitespace-nowrap dark:text-white\">
                                            ";
                // line 104
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "nom", [], "any", false, false, false, 104), "html", null, true);
                echo "
                                        </td>
                                        <td class=\"px-6 py-4 font-regular\">
                                            ";
                // line 107
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "prenom", [], "any", false, false, false, 107), "html", null, true);
                echo "
                                        </td>
                                        <td class=\"px-6 py-4 font-regular\">
                                            ";
                // line 110
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "email", [], "any", false, false, false, 110), "html", null, true);
                echo "
                                        </td>
                                        <td class=\"px-6 py-4 font-gasoek text-black\">
                                            ";
                // line 113
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "numeroTel", [], "any", false, false, false, 113), "html", null, true);
                echo "
                                        </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "                            ";
        }
        // line 118
        echo "                            </tbody>
                        </table>

                    </div>
                </div>

            </div>
        </div>

            <script>
                function selectCategory(categoryId) {
                    document.getElementById('selectedCategory').value = categoryId;
                    document.getElementById('categoryForm').submit();
                }
            </script>
            <script src=\"https://code.jquery.com/jquery-3.6.4.min.js\"></script>

            <script>
                \$(document).ready(function () {
                    var searchStarted = false;

                    \$('#simple-search').on('input', function () {
                        var searchTerm = \$(this).val().toLowerCase();

                        searchStarted = searchTerm.length > 0;

                        \$('.search-table tbody tr').each(function () {
                            var rowData = \$(this).text().toLowerCase();

                            if (!searchStarted) {
                                \$(this).show();
                            } else {
                                var allTermsFound = true;
                                searchTerm.split(' ').forEach(function (term) {
                                    if (rowData.indexOf(term) === -1) {
                                        allTermsFound = false;
                                    }
                                });

                                \$(this).toggle(allTermsFound);
                            }
                        });

                        var noResultsMessage = \$('#noResultsMessage');
                        if (\$('.search-table tbody tr:visible').length === 0) {
                            noResultsMessage.show();
                        } else {
                            noResultsMessage.hide();
                        }
                    });
                });
            </script>
        </div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "contacts/contacts.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  285 => 118,  282 => 117,  272 => 113,  266 => 110,  260 => 107,  254 => 104,  250 => 102,  245 => 101,  236 => 94,  234 => 93,  203 => 64,  188 => 59,  184 => 57,  180 => 56,  175 => 54,  157 => 38,  151 => 35,  145 => 32,  142 => 31,  140 => 30,  116 => 8,  106 => 7,  94 => 172,  92 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}LeCoach | Contacts{% endblock %}

{% block content %}

    {% block tableLicencies %}
        <div class=\"bg-table4 bg-cover\">
            <div class=\"flex flex-col items-center justify-center h-screen\">
            <div class=\" animate-ease-in animate-fill-forwards bg-yellow-300 shadow-md sm:rounded-lg p-10 flex items-center justify-center mx-64\">
                <div class=\"w-full\">
                    <h1 class=\"font-gasoek text-5xl text-white items-center text-center justify-center\">Listes des <mark class=\"text-yellow-300 px-3 py-2 rounded-lg bg-white\">Contacts</mark></h1>
                    <br>
                    <br>
                    <div class=\"relative bg-white shadow-md dark:bg-gray-800 sm:rounded-lg\">
                        <div class=\"flex flex-col items-center justify-between p-4 space-y-3 md:flex-row md:space-y-0 md:space-x-4\">
                            <div class=\"w-full md:w-1/2\">
                                <form class=\"flex items-center\">
                                    <label for=\"simple-search\" class=\"sr-only font-regular\">Search</label>
                                    <div class=\"relative w-full\">
                                        <div class=\"absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none\">
                                            <svg aria-hidden=\"true\" class=\"w-5 h-5 text-gray-500 dark:text-gray-400\" fill=\"currentColor\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\">
                                                <path fill-rule=\"evenodd\" d=\"M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z\" clip-rule=\"evenodd\" />
                                            </svg>
                                        </div>
                                        <input type=\"text\" id=\"simple-search\" class=\"block w-full p-2 pl-10 text-sm text-gray-900 border font-regular border-gray-300 rounded-lg bg-gray-50 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500\" placeholder=\"Rechercher un contact\" required=\"\">
                                    </div>
                                </form>
                            </div>
                            {% if selectedCategory != null %}
                                <div>
                                    <mark class=\"px-2 py-2 text-xl font-gasoek text-white bg-red-500 rounded\">{{ selectedCategory.nomCategorie }}</mark>
                                </div>
                                <div>
                                    <mark class=\"px-2 py-2 text-xl font-gasoek text-white bg-gray-900 rounded\">{{ selectedCategory.codeRaccourci }}</mark>
                                </div>
                            {% endif %}

                            <div class=\"flex flex-col items-stretch justify-end flex-shrink-0 w-full space-y-2 md:w-auto md:flex-row md:space-y-0 md:items-center md:space-x-3\">
                                <div class=\"flex items-center w-full space-x-3 md:w-auto\">
                                    <button id=\"filterDropdownButton\" data-dropdown-toggle=\"filterDropdown\" class=\"flex items-center justify-center w-full px-4 py-2 text-sm font-gasoek text-gray-900 bg-white border border-gray-200 rounded-lg md:w-auto focus:outline-none hover:bg-gray-100 hover:text-primary-500 ease-in duration-200 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700\" type=\"button\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" aria-hidden=\"true\" class=\"w-4 h-4 mr-2 text-gray-400\" viewbox=\"0 0 20 20\" fill=\"currentColor\">
                                            <path fill-rule=\"evenodd\" d=\"M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z\" clip-rule=\"evenodd\" />
                                        </svg>
                                        Catégorie
                                        <svg class=\"-mr-1 ml-1.5 w-5 h-5\" fill=\"currentColor\" viewbox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\" aria-hidden=\"true\">
                                            <path clip-rule=\"evenodd\" fill-rule=\"evenodd\" d=\"M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z\" />
                                        </svg>
                                    </button>
                                    <div id=\"filterDropdown\" class=\"z-10 hidden w-48 p-3 bg-white rounded-lg shadow dark:bg-gray-700\">
                                        <h6 class=\"mb-3 flex items-center text-center justify-center text-sm font-gasoek text-gray-900 dark:text-white\">
                                            Catégories
                                        </h6>
                                        <form action=\"{{ path('app_contacts') }}\" method=\"get\" id=\"categoryForm\">
                                            <ul class=\"space-y-2 text-sm\" aria-labelledby=\"dropdownDefault\">
                                                {% for categorie in categories %}
                                                    <a href=\"#\" class=\"flex items-center text-center justify-center px-2 py-1 font-regular text-gray-600 rounded-md dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-600\">
                                                        <li>
                                                            <span class=\"mr-2\" onclick=\"selectCategory({{ categorie.id }})\">{{ categorie.nomCategorie }} • <span class=\"font-gasoek\">{{ categorie.codeRaccourci }}</span></span>

                                                        </li>
                                                    </a>
                                                {% endfor %}
                                            </ul>
                                            <input type=\"hidden\" name=\"category\" id=\"selectedCategory\" value=\"\">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class=\"relative overflow-x-auto shadow-md sm:rounded-lg\">
                        <table class=\"search-table w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400\">
                            <thead class=\"text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 text-center\">
                            <tr>
                                <th scope=\"col\" class=\"px-6 py-3 font-regular\">
                                    Nom
                                </th>
                                <th scope=\"col\" class=\"px-6 py-3 font-regular\">
                                    Prénom
                                </th>
                                <th scope=\"col\" class=\"px-8 py-3 font-regular\">
                                    Email
                                </th>
                                <th scope=\"col\" class=\"px-8 py-3 font-regular\">
                                    N° de téléphone
                                </th>
                            </tr>
                            </thead>
                            <tbody class=\"text-center\">
                            {% if contacts is empty %}
                                <tr class=\"bg-white border-b dark:bg-gray-800 dark:border-gray-700\">
                                    <td class=\"animate-infinite animate-pulse px-6 py-32 font-regular text-xl text-gray-900 whitespace-nowrap dark:text-white\" colspan=\"4\">
                                        Veuillez séléctionner une <span class=\"\">catégorie</span>
                                    </td>

                                </tr>
                            {% else %}
                                {% for contact in contacts %}
                                    <tr class=\"bg-white border-b dark:bg-gray-800 dark:border-gray-700\">
                                        <td class=\"px-6 py-4 font-regular text-gray-900 whitespace-nowrap dark:text-white\">
                                            {{ contact.nom}}
                                        </td>
                                        <td class=\"px-6 py-4 font-regular\">
                                            {{ contact.prenom }}
                                        </td>
                                        <td class=\"px-6 py-4 font-regular\">
                                            {{ contact.email }}
                                        </td>
                                        <td class=\"px-6 py-4 font-gasoek text-black\">
                                            {{ contact.numeroTel }}
                                        </td>
                                    </tr>
                                {% endfor %}
                            {% endif %}
                            </tbody>
                        </table>

                    </div>
                </div>

            </div>
        </div>

            <script>
                function selectCategory(categoryId) {
                    document.getElementById('selectedCategory').value = categoryId;
                    document.getElementById('categoryForm').submit();
                }
            </script>
            <script src=\"https://code.jquery.com/jquery-3.6.4.min.js\"></script>

            <script>
                \$(document).ready(function () {
                    var searchStarted = false;

                    \$('#simple-search').on('input', function () {
                        var searchTerm = \$(this).val().toLowerCase();

                        searchStarted = searchTerm.length > 0;

                        \$('.search-table tbody tr').each(function () {
                            var rowData = \$(this).text().toLowerCase();

                            if (!searchStarted) {
                                \$(this).show();
                            } else {
                                var allTermsFound = true;
                                searchTerm.split(' ').forEach(function (term) {
                                    if (rowData.indexOf(term) === -1) {
                                        allTermsFound = false;
                                    }
                                });

                                \$(this).toggle(allTermsFound);
                            }
                        });

                        var noResultsMessage = \$('#noResultsMessage');
                        if (\$('.search-table tbody tr:visible').length === 0) {
                            noResultsMessage.show();
                        } else {
                            noResultsMessage.hide();
                        }
                    });
                });
            </script>
        </div>
    {% endblock %}


{% endblock %}", "contacts/contacts.html.twig", "/Users/melen/Documents/Université/L3 - Informatique RENNES 1/PW/PROJET PW/ProjetPW-Sport/templates/contacts/contacts.html.twig");
    }
}
