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

/* mails/new.html.twig */
class __TwigTemplate_c963c1b3f791ff9406defd1a16ab81e4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mails/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mails/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "mails/new.html.twig", 1);
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
                        Boite Mail <span class=\"font-regular\">  | Nouveau mail</span>
                    </h3>

                </div>
                    <div class=\"mb-4\">
                        <label for=\"type\" class=\"block mb-2 text-sm font-gasoek text-gray-800 dark:text-white\">Pour</label>
                        <select id=\"type\" class=\"bg-violet-50 border border-violet-300 font-regular text-violet-700 text-sm rounded-lg focus:ring-violet-700 focus:border-violet-700 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500\" required>
                            <option value=\"educateurs\" >Éducateurs</option>
                            <option value=\"licencies\">Licenciés</option>
                        </select>
                    </div>

                <div id=\"mailEducateurs\">
                    ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'form_start');
        echo "
                    <div class=\"\">
                        <label class=\"block mb-2 text-sm font-gasoek text-gray-800 dark:text-white\">Destiné à</label>
                        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "destinaires", [], "any", false, false, false, 28), 'widget', ["attr" => ["id" => "elements", "class" => "bg border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500", "multiple" => "multiple"]]);
        // line 34
        echo "

                    </div>

                    <hr class=\"w-96 h-1 mx-auto my-16 bg-gray-200 border-0 rounded mt-10 mb-4 dark:bg-gray-700\">


                    <div class=\"mb-4\">
                        <label for=\"default-input\" class=\"block mb-2 text-sm font-gasoek text-violet-700  dark:text-white\">Objet</label>
                        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "objet", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-violet-700 focus:border-violet-700  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 w-full font-regular", "rows" => "4", "maxlength" => "80"]]);
        // line 49
        echo "
                    </div>

                    <div class=\"mb-4\">
                        <label for=\"description\" class=\"block mb-2 text-sm font-gasoek text-violet-700 dark:text-white\">Contenu du mail</label>
                        ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "message", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-violet-700 focus:border-violet-700 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 font-regular dark:focus:border-primary-500", "rows" => "4", "placeholder" => "Écrire votre mail...", "maxlength" => "1000"]]);
        // line 61
        echo "
                    </div>

                    <!-- Bouton de soumission -->
                    <div class=\"flex justify-between items-center mt-7\">
                        <div class=\"mt-7 flex justify-start\">
                            <a href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mails");
        echo "\" class=\"flex justify-start font-bold italic text-violet-700 hover:text-violet-800 ease-in duration-100\">
                                ← Boite Mail
                            </a>
                        </div>
                        <div class=\"mt-7 flex justify-end\">
                            <button type=\"submit\" name=\"envoyer\" class=\"text-white bg-violet-700 hover:bg-violet-800 font-gasoek rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#3b5998]/55 me-2 mb-2\">
                                <svg class=\"w-4 h-4 me-2\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"currentColor\" viewBox=\"0 0 19 17\">
                                    <path d=\"M2.057 6.9a8.718 8.718 0 0 1 6.41-3.62v-1.2A2.064 2.064 0 0 1 9.626.2a1.979 1.979 0 0 1 2.1.23l5.481 4.308a2.107 2.107 0 0 1 0 3.3l-5.479 4.308a1.977 1.977 0 0 1-2.1.228 2.063 2.063 0 0 1-1.158-1.876v-.942c-5.32 1.284-6.2 5.25-6.238 5.44a1 1 0 0 1-.921.807h-.06a1 1 0 0 1-.953-.7A10.24 10.24 0 0 1 2.057 6.9Z\"/>
                                </svg>
                                Envoyer
                            </button>
                        </div>

                    </div>
                    ";
        // line 81
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), 'form_end');
        echo "

                </div>

                <div id=\"mailLicencies\" >
                    ";
        // line 86
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formContact"]) || array_key_exists("formContact", $context) ? $context["formContact"] : (function () { throw new RuntimeError('Variable "formContact" does not exist.', 86, $this->source); })()), 'form_start');
        echo "
                    <div class=\"\">
                        <label class=\"block mb-2 text-sm font-gasoek text-gray-800 dark:text-white\">Destiné à</label>
                        ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formContact"]) || array_key_exists("formContact", $context) ? $context["formContact"] : (function () { throw new RuntimeError('Variable "formContact" does not exist.', 89, $this->source); })()), "destinataires", [], "any", false, false, false, 89), 'widget', ["attr" => ["id" => "elements", "class" => "bg border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500", "multiple" => "multiple"]]);
        // line 95
        echo "

                    </div>

                    <hr class=\"w-96 h-1 mx-auto my-16 bg-gray-200 border-0 rounded mt-10 mb-4 dark:bg-gray-700\">


                    <div class=\"mb-4\">
                        <label for=\"default-input\" class=\"block mb-2 text-sm font-gasoek text-violet-700  dark:text-white\">Objet</label>
                        ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formContact"]) || array_key_exists("formContact", $context) ? $context["formContact"] : (function () { throw new RuntimeError('Variable "formContact" does not exist.', 104, $this->source); })()), "objet", [], "any", false, false, false, 104), 'widget', ["attr" => ["class" => "text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-violet-700 focus:border-violet-700  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 w-full font-regular", "rows" => "4", "maxlength" => "80"]]);
        // line 110
        echo "
                    </div>

                    <div class=\"mb-4\">
                        <label for=\"description\" class=\"block mb-2 text-sm font-gasoek text-violet-700 dark:text-white\">Contenu du mail</label>
                        ";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formContact"]) || array_key_exists("formContact", $context) ? $context["formContact"] : (function () { throw new RuntimeError('Variable "formContact" does not exist.', 115, $this->source); })()), "message", [], "any", false, false, false, 115), 'widget', ["attr" => ["class" => "block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-violet-700 focus:border-violet-700 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 font-regular dark:focus:border-primary-500", "rows" => "4", "placeholder" => "Écrire votre mail...", "maxlength" => "1000"]]);
        // line 122
        echo "
                    </div>

                    <!-- Bouton de soumission -->
                    <div class=\"flex justify-between items-center mt-7\">
                        <div class=\"mt-7 flex justify-start\">
                            <a href=\"";
        // line 128
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mails");
        echo "\" class=\"flex justify-start font-bold italic text-violet-700 hover:text-violet-800 ease-in duration-100\">
                                ← Boite Mail
                            </a>
                        </div>
                        <div class=\"mt-7 flex justify-end\">
                            <button type=\"submit\" name=\"envoyer\" class=\"text-white bg-violet-700 hover:bg-violet-800 font-gasoek rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#3b5998]/55 me-2 mb-2\">
                                <svg class=\"w-4 h-4 me-2\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"currentColor\" viewBox=\"0 0 19 17\">
                                    <path d=\"M2.057 6.9a8.718 8.718 0 0 1 6.41-3.62v-1.2A2.064 2.064 0 0 1 9.626.2a1.979 1.979 0 0 1 2.1.23l5.481 4.308a2.107 2.107 0 0 1 0 3.3l-5.479 4.308a1.977 1.977 0 0 1-2.1.228 2.063 2.063 0 0 1-1.158-1.876v-.942c-5.32 1.284-6.2 5.25-6.238 5.44a1 1 0 0 1-.921.807h-.06a1 1 0 0 1-.953-.7A10.24 10.24 0 0 1 2.057 6.9Z\"/>
                                </svg>
                                Envoyer
                            </button>
                        </div>

                    </div>
                    ";
        // line 142
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formContact"]) || array_key_exists("formContact", $context) ? $context["formContact"] : (function () { throw new RuntimeError('Variable "formContact" does not exist.', 142, $this->source); })()), 'form_end');
        echo "

                    </div>

                </div>

            </div>
        </div>
    </div>
    </div>

    <script>
        const typeSelect = document.getElementById('type');

        const mailEducateursDiv = document.getElementById('mailEducateurs');
        const mailLicenciesDiv = document.getElementById('mailLicencies');

        typeSelect.addEventListener('change', function() {
            const selectedValue = typeSelect.value;

            if (selectedValue === 'educateurs') {
                mailEducateursDiv.style.display = 'block';
                mailLicenciesDiv.style.display = 'none';
            } else if (selectedValue === 'licencies') {
                mailEducateursDiv.style.display = 'none';
                mailLicenciesDiv.style.display = 'block';
            }
        });

        typeSelect.dispatchEvent(new Event('change'));
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const element = document.getElementById('elements');
            const choices = new Choices(element, {
                removeItemButton: true,
                addItemText: (value) => {
                    return `Press Enter to add <b>\"\${value}\"</b>`;
                },
            });
        });

        document.addEventListener('DOMContentLoaded', function () {
            const element = document.getElementById('elements2');
            const choices = new Choices(element, {
                removeItemButton: true,
                addItemText: (value) => {
                    return `Press Enter to add <b>\"\${value}\"</b>`;
                },
            });
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
        return "mails/new.html.twig";
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
        return array (  227 => 142,  210 => 128,  202 => 122,  200 => 115,  193 => 110,  191 => 104,  180 => 95,  178 => 89,  172 => 86,  164 => 81,  147 => 67,  139 => 61,  137 => 54,  130 => 49,  128 => 43,  117 => 34,  115 => 28,  109 => 25,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
                        Boite Mail <span class=\"font-regular\">  | Nouveau mail</span>
                    </h3>

                </div>
                    <div class=\"mb-4\">
                        <label for=\"type\" class=\"block mb-2 text-sm font-gasoek text-gray-800 dark:text-white\">Pour</label>
                        <select id=\"type\" class=\"bg-violet-50 border border-violet-300 font-regular text-violet-700 text-sm rounded-lg focus:ring-violet-700 focus:border-violet-700 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500\" required>
                            <option value=\"educateurs\" >Éducateurs</option>
                            <option value=\"licencies\">Licenciés</option>
                        </select>
                    </div>

                <div id=\"mailEducateurs\">
                    {{ form_start(form) }}
                    <div class=\"\">
                        <label class=\"block mb-2 text-sm font-gasoek text-gray-800 dark:text-white\">Destiné à</label>
                        {{ form_widget(form.destinaires, {
                            'attr': {
                                'id': 'elements',
                                'class': 'bg border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500',
                                'multiple': 'multiple'
                            }
                        }) }}

                    </div>

                    <hr class=\"w-96 h-1 mx-auto my-16 bg-gray-200 border-0 rounded mt-10 mb-4 dark:bg-gray-700\">


                    <div class=\"mb-4\">
                        <label for=\"default-input\" class=\"block mb-2 text-sm font-gasoek text-violet-700  dark:text-white\">Objet</label>
                        {{ form_widget(form.objet, {
                            'attr': {
                                'class': 'text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-violet-700 focus:border-violet-700  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 w-full font-regular',
                                'rows': '4',
                                'maxlength': '80'
                            }
                        }) }}
                    </div>

                    <div class=\"mb-4\">
                        <label for=\"description\" class=\"block mb-2 text-sm font-gasoek text-violet-700 dark:text-white\">Contenu du mail</label>
                        {{ form_widget(form.message, {
                            'attr': {
                                'class': 'block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-violet-700 focus:border-violet-700 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 font-regular dark:focus:border-primary-500',
                                'rows': '4',
                                'placeholder': 'Écrire votre mail...',
                                'maxlength': '1000'
                            }
                        }) }}
                    </div>

                    <!-- Bouton de soumission -->
                    <div class=\"flex justify-between items-center mt-7\">
                        <div class=\"mt-7 flex justify-start\">
                            <a href=\"{{ path('app_mails') }}\" class=\"flex justify-start font-bold italic text-violet-700 hover:text-violet-800 ease-in duration-100\">
                                ← Boite Mail
                            </a>
                        </div>
                        <div class=\"mt-7 flex justify-end\">
                            <button type=\"submit\" name=\"envoyer\" class=\"text-white bg-violet-700 hover:bg-violet-800 font-gasoek rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#3b5998]/55 me-2 mb-2\">
                                <svg class=\"w-4 h-4 me-2\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"currentColor\" viewBox=\"0 0 19 17\">
                                    <path d=\"M2.057 6.9a8.718 8.718 0 0 1 6.41-3.62v-1.2A2.064 2.064 0 0 1 9.626.2a1.979 1.979 0 0 1 2.1.23l5.481 4.308a2.107 2.107 0 0 1 0 3.3l-5.479 4.308a1.977 1.977 0 0 1-2.1.228 2.063 2.063 0 0 1-1.158-1.876v-.942c-5.32 1.284-6.2 5.25-6.238 5.44a1 1 0 0 1-.921.807h-.06a1 1 0 0 1-.953-.7A10.24 10.24 0 0 1 2.057 6.9Z\"/>
                                </svg>
                                Envoyer
                            </button>
                        </div>

                    </div>
                    {{ form_end(form) }}

                </div>

                <div id=\"mailLicencies\" >
                    {{ form_start(formContact) }}
                    <div class=\"\">
                        <label class=\"block mb-2 text-sm font-gasoek text-gray-800 dark:text-white\">Destiné à</label>
                        {{ form_widget(formContact.destinataires, {
                            'attr': {
                                'id': 'elements',
                                'class': 'bg border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500',
                                'multiple': 'multiple'
                            }
                        }) }}

                    </div>

                    <hr class=\"w-96 h-1 mx-auto my-16 bg-gray-200 border-0 rounded mt-10 mb-4 dark:bg-gray-700\">


                    <div class=\"mb-4\">
                        <label for=\"default-input\" class=\"block mb-2 text-sm font-gasoek text-violet-700  dark:text-white\">Objet</label>
                        {{ form_widget(formContact.objet, {
                            'attr': {
                                'class': 'text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-violet-700 focus:border-violet-700  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 w-full font-regular',
                                'rows': '4',
                                'maxlength': '80'
                            }
                        }) }}
                    </div>

                    <div class=\"mb-4\">
                        <label for=\"description\" class=\"block mb-2 text-sm font-gasoek text-violet-700 dark:text-white\">Contenu du mail</label>
                        {{ form_widget(formContact.message, {
                            'attr': {
                                'class': 'block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-violet-700 focus:border-violet-700 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 font-regular dark:focus:border-primary-500',
                                'rows': '4',
                                'placeholder': 'Écrire votre mail...',
                                'maxlength': '1000'
                            }
                        }) }}
                    </div>

                    <!-- Bouton de soumission -->
                    <div class=\"flex justify-between items-center mt-7\">
                        <div class=\"mt-7 flex justify-start\">
                            <a href=\"{{ path('app_mails') }}\" class=\"flex justify-start font-bold italic text-violet-700 hover:text-violet-800 ease-in duration-100\">
                                ← Boite Mail
                            </a>
                        </div>
                        <div class=\"mt-7 flex justify-end\">
                            <button type=\"submit\" name=\"envoyer\" class=\"text-white bg-violet-700 hover:bg-violet-800 font-gasoek rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#3b5998]/55 me-2 mb-2\">
                                <svg class=\"w-4 h-4 me-2\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"currentColor\" viewBox=\"0 0 19 17\">
                                    <path d=\"M2.057 6.9a8.718 8.718 0 0 1 6.41-3.62v-1.2A2.064 2.064 0 0 1 9.626.2a1.979 1.979 0 0 1 2.1.23l5.481 4.308a2.107 2.107 0 0 1 0 3.3l-5.479 4.308a1.977 1.977 0 0 1-2.1.228 2.063 2.063 0 0 1-1.158-1.876v-.942c-5.32 1.284-6.2 5.25-6.238 5.44a1 1 0 0 1-.921.807h-.06a1 1 0 0 1-.953-.7A10.24 10.24 0 0 1 2.057 6.9Z\"/>
                                </svg>
                                Envoyer
                            </button>
                        </div>

                    </div>
                    {{ form_end(formContact) }}

                    </div>

                </div>

            </div>
        </div>
    </div>
    </div>

    <script>
        const typeSelect = document.getElementById('type');

        const mailEducateursDiv = document.getElementById('mailEducateurs');
        const mailLicenciesDiv = document.getElementById('mailLicencies');

        typeSelect.addEventListener('change', function() {
            const selectedValue = typeSelect.value;

            if (selectedValue === 'educateurs') {
                mailEducateursDiv.style.display = 'block';
                mailLicenciesDiv.style.display = 'none';
            } else if (selectedValue === 'licencies') {
                mailEducateursDiv.style.display = 'none';
                mailLicenciesDiv.style.display = 'block';
            }
        });

        typeSelect.dispatchEvent(new Event('change'));
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const element = document.getElementById('elements');
            const choices = new Choices(element, {
                removeItemButton: true,
                addItemText: (value) => {
                    return `Press Enter to add <b>\"\${value}\"</b>`;
                },
            });
        });

        document.addEventListener('DOMContentLoaded', function () {
            const element = document.getElementById('elements2');
            const choices = new Choices(element, {
                removeItemButton: true,
                addItemText: (value) => {
                    return `Press Enter to add <b>\"\${value}\"</b>`;
                },
            });
        });
    </script>


{% endblock %}
", "mails/new.html.twig", "/Users/melen/Documents/Université/L3 - Informatique RENNES 1/PW/PROJET PW/ProjetPW-Sport/templates/mails/new.html.twig");
    }
}
