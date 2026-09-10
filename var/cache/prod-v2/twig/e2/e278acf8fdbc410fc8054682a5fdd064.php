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

/* projects/show.html.twig */
class __TwigTemplate_006f31647b5549d54eda083da0520fce extends Template
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
            'meta_description' => [$this, 'block_meta_description'],
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
        // line 2
        $context["t"] = CoreExtension::getAttribute($this->env, $this->source, ($context["project"] ?? null), "key", [], "any", false, false, false, 2);
        // line 3
        $context["title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((($context["t"] ?? null) . ".title"));
        // line 4
        $context["image"] = ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 4), "locale", [], "any", false, false, false, 4) == "en") && CoreExtension::getAttribute($this->env, $this->source, ($context["project"] ?? null), "image_en", [], "any", false, false, false, 4))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["project"] ?? null), "image_en", [], "any", false, false, false, 4)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["project"] ?? null), "image", [], "any", false, false, false, 4)));
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "projects/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title2(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield " · ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_meta_description(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((($context["t"] ?? null) . ".tagline")), "html", null, true);
        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 10
        yield "    <canvas id=\"projector\"></canvas>
    ";
        // line 11
        yield from $this->loadTemplate("header.html.twig", "projects/show.html.twig", 11)->unwrap()->yield($context);
        // line 12
        yield "    <article class=\"pd\">
        <a class=\"pd-back hoverA\" href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("default");
        yield "#works\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("project.all_projects"), "html", null, true);
        yield "</a>

        <div class=\"pd-hero\">
            <img src=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["image"] ?? null)), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield "\" fetchpriority=\"high\" decoding=\"async\">
        </div>

        <div class=\"pd-head\">
            ";
        // line 20
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["project"] ?? null), "featured", [], "any", false, false, false, 20)) {
            // line 21
            yield "                <span class=\"featuredBadge\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("project.featured"), "html", null, true);
            yield "</span>
            ";
        }
        // line 23
        yield "            <h1 class=\"pd-title\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield "</h1>
            <p class=\"pd-tagline\">";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((($context["t"] ?? null) . ".tagline")), "html", null, true);
        yield "</p>
        </div>

        <div class=\"pd-grid\">
            <div>
                <section class=\"pd-section\">
                    <h2 class=\"pd-label\">";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("project.context"), "html", null, true);
        yield "</h2>
                    <p class=\"pd-text\">";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((($context["t"] ?? null) . ".context")), "html", null, true);
        yield "</p>
                </section>
                <section class=\"pd-section\">
                    <h2 class=\"pd-label\">";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("project.role"), "html", null, true);
        yield "</h2>
                    <p class=\"pd-text\">";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((($context["t"] ?? null) . ".role")), "html", null, true);
        yield "</p>
                </section>
                <section class=\"pd-section\">
                    <h2 class=\"pd-label\">";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("project.highlights"), "html", null, true);
        yield "</h2>
                    <ul class=\"pd-list\">
                        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, CoreExtension::getAttribute($this->env, $this->source, ($context["project"] ?? null), "highlights", [], "any", false, false, false, 40)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 41
            yield "                            <li>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((($context["t"] ?? null) . ".highlight_") . $context["i"])), "html", null, true);
            yield "</li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        yield "                    </ul>
                </section>
            </div>

            <aside class=\"pd-aside\">
                <section class=\"pd-section\">
                    <h2 class=\"pd-label\">";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("project.facts"), "html", null, true);
        yield "</h2>
                    <dl class=\"pd-facts\">
                        <div>
                            <dt>";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("project.origin_label"), "html", null, true);
        yield "</dt>
                            <dd>";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("project.origin." . CoreExtension::getAttribute($this->env, $this->source, ($context["project"] ?? null), "origin", [], "any", false, false, false, 53))), "html", null, true);
        yield "</dd>
                        </div>
                        ";
        // line 55
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["project"] ?? null), "year", [], "any", false, false, false, 55)) {
            // line 56
            yield "                            <div>
                                <dt>";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("project.year"), "html", null, true);
            yield "</dt>
                                <dd>";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["project"] ?? null), "year", [], "any", false, false, false, 58)), "html", null, true);
            yield "</dd>
                            </div>
                        ";
        }
        // line 61
        yield "                        <div>
                            <dt>";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("project.team"), "html", null, true);
        yield "</dt>
                            <dd>";
        // line 64
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["project"] ?? null), "team", [], "any", false, false, false, 64) == 1)) {
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("project.team_solo"), "html", null, true);
        } elseif (CoreExtension::getAttribute($this->env, $this->source,         // line 66
($context["project"] ?? null), "team", [], "any", false, false, false, 66)) {
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("project.team_size", ["%count%" => CoreExtension::getAttribute($this->env, $this->source, ($context["project"] ?? null), "team", [], "any", false, false, false, 67)]), "html", null, true);
        } else {
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("project.team_group"), "html", null, true);
        }
        // line 71
        yield "</dd>
                        </div>
                        ";
        // line 73
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["project"] ?? null), "status", [], "any", false, false, false, 73)) {
            // line 74
            yield "                            <div>
                                <dt>";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("project.status_label"), "html", null, true);
            yield "</dt>
                                <dd>";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("project.status." . CoreExtension::getAttribute($this->env, $this->source, ($context["project"] ?? null), "status", [], "any", false, false, false, 76))), "html", null, true);
            yield "</dd>
                            </div>
                        ";
        }
        // line 79
        yield "                    </dl>
                </section>

                <section class=\"pd-section\">
                    <h2 class=\"pd-label\">";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("project.stack"), "html", null, true);
        yield "</h2>
                    <ul class=\"tagList\">
                        ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["project"] ?? null), "stack", [], "any", false, false, false, 85));
        foreach ($context['_seq'] as $context["_key"] => $context["tech"]) {
            // line 86
            yield "                            <li class=\"tag\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["tech"], "html", null, true);
            yield "</li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tech'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        yield "                    </ul>
                </section>

                ";
        // line 91
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["project"] ?? null), "links", [], "any", false, false, false, 91))) {
            // line 92
            yield "                    <section class=\"pd-section\">
                        <h2 class=\"pd-label\">";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("project.links"), "html", null, true);
            yield "</h2>
                        <div class=\"pd-links\">
                            ";
            // line 95
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["project"] ?? null), "links", [], "any", false, false, false, 95));
            foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                // line 96
                yield "                                <a class=\"linkBtn\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "url", [], "any", false, false, false, 96), "html", null, true);
                yield "\" target=\"_blank\" rel=\"noopener\">
                                    <span>";
                // line 97
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("project.link." . CoreExtension::getAttribute($this->env, $this->source, $context["link"], "type", [], "any", false, false, false, 97))), "html", null, true);
                yield "</span>
                                    <span aria-hidden=\"true\">↗</span>
                                </a>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['link'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            yield "                        </div>
                    </section>
                ";
        }
        // line 104
        yield "            </aside>
        </div>

        ";
        // line 107
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["project"] ?? null), "screens", [], "any", false, false, false, 107))) {
            // line 108
            yield "            <section class=\"pd-screens\">
                <h2 class=\"pd-label\">";
            // line 109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("project.screens"), "html", null, true);
            yield "</h2>
                <div class=\"pd-screens-grid\">
                    ";
            // line 111
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["project"] ?? null), "screens", [], "any", false, false, false, 111));
            foreach ($context['_seq'] as $context["_key"] => $context["screen"]) {
                // line 112
                yield "                        ";
                $context["caption"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((($context["t"] ?? null) . ".") . CoreExtension::getAttribute($this->env, $this->source, $context["screen"], "caption", [], "any", false, false, false, 112)));
                // line 113
                yield "                        <figure>
                            <a href=\"";
                // line 114
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["screen"], "image", [], "any", false, false, false, 114)), "html", null, true);
                yield "\" target=\"_blank\" rel=\"noopener\">
                                <img src=\"";
                // line 115
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["screen"], "image", [], "any", false, false, false, 115)), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["caption"] ?? null), "html", null, true);
                yield "\" loading=\"lazy\" decoding=\"async\">
                            </a>
                            <figcaption>";
                // line 117
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["caption"] ?? null), "html", null, true);
                yield "</figcaption>
                        </figure>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['screen'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 120
            yield "                </div>
            </section>
        ";
        }
        // line 123
        yield "
        ";
        // line 124
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["project"] ?? null), "video", [], "any", false, false, false, 124)) {
            // line 125
            yield "            <section class=\"pd-video\">
                <h2 class=\"pd-label\">";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("project.video_title"), "html", null, true);
            yield "</h2>
                <video controls playsinline preload=\"none\" poster=\"";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["image"] ?? null)), "html", null, true);
            yield "\">
                    <source src=\"";
            // line 128
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, ($context["project"] ?? null), "video", [], "any", false, false, false, 128)), "html", null, true);
            yield "\" type=\"video/mp4\">
                    ";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("project.video_unsupported"), "html", null, true);
            yield "
                </video>
            </section>
        ";
        }
        // line 133
        yield "
        <nav class=\"pd-nav\" aria-label=\"";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("project.all_projects"), "html", null, true);
        yield "\">
            ";
        // line 135
        if (($context["previous"] ?? null)) {
            // line 136
            yield "                <a class=\"pd-prev hoverA\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_show", ["slug" => CoreExtension::getAttribute($this->env, $this->source, ($context["previous"] ?? null), "slug", [], "any", false, false, false, 136)]), "html", null, true);
            yield "\">
                    <small>";
            // line 137
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("project.previous"), "html", null, true);
            yield "</small>
                    <span>";
            // line 138
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((CoreExtension::getAttribute($this->env, $this->source, ($context["previous"] ?? null), "key", [], "any", false, false, false, 138) . ".title")), "html", null, true);
            yield "</span>
                </a>
            ";
        }
        // line 141
        yield "            ";
        if (($context["next"] ?? null)) {
            // line 142
            yield "                <a class=\"pd-next hoverA\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_show", ["slug" => CoreExtension::getAttribute($this->env, $this->source, ($context["next"] ?? null), "slug", [], "any", false, false, false, 142)]), "html", null, true);
            yield "\">
                    <small>";
            // line 143
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("project.next"), "html", null, true);
            yield "</small>
                    <span>";
            // line 144
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((CoreExtension::getAttribute($this->env, $this->source, ($context["next"] ?? null), "key", [], "any", false, false, false, 144) . ".title")), "html", null, true);
            yield "</span>
                </a>
            ";
        }
        // line 147
        yield "        </nav>
    </article>
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
        yield "    <script src=\"https://code.createjs.com/1.0.0/createjs.min.js\" defer></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js\" defer></script>
    <script src=\"/assets/js/background.js\" defer></script>
    ";
        // line 155
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
        return "projects/show.html.twig";
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
        return array (  453 => 155,  448 => 152,  441 => 151,  434 => 147,  428 => 144,  424 => 143,  419 => 142,  416 => 141,  410 => 138,  406 => 137,  401 => 136,  399 => 135,  395 => 134,  392 => 133,  385 => 129,  381 => 128,  377 => 127,  373 => 126,  370 => 125,  368 => 124,  365 => 123,  360 => 120,  351 => 117,  344 => 115,  340 => 114,  337 => 113,  334 => 112,  330 => 111,  325 => 109,  322 => 108,  320 => 107,  315 => 104,  310 => 101,  300 => 97,  295 => 96,  291 => 95,  286 => 93,  283 => 92,  281 => 91,  276 => 88,  267 => 86,  263 => 85,  258 => 83,  252 => 79,  246 => 76,  242 => 75,  239 => 74,  237 => 73,  233 => 71,  230 => 69,  227 => 67,  225 => 66,  223 => 65,  221 => 64,  217 => 62,  214 => 61,  208 => 58,  204 => 57,  201 => 56,  199 => 55,  194 => 53,  190 => 52,  184 => 49,  176 => 43,  167 => 41,  163 => 40,  158 => 38,  152 => 35,  148 => 34,  142 => 31,  138 => 30,  129 => 24,  124 => 23,  118 => 21,  116 => 20,  107 => 16,  99 => 13,  96 => 12,  94 => 11,  91 => 10,  84 => 9,  73 => 7,  61 => 6,  56 => 1,  54 => 4,  52 => 3,  50 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "projects/show.html.twig", "/home/ubuntu/Projects/portfolio/templates/projects/show.html.twig");
    }
}
