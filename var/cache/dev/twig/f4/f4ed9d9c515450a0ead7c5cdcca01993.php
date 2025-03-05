<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* about/index2.html.twig */
class __TwigTemplate_40c698c1c8a2b92d6fc47295f2d199d5 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
            'stylesheets' => [$this, 'block_stylesheets'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "about/index2.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "about/index2.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "about/index2.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        yield "    <canvas id=\"projector\"></canvas>
    ";
        // line 4
        yield from $this->loadTemplate("header.html.twig", "about/index2.html.twig", 4)->unwrap()->yield($context);
        // line 5
        yield "    <main>
        <div class=\"wrapper\">
            <h1 class=\"title middleBaseSize text-start\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("about_page.title"), "html", null, true);
        yield "</h1>
        </div>
        <div class=\"more\">
            <a href=\"#backend\" class=\"textBaseSize arrowMore\">
                <span class=\"textBaseSize\">";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("about_page.more"), "html", null, true);
        yield "</span>
                <img src=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/arrow.svg"), "html", null, true);
        yield "\" alt=\"arrow\">
            </a>
        </div>
    </main>
    <section id=\"backend\" class=\"sectionSkill\">
        <div class=\"wrapper\">
            <div class=\"align-center flex flex-column\">
                <h2 class=\"middleBaseSize mt-0\">";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend"), "html", null, true);
        yield "</h2>
                <p class=\"descriptionAbout text-center smallBaseSize\">";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("about_page.backend.description"), "html", null, true);
        yield "</p>
                <div class=\"flex flex-wrap justify-center mt-2\">
                    <div class=\"language\">
                        <img class=\"icon\" src=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icon/symfony.png"), "html", null, true);
        yield "\" alt=\"symfony\">
                        <span class=\"flex align-center smallBaseSize\">Symfony</span>
                    </div>
                    <div class=\"language\">
                        <img class=\"icon\" src=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icon/node.png"), "html", null, true);
        yield "\" alt=\"angular\">
                        <span class=\"flex align-center smallBaseSize\">NodeJS</span>
                    </div>
                    <div class=\"language\">
                        <img class=\"icon\" src=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icon/java.png"), "html", null, true);
        yield "\" alt=\"java\">
                        <span class=\"flex align-center smallBaseSize\">Java</span>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"more\">
            <a href=\"#frontend\" class=\"textBaseSize arrowMore\">
                <span class=\"textBaseSize\">";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("about_page.more"), "html", null, true);
        yield "</span>
                <img src=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/arrow.svg"), "html", null, true);
        yield "\" alt=\"arrow\">
            </a>
        </div>
    </section>
    <section id=\"frontend\" class=\"sectionSkill\">
        <div class=\"wrapper\">
            <div class=\"align-center flex flex-column\">
                <h2 class=\"middleBaseSize mt-0\">";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("frontend"), "html", null, true);
        yield "</h2>
                <p class=\"descriptionAbout text-center smallBaseSize\">";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("about_page.frontend.description"), "html", null, true);
        yield "</p>
                <div class=\"flex flex-wrap justify-center mt-2\">
                    <div class=\"language\">
                        <img class=\"icon\" src=\"";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icon/vue.png"), "html", null, true);
        yield "\" alt=\"vue js\">
                        <span class=\"flex align-center smallBaseSize\">VueJs</span>
                    </div>
                    <div class=\"language\">
                        <img class=\"icon\" src=\"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icon/js.png"), "html", null, true);
        yield "\" alt=\"js\">
                        <span class=\"flex align-center smallBaseSize\">JS</span>
                    </div>
                    <div class=\"language\">
                        <img class=\"icon\" src=\"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icon/typescript.png"), "html", null, true);
        yield "\" alt=\"js\">
                        <span class=\"flex align-center smallBaseSize\">Typescript</span>
                    </div>
                    <div class=\"language\">
                        <img class=\"icon\" src=\"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icon/angular.png"), "html", null, true);
        yield "\" alt=\"angular\">
                        <span class=\"flex align-center smallBaseSize\">Angular</span>
                    </div>
                    <div class=\"language\">
                        <img class=\"icon\" src=\"";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icon/bootstrap.png"), "html", null, true);
        yield "\"
                             alt=\"bootstrap\">
                        <span class=\"flex align-center smallBaseSize\">Bootstrap</span>
                    </div>
                    <div class=\"language\">
                        <img class=\"icon\" src=\"";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icon/tailwinds.png"), "html", null, true);
        yield "\"
                             alt=\"tailwinds\">
                        <span class=\"flex align-center smallBaseSize\">Tailwinds</span>
                    </div>
                    <div class=\"language\">
                        <img class=\"icon\" src=\"";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icon/twig.png"), "html", null, true);
        yield "\" alt=\"twig\">
                        <span class=\"flex align-center smallBaseSize\">Twig</span>
                    </div>
                    <div class=\"language\">
                        <img class=\"icon\" src=\"";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icon/scss.png"), "html", null, true);
        yield "\" alt=\"sass\">
                        <span class=\"flex align-center smallBaseSize\">SASS</span>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"more\">
            <a href=\"#devops\" class=\"textBaseSize arrowMore\">
                <span class=\"textBaseSize\">";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("about_page.more"), "html", null, true);
        yield "</span>
                <img src=\"";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/arrow.svg"), "html", null, true);
        yield "\" alt=\"arrow\">
            </a>
        </div>
    </section>
    <section id=\"devops\" class=\"sectionSkill\">
        <div class=\"wrapper\">
            <div class=\"align-center flex flex-column\">
                <h2 class=\"middleBaseSize mt-0\">";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("devops_tools"), "html", null, true);
        yield "</h2>
                <p class=\"descriptionAbout text-center smallBaseSize\">";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("about_page.devops.description"), "html", null, true);
        yield "</p>
                <div class=\"flex flex-wrap justify-center mt-2\">
                    <div class=\"language\">
                        <img class=\"icon\" src=\"";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icon/git.png"), "html", null, true);
        yield "\" alt=\"git\">
                        <span class=\"flex align-center smallBaseSize\">Git</span>
                    </div>
                    <div class=\"language\">
                        <img class=\"icon\" src=\"";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icon/docker.png"), "html", null, true);
        yield "\" alt=\"docker\">
                        <span class=\"flex align-center smallBaseSize\">Docker</span>
                    </div>
                    <div class=\"language\">
                        <img class=\"icon\" src=\"";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icon/figma.png"), "html", null, true);
        yield "\" alt=\"figma\">
                        <span class=\"flex align-center smallBaseSize\">Figma</span>
                    </div>
                    <div class=\"language\">
                        <img class=\"icon\" src=\"";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icon/intellij.png"), "html", null, true);
        yield "\" alt=\"intellij\">
                        <span class=\"flex align-center smallBaseSize\"\">Intellij</span>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"more\">
            <a href=\"#contact\" class=\"textBaseSize arrowMore\">
                <span class=\"textBaseSize\">";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("about_page.more"), "html", null, true);
        yield "</span>
                <img src=\"";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/arrow.svg"), "html", null, true);
        yield "\" alt=\"arrow\">
            </a>
        </div>
    </section>
    <section id=\"contact\" class=\"sectionContact\">
        <h1 class=\"title middleBaseSize text-center\">";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("about_page.contact.title"), "html", null, true);
        yield "</h1>
        <p class=\"midMiddleBaseSize text-center\">";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("about_page.contact.description"), "html", null, true);
        yield "</p>
        <div class=\"formGroup\">
            <div class=\"flex justify-center gap-1 \">
                <a href=\"https://fr.linkedin.com/in/quentin-bastos-a02838222\" target=\"_blank\">
                    <img class=\"iconContact\" src=\"";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icon/linkedin.png"), "html", null, true);
        yield "\" alt=\"linkedin\">
                </a>
                <a href=\"mailto:bastos.quentin.pro@gmail.com\" target=\"_blank\">
                    <img class=\"iconContact\" src=\"";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icon/mail.png"), "html", null, true);
        yield "\" alt=\"linkedin\">
                </a>
                <a href=\"https://github.com/QuentinBastos\" target=\"_blank\">
                    <img class=\"iconContact\" src=\"";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icon/github.png"), "html", null, true);
        yield "\" alt=\"github\">
                </a>
            </div>
        </div>
    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 144
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 145
        yield "    <script src=\"/assets/js/background.js\"></script>
    <script src=\"https://code.createjs.com/1.0.0/createjs.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js\"></script>
    ";
        // line 148
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 151
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 152
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "about/index2.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  381 => 152,  368 => 151,  355 => 148,  350 => 145,  337 => 144,  320 => 138,  314 => 135,  308 => 132,  301 => 128,  297 => 127,  289 => 122,  285 => 121,  274 => 113,  267 => 109,  260 => 105,  253 => 101,  247 => 98,  243 => 97,  233 => 90,  229 => 89,  218 => 81,  211 => 77,  203 => 72,  195 => 67,  188 => 63,  181 => 59,  174 => 55,  167 => 51,  161 => 48,  157 => 47,  147 => 40,  143 => 39,  132 => 31,  125 => 27,  118 => 23,  112 => 20,  108 => 19,  98 => 12,  94 => 11,  87 => 7,  83 => 5,  81 => 4,  78 => 3,  65 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
    <canvas id=\"projector\"></canvas>
    {% include \"header.html.twig\" %}
    <main>
        <div class=\"wrapper\">
            <h1 class=\"title middleBaseSize text-start\">{{ \"about_page.title\"|trans }}</h1>
        </div>
        <div class=\"more\">
            <a href=\"#backend\" class=\"textBaseSize arrowMore\">
                <span class=\"textBaseSize\">{{ 'about_page.more'|trans }}</span>
                <img src=\"{{ asset('assets/svg/arrow.svg') }}\" alt=\"arrow\">
            </a>
        </div>
    </main>
    <section id=\"backend\" class=\"sectionSkill\">
        <div class=\"wrapper\">
            <div class=\"align-center flex flex-column\">
                <h2 class=\"middleBaseSize mt-0\">{{ \"backend\"|trans }}</h2>
                <p class=\"descriptionAbout text-center smallBaseSize\">{{ \"about_page.backend.description\"|trans }}</p>
                <div class=\"flex flex-wrap justify-center mt-2\">
                    <div class=\"language\">
                        <img class=\"icon\" src=\"{{ asset('assets/img/icon/symfony.png') }}\" alt=\"symfony\">
                        <span class=\"flex align-center smallBaseSize\">Symfony</span>
                    </div>
                    <div class=\"language\">
                        <img class=\"icon\" src=\"{{ asset('assets/img/icon/node.png') }}\" alt=\"angular\">
                        <span class=\"flex align-center smallBaseSize\">NodeJS</span>
                    </div>
                    <div class=\"language\">
                        <img class=\"icon\" src=\"{{ asset('assets/img/icon/java.png') }}\" alt=\"java\">
                        <span class=\"flex align-center smallBaseSize\">Java</span>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"more\">
            <a href=\"#frontend\" class=\"textBaseSize arrowMore\">
                <span class=\"textBaseSize\">{{ 'about_page.more'|trans }}</span>
                <img src=\"{{ asset('assets/svg/arrow.svg') }}\" alt=\"arrow\">
            </a>
        </div>
    </section>
    <section id=\"frontend\" class=\"sectionSkill\">
        <div class=\"wrapper\">
            <div class=\"align-center flex flex-column\">
                <h2 class=\"middleBaseSize mt-0\">{{ \"frontend\"|trans }}</h2>
                <p class=\"descriptionAbout text-center smallBaseSize\">{{ \"about_page.frontend.description\"|trans }}</p>
                <div class=\"flex flex-wrap justify-center mt-2\">
                    <div class=\"language\">
                        <img class=\"icon\" src=\"{{ asset('assets/img/icon/vue.png') }}\" alt=\"vue js\">
                        <span class=\"flex align-center smallBaseSize\">VueJs</span>
                    </div>
                    <div class=\"language\">
                        <img class=\"icon\" src=\"{{ asset('assets/img/icon/js.png') }}\" alt=\"js\">
                        <span class=\"flex align-center smallBaseSize\">JS</span>
                    </div>
                    <div class=\"language\">
                        <img class=\"icon\" src=\"{{ asset('assets/img/icon/typescript.png') }}\" alt=\"js\">
                        <span class=\"flex align-center smallBaseSize\">Typescript</span>
                    </div>
                    <div class=\"language\">
                        <img class=\"icon\" src=\"{{ asset('assets/img/icon/angular.png') }}\" alt=\"angular\">
                        <span class=\"flex align-center smallBaseSize\">Angular</span>
                    </div>
                    <div class=\"language\">
                        <img class=\"icon\" src=\"{{ asset('assets/img/icon/bootstrap.png') }}\"
                             alt=\"bootstrap\">
                        <span class=\"flex align-center smallBaseSize\">Bootstrap</span>
                    </div>
                    <div class=\"language\">
                        <img class=\"icon\" src=\"{{ asset('assets/img/icon/tailwinds.png') }}\"
                             alt=\"tailwinds\">
                        <span class=\"flex align-center smallBaseSize\">Tailwinds</span>
                    </div>
                    <div class=\"language\">
                        <img class=\"icon\" src=\"{{ asset('assets/img/icon/twig.png') }}\" alt=\"twig\">
                        <span class=\"flex align-center smallBaseSize\">Twig</span>
                    </div>
                    <div class=\"language\">
                        <img class=\"icon\" src=\"{{ asset('assets/img/icon/scss.png') }}\" alt=\"sass\">
                        <span class=\"flex align-center smallBaseSize\">SASS</span>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"more\">
            <a href=\"#devops\" class=\"textBaseSize arrowMore\">
                <span class=\"textBaseSize\">{{ 'about_page.more'|trans }}</span>
                <img src=\"{{ asset('assets/svg/arrow.svg') }}\" alt=\"arrow\">
            </a>
        </div>
    </section>
    <section id=\"devops\" class=\"sectionSkill\">
        <div class=\"wrapper\">
            <div class=\"align-center flex flex-column\">
                <h2 class=\"middleBaseSize mt-0\">{{ \"devops_tools\"|trans }}</h2>
                <p class=\"descriptionAbout text-center smallBaseSize\">{{ \"about_page.devops.description\"|trans }}</p>
                <div class=\"flex flex-wrap justify-center mt-2\">
                    <div class=\"language\">
                        <img class=\"icon\" src=\"{{ asset('assets/img/icon/git.png') }}\" alt=\"git\">
                        <span class=\"flex align-center smallBaseSize\">Git</span>
                    </div>
                    <div class=\"language\">
                        <img class=\"icon\" src=\"{{ asset('assets/img/icon/docker.png') }}\" alt=\"docker\">
                        <span class=\"flex align-center smallBaseSize\">Docker</span>
                    </div>
                    <div class=\"language\">
                        <img class=\"icon\" src=\"{{ asset('assets/img/icon/figma.png') }}\" alt=\"figma\">
                        <span class=\"flex align-center smallBaseSize\">Figma</span>
                    </div>
                    <div class=\"language\">
                        <img class=\"icon\" src=\"{{ asset('assets/img/icon/intellij.png') }}\" alt=\"intellij\">
                        <span class=\"flex align-center smallBaseSize\"\">Intellij</span>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"more\">
            <a href=\"#contact\" class=\"textBaseSize arrowMore\">
                <span class=\"textBaseSize\">{{ 'about_page.more'|trans }}</span>
                <img src=\"{{ asset('assets/svg/arrow.svg') }}\" alt=\"arrow\">
            </a>
        </div>
    </section>
    <section id=\"contact\" class=\"sectionContact\">
        <h1 class=\"title middleBaseSize text-center\">{{ \"about_page.contact.title\"|trans }}</h1>
        <p class=\"midMiddleBaseSize text-center\">{{ \"about_page.contact.description\"|trans }}</p>
        <div class=\"formGroup\">
            <div class=\"flex justify-center gap-1 \">
                <a href=\"https://fr.linkedin.com/in/quentin-bastos-a02838222\" target=\"_blank\">
                    <img class=\"iconContact\" src=\"{{ asset('assets/img/icon/linkedin.png') }}\" alt=\"linkedin\">
                </a>
                <a href=\"mailto:bastos.quentin.pro@gmail.com\" target=\"_blank\">
                    <img class=\"iconContact\" src=\"{{ asset('assets/img/icon/mail.png') }}\" alt=\"linkedin\">
                </a>
                <a href=\"https://github.com/QuentinBastos\" target=\"_blank\">
                    <img class=\"iconContact\" src=\"{{ asset('assets/img/icon/github.png') }}\" alt=\"github\">
                </a>
            </div>
        </div>
    </section>
{% endblock %}
{% block javascripts %}
    <script src=\"/assets/js/background.js\"></script>
    <script src=\"https://code.createjs.com/1.0.0/createjs.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js\"></script>
    {{ parent() }}
{% endblock %}

{% block stylesheets %}
    {{ parent() }}
{% endblock %}", "about/index2.html.twig", "/home/ubuntu/Projects/portfolio/templates/about/index2.html.twig");
    }
}
