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
            <p class=\"title titleBaseSize\">";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("nothing"), "html", null, true);
        yield "</p>
            <p class=\"title titleBaseSize\">";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("is_impossible"), "html", null, true);
        yield "</p>
            <p class=\"description textBaseSize\">";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("portfolio_description"), "html", null, true);
        yield "</p>
        </div>
        <div class=\"more\">
            <a href=\"#who\" class=\"textBaseSize arrowMore\">
                <span class=\"textBaseSize\">";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("more"), "html", null, true);
        yield "</span>
                <img src=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/arrow.svg"), "html", null, true);
        yield "\" alt=\"arrow\">
            </a>
        </div>
    </main>
    <section id=\"who\" class=\"sectionWho\">
        <div id=\"particles-js\"></div>
        <div class=\"wrapper\">
            <p class=\"titleWho middleBaseSize\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("who_is_quentin"), "html", null, true);
        yield "</p>
            <p class=\"descriptionWho textBaseSize\">";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("quentin_description"), "html", null, true);
        yield "</p>
            <p class=\"descriptionWho textBaseSize colorLightGray\">";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("quentin_details"), "html", null, true);
        yield "</p>
            <a class=\"aboutWho smallBaseSize hoverA\" href=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about");
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("learn_more"), "html", null, true);
        yield "</a>
            <div class=\"more\">
                <a href=\"#works\" class=\"textBaseSize arrowMore\">
                    <span class=\"textBaseSize\">";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("more"), "html", null, true);
        yield "</span>
                    <img src=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/arrow.svg"), "html", null, true);
        yield "\" alt=\"arrow\">
                </a>
            </div>
        </div>
    </section>
    <section id=\"works\" class=\"sectionWorks\">
        <div class=\"titleWho stickyTitle\">
            <h1 class=\"middleBaseSize uppercase\">";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("works"), "html", null, true);
        yield "</h1>
            <p class=\"textBaseSize\">";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("want_to_see_my_work"), "html", null, true);
        yield "</p>
            <p class=\"textBaseSize\">";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("come_check_below"), "html", null, true);
        yield "</p>
            <a href=\"#chess\" class=\"textBaseSize arrowMore\">
                <span class=\"textBaseSize\">";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("check_my_projects"), "html", null, true);
        yield "</span>
                <img src=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/arrow.svg"), "html", null, true);
        yield "\" alt=\"arrow\">
            </a>
        </div>
        <div id=\"chess\" class=\"projectWrapper\">
            <img src=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/projects/chess/background_chess.png"), "html", null, true);
        yield "\" alt=\"Centered Image\"
                 class=\"centeredImage blurDarker\">
            <div class=\"project\">
                <div class=\"leftSide\">
                    <a href=\"#phase10\" class=\"smallBaseSize arrowMore projectNext\">
                        <span class=\"smallBaseSize\">";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("next_project"), "html", null, true);
        yield "</span>
                        <img src=\"";
        // line 51
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
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/projects/chess/icon_chess.png"), "html", null, true);
        yield "\"
                                      alt=\"icon chess game\">
                            <div class=\"textOverlay\">
                                <p class=\"midMiddleBaseSize\">";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("chess.title"), "html", null, true);
        yield "</p>
                            </div>
                        </pre>
                    </div>
                </div>
                <div class=\"rightSide\">
                    <p class=\"midMiddleBaseSize title\">";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("chess.title"), "html", null, true);
        yield "</p>
                    <p class=\"descriptionProject smallBaseSize\">";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("chess.description"), "html", null, true);
        yield "</p>
                    <a href=\"";
        // line 77
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_chess");
        yield "\"
                       class=\"buttonProject hoverA smallBaseSize\">";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("view_project"), "html", null, true);
        yield "</a>
                </div>
            </div>
        </div>
        <div id=\"phase10\" class=\"projectWrapper\">
            <img src=\"";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/projects/phase10/background_phase10.png"), "html", null, true);
        yield "\" alt=\"Centered Image\"
                 class=\"centeredImage blurDarker\">
            <div class=\"project\">
                <div class=\"leftSide\">
                    <a href=\"#interactive-book\" class=\"smallBaseSize arrowMore projectNext\">
                        <span class=\"smallBaseSize\">";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("next_project"), "html", null, true);
        yield " </span>
                        <img src=\"";
        // line 89
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
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/projects/phase10/icon_phase10.png"), "html", null, true);
        yield "\"
                                    alt=\"icon game phase 10\">
                            <div class=\"textOverlay\">
                                <p class=\"midMiddleBaseSize\">";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("phase10.title"), "html", null, true);
        yield "</p>
                            </div>
                        </pre>
                    </div>
                </div>
                <div class=\"rightSide\">
                    <p class=\"midMiddleBaseSize title\">";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("phase10.title"), "html", null, true);
        yield "</p>
                    <p class=\"descriptionProject smallBaseSize\">";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("phase10.description"), "html", null, true);
        yield ".</p>
                    <a href=\"";
        // line 115
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_phase10");
        yield "\"
                       class=\"buttonProject hoverA smallBaseSize\">";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("view_project"), "html", null, true);
        yield "</a>
                </div>
            </div>
        </div>
        <div id=\"interactive-book\" class=\"projectWrapper\">
            <img src=\"";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/projects/interactive_book/background_interactive_book.png"), "html", null, true);
        yield "\"
                 alt=\"Centered Image\"
                 class=\"centeredImage blurDarker\">
            <div class=\"project\">
                <div class=\"leftSide\">
                    <a href=\"#spotify\" class=\"smallBaseSize arrowMore projectNext\">
                        <span class=\"smallBaseSize\">";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("next_project"), "html", null, true);
        yield "</span>
                        <img src=\"";
        // line 128
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
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/projects/interactive_book/icon_interactive_book.png"), "html", null, true);
        yield "\"
                                  alt=\"interactive book icon\">
                            <div class=\"textOverlay\">
                                <p class=\"midMiddleBaseSize\">";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("interactive_book.title"), "html", null, true);
        yield "</p>
                            </div>
                        </pre>
                    </div>
                </div>
                <div class=\"rightSide\">
                    <p class=\"midMiddleBaseSize title\">";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("interactive_book.title"), "html", null, true);
        yield "</p>
                    <p class=\"descriptionProject smallBaseSize\">";
        // line 153
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("interactive_book.description"), "html", null, true);
        yield "</p>
                    <a href=\"";
        // line 154
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_interactive_book");
        yield "\"
                       class=\"buttonProject hoverA smallBaseSize\">";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("view_project"), "html", null, true);
        yield "</a>
                </div>
            </div>
        </div>
        <div id=\"spotify\" class=\"projectWrapper\">
            <img src=\"";
        // line 160
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/projects/spotify/background_spotify.png"), "html", null, true);
        yield "\" alt=\"Centered Image\"
                 class=\"centeredImage blurDarker\">
            <div class=\"project\">
                <div class=\"leftSide\">
                    <a href=\"#aloas\" class=\"smallBaseSize arrowMore projectNext\">
                        <span class=\"smallBaseSize\">";
        // line 165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("next_project"), "html", null, true);
        yield "</span>
                        <img src=\"";
        // line 166
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
        // line 181
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/projects/spotify/icon_spotify.png"), "html", null, true);
        yield "\"
                                  alt=\"interactive book icon\">
                            <span class=\"textOverlay\">
                                <span class=\"midMiddleBaseSize\">";
        // line 184
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("spotify.title"), "html", null, true);
        yield "</span>
                            </span>
                        </pre>
                    </div>
                </div>
                <div class=\"rightSide\">
                    <p class=\"midMiddleBaseSize title\">";
        // line 190
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("spotify.title"), "html", null, true);
        yield "</p>
                    <p class=\"descriptionProject smallBaseSize\">";
        // line 191
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("spotify.description"), "html", null, true);
        yield "</p>
                    <a href=\"";
        // line 192
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_spotify");
        yield "\"
                       class=\"buttonProject hoverA smallBaseSize\">";
        // line 193
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("view_project"), "html", null, true);
        yield "</a>
                </div>
            </div>
        </div>
        <div id=\"aloas\" class=\"projectWrapper\">
            <img src=\"";
        // line 198
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/projects/aloas/background_aloas.png"), "html", null, true);
        yield "\" alt=\"Centered Image\"
                 class=\"centeredImage blurDarker\">
            <div class=\"project\">
                <div class=\"leftSide\">
                    <a href=\"#works\" class=\"smallBaseSize arrowMore projectNext reverseArrow\">
                        <img src=\"";
        // line 203
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/arrow.svg"), "html", null, true);
        yield "\" alt=\"arrow\">
                        <span class=\"smallBaseSize\">";
        // line 204
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
        // line 219
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/projects/aloas/icon_aloas.png"), "html", null, true);
        yield "\"
                                  alt=\"interactive book icon\">
                            <span class=\"textOverlay\">
                                <span class=\"midMiddleBaseSize\">";
        // line 222
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("aloas.title"), "html", null, true);
        yield "</span>
                            </span>
                        </pre>
                    </div>
                </div>
                <div class=\"rightSide\">
                    <p class=\"midMiddleBaseSize title\">";
        // line 228
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("aloas.title"), "html", null, true);
        yield "</p>
                    <p class=\"descriptionProject smallBaseSize\">";
        // line 229
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("aloas.description"), "html", null, true);
        yield "</p>
                    <a href=\"";
        // line 230
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_aloas");
        yield "\"
                       class=\"buttonProject hoverA smallBaseSize\">";
        // line 231
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

    // line 239
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 240
        yield "    <script src=\"/assets/js/background.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/particles.js\"></script>
    <script src=\"/assets/js/particles.js\"></script>
    <script src=\"https://code.createjs.com/1.0.0/createjs.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js\"></script>
    ";
        // line 245
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
        return array (  512 => 245,  505 => 240,  498 => 239,  486 => 231,  482 => 230,  478 => 229,  474 => 228,  465 => 222,  459 => 219,  441 => 204,  437 => 203,  429 => 198,  421 => 193,  417 => 192,  413 => 191,  409 => 190,  400 => 184,  394 => 181,  376 => 166,  372 => 165,  364 => 160,  356 => 155,  352 => 154,  348 => 153,  344 => 152,  335 => 146,  329 => 143,  311 => 128,  307 => 127,  298 => 121,  290 => 116,  286 => 115,  282 => 114,  278 => 113,  269 => 107,  263 => 104,  245 => 89,  241 => 88,  233 => 83,  225 => 78,  221 => 77,  217 => 76,  213 => 75,  204 => 69,  198 => 66,  180 => 51,  176 => 50,  168 => 45,  161 => 41,  157 => 40,  152 => 38,  148 => 37,  144 => 36,  134 => 29,  130 => 28,  122 => 25,  118 => 24,  114 => 23,  110 => 22,  100 => 15,  96 => 14,  89 => 10,  85 => 9,  81 => 8,  77 => 6,  75 => 5,  72 => 4,  65 => 3,  53 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "index.html.twig", "/home/ubuntu/Projects/portfolio/templates/index.html.twig");
    }
}
