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

/* mails/mails.html.twig */
class __TwigTemplate_34067affc95f44f4f2650e0f3b54c390 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mails/mails.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mails/mails.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "mails/mails.html.twig", 1);
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
        echo "

    <div class=\"bg-table4 bg-cover\">
        <div class=\"flex flex-col items-center justify-center h-screen\">
        <div class=\"animate-ease-in animate-fill-forwards bg-red-500 shadow-md sm:rounded-lg p-10 flex items-center justify-center max-w-4xl w-full \">
            <div class=\"w-full\">
                <h1 class=\"font-gasoek text-5xl text-white items-center text-center justify-center\">Boite <mark class=\"text-red-500 px-3 py-2 rounded-lg bg-white\">Mail</mark></h1>
                <br>
                <br>
                <div class=\"search-table w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400\">
                    <div class=\"relative overflow-hidden bg-white shadow-md dark:bg-gray-800 md:rounded-lg\">
                        <div class=\"flex flex-col items-center justify-between p-4 space-y-3 md:flex-row md:space-y-0 md:space-x-4\">

                            <div class=\"flex items-center\">
                                <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_new");
        echo "\" style=\"margin-right: 20px;\">
                                    <button type=\"button\"
                                            class=\"flex items-center justify-center w-full px-4 py-2 text-sm font-gasoek text-white rounded-lg md:w-auto bg-violet-700 hover:bg-violet-800 ease-in duration-100 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800\">
                                        <svg class=\"h-3.5 w-3.5 mr-2 -ml-1\" fill=\"currentColor\" viewbox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\"
                                             aria-hidden=\"true\">
                                            <path d=\"M20.168 6.136 14.325.293a1 1 0 0 0-1.414 0l-1.445 1.444a1 1 0 0 0 0 1.414l5.844 5.843a1 1 0 0 0 1.414 0l1.444-1.444a1 1 0 0 0 0-1.414Zm-4.205 2.927L11.4 4.5a1 1 0 0 0-1-.25L4.944 5.9a1 1 0 0 0-.652.624L.518 17.206a1 1 0 0 0 .236 1.04l.023.023 6.606-6.606a2.616 2.616 0 1 1 3.65 1.304 2.615 2.615 0 0 1-2.233.108l-6.61 6.609.024.023a1 1 0 0 0 1.04.236l10.682-3.773a1 1 0 0 0 .624-.653l1.653-5.457a.999.999 0 0 0-.25-.997Z\"/>     <path d=\"M10.233 11.1a.613.613 0 1 0-.867-.868.613.613 0 0 0 .867.868Z\"/>
                                        </svg>
                                        Rédiger
                                    </button>
                                </a>

                                <div id=\"toggleMails\" class=\"text-violet-700 hover:text-violet-800 font-regular cursor-pointer\">
                                    Mails reçus
                                </div>

                            </div>

                            <div class=\"inline-flex flex-col w-full rounded-md shadow-sm md:w-auto md:flex-row\" role=\"group\">
                                <div class=\"licenciesButton\">
                                    <button id=\"licenciesButton1\" type=\"button\"
                                            class=\"px-4 py-2 text-sm font-regular text-gray-900 bg-white border border-gray-200 rounded-t-lg md:rounded-tr-none md:rounded-l-lg hover:bg-gray-100 hover:text-black focus:z-10 focus:ring-2 focus:ring-primary-700 focus:text-primary-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-primary-500 dark:focus:text-white\">
                                        Licenciés
                                    </button>
                                    <button id=\"licenciesButton2\" type=\"button\"
                                            class=\"hidden px-4 py-2 text-sm font-regular border border-gray-200 rounded-t-lg md:rounded-tr-none md:rounded-l-lg bg-gray-100 text-violet-700 focus:z-10 focus:ring-2 focus:ring-primary-700 focus:text-primary-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-primary-500 dark:focus:text-white\">
                                        Licenciés
                                    </button>
                                </div>
                                <div class=\"educateursButton\">
                                    <button id=\"educateursButton1\" type=\"button\"
                                            class=\"px-4 py-2 text-sm font-regular text-gray-900 bg-white border border-gray-200 rounded-b-lg md:rounded-bl-none md:rounded-r-lg hover:bg-gray-100 hover:text-black focus:z-10 focus:ring-2 focus:ring-primary-700 focus:text-primary-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-primary-500 dark:focus:text-white\">
                                        Éducateurs
                                    </button>
                                    <button id=\"educateursButton2\" type=\"button\"
                                            class=\"hidden px-4 py-2 text-sm font-regular border border-gray-200 rounded-b-lg md:rounded-bl-none md:rounded-r-lg bg-gray-100 text-violet-700 focus:z-10 focus:ring-2 focus:ring-primary-700 focus:text-primary-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-primary-500 dark:focus:text-white\">
                                        Éducateurs
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <br>

                <div id=\"educateursEnvoyesSection\" class=\"hidden\">
                    <div class=\"relative overflow-x-auto shadow-md sm:rounded-lg\">
                        <table class=\"search-table w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400\">
                            <thead class=\"text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 text-center\">
                            <tr>
                                <th scope=\"col\" class=\"px-6 py-3 font-regular\">
                                    Date
                                </th>
                                <th scope=\"col\" class=\"px-6 py-3 font-regular\">
                                    Objet
                                </th>
                                <th scope=\"col\" class=\"px-8 py-3 font-regular\">
                                    Expéditeur
                                </th>
                                <th scope=\"col\" class=\"px-8 py-3 font-regular\">
                                    Actions
                                </th>
                            </tr>
                            </thead>
                            <tbody class=\"text-center\">
                            ";
        // line 85
        if (twig_test_empty((isset($context["mailsEduEnvoyes"]) || array_key_exists("mailsEduEnvoyes", $context) ? $context["mailsEduEnvoyes"] : (function () { throw new RuntimeError('Variable "mailsEduEnvoyes" does not exist.', 85, $this->source); })()))) {
            // line 86
            echo "                                <tr class=\"bg-white border-b dark:bg-gray-800 dark:border-gray-700\">
                                    <td class=\"animate-infinite animate-pulse px-6 py-32 font-regular text-xl text-gray-900 whitespace-nowrap dark:text-white\" colspan=\"4\">
                                        Aucun <span class=\"\">mails envoyés</span>
                                    </td>

                                </tr>
                            ";
        } else {
            // line 93
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["mailsEduEnvoyes"]) || array_key_exists("mailsEduEnvoyes", $context) ? $context["mailsEduEnvoyes"] : (function () { throw new RuntimeError('Variable "mailsEduEnvoyes" does not exist.', 93, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["mailEdu"]) {
                // line 94
                echo "                                    <tr class=\"bg-white border-b dark:bg-gray-800 dark:border-gray-700\">
                                        <td class=\"px-6 py-4 font-regular text-gray-900 whitespace-nowrap dark:text-white\">
                                            ";
                // line 96
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mailEdu"], "dateEnvoie", [], "any", false, false, false, 96), "d/m/Y"), "html", null, true);
                echo "
                                        </td>
                                        <td class=\"px-6 py-4 font-regular\">
                                            ";
                // line 99
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mailEdu"], "objet", [], "any", false, false, false, 99), "html", null, true);
                echo "
                                        </td>
                                        <td class=\"px-6 py-4 font-gasoek text-black \">
                                            ";
                // line 102
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["mailEdu"], "idEducateur", [], "any", false, false, false, 102), "licencie", [], "any", false, false, false, 102), "prenom", [], "any", false, false, false, 102), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["mailEdu"], "idEducateur", [], "any", false, false, false, 102), "licencie", [], "any", false, false, false, 102), "nom", [], "any", false, false, false, 102), "html", null, true);
                echo "
                                        </td>
                                        <td class=\"px-6 py-4 font-gasoek text-black\">
                                            <a href=\"";
                // line 105
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mail_view", ["type" => "Edu", "id" => twig_get_attribute($this->env, $this->source, $context["mailEdu"], "id", [], "any", false, false, false, 105)]), "html", null, true);
                echo "\">
                                                <button type=\"button\" class=\"px-5 py-2.5 text-sm font-gasoek text-white inline-flex items-center bg-violet-500 hover:bg-violet-700 ease-in duration-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mb-2 w-full items-center justify-center\">
                                                    <svg class=\"w-3.5 h-3.5 text-white me-2\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"currentColor\" viewBox=\"0 0 20 16\">
                                                        <path d=\"m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z\"/>
                                                        <path d=\"M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z\"/>
                                                    </svg>
                                                    Voir
                                                </button>
                                            </a>
                                            <a href=\"";
                // line 114
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mails_delete", ["type" => "Edu", "id" => twig_get_attribute($this->env, $this->source, $context["mailEdu"], "id", [], "any", false, false, false, 114)]), "html", null, true);
                echo "\">
                                                <button class=\"px-5 py-2.5 text-sm font-gasoek text-white inline-flex items-center bg-red-500 hover:bg-red-600 ease-in duration-100 focus:ring-4 focus:outline-none focus:ring-red-300 rounded-lg text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800 w-full items-center justify-center\">
                                                    <svg class=\"w-3.5 h-3.5 text-white me-2\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
                                                        <path d=\"M17 4h-4V2a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v2H1a1 1 0 0 0 0 2h1v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V6h1a1 1 0 1 0 0-2ZM7 2h4v2H7V2Zm1 14a1 1 0 1 1-2 0V8a1 1 0 0 1 2 0v8Zm4 0a1 1 0 0 1-2 0V8a1 1 0 0 1 2 0v8Z\"/>
                                                    </svg>
                                                    Supprimer
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mailEdu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            echo "                            ";
        }
        // line 126
        echo "                            </tbody>
                        </table>

                    </div>
                </div>


                <div id=\"licenciesEnvoyesSection\" class=\"hidden\">
                    <div class=\"relative overflow-x-auto shadow-md sm:rounded-lg\">
                        <table class=\"search-table w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400\">
                            <thead class=\"text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 text-center\">
                            <tr>
                                <th scope=\"col\" class=\"px-6 py-3 font-regular\">
                                    Date
                                </th>
                                <th scope=\"col\" class=\"px-6 py-3 font-regular\">
                                    Objet
                                </th>
                                <th scope=\"col\" class=\"px-8 py-3 font-regular\">
                                    Expéditeur
                                </th>
                                <th scope=\"col\" class=\"px-8 py-3 font-regular\">
                                    Actions
                                </th>
                            </tr>
                            </thead>
                            <tbody class=\"text-center\">
                            ";
        // line 153
        if (twig_test_empty((isset($context["mailsContactEnvoyes"]) || array_key_exists("mailsContactEnvoyes", $context) ? $context["mailsContactEnvoyes"] : (function () { throw new RuntimeError('Variable "mailsContactEnvoyes" does not exist.', 153, $this->source); })()))) {
            // line 154
            echo "                                <tr class=\"bg-white border-b dark:bg-gray-800 dark:border-gray-700\">
                                    <td class=\"animate-infinite animate-pulse px-6 py-32 font-regular text-xl text-gray-900 whitespace-nowrap dark:text-white\" colspan=\"4\">
                                        Aucun <span class=\"\">mails envoyés</span>
                                    </td>

                                </tr>
                            ";
        } else {
            // line 161
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["mailsContactEnvoyes"]) || array_key_exists("mailsContactEnvoyes", $context) ? $context["mailsContactEnvoyes"] : (function () { throw new RuntimeError('Variable "mailsContactEnvoyes" does not exist.', 161, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["mailContact"]) {
                // line 162
                echo "                                    <tr class=\"bg-white border-b dark:bg-gray-800 dark:border-gray-700\">
                                        <td class=\"px-6 py-4 font-regular text-gray-900 whitespace-nowrap dark:text-white\">
                                            ";
                // line 164
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mailContact"], "dateEnvoi", [], "any", false, false, false, 164), "d/m/Y"), "html", null, true);
                echo "
                                        </td>
                                        <td class=\"px-6 py-4 font-regular\">
                                            ";
                // line 167
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mailContact"], "objet", [], "any", false, false, false, 167), "html", null, true);
                echo "
                                        </td>
                                        <td class=\"px-6 py-4 font-gasoek text-black \">
                                            ";
                // line 170
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["mailContact"], "idContact", [], "any", false, false, false, 170), "prenom", [], "any", false, false, false, 170), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["mailContact"], "idContact", [], "any", false, false, false, 170), "nom", [], "any", false, false, false, 170), "html", null, true);
                echo "
                                        </td>
                                        <td class=\"px-6 py-4 font-gasoek text-black\">
                                            <a href=\"";
                // line 173
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mail_view", ["type" => "Contact", "id" => twig_get_attribute($this->env, $this->source, $context["mailContact"], "id", [], "any", false, false, false, 173)]), "html", null, true);
                echo "\">
                                                <button type=\"button\" class=\"px-5 py-2.5 text-sm font-gasoek text-white inline-flex items-center bg-violet-500 hover:bg-violet-700 ease-in duration-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mb-2 w-full items-center justify-center\">
                                                    <svg class=\"w-3.5 h-3.5 text-white me-2\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"currentColor\" viewBox=\"0 0 20 16\">
                                                        <path d=\"m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z\"/>
                                                        <path d=\"M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z\"/>
                                                    </svg>
                                                    Voir
                                                </button>
                                            </a>
                                            <a href=\"";
                // line 182
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mails_delete", ["type" => "Contact", "id" => twig_get_attribute($this->env, $this->source, $context["mailContact"], "id", [], "any", false, false, false, 182)]), "html", null, true);
                echo "\">
                                                <button type=\"button\" class=\"px-5 py-2.5 text-sm font-gasoek text-white inline-flex items-center bg-red-500 hover:bg-red-700 ease-in duration-100 focus:ring-4 focus:outline-none focus:ring-red-300 rounded-lg text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800 w-full items-center justify-center\">
                                                        <svg class=\"w-3.5 h-3.5 text-white me-2\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
                                                            <path d=\"M17 4h-4V2a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v2H1a1 1 0 0 0 0 2h1v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V6h1a1 1 0 1 0 0-2ZM7 2h4v2H7V2Zm1 14a1 1 0 1 1-2 0V8a1 1 0 0 1 2 0v8Zm4 0a1 1 0 0 1-2 0V8a1 1 0 0 1 2 0v8Z\"/>
                                                        </svg>
                                                        Supprimer
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mailContact'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 193
            echo "                            ";
        }
        // line 194
        echo "                            </tbody>
                        </table>

                    </div>
                </div>

                <div id=\"licenciesSection\" class=\"hidden\">

                    <div class=\"relative overflow-x-auto shadow-md sm:rounded-lg\">
                        <table class=\"search-table w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400\">
                            <thead class=\"text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 text-center\">
                            <tr>
                                <th scope=\"col\" class=\"px-6 py-3 font-regular\">
                                    Date
                                </th>
                                <th scope=\"col\" class=\"px-6 py-3 font-regular\">
                                    Objet
                                </th>
                                <th scope=\"col\" class=\"px-8 py-3 font-regular\">
                                    Expéditeur
                                </th>
                                <th scope=\"col\" class=\"px-8 py-3 font-regular\">
                                    Actions
                                </th>
                            </tr>
                            </thead>
                            <tbody class=\"text-center\">
                            ";
        // line 221
        if (twig_test_empty((isset($context["mailsContactTrie"]) || array_key_exists("mailsContactTrie", $context) ? $context["mailsContactTrie"] : (function () { throw new RuntimeError('Variable "mailsContactTrie" does not exist.', 221, $this->source); })()))) {
            // line 222
            echo "                                <tr class=\"bg-white border-b dark:bg-gray-800 dark:border-gray-700\">
                                    <td class=\"animate-infinite animate-pulse px-6 py-32 font-regular text-xl text-gray-900 whitespace-nowrap dark:text-white\" colspan=\"4\">
                                        Aucun <span class=\"\">mails</span>
                                    </td>

                                </tr>
                            ";
        } else {
            // line 229
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["mailsContactTrie"]) || array_key_exists("mailsContactTrie", $context) ? $context["mailsContactTrie"] : (function () { throw new RuntimeError('Variable "mailsContactTrie" does not exist.', 229, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["mailContact"]) {
                // line 230
                echo "                                    <tr class=\"bg-white border-b dark:bg-gray-800 dark:border-gray-700\">
                                        <td class=\"px-6 py-4 font-regular text-gray-900 whitespace-nowrap dark:text-white\">
                                            ";
                // line 232
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mailContact"], "dateEnvoi", [], "any", false, false, false, 232), "d/m/Y"), "html", null, true);
                echo "
                                        </td>
                                        <td class=\"px-6 py-4 font-regular\">
                                            ";
                // line 235
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mailContact"], "objet", [], "any", false, false, false, 235), "html", null, true);
                echo "
                                        </td>
                                        <td class=\"px-6 py-4 font-gasoek text-black \">
                                            ";
                // line 238
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["mailContact"], "idContact", [], "any", false, false, false, 238), "prenom", [], "any", false, false, false, 238), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["mailContact"], "idContact", [], "any", false, false, false, 238), "nom", [], "any", false, false, false, 238), "html", null, true);
                echo "

                                        </td>
                                        <td class=\"px-6 py-4 font-gasoek text-black\">
                                            <a href=\"";
                // line 242
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mail_view", ["type" => "Contact", "id" => twig_get_attribute($this->env, $this->source, $context["mailContact"], "id", [], "any", false, false, false, 242)]), "html", null, true);
                echo "\">
                                                <button type=\"button\" class=\"px-5 py-2.5 text-sm font-gasoek text-white inline-flex items-center bg-violet-500 hover:bg-violet-700 ease-in duration-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800\">
                                                    <svg class=\"w-3.5 h-3.5 text-white me-2\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"currentColor\" viewBox=\"0 0 20 16\">
                                                        <path d=\"m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z\"/>
                                                        <path d=\"M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z\"/>
                                                    </svg>
                                                    Voir
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mailContact'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 254
            echo "                            ";
        }
        // line 255
        echo "                            </tbody>
                        </table>

                    </div>
                </div>

                <div id=\"educateursSection\" class=\"hidden\">
                    <div class=\"relative overflow-x-auto shadow-md sm:rounded-lg\">
                        <table class=\"search-table w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400\">
                            <thead class=\"text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 text-center\">
                            <tr>
                                <th scope=\"col\" class=\"px-6 py-3 font-regular\">
                                    Date
                                </th>
                                <th scope=\"col\" class=\"px-6 py-3 font-regular\">
                                    Objet
                                </th>
                                <th scope=\"col\" class=\"px-8 py-3 font-regular\">
                                    Expéditeur
                                </th>
                                <th scope=\"col\" class=\"px-8 py-3 font-regular\">
                                    Actions
                                </th>
                            </tr>
                            </thead>
                            <tbody class=\"text-center\">
                            ";
        // line 281
        if (twig_test_empty((isset($context["mailsEduTrie"]) || array_key_exists("mailsEduTrie", $context) ? $context["mailsEduTrie"] : (function () { throw new RuntimeError('Variable "mailsEduTrie" does not exist.', 281, $this->source); })()))) {
            // line 282
            echo "                                <tr class=\"bg-white border-b dark:bg-gray-800 dark:border-gray-700\">
                                    <td class=\"animate-infinite animate-pulse px-6 py-32 font-regular text-xl text-gray-900 whitespace-nowrap dark:text-white\" colspan=\"4\">
                                        Aucun <span class=\"\">mails</span>
                                    </td>

                                </tr>
                            ";
        } else {
            // line 289
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["mailsEduTrie"]) || array_key_exists("mailsEduTrie", $context) ? $context["mailsEduTrie"] : (function () { throw new RuntimeError('Variable "mailsEduTrie" does not exist.', 289, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["mailEdu"]) {
                // line 290
                echo "                                    <tr class=\"bg-white border-b dark:bg-gray-800 dark:border-gray-700\">
                                        <td class=\"px-6 py-4 font-regular text-gray-900 whitespace-nowrap dark:text-white\">
                                            ";
                // line 292
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mailEdu"], "dateEnvoie", [], "any", false, false, false, 292), "d/m/Y"), "html", null, true);
                echo "
                                        </td>
                                        <td class=\"px-6 py-4 font-regular\">
                                            ";
                // line 295
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mailEdu"], "objet", [], "any", false, false, false, 295), "html", null, true);
                echo "
                                        </td>
                                        <td class=\"px-6 py-4 font-gasoek text-black \">
                                            ";
                // line 298
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["mailEdu"], "idEducateur", [], "any", false, false, false, 298), "licencie", [], "any", false, false, false, 298), "prenom", [], "any", false, false, false, 298), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["mailEdu"], "idEducateur", [], "any", false, false, false, 298), "licencie", [], "any", false, false, false, 298), "nom", [], "any", false, false, false, 298), "html", null, true);
                echo "
                                        </td>
                                        <td class=\"px-6 py-4 font-gasoek text-black\">
                                            <a href=\"";
                // line 301
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mail_view", ["type" => "Edu", "id" => twig_get_attribute($this->env, $this->source, $context["mailEdu"], "id", [], "any", false, false, false, 301)]), "html", null, true);
                echo "\">
                                                <button type=\"button\" class=\"px-5 py-2.5 text-sm font-gasoek text-white inline-flex items-center bg-violet-500 hover:bg-violet-700 ease-in duration-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800\">
                                                    <svg class=\"w-3.5 h-3.5 text-white me-2\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"currentColor\" viewBox=\"0 0 20 16\">
                                                        <path d=\"m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z\"/>
                                                        <path d=\"M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z\"/>
                                                    </svg>
                                                    Voir
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mailEdu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 313
            echo "                            ";
        }
        // line 314
        echo "                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const toggleMails = document.getElementById('toggleMails');
            const licenciesEnvoyesSection = document.getElementById('licenciesEnvoyesSection');
            const educateursEnvoyesSection = document.getElementById('educateursEnvoyesSection');
            const licenciesSection = document.getElementById('licenciesSection');
            const educateursSection = document.getElementById('educateursSection');
            const licenciesButton = document.getElementById('licenciesButton1');
            const educateursButton = document.getElementById('educateursButton1');

            let sectionActuelle = 'licencies';
            let affichageEnvoyes = false;

            const actualiserAffichage = () => {
                const affichageLicencies = sectionActuelle === 'licencies';
                licenciesSection.classList.toggle('hidden', affichageEnvoyes || !affichageLicencies);
                educateursSection.classList.toggle('hidden', affichageEnvoyes || affichageLicencies);
                licenciesEnvoyesSection.classList.toggle('hidden', !affichageEnvoyes || !affichageLicencies);
                educateursEnvoyesSection.classList.toggle('hidden', !affichageEnvoyes || affichageLicencies);

                toggleMails.textContent = affichageEnvoyes ? '↑ Mails envoyés' : '↓ Mail reçus';
            };

            toggleMails.addEventListener('click', () => {
                affichageEnvoyes = !affichageEnvoyes;
                actualiserAffichage();
            });

            licenciesButton.addEventListener('click', () => {
                sectionActuelle = 'licencies';
                actualiserAffichage();
            });

            educateursButton.addEventListener('click', () => {
                sectionActuelle = 'educateurs';
                actualiserAffichage();
            });

            actualiserAffichage();

            licenciesButton.addEventListener('click', () => {


                licenciesButton.classList.add('hidden');
                licenciesButton2.classList.remove('hidden');

                educateursButton2.classList.add('hidden');
                educateursButton.classList.remove('hidden');
            });

            educateursButton.addEventListener('click', () => {
                educateursButton.classList.add('hidden');
                educateursButton2.classList.remove('hidden');

                licenciesButton2.classList.add('hidden');
                licenciesButton.classList.remove('hidden');
            });
            licenciesButton.click();
        });

        document.addEventListener(\"DOMContentLoaded\", function(event) {
            document.getElementById('deleteButton').click();
        });
    </script>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mails/mails.html.twig";
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
        return array (  525 => 314,  522 => 313,  504 => 301,  496 => 298,  490 => 295,  484 => 292,  480 => 290,  475 => 289,  466 => 282,  464 => 281,  436 => 255,  433 => 254,  415 => 242,  406 => 238,  400 => 235,  394 => 232,  390 => 230,  385 => 229,  376 => 222,  374 => 221,  345 => 194,  342 => 193,  325 => 182,  313 => 173,  305 => 170,  299 => 167,  293 => 164,  289 => 162,  284 => 161,  275 => 154,  273 => 153,  244 => 126,  241 => 125,  224 => 114,  212 => 105,  204 => 102,  198 => 99,  192 => 96,  188 => 94,  183 => 93,  174 => 86,  172 => 85,  104 => 20,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}LeCoach | Boite mail{% endblock %}

{% block content %}


    <div class=\"bg-table4 bg-cover\">
        <div class=\"flex flex-col items-center justify-center h-screen\">
        <div class=\"animate-ease-in animate-fill-forwards bg-red-500 shadow-md sm:rounded-lg p-10 flex items-center justify-center max-w-4xl w-full \">
            <div class=\"w-full\">
                <h1 class=\"font-gasoek text-5xl text-white items-center text-center justify-center\">Boite <mark class=\"text-red-500 px-3 py-2 rounded-lg bg-white\">Mail</mark></h1>
                <br>
                <br>
                <div class=\"search-table w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400\">
                    <div class=\"relative overflow-hidden bg-white shadow-md dark:bg-gray-800 md:rounded-lg\">
                        <div class=\"flex flex-col items-center justify-between p-4 space-y-3 md:flex-row md:space-y-0 md:space-x-4\">

                            <div class=\"flex items-center\">
                                <a href=\"{{ path('app_new') }}\" style=\"margin-right: 20px;\">
                                    <button type=\"button\"
                                            class=\"flex items-center justify-center w-full px-4 py-2 text-sm font-gasoek text-white rounded-lg md:w-auto bg-violet-700 hover:bg-violet-800 ease-in duration-100 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800\">
                                        <svg class=\"h-3.5 w-3.5 mr-2 -ml-1\" fill=\"currentColor\" viewbox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\"
                                             aria-hidden=\"true\">
                                            <path d=\"M20.168 6.136 14.325.293a1 1 0 0 0-1.414 0l-1.445 1.444a1 1 0 0 0 0 1.414l5.844 5.843a1 1 0 0 0 1.414 0l1.444-1.444a1 1 0 0 0 0-1.414Zm-4.205 2.927L11.4 4.5a1 1 0 0 0-1-.25L4.944 5.9a1 1 0 0 0-.652.624L.518 17.206a1 1 0 0 0 .236 1.04l.023.023 6.606-6.606a2.616 2.616 0 1 1 3.65 1.304 2.615 2.615 0 0 1-2.233.108l-6.61 6.609.024.023a1 1 0 0 0 1.04.236l10.682-3.773a1 1 0 0 0 .624-.653l1.653-5.457a.999.999 0 0 0-.25-.997Z\"/>     <path d=\"M10.233 11.1a.613.613 0 1 0-.867-.868.613.613 0 0 0 .867.868Z\"/>
                                        </svg>
                                        Rédiger
                                    </button>
                                </a>

                                <div id=\"toggleMails\" class=\"text-violet-700 hover:text-violet-800 font-regular cursor-pointer\">
                                    Mails reçus
                                </div>

                            </div>

                            <div class=\"inline-flex flex-col w-full rounded-md shadow-sm md:w-auto md:flex-row\" role=\"group\">
                                <div class=\"licenciesButton\">
                                    <button id=\"licenciesButton1\" type=\"button\"
                                            class=\"px-4 py-2 text-sm font-regular text-gray-900 bg-white border border-gray-200 rounded-t-lg md:rounded-tr-none md:rounded-l-lg hover:bg-gray-100 hover:text-black focus:z-10 focus:ring-2 focus:ring-primary-700 focus:text-primary-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-primary-500 dark:focus:text-white\">
                                        Licenciés
                                    </button>
                                    <button id=\"licenciesButton2\" type=\"button\"
                                            class=\"hidden px-4 py-2 text-sm font-regular border border-gray-200 rounded-t-lg md:rounded-tr-none md:rounded-l-lg bg-gray-100 text-violet-700 focus:z-10 focus:ring-2 focus:ring-primary-700 focus:text-primary-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-primary-500 dark:focus:text-white\">
                                        Licenciés
                                    </button>
                                </div>
                                <div class=\"educateursButton\">
                                    <button id=\"educateursButton1\" type=\"button\"
                                            class=\"px-4 py-2 text-sm font-regular text-gray-900 bg-white border border-gray-200 rounded-b-lg md:rounded-bl-none md:rounded-r-lg hover:bg-gray-100 hover:text-black focus:z-10 focus:ring-2 focus:ring-primary-700 focus:text-primary-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-primary-500 dark:focus:text-white\">
                                        Éducateurs
                                    </button>
                                    <button id=\"educateursButton2\" type=\"button\"
                                            class=\"hidden px-4 py-2 text-sm font-regular border border-gray-200 rounded-b-lg md:rounded-bl-none md:rounded-r-lg bg-gray-100 text-violet-700 focus:z-10 focus:ring-2 focus:ring-primary-700 focus:text-primary-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-primary-500 dark:focus:text-white\">
                                        Éducateurs
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <br>

                <div id=\"educateursEnvoyesSection\" class=\"hidden\">
                    <div class=\"relative overflow-x-auto shadow-md sm:rounded-lg\">
                        <table class=\"search-table w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400\">
                            <thead class=\"text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 text-center\">
                            <tr>
                                <th scope=\"col\" class=\"px-6 py-3 font-regular\">
                                    Date
                                </th>
                                <th scope=\"col\" class=\"px-6 py-3 font-regular\">
                                    Objet
                                </th>
                                <th scope=\"col\" class=\"px-8 py-3 font-regular\">
                                    Expéditeur
                                </th>
                                <th scope=\"col\" class=\"px-8 py-3 font-regular\">
                                    Actions
                                </th>
                            </tr>
                            </thead>
                            <tbody class=\"text-center\">
                            {% if mailsEduEnvoyes is empty %}
                                <tr class=\"bg-white border-b dark:bg-gray-800 dark:border-gray-700\">
                                    <td class=\"animate-infinite animate-pulse px-6 py-32 font-regular text-xl text-gray-900 whitespace-nowrap dark:text-white\" colspan=\"4\">
                                        Aucun <span class=\"\">mails envoyés</span>
                                    </td>

                                </tr>
                            {% else %}
                                {% for mailEdu in mailsEduEnvoyes %}
                                    <tr class=\"bg-white border-b dark:bg-gray-800 dark:border-gray-700\">
                                        <td class=\"px-6 py-4 font-regular text-gray-900 whitespace-nowrap dark:text-white\">
                                            {{ mailEdu.dateEnvoie|date('d/m/Y') }}
                                        </td>
                                        <td class=\"px-6 py-4 font-regular\">
                                            {{ mailEdu.objet }}
                                        </td>
                                        <td class=\"px-6 py-4 font-gasoek text-black \">
                                            {{ mailEdu.idEducateur.licencie.prenom }} {{ mailEdu.idEducateur.licencie.nom }}
                                        </td>
                                        <td class=\"px-6 py-4 font-gasoek text-black\">
                                            <a href=\"{{ path('app_mail_view', {'type': 'Edu', 'id': mailEdu.id}) }}\">
                                                <button type=\"button\" class=\"px-5 py-2.5 text-sm font-gasoek text-white inline-flex items-center bg-violet-500 hover:bg-violet-700 ease-in duration-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mb-2 w-full items-center justify-center\">
                                                    <svg class=\"w-3.5 h-3.5 text-white me-2\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"currentColor\" viewBox=\"0 0 20 16\">
                                                        <path d=\"m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z\"/>
                                                        <path d=\"M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z\"/>
                                                    </svg>
                                                    Voir
                                                </button>
                                            </a>
                                            <a href=\"{{ path('app_mails_delete', {'type': 'Edu', 'id': mailEdu.id}) }}\">
                                                <button class=\"px-5 py-2.5 text-sm font-gasoek text-white inline-flex items-center bg-red-500 hover:bg-red-600 ease-in duration-100 focus:ring-4 focus:outline-none focus:ring-red-300 rounded-lg text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800 w-full items-center justify-center\">
                                                    <svg class=\"w-3.5 h-3.5 text-white me-2\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
                                                        <path d=\"M17 4h-4V2a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v2H1a1 1 0 0 0 0 2h1v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V6h1a1 1 0 1 0 0-2ZM7 2h4v2H7V2Zm1 14a1 1 0 1 1-2 0V8a1 1 0 0 1 2 0v8Zm4 0a1 1 0 0 1-2 0V8a1 1 0 0 1 2 0v8Z\"/>
                                                    </svg>
                                                    Supprimer
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                {% endfor %}
                            {% endif %}
                            </tbody>
                        </table>

                    </div>
                </div>


                <div id=\"licenciesEnvoyesSection\" class=\"hidden\">
                    <div class=\"relative overflow-x-auto shadow-md sm:rounded-lg\">
                        <table class=\"search-table w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400\">
                            <thead class=\"text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 text-center\">
                            <tr>
                                <th scope=\"col\" class=\"px-6 py-3 font-regular\">
                                    Date
                                </th>
                                <th scope=\"col\" class=\"px-6 py-3 font-regular\">
                                    Objet
                                </th>
                                <th scope=\"col\" class=\"px-8 py-3 font-regular\">
                                    Expéditeur
                                </th>
                                <th scope=\"col\" class=\"px-8 py-3 font-regular\">
                                    Actions
                                </th>
                            </tr>
                            </thead>
                            <tbody class=\"text-center\">
                            {% if mailsContactEnvoyes is empty %}
                                <tr class=\"bg-white border-b dark:bg-gray-800 dark:border-gray-700\">
                                    <td class=\"animate-infinite animate-pulse px-6 py-32 font-regular text-xl text-gray-900 whitespace-nowrap dark:text-white\" colspan=\"4\">
                                        Aucun <span class=\"\">mails envoyés</span>
                                    </td>

                                </tr>
                            {% else %}
                                {% for mailContact in mailsContactEnvoyes %}
                                    <tr class=\"bg-white border-b dark:bg-gray-800 dark:border-gray-700\">
                                        <td class=\"px-6 py-4 font-regular text-gray-900 whitespace-nowrap dark:text-white\">
                                            {{ mailContact.dateEnvoi|date('d/m/Y') }}
                                        </td>
                                        <td class=\"px-6 py-4 font-regular\">
                                            {{ mailContact.objet }}
                                        </td>
                                        <td class=\"px-6 py-4 font-gasoek text-black \">
                                            {{ mailContact.idContact.prenom }} {{ mailContact.idContact.nom }}
                                        </td>
                                        <td class=\"px-6 py-4 font-gasoek text-black\">
                                            <a href=\"{{ path('app_mail_view', {'type': 'Contact', 'id': mailContact.id}) }}\">
                                                <button type=\"button\" class=\"px-5 py-2.5 text-sm font-gasoek text-white inline-flex items-center bg-violet-500 hover:bg-violet-700 ease-in duration-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mb-2 w-full items-center justify-center\">
                                                    <svg class=\"w-3.5 h-3.5 text-white me-2\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"currentColor\" viewBox=\"0 0 20 16\">
                                                        <path d=\"m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z\"/>
                                                        <path d=\"M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z\"/>
                                                    </svg>
                                                    Voir
                                                </button>
                                            </a>
                                            <a href=\"{{ path('app_mails_delete', {'type': 'Contact', 'id': mailContact.id}) }}\">
                                                <button type=\"button\" class=\"px-5 py-2.5 text-sm font-gasoek text-white inline-flex items-center bg-red-500 hover:bg-red-700 ease-in duration-100 focus:ring-4 focus:outline-none focus:ring-red-300 rounded-lg text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800 w-full items-center justify-center\">
                                                        <svg class=\"w-3.5 h-3.5 text-white me-2\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
                                                            <path d=\"M17 4h-4V2a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v2H1a1 1 0 0 0 0 2h1v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V6h1a1 1 0 1 0 0-2ZM7 2h4v2H7V2Zm1 14a1 1 0 1 1-2 0V8a1 1 0 0 1 2 0v8Zm4 0a1 1 0 0 1-2 0V8a1 1 0 0 1 2 0v8Z\"/>
                                                        </svg>
                                                        Supprimer
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                {% endfor %}
                            {% endif %}
                            </tbody>
                        </table>

                    </div>
                </div>

                <div id=\"licenciesSection\" class=\"hidden\">

                    <div class=\"relative overflow-x-auto shadow-md sm:rounded-lg\">
                        <table class=\"search-table w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400\">
                            <thead class=\"text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 text-center\">
                            <tr>
                                <th scope=\"col\" class=\"px-6 py-3 font-regular\">
                                    Date
                                </th>
                                <th scope=\"col\" class=\"px-6 py-3 font-regular\">
                                    Objet
                                </th>
                                <th scope=\"col\" class=\"px-8 py-3 font-regular\">
                                    Expéditeur
                                </th>
                                <th scope=\"col\" class=\"px-8 py-3 font-regular\">
                                    Actions
                                </th>
                            </tr>
                            </thead>
                            <tbody class=\"text-center\">
                            {% if mailsContactTrie is empty %}
                                <tr class=\"bg-white border-b dark:bg-gray-800 dark:border-gray-700\">
                                    <td class=\"animate-infinite animate-pulse px-6 py-32 font-regular text-xl text-gray-900 whitespace-nowrap dark:text-white\" colspan=\"4\">
                                        Aucun <span class=\"\">mails</span>
                                    </td>

                                </tr>
                            {% else %}
                                {% for mailContact in mailsContactTrie %}
                                    <tr class=\"bg-white border-b dark:bg-gray-800 dark:border-gray-700\">
                                        <td class=\"px-6 py-4 font-regular text-gray-900 whitespace-nowrap dark:text-white\">
                                            {{ mailContact.dateEnvoi|date('d/m/Y') }}
                                        </td>
                                        <td class=\"px-6 py-4 font-regular\">
                                            {{ mailContact.objet }}
                                        </td>
                                        <td class=\"px-6 py-4 font-gasoek text-black \">
                                            {{ mailContact.idContact.prenom }} {{ mailContact.idContact.nom }}

                                        </td>
                                        <td class=\"px-6 py-4 font-gasoek text-black\">
                                            <a href=\"{{ path('app_mail_view', {'type': 'Contact', 'id': mailContact.id}) }}\">
                                                <button type=\"button\" class=\"px-5 py-2.5 text-sm font-gasoek text-white inline-flex items-center bg-violet-500 hover:bg-violet-700 ease-in duration-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800\">
                                                    <svg class=\"w-3.5 h-3.5 text-white me-2\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"currentColor\" viewBox=\"0 0 20 16\">
                                                        <path d=\"m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z\"/>
                                                        <path d=\"M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z\"/>
                                                    </svg>
                                                    Voir
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                {% endfor %}
                            {% endif %}
                            </tbody>
                        </table>

                    </div>
                </div>

                <div id=\"educateursSection\" class=\"hidden\">
                    <div class=\"relative overflow-x-auto shadow-md sm:rounded-lg\">
                        <table class=\"search-table w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400\">
                            <thead class=\"text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 text-center\">
                            <tr>
                                <th scope=\"col\" class=\"px-6 py-3 font-regular\">
                                    Date
                                </th>
                                <th scope=\"col\" class=\"px-6 py-3 font-regular\">
                                    Objet
                                </th>
                                <th scope=\"col\" class=\"px-8 py-3 font-regular\">
                                    Expéditeur
                                </th>
                                <th scope=\"col\" class=\"px-8 py-3 font-regular\">
                                    Actions
                                </th>
                            </tr>
                            </thead>
                            <tbody class=\"text-center\">
                            {% if mailsEduTrie is empty %}
                                <tr class=\"bg-white border-b dark:bg-gray-800 dark:border-gray-700\">
                                    <td class=\"animate-infinite animate-pulse px-6 py-32 font-regular text-xl text-gray-900 whitespace-nowrap dark:text-white\" colspan=\"4\">
                                        Aucun <span class=\"\">mails</span>
                                    </td>

                                </tr>
                            {% else %}
                                {% for mailEdu in mailsEduTrie %}
                                    <tr class=\"bg-white border-b dark:bg-gray-800 dark:border-gray-700\">
                                        <td class=\"px-6 py-4 font-regular text-gray-900 whitespace-nowrap dark:text-white\">
                                            {{ mailEdu.dateEnvoie|date('d/m/Y') }}
                                        </td>
                                        <td class=\"px-6 py-4 font-regular\">
                                            {{ mailEdu.objet }}
                                        </td>
                                        <td class=\"px-6 py-4 font-gasoek text-black \">
                                            {{ mailEdu.idEducateur.licencie.prenom }} {{ mailEdu.idEducateur.licencie.nom }}
                                        </td>
                                        <td class=\"px-6 py-4 font-gasoek text-black\">
                                            <a href=\"{{ path('app_mail_view', {'type': 'Edu', 'id': mailEdu.id}) }}\">
                                                <button type=\"button\" class=\"px-5 py-2.5 text-sm font-gasoek text-white inline-flex items-center bg-violet-500 hover:bg-violet-700 ease-in duration-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800\">
                                                    <svg class=\"w-3.5 h-3.5 text-white me-2\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"currentColor\" viewBox=\"0 0 20 16\">
                                                        <path d=\"m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z\"/>
                                                        <path d=\"M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z\"/>
                                                    </svg>
                                                    Voir
                                                </button>
                                            </a>
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
    </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const toggleMails = document.getElementById('toggleMails');
            const licenciesEnvoyesSection = document.getElementById('licenciesEnvoyesSection');
            const educateursEnvoyesSection = document.getElementById('educateursEnvoyesSection');
            const licenciesSection = document.getElementById('licenciesSection');
            const educateursSection = document.getElementById('educateursSection');
            const licenciesButton = document.getElementById('licenciesButton1');
            const educateursButton = document.getElementById('educateursButton1');

            let sectionActuelle = 'licencies';
            let affichageEnvoyes = false;

            const actualiserAffichage = () => {
                const affichageLicencies = sectionActuelle === 'licencies';
                licenciesSection.classList.toggle('hidden', affichageEnvoyes || !affichageLicencies);
                educateursSection.classList.toggle('hidden', affichageEnvoyes || affichageLicencies);
                licenciesEnvoyesSection.classList.toggle('hidden', !affichageEnvoyes || !affichageLicencies);
                educateursEnvoyesSection.classList.toggle('hidden', !affichageEnvoyes || affichageLicencies);

                toggleMails.textContent = affichageEnvoyes ? '↑ Mails envoyés' : '↓ Mail reçus';
            };

            toggleMails.addEventListener('click', () => {
                affichageEnvoyes = !affichageEnvoyes;
                actualiserAffichage();
            });

            licenciesButton.addEventListener('click', () => {
                sectionActuelle = 'licencies';
                actualiserAffichage();
            });

            educateursButton.addEventListener('click', () => {
                sectionActuelle = 'educateurs';
                actualiserAffichage();
            });

            actualiserAffichage();

            licenciesButton.addEventListener('click', () => {


                licenciesButton.classList.add('hidden');
                licenciesButton2.classList.remove('hidden');

                educateursButton2.classList.add('hidden');
                educateursButton.classList.remove('hidden');
            });

            educateursButton.addEventListener('click', () => {
                educateursButton.classList.add('hidden');
                educateursButton2.classList.remove('hidden');

                licenciesButton2.classList.add('hidden');
                licenciesButton.classList.remove('hidden');
            });
            licenciesButton.click();
        });

        document.addEventListener(\"DOMContentLoaded\", function(event) {
            document.getElementById('deleteButton').click();
        });
    </script>


{% endblock %}
", "mails/mails.html.twig", "/Users/melen/Documents/Université/L3 - Informatique RENNES 1/PW/PROJET PW/ProjetPW-Sport/templates/mails/mails.html.twig");
    }
}
