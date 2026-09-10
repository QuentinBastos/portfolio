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
        // line 4
        $context["skills"] = [["key" => "backend", "items" => [["name" => "PHP", "icon" => null], ["name" => "Symfony", "icon" => "symfony"], ["name" => "MySQL", "icon" => null], ["name" => "Node.js", "icon" => "node"], ["name" => "Java", "icon" => "java"], ["name" => "C/C++", "icon" => null]]], ["key" => "frontend", "items" => [["name" => "Vue", "icon" => "vue"], ["name" => "TypeScript", "icon" => "typescript"], ["name" => "JavaScript", "icon" => "js"], ["name" => "Angular", "icon" => "angular"], ["name" => "Tailwind", "icon" => "tailwinds"], ["name" => "Twig", "icon" => "twig"], ["name" => "SASS", "icon" => "scss"]]], ["key" => "devops", "items" => [["name" => "Docker", "icon" => "docker"], ["name" => "Git", "icon" => "git"], ["name" => "GitHub Actions", "icon" => "github"], ["name" => "Linux", "icon" => null], ["name" => "Figma", "icon" => "figma"]]]];
        // line 1
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

    // line 40
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 41
        yield "    <canvas id=\"projector\"></canvas>
    ";
        // line 42
        yield from $this->loadTemplate("header.html.twig", "about/index2.html.twig", 42)->unwrap()->yield($context);
        // line 43
        yield "    <main>
        <div class=\"wrapper\">
            <span class=\"heroKicker smallBaseSize\">";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("about.kicker"), "html", null, true);
        yield "</span>
            <h1 class=\"title middleBaseSize text-start\">";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("about.hero_title"), "html", null, true);
        yield "</h1>
        </div>
        <div class=\"more\">
            <a href=\"#experience\" class=\"textBaseSize arrowMore\">
                <span class=\"textBaseSize\">";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("about.more"), "html", null, true);
        yield "</span>
                <img src=\"";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/arrow.svg"), "html", null, true);
        yield "\" alt=\"\">
            </a>
        </div>
    </main>

    <section id=\"experience\" class=\"sectionPath\">
        <h2>";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("about.experience_title"), "html", null, true);
        yield "</h2>
        <ol class=\"timeline\">
            ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["experience"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 60
            yield "                ";
            $context["k"] = ("experience." . CoreExtension::getAttribute($this->env, $this->source, $context["item"], "key", [], "any", false, false, false, 60));
            // line 61
            yield "                <li>
                    <div class=\"tl-when\">
                        ";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((($context["k"] ?? null) . ".period")), "html", null, true);
            yield "
                        <span>";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((($context["k"] ?? null) . ".place")), "html", null, true);
            yield "</span>
                    </div>
                    <div>
                        <h3 class=\"tl-title\">";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((($context["k"] ?? null) . ".title")), "html", null, true);
            yield "</h3>
                        <p class=\"tl-org\">";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((($context["k"] ?? null) . ".org")), "html", null, true);
            yield "</p>
                        <div class=\"tl-body\">
                            <ul class=\"pd-list\">
                                ";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "points", [], "any", false, false, false, 71)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 72
                yield "                                    <li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((($context["k"] ?? null) . ".point_") . $context["i"])), "html", null, true);
                yield "</li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            yield "                            </ul>
                        </div>
                    </div>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        yield "        </ol>
    </section>

    <section id=\"education\" class=\"sectionPath\">
        <h2>";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("about.education_title"), "html", null, true);
        yield "</h2>
        <ol class=\"timeline\">
            ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["education"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 86
            yield "                ";
            $context["k"] = ("education." . $context["key"]);
            // line 87
            yield "                <li>
                    <div class=\"tl-when\">
                        ";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((($context["k"] ?? null) . ".period")), "html", null, true);
            yield "
                        <span>";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((($context["k"] ?? null) . ".place")), "html", null, true);
            yield "</span>
                    </div>
                    <div>
                        <h3 class=\"tl-title\">";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((($context["k"] ?? null) . ".title")), "html", null, true);
            yield "</h3>
                        <p class=\"tl-org\">";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((($context["k"] ?? null) . ".org")), "html", null, true);
            yield "</p>
                        <div class=\"tl-body\">
                            <p>";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((($context["k"] ?? null) . ".detail")), "html", null, true);
            yield "</p>
                        </div>
                    </div>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['key'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        yield "        </ol>
    </section>

    <section id=\"skills\" class=\"sectionPath\">
        <h2>";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("about.skills_title"), "html", null, true);
        yield "</h2>
        <div class=\"skillGrid\">
            ";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["skills"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 108
            yield "                <div class=\"skillCard\">
                    <h3>";
            // line 109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((("about.skills." . CoreExtension::getAttribute($this->env, $this->source, $context["group"], "key", [], "any", false, false, false, 109)) . "_title")), "html", null, true);
            yield "</h3>
                    <p>";
            // line 110
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("about.skills." . CoreExtension::getAttribute($this->env, $this->source, $context["group"], "key", [], "any", false, false, false, 110))), "html", null, true);
            yield "</p>
                    <ul class=\"skillList\">
                        ";
            // line 112
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "items", [], "any", false, false, false, 112));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 113
                yield "                            <li>
                                ";
                // line 114
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 114)) {
                    // line 115
                    yield "                                    <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("assets/img/icon/" . CoreExtension::getAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 115)) . ".png")), "html", null, true);
                    yield "\" alt=\"\">
                                ";
                }
                // line 117
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 117), "html", null, true);
                yield "
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 120
            yield "                    </ul>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['group'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        yield "        </div>
    </section>

    <section id=\"contact\" class=\"sectionContact\">
        <h2 class=\"title middleBaseSize text-center\">";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("about.contact.title"), "html", null, true);
        yield "</h2>
        <p class=\"smallBaseSize text-center\">";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("about.contact.description"), "html", null, true);
        yield "</p>
        <a href=\"";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/files/BASTOS_QUENTIN_CV.pdf"), "html", null, true);
        yield "\" download=\"Quentin_Bastos_CV.pdf\" class=\"text-center\">
            <span class=\"hoverA smallBaseSize\">";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("about.contact.resume"), "html", null, true);
        yield "</span>
        </a>
        <div class=\"contactLinks\">
            <a href=\"https://www.linkedin.com/in/quentin-bastos-a02838222\" target=\"_blank\" rel=\"noopener\" aria-label=\"";
        // line 133
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("about.contact.linkedin"), "html", null, true);
        yield "\">
                <img class=\"iconContact\" src=\"";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icon/linkedin.png"), "html", null, true);
        yield "\" alt=\"\">
            </a>
            <a href=\"mailto:bastos.quentin.pro@gmail.com\" aria-label=\"";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("about.contact.email"), "html", null, true);
        yield "\">
                <img class=\"iconContact\" src=\"";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icon/mail.png"), "html", null, true);
        yield "\" alt=\"\">
            </a>
            <a href=\"https://github.com/QuentinBastos\" target=\"_blank\" rel=\"noopener\" aria-label=\"";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("about.contact.github"), "html", null, true);
        yield "\">
                <img class=\"iconContact\" src=\"";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icon/github.png"), "html", null, true);
        yield "\" alt=\"\">
            </a>
        </div>
    </section>
";
        yield from [];
    }

    // line 146
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 147
        yield "    <script src=\"/assets/js/background.js\"></script>
    <script src=\"https://code.createjs.com/1.0.0/createjs.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js\"></script>
    ";
        // line 150
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
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
        return array (  347 => 150,  342 => 147,  335 => 146,  325 => 140,  321 => 139,  316 => 137,  312 => 136,  307 => 134,  303 => 133,  297 => 130,  293 => 129,  289 => 128,  285 => 127,  279 => 123,  271 => 120,  261 => 117,  255 => 115,  253 => 114,  250 => 113,  246 => 112,  241 => 110,  237 => 109,  234 => 108,  230 => 107,  225 => 105,  219 => 101,  208 => 96,  203 => 94,  199 => 93,  193 => 90,  189 => 89,  185 => 87,  182 => 86,  178 => 85,  173 => 83,  167 => 79,  157 => 74,  148 => 72,  144 => 71,  138 => 68,  134 => 67,  128 => 64,  124 => 63,  120 => 61,  117 => 60,  113 => 59,  108 => 57,  99 => 51,  95 => 50,  88 => 46,  84 => 45,  80 => 43,  78 => 42,  75 => 41,  68 => 40,  56 => 2,  51 => 1,  49 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "about/index2.html.twig", "/home/ubuntu/Projects/portfolio/templates/about/index2.html.twig");
    }
}
