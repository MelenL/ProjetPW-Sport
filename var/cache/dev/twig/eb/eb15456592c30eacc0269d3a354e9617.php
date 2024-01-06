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

/* security/login.html.twig */
class __TwigTemplate_12f4f466a941e4e517a98bb95181905c extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

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
<body class=\"bg-login3 bg-cover\">

<section>
    <div class=\"animate-fade animate-delay-200 flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0\">
        <div class=\"w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700\">
            <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">
                <h2 class=\" hover:animate-pulse animate-once animate-ease-linear animate-normal animate-fill-forwards flex flex-col justify-center items-center mt-7 mb-4 font-gasoek text-3xl \">LeCoach.</h2>
            </a>

            <div class=\"p-6 space-y-4 md:space-y-6\">
                <form method=\"post\" class=\"space-y-4 md:space-y-6\" action=\"#\">


                    ";
        // line 25
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25)) {
            // line 26
            echo "                        <div class=\"mb-3\">
                            You are logged in as ";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27), "userIdentifier", [], "any", false, false, false, 27), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
                        </div>
                    ";
        }
        // line 30
        echo "                    <div>
                        <label for=\"inputEmail\" class=\"block italic mb-2 text-sm font-gasoek text-gray-900 dark:text-white\">Email</label>
                        <input type=\"email\" name=\"email\" id=\"inputEmail\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 32, $this->source); })()), "html", null, true);
        echo "\" class=\"bg-gray-50 border border-gray-300 text-gray-900 font-regular sm:text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500\" placeholder=\"educateur@mail.fr\" autocomplete=\"email\" required autofocus>
                    </div>
                    <div>
                        <label for=\"inputPassword\" class=\"block mb-2 text-sm font-gasoek italic text-gray-900 dark:text-white\">Mot de passe</label>
                        <input type=\"password\" name=\"password\" id=\"inputPassword\" placeholder=\"•••••••••••••••••\" class=\"bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500\" autocomplete=\"current-password\" required>

                    </div>
                    ";
        // line 39
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 39, $this->source); })())) {
            // line 40
            echo "                        <div class=\"flex items-center justify-center p-4 mb-4 text-sm text-red-500 border border-red-400 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-yellow-300 dark:border-yellow-800\" role=\"alert\">
                            <svg class=\"flex-shrink-0 inline w-4 h-4 me-3\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
                                <path d=\"M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z\"/>
                            </svg>
                            <span class=\"sr-only\">Info</span>
                            <div>
                                <span class=\"font-regular\">Mot de passe ou email incorrect.</span>
                            </div>
                        </div>
                    ";
        }
        // line 50
        echo "                    <input type=\"hidden\" name=\"_csrf_token\"
                           value=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
                    >
                    <br>
                    <button type=\"submit\" class=\"w-full text-white bg-gradient-to-r from-red-400 via-yellow-300 to-yellow-300 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 shadow-lg shadow-purple-500/50 dark:shadow-lg dark:shadow-purple-800/80 font-gasoek rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2\">Je me connecte !</button>
                </form>
            </div>
        </div>
    </div>
</section>


";
        // line 62
        $this->displayBlock('javascripts', $context, $blocks);
        // line 66
        echo "

<script src=\"../path/to/flowbite/dist/flowbite.min.js\"></script>
</body>

</html>

";
        // line 73
        $this->displayBlock('body', $context, $blocks);
        
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

    // line 62
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 63
        echo "    ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
    ";
        // line 64
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 73
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 74
        echo "<form method=\"post\">


    <h1 class=\"h3 mb-3 font-weight-normal\">Please sign in</h1>
    <label for=\"inputEmail\">Email</label>
    <input type=\"email\" value=\"";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 79, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
    <label for=\"inputPassword\">Password</label>
    <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>

    <input type=\"hidden\" name=\"_csrf_token\"
           value=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
    >

    <button class=\"btn btn-lg btn-primary\" type=\"submit\">
        Sign in
    </button>
</form>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "security/login.html.twig";
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
        return array (  255 => 84,  247 => 79,  240 => 74,  230 => 73,  218 => 64,  213 => 63,  203 => 62,  184 => 9,  171 => 7,  161 => 6,  151 => 73,  142 => 66,  140 => 62,  126 => 51,  123 => 50,  111 => 40,  109 => 39,  99 => 32,  95 => 30,  87 => 27,  84 => 26,  82 => 25,  71 => 17,  61 => 10,  56 => 9,  54 => 6,  47 => 1,);
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
<body class=\"bg-login3 bg-cover\">

<section>
    <div class=\"animate-fade animate-delay-200 flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0\">
        <div class=\"w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700\">
            <a href=\"{{ path('home') }}\">
                <h2 class=\" hover:animate-pulse animate-once animate-ease-linear animate-normal animate-fill-forwards flex flex-col justify-center items-center mt-7 mb-4 font-gasoek text-3xl \">LeCoach.</h2>
            </a>

            <div class=\"p-6 space-y-4 md:space-y-6\">
                <form method=\"post\" class=\"space-y-4 md:space-y-6\" action=\"#\">


                    {% if app.user %}
                        <div class=\"mb-3\">
                            You are logged in as {{ app.user.userIdentifier }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
                        </div>
                    {% endif %}
                    <div>
                        <label for=\"inputEmail\" class=\"block italic mb-2 text-sm font-gasoek text-gray-900 dark:text-white\">Email</label>
                        <input type=\"email\" name=\"email\" id=\"inputEmail\" value=\"{{ last_username }}\" class=\"bg-gray-50 border border-gray-300 text-gray-900 font-regular sm:text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500\" placeholder=\"educateur@mail.fr\" autocomplete=\"email\" required autofocus>
                    </div>
                    <div>
                        <label for=\"inputPassword\" class=\"block mb-2 text-sm font-gasoek italic text-gray-900 dark:text-white\">Mot de passe</label>
                        <input type=\"password\" name=\"password\" id=\"inputPassword\" placeholder=\"•••••••••••••••••\" class=\"bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500\" autocomplete=\"current-password\" required>

                    </div>
                    {% if error %}
                        <div class=\"flex items-center justify-center p-4 mb-4 text-sm text-red-500 border border-red-400 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-yellow-300 dark:border-yellow-800\" role=\"alert\">
                            <svg class=\"flex-shrink-0 inline w-4 h-4 me-3\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
                                <path d=\"M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z\"/>
                            </svg>
                            <span class=\"sr-only\">Info</span>
                            <div>
                                <span class=\"font-regular\">Mot de passe ou email incorrect.</span>
                            </div>
                        </div>
                    {% endif %}
                    <input type=\"hidden\" name=\"_csrf_token\"
                           value=\"{{ csrf_token('authenticate') }}\"
                    >
                    <br>
                    <button type=\"submit\" class=\"w-full text-white bg-gradient-to-r from-red-400 via-yellow-300 to-yellow-300 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 shadow-lg shadow-purple-500/50 dark:shadow-lg dark:shadow-purple-800/80 font-gasoek rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2\">Je me connecte !</button>
                </form>
            </div>
        </div>
    </div>
</section>


{% block javascripts %}
    {{ encore_entry_script_tags('app') }}
    {{ encore_entry_script_tags('app') }}
{% endblock %}


<script src=\"../path/to/flowbite/dist/flowbite.min.js\"></script>
</body>

</html>

{% block body %}
<form method=\"post\">


    <h1 class=\"h3 mb-3 font-weight-normal\">Please sign in</h1>
    <label for=\"inputEmail\">Email</label>
    <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
    <label for=\"inputPassword\">Password</label>
    <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>

    <input type=\"hidden\" name=\"_csrf_token\"
           value=\"{{ csrf_token('authenticate') }}\"
    >

    <button class=\"btn btn-lg btn-primary\" type=\"submit\">
        Sign in
    </button>
</form>
{% endblock %}
", "security/login.html.twig", "/Users/melen/Documents/Université/L3 - Informatique RENNES 1/PW/PROJET PW/ProjetPW-Sport/templates/security/login.html.twig");
    }
}
