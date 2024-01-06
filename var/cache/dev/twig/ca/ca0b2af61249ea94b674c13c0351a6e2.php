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

/* mails/view.html.twig */
class __TwigTemplate_894948f263486cfc5a9cb4d5faf621a4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mails/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mails/view.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "mails/view.html.twig", 1);
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

        echo "LeCoach | Boite mail";
        
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
        echo "    <div class=\"bg-table4 bg-cover\">
        <div class=\"flex flex-col items-center justify-center h-screen\">
            <div class=\"relative p-4 w-full max-w-4xl h-full md:h-auto\">
                <div class=\"relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5\">
                    <div class=\"flex flex-auto justify-center items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600\">
                        <h3 class=\"text-xl font-gasoek text-violet-800 dark:text-white\">
                            Boite Mail <span class=\"font-regular\">  | Mail de ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["mail"]) || array_key_exists("mail", $context) ? $context["mail"] : (function () { throw new RuntimeError('Variable "mail" does not exist.', 12, $this->source); })()), "idContact", [], "any", false, false, false, 12), "prenom", [], "any", false, false, false, 12), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["mail"]) || array_key_exists("mail", $context) ? $context["mail"] : (function () { throw new RuntimeError('Variable "mail" does not exist.', 12, $this->source); })()), "idContact", [], "any", false, false, false, 12), "nom", [], "any", false, false, false, 12), "html", null, true);
        echo "</span>
                        </h3>
                    </div>
                    <div class=\"mb-6\">
                        <label for=\"type\" class=\"block mb-2 text-sm font-gasoek text-violet-800 dark:text-white\">Objet</label>
                        <div class=\"text-gray-700 dark:text-gray-300\">
                            <input type=\"text\" id=\"disabled-input-2\" aria-label=\"disabled input 2\" class=\" bg-violet-50 border border-violet-300 font-regular text-violet-700 text-sm rounded-lg block w-full p-2.5\" value=";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mail"]) || array_key_exists("mail", $context) ? $context["mail"] : (function () { throw new RuntimeError('Variable "mail" does not exist.', 18, $this->source); })()), "objet", [], "any", false, false, false, 18), "html", null, true);
        echo "  readonly>
                        </div>

                        <br>

                        ";
        // line 23
        $context["prenoms_concatenes"] = "";
        // line 24
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["mail"]) || array_key_exists("mail", $context) ? $context["mail"] : (function () { throw new RuntimeError('Variable "mail" does not exist.', 24, $this->source); })()), "destinataires", [], "any", false, false, false, 24));
        foreach ($context['_seq'] as $context["_key"] => $context["destinataire"]) {
            // line 25
            echo "                            ";
            $context["prenoms_concatenes"] = (((isset($context["prenoms_concatenes"]) || array_key_exists("prenoms_concatenes", $context) ? $context["prenoms_concatenes"] : (function () { throw new RuntimeError('Variable "prenoms_concatenes" does not exist.', 25, $this->source); })()) . twig_get_attribute($this->env, $this->source, $context["destinataire"], "nomCategorie", [], "any", false, false, false, 25)) . " ");
            // line 26
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['destinataire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "
                        <div class=\"text-gray-700 dark:text-gray-300\">
                            <label for=\"type\" class=\"block mb-2 text-sm font-gasoek text-violet-800 dark:text-white\">Destinataire(s)</label>
                            <input type=\"text\" id=\"disabled-input-2\" aria-label=\"disabled input 2\" class=\"bg-violet-50 border border-violet-300 font-regular text-violet-700 text-sm rounded-lg block w-full p-2.5\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["prenoms_concatenes"]) || array_key_exists("prenoms_concatenes", $context) ? $context["prenoms_concatenes"] : (function () { throw new RuntimeError('Variable "prenoms_concatenes" does not exist.', 30, $this->source); })()), "html", null, true);
        echo "\" readonly>
                        </div>


                        <hr class=\"w-96 h-1 mx-auto my-16 bg-gray-200 border-0 rounded mt-10 mb-4 dark:bg-gray-700\">

                        <div class=\"text-gray-700 dark:text-gray-300 mt-4\">
                            <label for=\"type\" class=\"block mb-2 text-sm font-gasoek text-gray-800 dark:text-white\">Message</label>
                            <input type=\"text\" id=\"disabled-input-2\" aria-label=\"disabled input 2\" class=\"bg-gray-50 border border-gray-300 font-regular text-gray-700 text-sm rounded-lg block w-full p-2.5\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mail"]) || array_key_exists("mail", $context) ? $context["mail"] : (function () { throw new RuntimeError('Variable "mail" does not exist.', 38, $this->source); })()), "message", [], "any", false, false, false, 38), "html", null, true);
        echo "\" readonly>
                        </div>

                        <div class=\"flex justify-between items-center\">
                            <div class=\"mt-7 flex justify-start\">
                                <a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mails");
        echo "\" class=\"flex justify-start font-bold italic text-violet-700 hover:text-violet-800 ease-in duration-100\">
                                    ← Boite Mail
                                </a>
                            </div>


                            ";
        // line 49
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "user", [], "any", false, false, false, 49), "licencie", [], "any", false, false, false, 49), "idContact", [], "any", false, false, false, 49), "id", [], "any", false, false, false, 49) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["mail"]) || array_key_exists("mail", $context) ? $context["mail"] : (function () { throw new RuntimeError('Variable "mail" does not exist.', 49, $this->source); })()), "idContact", [], "any", false, false, false, 49), "id", [], "any", false, false, false, 49))) {
            // line 50
            echo "                                <div class=\"mt-7 flex justify-end\">
                                    <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mails_delete", ["type" => "Contact", "id" => twig_get_attribute($this->env, $this->source, (isset($context["mail"]) || array_key_exists("mail", $context) ? $context["mail"] : (function () { throw new RuntimeError('Variable "mail" does not exist.', 51, $this->source); })()), "id", [], "any", false, false, false, 51)]), "html", null, true);
            echo "\">
                                        <button class=\"px-5 py-2.5 text-sm font-gasoek text-white inline-flex items-center bg-red-500 hover:bg-red-600 ease-in duration-100 focus:ring-4 focus:outline-none focus:ring-red-300 rounded-lg text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800 w-full items-center justify-center\">
                                            <svg class=\"w-3.5 h-3.5 text-white me-2\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
                                                <path d=\"M17 4h-4V2a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v2H1a1 1 0 0 0 0 2h1v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V6h1a1 1 0 1 0 0-2ZM7 2h4v2H7V2Zm1 14a1 1 0 1 1-2 0V8a1 1 0 0 1 2 0v8Zm4 0a1 1 0 0 1-2 0V8a1 1 0 0 1 2 0v8Z\"/>
                                            </svg>
                                            Supprimer
                                        </button>
                                    </a>
                                </div>
                            ";
        }
        // line 61
        echo "
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
        return "mails/view.html.twig";
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
        return array (  182 => 61,  169 => 51,  166 => 50,  164 => 49,  155 => 43,  147 => 38,  136 => 30,  131 => 27,  125 => 26,  122 => 25,  117 => 24,  115 => 23,  107 => 18,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}LeCoach | Boite mail{% endblock %}

{% block content %}
    <div class=\"bg-table4 bg-cover\">
        <div class=\"flex flex-col items-center justify-center h-screen\">
            <div class=\"relative p-4 w-full max-w-4xl h-full md:h-auto\">
                <div class=\"relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5\">
                    <div class=\"flex flex-auto justify-center items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600\">
                        <h3 class=\"text-xl font-gasoek text-violet-800 dark:text-white\">
                            Boite Mail <span class=\"font-regular\">  | Mail de {{ mail.idContact.prenom }} {{ mail.idContact.nom }}</span>
                        </h3>
                    </div>
                    <div class=\"mb-6\">
                        <label for=\"type\" class=\"block mb-2 text-sm font-gasoek text-violet-800 dark:text-white\">Objet</label>
                        <div class=\"text-gray-700 dark:text-gray-300\">
                            <input type=\"text\" id=\"disabled-input-2\" aria-label=\"disabled input 2\" class=\" bg-violet-50 border border-violet-300 font-regular text-violet-700 text-sm rounded-lg block w-full p-2.5\" value={{ mail.objet }}  readonly>
                        </div>

                        <br>

                        {% set prenoms_concatenes = '' %}
                        {% for destinataire in mail.destinataires %}
                            {% set prenoms_concatenes = prenoms_concatenes ~ destinataire.nomCategorie ~ ' '%}
                        {% endfor %}

                        <div class=\"text-gray-700 dark:text-gray-300\">
                            <label for=\"type\" class=\"block mb-2 text-sm font-gasoek text-violet-800 dark:text-white\">Destinataire(s)</label>
                            <input type=\"text\" id=\"disabled-input-2\" aria-label=\"disabled input 2\" class=\"bg-violet-50 border border-violet-300 font-regular text-violet-700 text-sm rounded-lg block w-full p-2.5\" value=\"{{ prenoms_concatenes }}\" readonly>
                        </div>


                        <hr class=\"w-96 h-1 mx-auto my-16 bg-gray-200 border-0 rounded mt-10 mb-4 dark:bg-gray-700\">

                        <div class=\"text-gray-700 dark:text-gray-300 mt-4\">
                            <label for=\"type\" class=\"block mb-2 text-sm font-gasoek text-gray-800 dark:text-white\">Message</label>
                            <input type=\"text\" id=\"disabled-input-2\" aria-label=\"disabled input 2\" class=\"bg-gray-50 border border-gray-300 font-regular text-gray-700 text-sm rounded-lg block w-full p-2.5\" value=\"{{ mail.message }}\" readonly>
                        </div>

                        <div class=\"flex justify-between items-center\">
                            <div class=\"mt-7 flex justify-start\">
                                <a href=\"{{ path('app_mails') }}\" class=\"flex justify-start font-bold italic text-violet-700 hover:text-violet-800 ease-in duration-100\">
                                    ← Boite Mail
                                </a>
                            </div>


                            {% if app.user.licencie.idContact.id == mail.idContact.id %}
                                <div class=\"mt-7 flex justify-end\">
                                    <a href=\"{{ path('app_mails_delete', {'type': 'Contact', 'id': mail.id}) }}\">
                                        <button class=\"px-5 py-2.5 text-sm font-gasoek text-white inline-flex items-center bg-red-500 hover:bg-red-600 ease-in duration-100 focus:ring-4 focus:outline-none focus:ring-red-300 rounded-lg text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800 w-full items-center justify-center\">
                                            <svg class=\"w-3.5 h-3.5 text-white me-2\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
                                                <path d=\"M17 4h-4V2a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v2H1a1 1 0 0 0 0 2h1v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V6h1a1 1 0 1 0 0-2ZM7 2h4v2H7V2Zm1 14a1 1 0 1 1-2 0V8a1 1 0 0 1 2 0v8Zm4 0a1 1 0 0 1-2 0V8a1 1 0 0 1 2 0v8Z\"/>
                                            </svg>
                                            Supprimer
                                        </button>
                                    </a>
                                </div>
                            {% endif %}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "mails/view.html.twig", "/Users/melen/Documents/Université/L3 - Informatique RENNES 1/PW/PROJET PW/ProjetPW-Sport/templates/mails/view.html.twig");
    }
}
