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

/* home/index.html.twig */
class __TwigTemplate_38a7871675c8140e425059fb0f24fbd1 extends Template
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
            'section1' => [$this, 'block_section1'],
            'section2' => [$this, 'block_section2'],
            'section3' => [$this, 'block_section3'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

        echo "LeCoach";
        
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
        // line 9
        $this->displayBlock('section1', $context, $blocks);
        // line 29
        echo "
";
        // line 30
        $this->displayBlock('section2', $context, $blocks);
        // line 63
        echo "
";
        // line 64
        $this->displayBlock('section3', $context, $blocks);
        // line 156
        echo "


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_section1($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section1"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section1"));

        // line 10
        echo "    <br>
    <section class=\"bg-white dark:bg-gray-900\">
        <div class=\"py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16\">
            <div class=\"gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6\">
                <div class=\"font-light text-gray-500 sm:text-lg dark:text-gray-400\">
                    <h2 class=\"animate-fade animate-once animate-duration-[1500ms] animate-ease-linear animate-normal animate-fill-forwards mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-4xl lg:text-4xl dark:text-white\"><mark class=\"px-2 font-gasoek text-white hover:text-5xl ease-in duration-200 bg-yellow-300 rounded dark:bg-blue-500\">Un sport</mark> <span class=\"hover:text-5xl ease-in duration-200  font-gasoek underline underline-offset-3 decoration-8 decoration-red-500 dark:decoration-blue-600\">Un Coach</span></h2>
                    <br>
                    <p class=\"font-regular2 font-semibold animate-fade animate-once animate-delay-200 animate-duration-[1500ms] animate-ease-linear animate-normal font-normal mb-4\">Rejoignez notre communauté dynamique et découvrez la différence d'avoir un coach qui comprend votre passion. Quel que soit votre niveau, ensemble, nous façonnons le meilleur de vous-même.</p>
                    <br>
                    <p class=\"animate-fade font-regular animate-once animate-delay-400s animate-duration-[1500ms] animate-ease-linear animate-normal font-semibold text-gray-900\">Prêt à commencer votre voyage vers une vie plus active et épanouissante? <span class=\"underline decoration-red-500 hover:decoration-yellow-300 ease-in duration-100\"> Trouvez votre coach dès aujourd'hui!</span></p>
                </div>
                <div class=\"grid grid-cols-2 gap-4 mt-8\">
                    <img class=\"animate-fade-up animate-once animate-duration-[3000ms] animate-ease-in-out animate-normal animate-fill-forwards w-full rounded-lg\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("home/section1/jakob-owens-A4579vLezz8-unsplash.jpg"), "html", null, true);
        echo "\" alt=\"office content 1\">
                    <img class=\"animate-fade-down animate-once animate-duration-[3000ms] animate-ease-in-out animate-normal animate-fill-forwards mt-4 w-full lg:mt-10 rounded-lg\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("home/section1/valentin-lacoste-Gzu0b_Ae2ck-unsplash.jpg"), "html", null, true);
        echo "\" alt=\"office content 2\">
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 30
    public function block_section2($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section2"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section2"));

        // line 31
        echo "    <section class=\"bg-section21 bg-cover hover:bg-section22 ease-in duration-100\">
        <div class=\"py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6\">
            <div class=\"space-y-8 lg:grid lg:grid-cols-3 sm:gap-6 xl:gap-10 lg:space-y-0\">
                <!-- Pricing Card -->
                <div class=\"flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white hover:scale-105 ease-in duration-200\">
                    <h3 class=\"mb-4 text-2xl font-gasoek text-red-500 hover:text-yellow-300 ease-in duration-100\">Licencie</h3>
                    <div class=\"flex justify-center items-baseline my-8\">
                        <span class=\"mr-2 text-5xl font-gasoek\">";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["NombreLicencies"]) || array_key_exists("NombreLicencies", $context) ? $context["NombreLicencies"] : (function () { throw new RuntimeError('Variable "NombreLicencies" does not exist.', 38, $this->source); })()), "html", null, true);
        echo "</span>
                    </div>
                    <p class=\"font-regular text-gray-500 dark:text-gray-400\">Des licenciés avisés et heureux.</p>
                </div>
                <!-- Pricing Card -->
                <div class=\"flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white hover:scale-110 ease-in duration-200\">
                    <h3 class=\"mb-4 text-2xl font-gasoek text-red-600 hover:text-yellow-300 ease-in duration-100\">Categories</h3>
                    <div class=\"flex justify-center items-baseline my-8\">
                        <span class=\"mr-2 text-5xl font-gasoek\">+";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["NombreCategories"]) || array_key_exists("NombreCategories", $context) ? $context["NombreCategories"] : (function () { throw new RuntimeError('Variable "NombreCategories" does not exist.', 46, $this->source); })()), "html", null, true);
        echo "</span>
                    </div>
                    <p class=\"font-regular text-gray-500 dark:text-gray-400\">Un ensemble fou de catégories.</p>
                </div>
                <!-- Pricing Card -->
                <div class=\"flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white hover:scale-105 ease-in duration-200\">
                    <h3 class=\"mb-4 text-2xl font-gasoek text-red-500 hover:text-yellow-300 ease-in duration-100\">Educateurs</h3>
                    <div class=\"flex justify-center items-baseline my-8\">
                        <span class=\"mr-2 text-5xl font-gasoek\">";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["NombreEducateurs"]) || array_key_exists("NombreEducateurs", $context) ? $context["NombreEducateurs"] : (function () { throw new RuntimeError('Variable "NombreEducateurs" does not exist.', 54, $this->source); })()), "html", null, true);
        echo "</span>
                    </div>
                    <p class=\"font-regular text-gray-500 dark:text-gray-400\">Des éducateurs à vos soins.</p>
                </div>
            </div>
        </div>
    </section>
    <br>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 64
    public function block_section3($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section3"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section3"));

        // line 65
        echo "    <section class=\"bg-white dark:bg-gray-900\">
        <div class=\"py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6\">
            <div class=\"mb-24 text-center\">
                <h2 class=\"mb-4 text-4xl tracking-tight font-gasoek text-gray-900 dark:text-white\">Un sport ? <mark class=\"italic bg-yellow-300 hover:bg-red-500 ease-in duration-200 rounded\">Non.</mark>  Des <span class=\"underline underline-offset-3 decoration-8 decoration-red-500 hover:decoration-yellow-300 ease-in duration-200\">Sports</span> !</h2>
                <p class=\"text-gray-500 font-regular sm:text-xl dark:text-gray-400\">Chez <span class=\"font-gasoek italic hover:text-black ease-in duration-200\"> LeCoach</span> nous misons sur la qualité en vous offrant une mutlitudes de sports adaptés à vos besoins.</p>
            </div>
            <div class=\"space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0\">
                <div class=\"flex flex-col items-center\">
                    <div class=\"flex justify-center items-center rounded-full bg-primary-100 hover:bg-yellow-100 ease-in duration-200 lg:h-12 lg:w-12 dark:bg-primary-900\">
                        <svg class=\"w-5 h-5 text-primary-600 hover:text-yellow-600 ease-in duration-200 lg:w-6 lg:h-6 dark:text-primary-300\" fill=\"currentColor\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\"><path fill-rule=\"evenodd\" d=\"M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z\" clip-rule=\"evenodd\"></path></svg>
                    </div>
                    <h3 class=\"mb-2 mt-4 text-xl font-regular dark:text-white text-center\">Collectif</h3>
                    <a href=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categories");
        echo "\" class=\"inline-flex items-center font-bold italic text-red-500 hover:text-yellow-300 ease-in duration-100\">
                        Voir les catégories
                        <svg class=\"w-4 h-4 ms-2 rtl:rotate-180\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 14 10\">
                            <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M1 5h12m0 0L9 1m4 4L9 9\"/>
                        </svg>
                    </a>
                </div>
                <div class=\"flex flex-col items-center\">
                    <div class=\"flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 hover:bg-yellow-100 ease-in duration-200 lg:h-12 lg:w-12 dark:bg-primary-900\">
                        <svg class=\"w-5 h-5 text-primary-600 hover:text-yellow-600 ease-in duration-200 lg:w-6 lg:h-6 dark:text-primary-300\" fill=\"currentColor\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M19.472 9.541a.5.5 0 0 0-.982-.1 1.308 1.308 0 0 1-1.258.96 1.394 1.394 0 0 1-1.329-.959.5.5 0 0 0-.965 0 1.394 1.394 0 0 1-2.6.136l-.046-.194.02-.139V7.5H14.5A2.5 2.5 0 0 0 17 5a2.544 2.544 0 0 0-2.521-2.5l-.5.021-.124-.351A2.5 2.5 0 0 0 11.5.5c-.439 0-.87.118-1.248.34L10 .987 9.748.84A2.472 2.472 0 0 0 8.5.5a2.5 2.5 0 0 0-2.358 1.671l-.124.351-.492-.022A2.547 2.547 0 0 0 3 5a2.5 2.5 0 0 0 2.5 2.5h2.229v1.793l-.007.085-.026.077a1.26 1.26 0 0 1-1.236.945 1.55 1.55 0 0 1-1.427-.972.5.5 0 0 0-.959.012 1.4 1.4 0 0 1-1.334.96 1.312 1.312 0 0 1-1.259-.96.52.52 0 0 0-.54-.363H.933a.5.5 0 0 0-.433.5V10a9.511 9.511 0 0 0 9.5 9.5 9.41 9.41 0 0 0 6.713-2.793 9.518 9.518 0 0 0 2.786-6.74l-.027-.426ZM6.5 13.5a1 1 0 1 1 2 0 1 1 0 0 1-2 0ZM8 17a2 2 0 0 1 4 0H8Zm4.5-2.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z\"></path></svg>
                    </div>
                    <h3 class=\"mb-2 text-xl font-regular dark:text-white text-center\">Aventureux</h3>
                    <a href=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categories");
        echo "\" class=\"inline-flex items-center font-bold italic text-red-500 hover:text-yellow-300 ease-in duration-100\">
                        Voir les catégories
                        <svg class=\"w-4 h-4 ms-2 rtl:rotate-180\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 14 10\">
                            <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M1 5h12m0 0L9 1m4 4L9 9\"/>
                        </svg>
                    </a>
                </div>
                <div class=\"flex flex-col items-center\">
                    <div class=\"flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 hover:bg-yellow-100 ease-in duration-200 lg:h-12 lg:w-12 dark:bg-primary-900\">
                        <svg class=\"w-5 h-5 text-primary-600 hover:text-yellow-600 ease-in duration-200 lg:w-6 lg:h-6 dark:text-primary-300\" aria-hidden=\"true\" viewBox=\"0 0 20 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">     <path d=\"M10 19C14.9706 19 19 14.9706 19 10C19 5.02944 14.9706 1 10 1C5.02944 1 1 5.02944 1 10C1 14.9706 5.02944 19 10 19Z\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>     <path d=\"M15 11C15 13.038 12.761 15.5 10 15.5C7.239 15.5 5 13.038 5 11C5 12.444 15 12.444 15 11Z\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>     <path d=\"M6.5 8C7.32843 8 8 7.32843 8 6.5C8 5.67157 7.32843 5 6.5 5C5.67157 5 5 5.67157 5 6.5C5 7.32843 5.67157 8 6.5 8Z\" fill=\"currentColor\"/>     <path d=\"M13.5 8C14.3284 8 15 7.32843 15 6.5C15 5.67157 14.3284 5 13.5 5C12.6716 5 12 5.67157 12 6.5C12 7.32843 12.6716 8 13.5 8Z\" fill=\"currentColor\"/>     </svg>                         </div>
                    <h3 class=\"mb-2 text-xl font-regular dark:text-white text-center\">Zen</h3>
                    <a href=\"";
        // line 100
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categories");
        echo "\" class=\"inline-flex items-center font-bold italic text-red-500 hover:text-yellow-300 ease-in duration-100\">
                        Voir les catégories
                        <svg class=\"w-4 h-4 ms-2 rtl:rotate-180\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 14 10\">
                            <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M1 5h12m0 0L9 1m4 4L9 9\"/>
                        </svg>
                    </a>
                </div>
                <div class=\"flex flex-col items-center\">
                    <div class=\"flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 hover:bg-yellow-100 ease-in duration-200 lg:h-12 lg:w-12 dark:bg-primary-900\">
                        <svg class=\"w-5 h-5 text-primary-600 hover:text-yellow-600 ease-in duration-200 lg:w-6 lg:h-6 dark:text-primary-300\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
                            <path d=\"M9 19V.352A3.451 3.451 0 0 0 7.5 0a3.5 3.5 0 0 0-3.261 2.238A3.5 3.5 0 0 0 2.04 6.015a3.518 3.518 0 0 0-.766 1.128c-.042.1-.064.209-.1.313a3.34 3.34 0 0 0-.106.344 3.463 3.463 0 0 0 .02 1.468A4.016 4.016 0 0 0 .3 10.5l-.015.036a3.861 3.861 0 0 0-.216.779A3.968 3.968 0 0 0 0 12a4.032 4.032 0 0 0 .107.889 4 4 0 0 0 .2.659c.006.014.015.027.021.041a3.85 3.85 0 0 0 .417.727c.105.146.219.284.342.415.072.076.148.146.225.216.1.091.205.179.315.26.11.081.2.14.308.2.02.013.039.028.059.04v.053a3.506 3.506 0 0 0 3.03 3.469 3.426 3.426 0 0 0 4.154.577A.972.972 0 0 1 9 19Zm10.934-7.68a3.956 3.956 0 0 0-.215-.779l-.017-.038a4.016 4.016 0 0 0-.79-1.235 3.417 3.417 0 0 0 .017-1.468 3.387 3.387 0 0 0-.1-.333c-.034-.108-.057-.22-.1-.324a3.517 3.517 0 0 0-.766-1.128 3.5 3.5 0 0 0-2.202-3.777A3.5 3.5 0 0 0 12.5 0a3.451 3.451 0 0 0-1.5.352V19a.972.972 0 0 1-.184.546 3.426 3.426 0 0 0 4.154-.577A3.506 3.506 0 0 0 18 15.5v-.049c.02-.012.039-.027.059-.04.106-.064.208-.13.308-.2s.214-.169.315-.26c.077-.07.153-.14.225-.216a4.007 4.007 0 0 0 .459-.588c.115-.176.215-.361.3-.554.006-.014.015-.027.021-.041.087-.213.156-.434.205-.659.013-.057.024-.115.035-.173.046-.237.07-.478.073-.72a3.948 3.948 0 0 0-.066-.68Z\"/>
                        </svg>                    </div>
                    <h3 class=\"mb-2 text-xl font-regular dark:text-white text-center\">Renforcement</h3>
                    <a href=\"";
        // line 113
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categories");
        echo "\" class=\"inline-flex items-center font-bold italic text-red-500 hover:text-yellow-300 ease-in duration-100\">
                        Voir les catégories
                        <svg class=\"w-4 h-4 ms-2 rtl:rotate-180\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 14 10\">
                            <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M1 5h12m0 0L9 1m4 4L9 9\"/>
                        </svg>
                    </a>
                </div>
                <div class=\"flex flex-col items-center\">
                    <div class=\"flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 hover:bg-yellow-100 ease-in duration-200 lg:h-12 lg:w-12 dark:bg-primary-900\">
                        <svg class=\"w-5 h-5 text-primary-600 hover:text-yellow-600 ease-in duration-200 lg:w-6 lg:h-6 \" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
                            <path fill=\"currentColor\" d=\"m18.774 8.245-.892-.893a1.5 1.5 0 0 1-.437-1.052V5.036a2.484 2.484 0 0 0-2.48-2.48H13.7a1.5 1.5 0 0 1-1.052-.438l-.893-.892a2.484 2.484 0 0 0-3.51 0l-.893.892a1.5 1.5 0 0 1-1.052.437H5.036a2.484 2.484 0 0 0-2.48 2.481V6.3a1.5 1.5 0 0 1-.438 1.052l-.892.893a2.484 2.484 0 0 0 0 3.51l.892.893a1.5 1.5 0 0 1 .437 1.052v1.264a2.484 2.484 0 0 0 2.481 2.481H6.3a1.5 1.5 0 0 1 1.052.437l.893.892a2.484 2.484 0 0 0 3.51 0l.893-.892a1.5 1.5 0 0 1 1.052-.437h1.264a2.484 2.484 0 0 0 2.481-2.48V13.7a1.5 1.5 0 0 1 .437-1.052l.892-.893a2.484 2.484 0 0 0 0-3.51Z\"/>
                            <path fill=\"#fff\" d=\"M8 13a1 1 0 0 1-.707-.293l-2-2a1 1 0 1 1 1.414-1.414l1.42 1.42 5.318-3.545a1 1 0 0 1 1.11 1.664l-6 4A1 1 0 0 1 8 13Z\"/>
                        </svg>
                    </div>
                    <h3 class=\"mb-2 text-xl font-regular dark:text-white text-center\">Original</h3>
                    <a href=\"";
        // line 128
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categories");
        echo "\" class=\"inline-flex items-center font-bold italic text-red-500 hover:text-yellow-300 ease-in duration-100\">
                        Voir les catégories
                        <svg class=\"w-4 h-4 ms-2 rtl:rotate-180\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 14 10\">
                            <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M1 5h12m0 0L9 1m4 4L9 9\"/>
                        </svg>
                    </a>
                </div>
                <div class=\"flex flex-col items-center\">
                    <div class=\"flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 hover:bg-yellow-100 ease-in duration-200 lg:h-12 lg:w-12 dark:bg-primary-900\">
                        <svg class=\"w-5 h-5 text-primary-600 hover:text-yellow-600 ease-in duration-200 lg:w-6 lg:h-6 \" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 12 10\">
                            <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"m7 9 4-4-4-4M1 9l4-4-4-4\"/>
                        </svg>                    </div>
                    <h3 class=\"mb-2 text-xl font-regular dark:text-white text-center\">Cardio</h3>
                    <a href=\"";
        // line 141
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categories");
        echo "\" class=\"inline-flex items-center font-bold italic text-red-500 hover:text-yellow-300 ease-in duration-100\">
                        Voir les catégories
                        <svg class=\"w-4 h-4 ms-2 rtl:rotate-180\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 14 10\">
                            <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M1 5h12m0 0L9 1m4 4L9 9\"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <br>
    <br>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home/index.html.twig";
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
        return array (  328 => 141,  312 => 128,  294 => 113,  278 => 100,  264 => 89,  249 => 77,  235 => 65,  225 => 64,  206 => 54,  195 => 46,  184 => 38,  175 => 31,  165 => 30,  149 => 23,  145 => 22,  131 => 10,  121 => 9,  108 => 156,  106 => 64,  103 => 63,  101 => 30,  98 => 29,  96 => 9,  91 => 6,  81 => 5,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}LeCoach{% endblock %}

{% block content %}



{% block section1 %}
    <br>
    <section class=\"bg-white dark:bg-gray-900\">
        <div class=\"py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16\">
            <div class=\"gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6\">
                <div class=\"font-light text-gray-500 sm:text-lg dark:text-gray-400\">
                    <h2 class=\"animate-fade animate-once animate-duration-[1500ms] animate-ease-linear animate-normal animate-fill-forwards mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-4xl lg:text-4xl dark:text-white\"><mark class=\"px-2 font-gasoek text-white hover:text-5xl ease-in duration-200 bg-yellow-300 rounded dark:bg-blue-500\">Un sport</mark> <span class=\"hover:text-5xl ease-in duration-200  font-gasoek underline underline-offset-3 decoration-8 decoration-red-500 dark:decoration-blue-600\">Un Coach</span></h2>
                    <br>
                    <p class=\"font-regular2 font-semibold animate-fade animate-once animate-delay-200 animate-duration-[1500ms] animate-ease-linear animate-normal font-normal mb-4\">Rejoignez notre communauté dynamique et découvrez la différence d'avoir un coach qui comprend votre passion. Quel que soit votre niveau, ensemble, nous façonnons le meilleur de vous-même.</p>
                    <br>
                    <p class=\"animate-fade font-regular animate-once animate-delay-400s animate-duration-[1500ms] animate-ease-linear animate-normal font-semibold text-gray-900\">Prêt à commencer votre voyage vers une vie plus active et épanouissante? <span class=\"underline decoration-red-500 hover:decoration-yellow-300 ease-in duration-100\"> Trouvez votre coach dès aujourd'hui!</span></p>
                </div>
                <div class=\"grid grid-cols-2 gap-4 mt-8\">
                    <img class=\"animate-fade-up animate-once animate-duration-[3000ms] animate-ease-in-out animate-normal animate-fill-forwards w-full rounded-lg\" src=\"{{ asset('home/section1/jakob-owens-A4579vLezz8-unsplash.jpg') }}\" alt=\"office content 1\">
                    <img class=\"animate-fade-down animate-once animate-duration-[3000ms] animate-ease-in-out animate-normal animate-fill-forwards mt-4 w-full lg:mt-10 rounded-lg\" src=\"{{ asset('home/section1/valentin-lacoste-Gzu0b_Ae2ck-unsplash.jpg') }}\" alt=\"office content 2\">
                </div>
            </div>
        </div>
    </section>
{% endblock %}

{% block section2 %}
    <section class=\"bg-section21 bg-cover hover:bg-section22 ease-in duration-100\">
        <div class=\"py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6\">
            <div class=\"space-y-8 lg:grid lg:grid-cols-3 sm:gap-6 xl:gap-10 lg:space-y-0\">
                <!-- Pricing Card -->
                <div class=\"flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white hover:scale-105 ease-in duration-200\">
                    <h3 class=\"mb-4 text-2xl font-gasoek text-red-500 hover:text-yellow-300 ease-in duration-100\">Licencie</h3>
                    <div class=\"flex justify-center items-baseline my-8\">
                        <span class=\"mr-2 text-5xl font-gasoek\">{{ NombreLicencies }}</span>
                    </div>
                    <p class=\"font-regular text-gray-500 dark:text-gray-400\">Des licenciés avisés et heureux.</p>
                </div>
                <!-- Pricing Card -->
                <div class=\"flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white hover:scale-110 ease-in duration-200\">
                    <h3 class=\"mb-4 text-2xl font-gasoek text-red-600 hover:text-yellow-300 ease-in duration-100\">Categories</h3>
                    <div class=\"flex justify-center items-baseline my-8\">
                        <span class=\"mr-2 text-5xl font-gasoek\">+{{ NombreCategories }}</span>
                    </div>
                    <p class=\"font-regular text-gray-500 dark:text-gray-400\">Un ensemble fou de catégories.</p>
                </div>
                <!-- Pricing Card -->
                <div class=\"flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white hover:scale-105 ease-in duration-200\">
                    <h3 class=\"mb-4 text-2xl font-gasoek text-red-500 hover:text-yellow-300 ease-in duration-100\">Educateurs</h3>
                    <div class=\"flex justify-center items-baseline my-8\">
                        <span class=\"mr-2 text-5xl font-gasoek\">{{ NombreEducateurs }}</span>
                    </div>
                    <p class=\"font-regular text-gray-500 dark:text-gray-400\">Des éducateurs à vos soins.</p>
                </div>
            </div>
        </div>
    </section>
    <br>
{% endblock %}

{%block section3 %}
    <section class=\"bg-white dark:bg-gray-900\">
        <div class=\"py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6\">
            <div class=\"mb-24 text-center\">
                <h2 class=\"mb-4 text-4xl tracking-tight font-gasoek text-gray-900 dark:text-white\">Un sport ? <mark class=\"italic bg-yellow-300 hover:bg-red-500 ease-in duration-200 rounded\">Non.</mark>  Des <span class=\"underline underline-offset-3 decoration-8 decoration-red-500 hover:decoration-yellow-300 ease-in duration-200\">Sports</span> !</h2>
                <p class=\"text-gray-500 font-regular sm:text-xl dark:text-gray-400\">Chez <span class=\"font-gasoek italic hover:text-black ease-in duration-200\"> LeCoach</span> nous misons sur la qualité en vous offrant une mutlitudes de sports adaptés à vos besoins.</p>
            </div>
            <div class=\"space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0\">
                <div class=\"flex flex-col items-center\">
                    <div class=\"flex justify-center items-center rounded-full bg-primary-100 hover:bg-yellow-100 ease-in duration-200 lg:h-12 lg:w-12 dark:bg-primary-900\">
                        <svg class=\"w-5 h-5 text-primary-600 hover:text-yellow-600 ease-in duration-200 lg:w-6 lg:h-6 dark:text-primary-300\" fill=\"currentColor\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\"><path fill-rule=\"evenodd\" d=\"M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z\" clip-rule=\"evenodd\"></path></svg>
                    </div>
                    <h3 class=\"mb-2 mt-4 text-xl font-regular dark:text-white text-center\">Collectif</h3>
                    <a href=\"{{ path('app_categories') }}\" class=\"inline-flex items-center font-bold italic text-red-500 hover:text-yellow-300 ease-in duration-100\">
                        Voir les catégories
                        <svg class=\"w-4 h-4 ms-2 rtl:rotate-180\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 14 10\">
                            <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M1 5h12m0 0L9 1m4 4L9 9\"/>
                        </svg>
                    </a>
                </div>
                <div class=\"flex flex-col items-center\">
                    <div class=\"flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 hover:bg-yellow-100 ease-in duration-200 lg:h-12 lg:w-12 dark:bg-primary-900\">
                        <svg class=\"w-5 h-5 text-primary-600 hover:text-yellow-600 ease-in duration-200 lg:w-6 lg:h-6 dark:text-primary-300\" fill=\"currentColor\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M19.472 9.541a.5.5 0 0 0-.982-.1 1.308 1.308 0 0 1-1.258.96 1.394 1.394 0 0 1-1.329-.959.5.5 0 0 0-.965 0 1.394 1.394 0 0 1-2.6.136l-.046-.194.02-.139V7.5H14.5A2.5 2.5 0 0 0 17 5a2.544 2.544 0 0 0-2.521-2.5l-.5.021-.124-.351A2.5 2.5 0 0 0 11.5.5c-.439 0-.87.118-1.248.34L10 .987 9.748.84A2.472 2.472 0 0 0 8.5.5a2.5 2.5 0 0 0-2.358 1.671l-.124.351-.492-.022A2.547 2.547 0 0 0 3 5a2.5 2.5 0 0 0 2.5 2.5h2.229v1.793l-.007.085-.026.077a1.26 1.26 0 0 1-1.236.945 1.55 1.55 0 0 1-1.427-.972.5.5 0 0 0-.959.012 1.4 1.4 0 0 1-1.334.96 1.312 1.312 0 0 1-1.259-.96.52.52 0 0 0-.54-.363H.933a.5.5 0 0 0-.433.5V10a9.511 9.511 0 0 0 9.5 9.5 9.41 9.41 0 0 0 6.713-2.793 9.518 9.518 0 0 0 2.786-6.74l-.027-.426ZM6.5 13.5a1 1 0 1 1 2 0 1 1 0 0 1-2 0ZM8 17a2 2 0 0 1 4 0H8Zm4.5-2.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z\"></path></svg>
                    </div>
                    <h3 class=\"mb-2 text-xl font-regular dark:text-white text-center\">Aventureux</h3>
                    <a href=\"{{ path('app_categories') }}\" class=\"inline-flex items-center font-bold italic text-red-500 hover:text-yellow-300 ease-in duration-100\">
                        Voir les catégories
                        <svg class=\"w-4 h-4 ms-2 rtl:rotate-180\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 14 10\">
                            <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M1 5h12m0 0L9 1m4 4L9 9\"/>
                        </svg>
                    </a>
                </div>
                <div class=\"flex flex-col items-center\">
                    <div class=\"flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 hover:bg-yellow-100 ease-in duration-200 lg:h-12 lg:w-12 dark:bg-primary-900\">
                        <svg class=\"w-5 h-5 text-primary-600 hover:text-yellow-600 ease-in duration-200 lg:w-6 lg:h-6 dark:text-primary-300\" aria-hidden=\"true\" viewBox=\"0 0 20 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">     <path d=\"M10 19C14.9706 19 19 14.9706 19 10C19 5.02944 14.9706 1 10 1C5.02944 1 1 5.02944 1 10C1 14.9706 5.02944 19 10 19Z\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>     <path d=\"M15 11C15 13.038 12.761 15.5 10 15.5C7.239 15.5 5 13.038 5 11C5 12.444 15 12.444 15 11Z\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>     <path d=\"M6.5 8C7.32843 8 8 7.32843 8 6.5C8 5.67157 7.32843 5 6.5 5C5.67157 5 5 5.67157 5 6.5C5 7.32843 5.67157 8 6.5 8Z\" fill=\"currentColor\"/>     <path d=\"M13.5 8C14.3284 8 15 7.32843 15 6.5C15 5.67157 14.3284 5 13.5 5C12.6716 5 12 5.67157 12 6.5C12 7.32843 12.6716 8 13.5 8Z\" fill=\"currentColor\"/>     </svg>                         </div>
                    <h3 class=\"mb-2 text-xl font-regular dark:text-white text-center\">Zen</h3>
                    <a href=\"{{ path('app_categories') }}\" class=\"inline-flex items-center font-bold italic text-red-500 hover:text-yellow-300 ease-in duration-100\">
                        Voir les catégories
                        <svg class=\"w-4 h-4 ms-2 rtl:rotate-180\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 14 10\">
                            <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M1 5h12m0 0L9 1m4 4L9 9\"/>
                        </svg>
                    </a>
                </div>
                <div class=\"flex flex-col items-center\">
                    <div class=\"flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 hover:bg-yellow-100 ease-in duration-200 lg:h-12 lg:w-12 dark:bg-primary-900\">
                        <svg class=\"w-5 h-5 text-primary-600 hover:text-yellow-600 ease-in duration-200 lg:w-6 lg:h-6 dark:text-primary-300\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
                            <path d=\"M9 19V.352A3.451 3.451 0 0 0 7.5 0a3.5 3.5 0 0 0-3.261 2.238A3.5 3.5 0 0 0 2.04 6.015a3.518 3.518 0 0 0-.766 1.128c-.042.1-.064.209-.1.313a3.34 3.34 0 0 0-.106.344 3.463 3.463 0 0 0 .02 1.468A4.016 4.016 0 0 0 .3 10.5l-.015.036a3.861 3.861 0 0 0-.216.779A3.968 3.968 0 0 0 0 12a4.032 4.032 0 0 0 .107.889 4 4 0 0 0 .2.659c.006.014.015.027.021.041a3.85 3.85 0 0 0 .417.727c.105.146.219.284.342.415.072.076.148.146.225.216.1.091.205.179.315.26.11.081.2.14.308.2.02.013.039.028.059.04v.053a3.506 3.506 0 0 0 3.03 3.469 3.426 3.426 0 0 0 4.154.577A.972.972 0 0 1 9 19Zm10.934-7.68a3.956 3.956 0 0 0-.215-.779l-.017-.038a4.016 4.016 0 0 0-.79-1.235 3.417 3.417 0 0 0 .017-1.468 3.387 3.387 0 0 0-.1-.333c-.034-.108-.057-.22-.1-.324a3.517 3.517 0 0 0-.766-1.128 3.5 3.5 0 0 0-2.202-3.777A3.5 3.5 0 0 0 12.5 0a3.451 3.451 0 0 0-1.5.352V19a.972.972 0 0 1-.184.546 3.426 3.426 0 0 0 4.154-.577A3.506 3.506 0 0 0 18 15.5v-.049c.02-.012.039-.027.059-.04.106-.064.208-.13.308-.2s.214-.169.315-.26c.077-.07.153-.14.225-.216a4.007 4.007 0 0 0 .459-.588c.115-.176.215-.361.3-.554.006-.014.015-.027.021-.041.087-.213.156-.434.205-.659.013-.057.024-.115.035-.173.046-.237.07-.478.073-.72a3.948 3.948 0 0 0-.066-.68Z\"/>
                        </svg>                    </div>
                    <h3 class=\"mb-2 text-xl font-regular dark:text-white text-center\">Renforcement</h3>
                    <a href=\"{{ path('app_categories') }}\" class=\"inline-flex items-center font-bold italic text-red-500 hover:text-yellow-300 ease-in duration-100\">
                        Voir les catégories
                        <svg class=\"w-4 h-4 ms-2 rtl:rotate-180\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 14 10\">
                            <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M1 5h12m0 0L9 1m4 4L9 9\"/>
                        </svg>
                    </a>
                </div>
                <div class=\"flex flex-col items-center\">
                    <div class=\"flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 hover:bg-yellow-100 ease-in duration-200 lg:h-12 lg:w-12 dark:bg-primary-900\">
                        <svg class=\"w-5 h-5 text-primary-600 hover:text-yellow-600 ease-in duration-200 lg:w-6 lg:h-6 \" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
                            <path fill=\"currentColor\" d=\"m18.774 8.245-.892-.893a1.5 1.5 0 0 1-.437-1.052V5.036a2.484 2.484 0 0 0-2.48-2.48H13.7a1.5 1.5 0 0 1-1.052-.438l-.893-.892a2.484 2.484 0 0 0-3.51 0l-.893.892a1.5 1.5 0 0 1-1.052.437H5.036a2.484 2.484 0 0 0-2.48 2.481V6.3a1.5 1.5 0 0 1-.438 1.052l-.892.893a2.484 2.484 0 0 0 0 3.51l.892.893a1.5 1.5 0 0 1 .437 1.052v1.264a2.484 2.484 0 0 0 2.481 2.481H6.3a1.5 1.5 0 0 1 1.052.437l.893.892a2.484 2.484 0 0 0 3.51 0l.893-.892a1.5 1.5 0 0 1 1.052-.437h1.264a2.484 2.484 0 0 0 2.481-2.48V13.7a1.5 1.5 0 0 1 .437-1.052l.892-.893a2.484 2.484 0 0 0 0-3.51Z\"/>
                            <path fill=\"#fff\" d=\"M8 13a1 1 0 0 1-.707-.293l-2-2a1 1 0 1 1 1.414-1.414l1.42 1.42 5.318-3.545a1 1 0 0 1 1.11 1.664l-6 4A1 1 0 0 1 8 13Z\"/>
                        </svg>
                    </div>
                    <h3 class=\"mb-2 text-xl font-regular dark:text-white text-center\">Original</h3>
                    <a href=\"{{ path('app_categories') }}\" class=\"inline-flex items-center font-bold italic text-red-500 hover:text-yellow-300 ease-in duration-100\">
                        Voir les catégories
                        <svg class=\"w-4 h-4 ms-2 rtl:rotate-180\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 14 10\">
                            <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M1 5h12m0 0L9 1m4 4L9 9\"/>
                        </svg>
                    </a>
                </div>
                <div class=\"flex flex-col items-center\">
                    <div class=\"flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 hover:bg-yellow-100 ease-in duration-200 lg:h-12 lg:w-12 dark:bg-primary-900\">
                        <svg class=\"w-5 h-5 text-primary-600 hover:text-yellow-600 ease-in duration-200 lg:w-6 lg:h-6 \" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 12 10\">
                            <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"m7 9 4-4-4-4M1 9l4-4-4-4\"/>
                        </svg>                    </div>
                    <h3 class=\"mb-2 text-xl font-regular dark:text-white text-center\">Cardio</h3>
                    <a href=\"{{ path('app_categories') }}\" class=\"inline-flex items-center font-bold italic text-red-500 hover:text-yellow-300 ease-in duration-100\">
                        Voir les catégories
                        <svg class=\"w-4 h-4 ms-2 rtl:rotate-180\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 14 10\">
                            <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M1 5h12m0 0L9 1m4 4L9 9\"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <br>
    <br>
{% endblock %}



{% endblock %}", "home/index.html.twig", "/Users/melen/Documents/Université/L3 - Informatique RENNES 1/PW/PROJET PW/ProjetPW-Sport/templates/home/index.html.twig");
    }
}
