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
class __TwigTemplate_8cf58f16255813b8faa9da33969dba42 extends Template
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
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
        yield "    <canvas id=\"projector\"></canvas>
    ";
        // line 4
        yield from $this->loadTemplate("header.html.twig", "index.html.twig", 4)->unwrap()->yield($context);
        // line 5
        yield "    <main>
        <div class=\"wrapper\">
            <p class=\"title titleBaseSize\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("nothing"), "html", null, true);
        yield "</p>
            <p class=\"title titleBaseSize\">";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("is_impossible"), "html", null, true);
        yield "</p>
            <p class=\"description textBaseSize\">";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("portfolio_description"), "html", null, true);
        yield "</p>
        </div>
        <div class=\"more\">
            <a href=\"#who\" class=\"textBaseSize arrowMore\">
                <span class=\"textBaseSize\">";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("more"), "html", null, true);
        yield "</span>
                <img src=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/arrow.svg"), "html", null, true);
        yield "\" alt=\"arrow\">
            </a>
        </div>
    </main>
    <section id=\"who\" class=\"sectionWho\">
        <div id=\"particles-js\"></div>
        <div class=\"wrapper\">
            <p class=\"titleWho middleBaseSize\">";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("who_is_quentin"), "html", null, true);
        yield "</p>
            <p class=\"descriptionWho textBaseSize\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("quentin_description"), "html", null, true);
        yield "</p>
            <p class=\"descriptionWho textBaseSize colorLightGray\">";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("quentin_details"), "html", null, true);
        yield "</p>
            <a class=\"aboutWho smallBaseSize hoverA\" href=\"";
        // line 24
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about");
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("learn_more"), "html", null, true);
        yield "</a>
            <div class=\"more\">
                <a href=\"#works\" class=\"textBaseSize arrowMore\">
                    <span class=\"textBaseSize\">";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("more"), "html", null, true);
        yield "</span>
                    <img src=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/arrow.svg"), "html", null, true);
        yield "\" alt=\"arrow\">
                </a>
            </div>
        </div>
    </section>
    <section id=\"works\" class=\"sectionWorks\">
        <div class=\"titleWho stickyTitle\">
            <h1 class=\"middleBaseSize uppercase\">";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("works"), "html", null, true);
        yield "</h1>
            <p class=\"textBaseSize\">";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("want_to_see_my_work"), "html", null, true);
        yield "</p>
            <p class=\"textBaseSize\">";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("come_check_below"), "html", null, true);
        yield "</p>
            <a href=\"#chess\" class=\"textBaseSize arrowMore\">
                <span class=\"textBaseSize\">";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("check_my_projects"), "html", null, true);
        yield "</span>
                <img src=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/arrow.svg"), "html", null, true);
        yield "\" alt=\"arrow\">
            </a>
        </div>
        <div id=\"chess\" class=\"projectWrapper\">
            <img src=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/projects/chess/background_chess.png"), "html", null, true);
        yield "\" alt=\"Centered Image\"
                 class=\"centeredImage blurDarker\">
            <div class=\"project\">
                <div class=\"leftSide\">
                    <a href=\"#phase10\" class=\"smallBaseSize arrowMore projectNext\">
                        <span class=\"smallBaseSize\">";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("next_project"), "html", null, true);
        yield "</span>
                        <img src=\"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/arrow.svg"), "html", null, true);
        yield "\" alt=\"arrow\">
                    </a>
                </div>
                <div class=\"middleSide\">
                    <div class=\"pre-container css-only\">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <pre contenteditable class=\"language-css\" tabindex=\"0\">
                                 <img src=\"";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/projects/chess/icon_chess.png"), "html", null, true);
        yield "\"
                                      alt=\"icon chess game\">
                            <div class=\"textOverlay\">
                                <p class=\"midMiddleBaseSize\">";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("chess.title"), "html", null, true);
        yield "</p>
                            </div>
                        </pre>
                    </div>
                </div>
                <div class=\"rightSide\">
                    <p class=\"midMiddleBaseSize title\">";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("chess.title"), "html", null, true);
        yield "</p>
                    <p class=\"descriptionProject smallBaseSize\">";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("chess.description"), "html", null, true);
        yield "</p>
                    <a href=\"";
        // line 76
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_chess");
        yield "\" class=\"buttonProject hoverA smallBaseSize\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("view_project"), "html", null, true);
        yield "</a>
                </div>
            </div>
        </div>
        <div id=\"phase10\" class=\"projectWrapper\">
            <img src=\"";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/projects/phase10/background_phase10.png"), "html", null, true);
        yield "\" alt=\"Centered Image\"
                 class=\"centeredImage blurDarker\">
            <div class=\"project\">
                <div class=\"leftSide\">
                    <a href=\"#interactive-book\" class=\"smallBaseSize arrowMore projectNext\">
                        <span class=\"smallBaseSize\">";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("next_project"), "html", null, true);
        yield " </span>
                        <img src=\"";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/arrow.svg"), "html", null, true);
        yield "\" alt=\"arrow\">
                    </a>
                </div>
                <div class=\"middleSide\">
                    <div class=\"pre-container css-only\">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <pre contenteditable class=\"language-css\" tabindex=\"0\">
                               <img src=\"";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/projects/phase10/icon_phase10.png"), "html", null, true);
        yield "\"
                                    alt=\"icon game phase 10\">
                            <div class=\"textOverlay\">
                                <p class=\"midMiddleBaseSize\">";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("phase10.title"), "html", null, true);
        yield "</p>
                            </div>
                        </pre>
                    </div>
                </div>
                <div class=\"rightSide\">
                    <p class=\"midMiddleBaseSize title\">";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("phase10.title"), "html", null, true);
        yield "</p>
                    <p class=\"descriptionProject smallBaseSize\">";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("phase10.description"), "html", null, true);
        yield ".</p>
                    <a href=\"";
        // line 113
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_phase10");
        yield "\" class=\"buttonProject hoverA smallBaseSize\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("view_project"), "html", null, true);
        yield "</a>
                </div>
            </div>
        </div>
        <div id=\"interactive-book\" class=\"projectWrapper\">
            <img src=\"";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/projects/interactive_book/background_interactive_book.png"), "html", null, true);
        yield "\"
                 alt=\"Centered Image\"
                 class=\"centeredImage blurDarker\">
            <div class=\"project\">
                <div class=\"leftSide\">
                    <a href=\"#spotify\" class=\"smallBaseSize arrowMore projectNext\">
                        <span class=\"smallBaseSize\">";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("next_project"), "html", null, true);
        yield "</span>
                        <img src=\"";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/arrow.svg"), "html", null, true);
        yield "\" alt=\"arrow\">
                    </a>
                </div>
                <div class=\"middleSide\">
                    <div class=\"pre-container css-only\">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <pre contenteditable class=\"language-css\" tabindex=\"0\">
                             <img src=\"";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/projects/interactive_book/icon_interactive_book.png"), "html", null, true);
        yield "\"
                                  alt=\"interactive book icon\">
                            <div class=\"textOverlay\">
                                <p class=\"midMiddleBaseSize\">";
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("interactive_book.title"), "html", null, true);
        yield "</p>
                            </div>
                        </pre>
                    </div>
                </div>
                <div class=\"rightSide\">
                    <p class=\"midMiddleBaseSize title\">";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("interactive_book.title"), "html", null, true);
        yield "</p>
                    <p class=\"descriptionProject smallBaseSize\">";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("interactive_book.description"), "html", null, true);
        yield "</p>
                    <a href=\"";
        // line 151
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_interactive_book");
        yield "\" class=\"buttonProject hoverA smallBaseSize\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("view_project"), "html", null, true);
        yield "</a>
                </div>
            </div>
        </div>
        <div id=\"spotify\" class=\"projectWrapper\">
            <img src=\"";
        // line 156
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/projects/spotify/background_spotify.png"), "html", null, true);
        yield "\" alt=\"Centered Image\"
                 class=\"centeredImage blurDarker\">
            <div class=\"project\">
                <div class=\"leftSide\">
                    <a href=\"#aloas\" class=\"smallBaseSize arrowMore projectNext\">
                        <span class=\"smallBaseSize\">";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("next_project"), "html", null, true);
        yield "</span>
                        <img src=\"";
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/arrow.svg"), "html", null, true);
        yield "\" alt=\"arrow\">
                    </a>
                </div>
                <div class=\"middleSide\">
                    <div class=\"pre-container css-only\">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <pre contenteditable class=\"language-css\" tabindex=\"0\">
                             <img src=\"";
        // line 177
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/projects/spotify/icon_spotify.png"), "html", null, true);
        yield "\"
                                  alt=\"interactive book icon\">
                            <span class=\"textOverlay\">
                                <span class=\"midMiddleBaseSize\">";
        // line 180
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("spotify.title"), "html", null, true);
        yield "</span>
                            </span>
                        </pre>
                    </div>
                </div>
                <div class=\"rightSide\">
                    <p class=\"midMiddleBaseSize title\">";
        // line 186
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("spotify.title"), "html", null, true);
        yield "</p>
                    <p class=\"descriptionProject smallBaseSize\">";
        // line 187
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("spotify.description"), "html", null, true);
        yield "</p>
                    <a href=\"";
        // line 188
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_spotify");
        yield "\" class=\"buttonProject hoverA smallBaseSize\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("view_project"), "html", null, true);
        yield "</a>
                </div>
            </div>
        </div>
        <div id=\"aloas\" class=\"projectWrapper\">
            <img src=\"";
        // line 193
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/projects/aloas/background_aloas.png"), "html", null, true);
        yield "\" alt=\"Centered Image\"
                 class=\"centeredImage blurDarker\">
            <div class=\"project\">
                <div class=\"leftSide\">
                    <a href=\"#works\" class=\"smallBaseSize arrowMore projectNext reverseArrow\">
                        <img src=\"";
        // line 198
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/arrow.svg"), "html", null, true);
        yield "\" alt=\"arrow\">
                        <span class=\"smallBaseSize\">";
        // line 199
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("back_to_works"), "html", null, true);
        yield "</span>
                    </a>
                </div>
                <div class=\"middleSide\">
                    <div class=\"pre-container css-only\">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <pre contenteditable class=\"language-css\" tabindex=\"0\">
                             <img src=\"";
        // line 214
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/projects/aloas/icon_aloas.png"), "html", null, true);
        yield "\"
                                  alt=\"interactive book icon\">
                            <span class=\"textOverlay\">
                                <span class=\"midMiddleBaseSize\">";
        // line 217
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("aloas.title"), "html", null, true);
        yield "</span>
                            </span>
                        </pre>
                    </div>
                </div>
                <div class=\"rightSide\">
                    <p class=\"midMiddleBaseSize title\">";
        // line 223
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("aloas.title"), "html", null, true);
        yield "</p>
                    <p class=\"descriptionProject smallBaseSize\">";
        // line 224
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("aloas.description"), "html", null, true);
        yield "</p>
                    <a href=\"";
        // line 225
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_aloas");
        yield "\" class=\"buttonProject hoverA smallBaseSize\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("view_project"), "html", null, true);
        yield "</a>
                </div>
            </div>
        </div>
    </section>
    <div style=\"height: 1px; width: 100%; margin: 0; padding: 0; overflow: hidden;\"></div>
";
        yield from [];
    }

    // line 233
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 234
        yield "    <script src=\"/assets/js/background.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/particles.js\"></script>
    <script src=\"/assets/js/particles.js\"></script>
    <script src=\"https://code.createjs.com/1.0.0/createjs.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js\"></script>
    ";
        // line 239
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
        return array (  489 => 239,  482 => 234,  475 => 233,  461 => 225,  457 => 224,  453 => 223,  444 => 217,  438 => 214,  420 => 199,  416 => 198,  408 => 193,  398 => 188,  394 => 187,  390 => 186,  381 => 180,  375 => 177,  357 => 162,  353 => 161,  345 => 156,  335 => 151,  331 => 150,  327 => 149,  318 => 143,  312 => 140,  294 => 125,  290 => 124,  281 => 118,  271 => 113,  267 => 112,  263 => 111,  254 => 105,  248 => 102,  230 => 87,  226 => 86,  218 => 81,  208 => 76,  204 => 75,  200 => 74,  191 => 68,  185 => 65,  167 => 50,  163 => 49,  155 => 44,  148 => 40,  144 => 39,  139 => 37,  135 => 36,  131 => 35,  121 => 28,  117 => 27,  109 => 24,  105 => 23,  101 => 22,  97 => 21,  87 => 14,  83 => 13,  76 => 9,  72 => 8,  68 => 7,  64 => 5,  62 => 4,  59 => 3,  52 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "index.html.twig", "/home/ubuntu/Projects/portfolio/templates/index.html.twig");
    }
}
