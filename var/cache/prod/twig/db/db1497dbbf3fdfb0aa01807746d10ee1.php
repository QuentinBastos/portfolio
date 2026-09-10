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

/* index.html.twig */
class __TwigTemplate_0f1bfc632ae4705c77668a9a542f5737 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "index.html.twig", 1);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("welcome"), "html", null, true);
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
        yield from $this->loadTemplate("header.html.twig", "index.html.twig", 5)->unwrap()->yield($context);
        // line 6
        yield "    <main>
        <div class=\"wrapper\">
            <span class=\"heroKicker smallBaseSize\">";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("hero.kicker"), "html", null, true);
        yield "</span>
            <p class=\"title titleBaseSize\">";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("hero.line_1"), "html", null, true);
        yield "</p>
            <p class=\"title titleBaseSize\">";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("hero.line_2"), "html", null, true);
        yield "</p>
            <p class=\"heroLead\">";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("hero.description"), "html", null, true);
        yield "</p>
        </div>
        <div class=\"more\">
            <a href=\"#who\" class=\"textBaseSize arrowMore\">
                <span class=\"textBaseSize\">";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("more"), "html", null, true);
        yield "</span>
                <img src=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/arrow.svg"), "html", null, true);
        yield "\" alt=\"\">
            </a>
        </div>
    </main>
    <section id=\"who\" class=\"sectionWho\">
        <div id=\"particles-js\"></div>
        <div class=\"wrapper\">
            <h2 class=\"titleWho middleBaseSize\">";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.who_title"), "html", null, true);
        yield "</h2>
            <p class=\"descriptionWho textBaseSize\">";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.who_description", ["%age%" => $this->extensions['App\Twig\AppExtension']->getAge()]), "html", null, true);
        yield "</p>
            <p class=\"descriptionWho textBaseSize colorLightGray\">";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.who_details"), "html", null, true);
        yield "</p>
            <a class=\"aboutWho smallBaseSize hoverA\" href=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about");
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.learn_more"), "html", null, true);
        yield "</a>
            <div class=\"more\">
                <a href=\"#works\" class=\"textBaseSize arrowMore\">
                    <span class=\"textBaseSize\">";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("more"), "html", null, true);
        yield "</span>
                    <img src=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/arrow.svg"), "html", null, true);
        yield "\" alt=\"\">
                </a>
            </div>
        </div>
    </section>
    <section id=\"works\" class=\"sectionWorks\">
        <div class=\"titleWho stickyTitle\">
            <h2 class=\"middleBaseSize uppercase\">";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.works_title"), "html", null, true);
        yield "</h2>
            <p class=\"textBaseSize\">";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.works_line_1"), "html", null, true);
        yield "</p>
            <p class=\"textBaseSize\">";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.works_line_2"), "html", null, true);
        yield "</p>
            <a href=\"#";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["projects"] ?? null)), "slug", [], "any", false, false, false, 40), "html", null, true);
        yield "\" class=\"textBaseSize arrowMore mt-7\">
                <span class=\"textBaseSize\">";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.works_cta"), "html", null, true);
        yield "</span>
                <img src=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/arrow.svg"), "html", null, true);
        yield "\" alt=\"\">
            </a>
        </div>
        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["projects"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 46
            yield "            ";
            $context["title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((CoreExtension::getAttribute($this->env, $this->source, $context["project"], "key", [], "any", false, false, false, 46) . ".title"));
            // line 47
            yield "            ";
            $context["next"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 47)) ? (null) : ((($_v0 = ($context["projects"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 47) + 1)] ?? null) : null)));
            // line 48
            yield "            ";
            $context["image"] = ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 48), "locale", [], "any", false, false, false, 48) == "en") && CoreExtension::getAttribute($this->env, $this->source, $context["project"], "image_en", [], "any", false, false, false, 48))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["project"], "image_en", [], "any", false, false, false, 48)) : (CoreExtension::getAttribute($this->env, $this->source, $context["project"], "image", [], "any", false, false, false, 48)));
            // line 49
            yield "            <div id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "slug", [], "any", false, false, false, 49), "html", null, true);
            yield "\" class=\"projectWrapper\">
                <img src=\"";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["image"] ?? null)), "html", null, true);
            yield "\" alt=\"\" class=\"centeredImage blurDarker\">
                <div class=\"project\">
                    <div class=\"leftSide\">
                        ";
            // line 53
            if (($context["next"] ?? null)) {
                // line 54
                yield "                            <a href=\"#";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["next"] ?? null), "slug", [], "any", false, false, false, 54), "html", null, true);
                yield "\" class=\"smallBaseSize arrowMore projectNext\">
                                <span class=\"smallBaseSize\">";
                // line 55
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("project.next"), "html", null, true);
                yield "</span>
                                <img src=\"";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/arrow.svg"), "html", null, true);
                yield "\" alt=\"\">
                            </a>
                        ";
            } else {
                // line 59
                yield "                            <a href=\"#works\" class=\"smallBaseSize arrowMore projectNext reverseArrow\">
                                <img src=\"";
                // line 60
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/arrow.svg"), "html", null, true);
                yield "\" alt=\"\">
                                <span class=\"smallBaseSize\">";
                // line 61
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("project.back_to_works"), "html", null, true);
                yield "</span>
                            </a>
                        ";
            }
            // line 64
            yield "                    </div>
                    <div class=\"middleSide\">
                        <a href=\"";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_show", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["project"], "slug", [], "any", false, false, false, 66)]), "html", null, true);
            yield "\" aria-label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "\">
                            <div class=\"pre-container css-only\">
                                ";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 9));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                yield "<div></div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            yield "                                <pre class=\"language-css\">
                                    <img src=\"";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "icon", [], "any", false, false, false, 70)), "html", null, true);
            yield "\" alt=\"\">
                                    <span class=\"textOverlay\">
                                        <span class=\"midMiddleBaseSize\">";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "</span>
                                    </span>
                                </pre>
                            </div>
                        </a>
                    </div>
                    <div class=\"rightSide\">
                        ";
            // line 79
            if (CoreExtension::getAttribute($this->env, $this->source, $context["project"], "featured", [], "any", false, false, false, 79)) {
                // line 80
                yield "                            <span class=\"featuredBadge\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("project.featured"), "html", null, true);
                yield "</span>
                        ";
            }
            // line 82
            yield "                        <p class=\"midMiddleBaseSize title\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "</p>
                        <ul class=\"projectMeta\">
                            <li>";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("project.origin." . CoreExtension::getAttribute($this->env, $this->source, $context["project"], "origin", [], "any", false, false, false, 84))), "html", null, true);
            yield "</li>
                            ";
            // line 85
            if (CoreExtension::getAttribute($this->env, $this->source, $context["project"], "year", [], "any", false, false, false, 85)) {
                yield "<li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "year", [], "any", false, false, false, 85)), "html", null, true);
                yield "</li>";
            }
            // line 86
            yield "                            ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["project"], "status", [], "any", false, false, false, 86)) {
                yield "<li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("project.status." . CoreExtension::getAttribute($this->env, $this->source, $context["project"], "status", [], "any", false, false, false, 86))), "html", null, true);
                yield "</li>";
            }
            // line 87
            yield "                        </ul>
                        <p class=\"descriptionProject smallBaseSize\">";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((CoreExtension::getAttribute($this->env, $this->source, $context["project"], "key", [], "any", false, false, false, 88) . ".tagline")), "html", null, true);
            yield "</p>
                        <ul class=\"tagList\">
                            ";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["project"], "stack", [], "any", false, false, false, 90), 0, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["tech"]) {
                // line 91
                yield "                                <li class=\"tag\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["tech"], "html", null, true);
                yield "</li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['tech'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            yield "                        </ul>
                        <div class=\"projectActions\">
                            <a href=\"";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_show", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["project"], "slug", [], "any", false, false, false, 95)]), "html", null, true);
            yield "\"
                               class=\"buttonProject hoverA smallBaseSize\">";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("project.view"), "html", null, true);
            yield "</a>
                        </div>
                    </div>
                </div>
            </div>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        yield "    </section>
    <div style=\"height: 1px; width: 100%; margin: 0; padding: 0; overflow: hidden;\"></div>
";
        yield from [];
    }

    // line 106
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 107
        yield "    <script src=\"/assets/js/background.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/particles.js\"></script>
    <script src=\"/assets/js/particles.js\"></script>
    <script src=\"https://code.createjs.com/1.0.0/createjs.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js\"></script>
    ";
        // line 112
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
        return "index.html.twig";
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
        return array (  380 => 112,  373 => 107,  366 => 106,  359 => 102,  339 => 96,  335 => 95,  331 => 93,  322 => 91,  318 => 90,  313 => 88,  310 => 87,  303 => 86,  297 => 85,  293 => 84,  287 => 82,  281 => 80,  279 => 79,  269 => 72,  264 => 70,  261 => 69,  252 => 68,  245 => 66,  241 => 64,  235 => 61,  231 => 60,  228 => 59,  222 => 56,  218 => 55,  213 => 54,  211 => 53,  205 => 50,  200 => 49,  197 => 48,  194 => 47,  191 => 46,  174 => 45,  168 => 42,  164 => 41,  160 => 40,  156 => 39,  152 => 38,  148 => 37,  138 => 30,  134 => 29,  126 => 26,  122 => 25,  118 => 24,  114 => 23,  104 => 16,  100 => 15,  93 => 11,  89 => 10,  85 => 9,  81 => 8,  77 => 6,  75 => 5,  72 => 4,  65 => 3,  53 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "index.html.twig", "/home/ubuntu/Projects/portfolio/templates/index.html.twig");
    }
}
