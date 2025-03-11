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
class __TwigTemplate_9e3d200925712e9369a7a7630deeb5de extends Template
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
            'title2' => [$this, 'block_title2'],
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
    public function block_title2(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title2"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title2"));

        yield " - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("nav.about"), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 3
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

        // line 4
        yield "    <canvas id=\"projector\"></canvas>
    ";
        // line 5
        yield from $this->loadTemplate("header.html.twig", "about/index2.html.twig", 5)->unwrap()->yield($context);
        // line 6
        yield "    <main>
        <div class=\"wrapper\">
            <h1 class=\"title middleBaseSize text-start\">";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("about_page.title"), "html", null, true);
        yield "</h1>
        </div>
        <div class=\"more\">
            <a href=\"#backend\" class=\"textBaseSize arrowMore\">
                <span class=\"textBaseSize\">";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("about_page.more"), "html", null, true);
        yield "</span>
                <img src=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/arrow.svg"), "html", null, true);
        yield "\" alt=\"arrow\">
            </a>
        </div>
    </main>
    <section id=\"backend\" class=\"sectionSkill\">
        <div class=\"wrapper\">
            <div class=\"align-center flex flex-column\">
                <h2 class=\"middleBaseSize mt-0\">";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend"), "html", null, true);
        yield "</h2>
                <p class=\"descriptionAbout text-center smallBaseSize\">";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("about_page.backend.description"), "html", null, true);
        yield "</p>
                <div class=\"flex flex-wrap justify-center mt-2\">
                    <div class=\"language\">
                        <img class=\"icon\" src=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icon/symfony.png"), "html", null, true);
        yield "\" alt=\"symfony\">
                        <span class=\"flex align-center smallBaseSize\">Symfony</span>
                    </div>
                    <div class=\"language\">
                        <img class=\"icon\" src=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icon/node.png"), "html", null, true);
        yield "\" alt=\"angular\">
                        <span class=\"flex align-center smallBaseSize\">NodeJS</span>
                    </div>
                    <div class=\"language\">
                        <img class=\"icon\" src=\"";
        // line 32
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
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("about_page.more"), "html", null, true);
        yield "</span>
                <img src=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/arrow.svg"), "html", null, true);
        yield "\" alt=\"arrow\">
            </a>
        </div>
    </section>
    <section id=\"frontend\" class=\"sectionSkill\">
        <div class=\"wrapper\">
            <div class=\"align-center flex flex-column\">
                <h2 class=\"middleBaseSize mt-0\">";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("frontend"), "html", null, true);
        yield "</h2>
                <p class=\"descriptionAbout text-center smallBaseSize\">";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("about_page.frontend.description"), "html", null, true);
        yield "</p>
                <div class=\"flex flex-wrap justify-center mt-2\">
                    <div class=\"language\">
                        <img class=\"icon\" src=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icon/vue.png"), "html", null, true);
        yield "\" alt=\"vue js\">
                        <span class=\"flex align-center smallBaseSize\">VueJs</span>
                    </div>
                    <div class=\"language\">
                        <img class=\"icon\" src=\"";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icon/js.png"), "html", null, true);
        yield "\" alt=\"js\">
                        <span class=\"flex align-center smallBaseSize\">JS</span>
                    </div>
                    <div class=\"language\">
                        <img class=\"icon\" src=\"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icon/typescript.png"), "html", null, true);
        yield "\" alt=\"js\">
                        <span class=\"flex align-center smallBaseSize\">Typescript</span>
                    </div>
                    <div class=\"language\">
                        <img class=\"icon\" src=\"";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icon/angular.png"), "html", null, true);
        yield "\" alt=\"angular\">
                        <span class=\"flex align-center smallBaseSize\">Angular</span>
                    </div>
                    <div class=\"language\">
                        <img class=\"icon\" src=\"";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icon/bootstrap.png"), "html", null, true);
        yield "\"
                             alt=\"bootstrap\">
                        <span class=\"flex align-center smallBaseSize\">Bootstrap</span>
                    </div>
                    <div class=\"language\">
                        <img class=\"icon\" src=\"";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icon/tailwinds.png"), "html", null, true);
        yield "\"
                             alt=\"tailwinds\">
                        <span class=\"flex align-center smallBaseSize\">Tailwinds</span>
                    </div>
                    <div class=\"language\">
                        <img class=\"icon\" src=\"";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icon/twig.png"), "html", null, true);
        yield "\" alt=\"twig\">
                        <span class=\"flex align-center smallBaseSize\">Twig</span>
                    </div>
                    <div class=\"language\">
                        <img class=\"icon\" src=\"";
        // line 82
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
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("about_page.more"), "html", null, true);
        yield "</span>
                <img src=\"";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/arrow.svg"), "html", null, true);
        yield "\" alt=\"arrow\">
            </a>
        </div>
    </section>
    <section id=\"devops\" class=\"sectionSkill\">
        <div class=\"wrapper\">
            <div class=\"align-center flex flex-column\">
                <h2 class=\"middleBaseSize mt-0\">";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("devops_tools"), "html", null, true);
        yield "</h2>
                <p class=\"descriptionAbout text-center smallBaseSize\">";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("about_page.devops.description"), "html", null, true);
        yield "</p>
                <div class=\"flex flex-wrap justify-center mt-2\">
                    <div class=\"language\">
                        <img class=\"icon\" src=\"";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icon/git.png"), "html", null, true);
        yield "\" alt=\"git\">
                        <span class=\"flex align-center smallBaseSize\">Git</span>
                    </div>
                    <div class=\"language\">
                        <img class=\"icon\" src=\"";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icon/docker.png"), "html", null, true);
        yield "\" alt=\"docker\">
                        <span class=\"flex align-center smallBaseSize\">Docker</span>
                    </div>
                    <div class=\"language\">
                        <img class=\"icon\" src=\"";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icon/figma.png"), "html", null, true);
        yield "\" alt=\"figma\">
                        <span class=\"flex align-center smallBaseSize\">Figma</span>
                    </div>
                    <div class=\"language\">
                        <img class=\"icon\" src=\"";
        // line 114
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
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("about_page.more"), "html", null, true);
        yield "</span>
                <img src=\"";
        // line 123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/arrow.svg"), "html", null, true);
        yield "\" alt=\"arrow\">
            </a>
        </div>
    </section>
    <section id=\"contact\" class=\"sectionContact\">
        <h1 class=\"title middleBaseSize text-center\">";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("about_page.contact.title"), "html", null, true);
        yield "</h1>
        <p class=\"midMiddleBaseSize text-center\">";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("about_page.contact.description"), "html", null, true);
        yield "</p>
        <a href=\"";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/files/BASTOS_QUENTIN_CV.pdf"), "html", null, true);
        yield "\" download=\"Quentin_Bastos_Resume.pdf\"
           class=\"text-center\">
            <span class=\"hoverA smallBaseSize midMiddleBaseSize \">
            ";
        // line 133
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("about_page.contact.resume"), "html", null, true);
        yield "
            </span>
        </a>
        <div class=\"formGroup\">
            <div class=\"flex justify-center gap-1 \">
                <a href=\"https://fr.linkedin.com/in/quentin-bastos-a02838222\" target=\"_blank\">
                    <img class=\"iconContact\" src=\"";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icon/linkedin.png"), "html", null, true);
        yield "\" alt=\"linkedin\">
                </a>
                <a href=\"mailto:bastos.quentin.pro@gmail.com\" target=\"_blank\">
                    <img class=\"iconContact\" src=\"";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icon/mail.png"), "html", null, true);
        yield "\" alt=\"linkedin\">
                </a>
                <a href=\"https://github.com/QuentinBastos\" target=\"_blank\">
                    <img class=\"iconContact\" src=\"";
        // line 145
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

    // line 151
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

        // line 152
        yield "    <script src=\"/assets/js/background.js\"></script>
    <script src=\"https://code.createjs.com/1.0.0/createjs.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js\"></script>
    ";
        // line 155
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 158
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

        // line 159
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
        return array (  418 => 159,  405 => 158,  392 => 155,  387 => 152,  374 => 151,  357 => 145,  351 => 142,  345 => 139,  336 => 133,  330 => 130,  326 => 129,  322 => 128,  314 => 123,  310 => 122,  299 => 114,  292 => 110,  285 => 106,  278 => 102,  272 => 99,  268 => 98,  258 => 91,  254 => 90,  243 => 82,  236 => 78,  228 => 73,  220 => 68,  213 => 64,  206 => 60,  199 => 56,  192 => 52,  186 => 49,  182 => 48,  172 => 41,  168 => 40,  157 => 32,  150 => 28,  143 => 24,  137 => 21,  133 => 20,  123 => 13,  119 => 12,  112 => 8,  108 => 6,  106 => 5,  103 => 4,  90 => 3,  66 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title2 %} - {{ \"nav.about\"|trans }}{% endblock %}
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
        <a href=\"{{ asset('assets/files/BASTOS_QUENTIN_CV.pdf') }}\" download=\"Quentin_Bastos_Resume.pdf\"
           class=\"text-center\">
            <span class=\"hoverA smallBaseSize midMiddleBaseSize \">
            {{ \"about_page.contact.resume\"|trans }}
            </span>
        </a>
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
