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

/* base.html.twig */
class __TwigTemplate_115e443bcd5236423ff048e2d19f388e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'title' => [$this, 'block_title'],
            'headerConnected' => [$this, 'block_headerConnected'],
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "    <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"icon\" type=\"image/ico\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.ico")), "html", null, true);
        echo "\" />
</head>
<body>

";
        // line 14
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 15
            echo "    ";
            $this->displayBlock('headerConnected', $context, $blocks);
        } else {
            // line 98
            echo "    ";
            $this->displayBlock('header', $context, $blocks);
        }
        // line 145
        echo "
";
        // line 146
        $this->displayBlock('content', $context, $blocks);
        // line 147
        echo "
";
        // line 148
        $this->displayBlock('footer', $context, $blocks);
        // line 170
        echo "
";
        // line 171
        $this->displayBlock('javascripts', $context, $blocks);
        // line 174
        echo "
</body>

</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "LeCoach";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 15
    public function block_headerConnected($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "headerConnected"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "headerConnected"));

        // line 16
        echo "        <header>
            <nav class=\"bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600\">
                <div class=\"max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4\">
                    <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"flex items-center space-x-3 rtl:space-x-reverse\">
                        ";
        // line 20
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "current_route", [], "any", false, false, false, 20) == "home")) {
            // line 21
            echo "                            <span class=\"animate-fade-right hover:animate-pulse animate-once animate-ease-linear animate-normal animate-fill-forwards font-gasoek text-3xl text-transparent bg-clip-text bg-gradient-to-r to-yellow-200 from-red-400\">LeCoach</span>
                        ";
        } else {
            // line 23
            echo "                            <span class=\"hover:animate-pulse font-gasoek text-3xl text-transparent bg-clip-text bg-gradient-to-r to-yellow-200 from-red-400\">LeCoach</span>
                        ";
        }
        // line 25
        echo "                    </a>
                    <div class=\"flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse\">


                        <div class=\"relative cursor-pointer hover:animate-rotate-y animate-once \" id=\"avatarButton\" type=\"button\" data-dropdown-toggle=\"userDropdown\">
                            <img class=\"w-10 h-10 rounded-full\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("avatar/avatar2.png"), "html", null, true);
        echo "\" alt=\"\">
                            <span class=\"top-0 left-7 absolute w-3.5 h-3.5 bg-green-400 border-2 border-white dark:border-gray-800 rounded-full\"></span>
                        </div>

                        <div id=\"userDropdown\" class=\"z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600\">
                            <div class=\"px-4 py-3 text-sm text-gray-900 dark:text-white\">
                                <div class=\"font-gasoek truncate\">";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "user", [], "any", false, false, false, 36), "licencie", [], "any", false, false, false, 36), "prenom", [], "any", false, false, false, 36), "html", null, true);
        echo "</div>
                                <div class=\"font-gasoek truncate\">";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "user", [], "any", false, false, false, 37), "licencie", [], "any", false, false, false, 37), "nom", [], "any", false, false, false, 37), "html", null, true);
        echo "</div>
                            </div>
                            <ul class=\"py-2 text-sm text-gray-700 dark:text-gray-200\" aria-labelledby=\"avatarButton\">
                                <li>
                                    <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_licencies");
        echo "\" class=\"flex items-center px-4 py-2 font-regular hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white\">
                                        <svg class=\"w-5 h-5 text-gray-800 dark:text-white\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"currentColor\" viewBox=\"0 0 20 19\">
                                            <path d=\"M14.5 0A3.987 3.987 0 0 0 11 2.1a4.977 4.977 0 0 1 3.9 5.858A3.989 3.989 0 0 0 14.5 0ZM9 13h2a4 4 0 0 1 4 4v2H5v-2a4 4 0 0 1 4-4Z\"/>
                                            <path d=\"M5 19h10v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2ZM5 7a5.008 5.008 0 0 1 4-4.9 3.988 3.988 0 1 0-3.9 5.859A4.974 4.974 0 0 1 5 7Zm5 3a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm5-1h-.424a5.016 5.016 0 0 1-1.942 2.232A6.007 6.007 0 0 1 17 17h2a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5ZM5.424 9H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h2a6.007 6.007 0 0 1 4.366-5.768A5.016 5.016 0 0 1 5.424 9Z\"/>
                                        </svg>
                                        <span class=\"ml-2\">Licenciés</span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contacts");
        echo "\" class=\"flex items-center px-4 py-2 font-regular hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white\">
                                        <svg class=\"w-5 h-5 text-gray-800 dark:text-white\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"currentColor\" viewBox=\"0 0 19 18\">
                                            <path d=\"M18 13.446a3.02 3.02 0 0 0-.946-1.985l-1.4-1.4a3.054 3.054 0 0 0-4.218 0l-.7.7a.983.983 0 0 1-1.39 0l-2.1-2.1a.983.983 0 0 1 0-1.389l.7-.7a2.98 2.98 0 0 0 0-4.217l-1.4-1.4a2.824 2.824 0 0 0-4.218 0c-3.619 3.619-3 8.229 1.752 12.979C6.785 16.639 9.45 18 11.912 18a7.175 7.175 0 0 0 5.139-2.325A2.9 2.9 0 0 0 18 13.446Z\"/>
                                        </svg>
                                        <span class=\"ml-2\">Contacts</span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mails");
        echo "\" class=\"flex items-center px-4 py-2 font-regular hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white\">
                                        <svg class=\"w-5 h-5 text-gray-800 dark:text-white\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
                                            <path d=\"m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z\"/>
                                        </svg>
                                        <span class=\"ml-2\">Boite Mail</span>
                                    </a>
                                </li>
                            </ul>
                            <div class=\"py-1\">
                                <a href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\" class=\"font-gasoek text-red-500 block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white\">Deconnexion</a>
                            </div>
                        </div>


                    </div>
                    <div class=\"items-center justify-between hidden w-full md:flex md:w-auto md:order-1\" id=\"navbar-sticky\">
                        <ul class=\"flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700\">
                            ";
        // line 75
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "current_route", [], "any", false, false, false, 75) == "home")) {
            // line 76
            echo "                                <li>
                                    <a href=\"";
            // line 77
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
            echo "\" class=\"font-gasoek2 block text-xl py-2 px-3  rounded md:bg-transparent font-bold text-red-500 md:p-0 md:dark:text-blue-500\" aria-current=\"page\">Accueil</a>
                                </li>
                            ";
        } else {
            // line 80
            echo "                                <li>
                                    <a href=\"";
            // line 81
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
            echo "\" class=\"font-gasoek2 block text-xl py-2 px-3  rounded hover:text-red-500 ease-in duration-150 md:p-0\" aria-current=\"page\">Accueil</a>
                                </li>
                            ";
        }
        // line 84
        echo "                            <li>
                                <a href=\"";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categories");
        echo "\" class=\"font-gasoek2 block text-xl py-2 px-3  rounded hover:text-red-500 ease-in duration-150 md:p-0\">Nos categories</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_educateurs");
        echo "\" class=\"font-gasoek2 block text-xl py-2 px-3 rounded hover:text-red-500 ease-in duration-150 md:p-0\">Nos Educateurs</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 98
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 99
        echo "
        <header>
            <nav class=\"bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600\">
                <div class=\"max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4\">
                    <a href=\"";
        // line 103
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"flex items-center space-x-3 rtl:space-x-reverse\">
                        ";
        // line 104
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 104, $this->source); })()), "current_route", [], "any", false, false, false, 104) == "home")) {
            // line 105
            echo "                            <span class=\"animate-fade-right hover:animate-pulse animate-once animate-ease-linear animate-normal animate-fill-forwards font-gasoek text-3xl text-transparent bg-clip-text bg-gradient-to-r to-yellow-200 from-red-400\">LeCoach</span>
                        ";
        } else {
            // line 107
            echo "                            <span class=\"hover:animate-pulse font-gasoek text-3xl text-transparent bg-clip-text bg-gradient-to-r to-yellow-200 from-red-400\">LeCoach</span>
                        ";
        }
        // line 108
        echo "                    </a>
                    <div class=\"flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse\">
                        <a href=\"";
        // line 110
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">
                            <button type=\"button\" class=\"font-gasoek text-white bg-yellow-300 hover:bg-red-500 ease-in duration-200 focus:ring-4 focus:outline-none focus:ring-yellow-400 rounded-lg text-sm px-4 py-2 text-center\">Éducateur</button>
                        </a>
                        <button data-collapse-toggle=\"navbar-sticky\" type=\"button\" class=\"inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600\" aria-controls=\"navbar-sticky\" aria-expanded=\"false\">
                            <span class=\"sr-only\">Open main menu</span>
                            <svg class=\"w-5 h-5\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 17 14\">
                                <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M1 1h15M1 7h15M1 13h15\"/>
                            </svg>
                        </button>
                    </div>
                    <div class=\"items-center justify-between hidden w-full md:flex md:w-auto md:order-1\" id=\"navbar-sticky\">
                        <ul class=\"flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700\">
                            ";
        // line 122
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 122, $this->source); })()), "current_route", [], "any", false, false, false, 122) == "home")) {
            // line 123
            echo "                                <li>
                                    <a href=\"";
            // line 124
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
            echo "\" class=\"font-gasoek2 block text-xl py-2 px-3  rounded md:bg-transparent font-bold text-red-500 md:p-0 md:dark:text-blue-500\" aria-current=\"page\">Accueil</a>
                                </li>
                            ";
        } else {
            // line 127
            echo "                                <li>
                                    <a href=\"";
            // line 128
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
            echo "\" class=\"font-gasoek2 block text-xl py-2 px-3  rounded hover:text-red-500 ease-in duration-150 md:p-0\" aria-current=\"page\">Accueil</a>
                                </li>
                            ";
        }
        // line 131
        echo "                            <li>
                                <a href=\"";
        // line 132
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categories");
        echo "\" class=\"font-gasoek2 block text-xl py-2 px-3  rounded hover:text-red-500 ease-in duration-150 md:p-0\">Nos categories</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 135
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_educateurs");
        echo "\" class=\"font-gasoek2 block text-xl py-2 px-3 rounded hover:text-red-500 ease-in duration-150 md:p-0\">Nos Educateurs</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 146
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 148
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 149
        echo "    <footer class=\"fixed bottom-0 left-0 z-20 w-full p-4 bg-white border-t border-gray-200 shadow md:flex md:items-center md:justify-between md:p-6 dark:bg-gray-800 dark:border-gray-600\">
    <span class=\"text-sm text-gray-900   font-gasoek sm:text-center dark:text-gray-400\">© 2023 <a href=\"";
        // line 150
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"hover:underline\">LeCoach™</a>. <span class=\"font-regular font-bold\">  Tout droits résérvés.
        </span></span>
        <ul class=\"flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0\">
            <li>
                <a href=\"";
        // line 154
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"font-regular me-4 md:me-6 hover:text-gray-900 ease-in duration-200 font-bold\">Acceuil</a>
            </li>
            ";
        // line 156
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 157
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 157, $this->source); })()), "user", [], "any", false, false, false, 157), "estAdmin", [], "any", false, false, false, 157) == true)) {
                // line 158
                echo "                    <li>
                        <a href=\"#\" class=\"font-regular me-4 md:me-6 hover:text-gray-900 ease-in duration-200 font-bold\">Admin</a>
                    </li>
                ";
            }
            // line 162
            echo "            ";
        }
        // line 163
        echo "            <li>
                <a href=\"https://github.com/MelenL/ProjetPW-Sport\" class=\"font-regular hover:text-gray-900 ease-in duration-200 font-bold\">GitHub</a>
            </li>
        </ul>
    </footer>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 171
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 172
        echo "    ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
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
        return array (  482 => 172,  472 => 171,  456 => 163,  453 => 162,  447 => 158,  444 => 157,  442 => 156,  437 => 154,  430 => 150,  427 => 149,  417 => 148,  399 => 146,  380 => 135,  374 => 132,  371 => 131,  365 => 128,  362 => 127,  356 => 124,  353 => 123,  351 => 122,  336 => 110,  332 => 108,  328 => 107,  324 => 105,  322 => 104,  318 => 103,  312 => 99,  302 => 98,  283 => 88,  277 => 85,  274 => 84,  268 => 81,  265 => 80,  259 => 77,  256 => 76,  254 => 75,  243 => 67,  231 => 58,  220 => 50,  208 => 41,  201 => 37,  197 => 36,  188 => 30,  181 => 25,  177 => 23,  173 => 21,  171 => 20,  167 => 19,  162 => 16,  152 => 15,  133 => 9,  120 => 7,  110 => 6,  96 => 174,  94 => 171,  91 => 170,  89 => 148,  86 => 147,  84 => 146,  81 => 145,  77 => 98,  73 => 15,  71 => 14,  64 => 10,  59 => 9,  57 => 6,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    {% block stylesheets %}
        {{ encore_entry_link_tags('app') }}
    {% endblock %}
    <title>{% block title %}LeCoach{% endblock %}</title>
    <link rel=\"icon\" type=\"image/ico\" href=\"{{ absolute_url(asset('favicon.ico')) }}\" />
</head>
<body>

{% if is_granted('ROLE_USER') %}
    {% block headerConnected %}
        <header>
            <nav class=\"bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600\">
                <div class=\"max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4\">
                    <a href=\"{{ path('home') }}\" class=\"flex items-center space-x-3 rtl:space-x-reverse\">
                        {% if app.current_route == 'home' %}
                            <span class=\"animate-fade-right hover:animate-pulse animate-once animate-ease-linear animate-normal animate-fill-forwards font-gasoek text-3xl text-transparent bg-clip-text bg-gradient-to-r to-yellow-200 from-red-400\">LeCoach</span>
                        {% else %}
                            <span class=\"hover:animate-pulse font-gasoek text-3xl text-transparent bg-clip-text bg-gradient-to-r to-yellow-200 from-red-400\">LeCoach</span>
                        {% endif %}
                    </a>
                    <div class=\"flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse\">


                        <div class=\"relative cursor-pointer hover:animate-rotate-y animate-once \" id=\"avatarButton\" type=\"button\" data-dropdown-toggle=\"userDropdown\">
                            <img class=\"w-10 h-10 rounded-full\" src=\"{{ asset('avatar/avatar2.png') }}\" alt=\"\">
                            <span class=\"top-0 left-7 absolute w-3.5 h-3.5 bg-green-400 border-2 border-white dark:border-gray-800 rounded-full\"></span>
                        </div>

                        <div id=\"userDropdown\" class=\"z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600\">
                            <div class=\"px-4 py-3 text-sm text-gray-900 dark:text-white\">
                                <div class=\"font-gasoek truncate\">{{ app.user.licencie.prenom }}</div>
                                <div class=\"font-gasoek truncate\">{{ app.user.licencie.nom }}</div>
                            </div>
                            <ul class=\"py-2 text-sm text-gray-700 dark:text-gray-200\" aria-labelledby=\"avatarButton\">
                                <li>
                                    <a href=\"{{ path('app_licencies') }}\" class=\"flex items-center px-4 py-2 font-regular hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white\">
                                        <svg class=\"w-5 h-5 text-gray-800 dark:text-white\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"currentColor\" viewBox=\"0 0 20 19\">
                                            <path d=\"M14.5 0A3.987 3.987 0 0 0 11 2.1a4.977 4.977 0 0 1 3.9 5.858A3.989 3.989 0 0 0 14.5 0ZM9 13h2a4 4 0 0 1 4 4v2H5v-2a4 4 0 0 1 4-4Z\"/>
                                            <path d=\"M5 19h10v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2ZM5 7a5.008 5.008 0 0 1 4-4.9 3.988 3.988 0 1 0-3.9 5.859A4.974 4.974 0 0 1 5 7Zm5 3a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm5-1h-.424a5.016 5.016 0 0 1-1.942 2.232A6.007 6.007 0 0 1 17 17h2a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5ZM5.424 9H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h2a6.007 6.007 0 0 1 4.366-5.768A5.016 5.016 0 0 1 5.424 9Z\"/>
                                        </svg>
                                        <span class=\"ml-2\">Licenciés</span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"{{ path('app_contacts') }}\" class=\"flex items-center px-4 py-2 font-regular hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white\">
                                        <svg class=\"w-5 h-5 text-gray-800 dark:text-white\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"currentColor\" viewBox=\"0 0 19 18\">
                                            <path d=\"M18 13.446a3.02 3.02 0 0 0-.946-1.985l-1.4-1.4a3.054 3.054 0 0 0-4.218 0l-.7.7a.983.983 0 0 1-1.39 0l-2.1-2.1a.983.983 0 0 1 0-1.389l.7-.7a2.98 2.98 0 0 0 0-4.217l-1.4-1.4a2.824 2.824 0 0 0-4.218 0c-3.619 3.619-3 8.229 1.752 12.979C6.785 16.639 9.45 18 11.912 18a7.175 7.175 0 0 0 5.139-2.325A2.9 2.9 0 0 0 18 13.446Z\"/>
                                        </svg>
                                        <span class=\"ml-2\">Contacts</span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"{{ path('app_mails') }}\" class=\"flex items-center px-4 py-2 font-regular hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white\">
                                        <svg class=\"w-5 h-5 text-gray-800 dark:text-white\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
                                            <path d=\"m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z\"/>
                                        </svg>
                                        <span class=\"ml-2\">Boite Mail</span>
                                    </a>
                                </li>
                            </ul>
                            <div class=\"py-1\">
                                <a href=\"{{ path('app_logout') }}\" class=\"font-gasoek text-red-500 block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white\">Deconnexion</a>
                            </div>
                        </div>


                    </div>
                    <div class=\"items-center justify-between hidden w-full md:flex md:w-auto md:order-1\" id=\"navbar-sticky\">
                        <ul class=\"flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700\">
                            {% if app.current_route == 'home' %}
                                <li>
                                    <a href=\"{{ path('home') }}\" class=\"font-gasoek2 block text-xl py-2 px-3  rounded md:bg-transparent font-bold text-red-500 md:p-0 md:dark:text-blue-500\" aria-current=\"page\">Accueil</a>
                                </li>
                            {% else %}
                                <li>
                                    <a href=\"{{ path('home') }}\" class=\"font-gasoek2 block text-xl py-2 px-3  rounded hover:text-red-500 ease-in duration-150 md:p-0\" aria-current=\"page\">Accueil</a>
                                </li>
                            {% endif %}
                            <li>
                                <a href=\"{{ path('app_categories') }}\" class=\"font-gasoek2 block text-xl py-2 px-3  rounded hover:text-red-500 ease-in duration-150 md:p-0\">Nos categories</a>
                            </li>
                            <li>
                                <a href=\"{{ path('app_educateurs') }}\" class=\"font-gasoek2 block text-xl py-2 px-3 rounded hover:text-red-500 ease-in duration-150 md:p-0\">Nos Educateurs</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

    {% endblock %}
{% else %}
    {% block header %}

        <header>
            <nav class=\"bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600\">
                <div class=\"max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4\">
                    <a href=\"{{ path('home') }}\" class=\"flex items-center space-x-3 rtl:space-x-reverse\">
                        {% if app.current_route == 'home' %}
                            <span class=\"animate-fade-right hover:animate-pulse animate-once animate-ease-linear animate-normal animate-fill-forwards font-gasoek text-3xl text-transparent bg-clip-text bg-gradient-to-r to-yellow-200 from-red-400\">LeCoach</span>
                        {% else %}
                            <span class=\"hover:animate-pulse font-gasoek text-3xl text-transparent bg-clip-text bg-gradient-to-r to-yellow-200 from-red-400\">LeCoach</span>
                        {% endif %}                    </a>
                    <div class=\"flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse\">
                        <a href=\"{{ path('app_login') }}\">
                            <button type=\"button\" class=\"font-gasoek text-white bg-yellow-300 hover:bg-red-500 ease-in duration-200 focus:ring-4 focus:outline-none focus:ring-yellow-400 rounded-lg text-sm px-4 py-2 text-center\">Éducateur</button>
                        </a>
                        <button data-collapse-toggle=\"navbar-sticky\" type=\"button\" class=\"inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600\" aria-controls=\"navbar-sticky\" aria-expanded=\"false\">
                            <span class=\"sr-only\">Open main menu</span>
                            <svg class=\"w-5 h-5\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 17 14\">
                                <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M1 1h15M1 7h15M1 13h15\"/>
                            </svg>
                        </button>
                    </div>
                    <div class=\"items-center justify-between hidden w-full md:flex md:w-auto md:order-1\" id=\"navbar-sticky\">
                        <ul class=\"flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700\">
                            {% if app.current_route == 'home' %}
                                <li>
                                    <a href=\"{{ path('home') }}\" class=\"font-gasoek2 block text-xl py-2 px-3  rounded md:bg-transparent font-bold text-red-500 md:p-0 md:dark:text-blue-500\" aria-current=\"page\">Accueil</a>
                                </li>
                            {% else %}
                                <li>
                                    <a href=\"{{ path('home') }}\" class=\"font-gasoek2 block text-xl py-2 px-3  rounded hover:text-red-500 ease-in duration-150 md:p-0\" aria-current=\"page\">Accueil</a>
                                </li>
                            {% endif %}
                            <li>
                                <a href=\"{{ path('app_categories') }}\" class=\"font-gasoek2 block text-xl py-2 px-3  rounded hover:text-red-500 ease-in duration-150 md:p-0\">Nos categories</a>
                            </li>
                            <li>
                                <a href=\"{{ path('app_educateurs') }}\" class=\"font-gasoek2 block text-xl py-2 px-3 rounded hover:text-red-500 ease-in duration-150 md:p-0\">Nos Educateurs</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

    {% endblock %}
{% endif %}

{% block content %}{% endblock %}

{% block footer %}
    <footer class=\"fixed bottom-0 left-0 z-20 w-full p-4 bg-white border-t border-gray-200 shadow md:flex md:items-center md:justify-between md:p-6 dark:bg-gray-800 dark:border-gray-600\">
    <span class=\"text-sm text-gray-900   font-gasoek sm:text-center dark:text-gray-400\">© 2023 <a href=\"{{ path('home') }}\" class=\"hover:underline\">LeCoach™</a>. <span class=\"font-regular font-bold\">  Tout droits résérvés.
        </span></span>
        <ul class=\"flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0\">
            <li>
                <a href=\"{{ path('home') }}\" class=\"font-regular me-4 md:me-6 hover:text-gray-900 ease-in duration-200 font-bold\">Acceuil</a>
            </li>
            {% if is_granted('ROLE_USER') %}
                {% if app.user.estAdmin == true %}
                    <li>
                        <a href=\"#\" class=\"font-regular me-4 md:me-6 hover:text-gray-900 ease-in duration-200 font-bold\">Admin</a>
                    </li>
                {% endif %}
            {% endif %}
            <li>
                <a href=\"https://github.com/MelenL/ProjetPW-Sport\" class=\"font-regular hover:text-gray-900 ease-in duration-200 font-bold\">GitHub</a>
            </li>
        </ul>
    </footer>

{% endblock %}

{% block javascripts %}
    {{ encore_entry_script_tags('app') }}
{% endblock %}

</body>

</html>
", "base.html.twig", "/Users/melen/Documents/Université/L3 - Informatique RENNES 1/PW/PROJET PW/ProjetPW-Sport/templates/base.html.twig");
    }
}
