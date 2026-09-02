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
class __TwigTemplate_e538add830b7fdaa23340a329e3c5d29 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "about/index2.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title2(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield " - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("nav.about"), "html", null, true);
        yield from [];
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
                        <span class=\"flex align-center smallBaseSize\">Intellij</span>
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
        <p class=\"smallBaseSize text-center\">";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("about_page.contact.description"), "html", null, true);
        yield "</p>
        <a href=\"";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/files/BASTOS_QUENTIN_CV.pdf"), "html", null, true);
        yield "\" download=\"Quentin_Bastos_Resume.pdf\"
           class=\"text-center\">
            <span class=\"hoverA smallBaseSize\">
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
        yield from [];
    }

    // line 151
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 152
        yield "    <script src=\"/assets/js/background.js\"></script>
    <script src=\"https://code.createjs.com/1.0.0/createjs.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js\"></script>
    ";
        // line 155
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 158
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 159
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
";
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
        return array (  364 => 159,  357 => 158,  350 => 155,  345 => 152,  338 => 151,  327 => 145,  321 => 142,  315 => 139,  306 => 133,  300 => 130,  296 => 129,  292 => 128,  284 => 123,  280 => 122,  269 => 114,  262 => 110,  255 => 106,  248 => 102,  242 => 99,  238 => 98,  228 => 91,  224 => 90,  213 => 82,  206 => 78,  198 => 73,  190 => 68,  183 => 64,  176 => 60,  169 => 56,  162 => 52,  156 => 49,  152 => 48,  142 => 41,  138 => 40,  127 => 32,  120 => 28,  113 => 24,  107 => 21,  103 => 20,  93 => 13,  89 => 12,  82 => 8,  78 => 6,  76 => 5,  73 => 4,  66 => 3,  54 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "about/index2.html.twig", "/home/ubuntu/Projects/portfolio/templates/about/index2.html.twig");
    }
}
