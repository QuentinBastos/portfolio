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
class __TwigTemplate_630bf44f828013440b25a6295c2d6d44 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "index.html.twig", 1);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("welcome"), "html", null, true);
        
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
            <a href=\"#chess\" class=\"textBaseSize arrowMore mt-7\">
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
                    <a href=\"";
        // line 55
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_chess");
        yield "\">
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
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/projects/chess/icon_chess.png"), "html", null, true);
        yield "\"
                                      alt=\"icon chess game\">
                            <div class=\"textOverlay\">
                                <p class=\"midMiddleBaseSize\">";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("chess.title"), "html", null, true);
        yield "</p>
                            </div>
                        </pre>
                        </div>
                    </a>
                </div>
                <div class=\"rightSide\">
                    <p class=\"midMiddleBaseSize title\">";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("chess.title"), "html", null, true);
        yield "</p>
                    <p class=\"descriptionProject smallBaseSize\">";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("chess.description"), "html", null, true);
        yield "</p>
                    <a href=\"";
        // line 79
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_chess");
        yield "\"
                       class=\"buttonProject hoverA smallBaseSize\">";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("view_project"), "html", null, true);
        yield "</a>
                </div>
            </div>
        </div>
        <div id=\"phase10\" class=\"projectWrapper\">
            <img src=\"";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/projects/phase10/background_phase10.png"), "html", null, true);
        yield "\" alt=\"Centered Image\"
                 class=\"centeredImage blurDarker\">
            <div class=\"project\">
                <div class=\"leftSide\">
                    <a href=\"#interactive-book\" class=\"smallBaseSize arrowMore projectNext\">
                        <span class=\"smallBaseSize\">";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("next_project"), "html", null, true);
        yield " </span>
                        <img src=\"";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/arrow.svg"), "html", null, true);
        yield "\" alt=\"arrow\">
                    </a>
                </div>
                <div class=\"middleSide\">
                    <a href=\"";
        // line 95
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_phase10");
        yield "\">
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
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/projects/phase10/icon_phase10.png"), "html", null, true);
        yield "\"
                                    alt=\"icon game phase 10\">
                            <span class=\"textOverlay\">
                                <span class=\"midMiddleBaseSize\">";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("phase10.title"), "html", null, true);
        yield "</span>
                            </span>
                        </pre>
                        </div>
                    </a>
                </div>
                <div class=\"rightSide\">
                    <p class=\"midMiddleBaseSize title\">";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("phase10.title"), "html", null, true);
        yield "</p>
                    <p class=\"descriptionProject smallBaseSize\">";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("phase10.description"), "html", null, true);
        yield ".</p>
                    <a href=\"";
        // line 119
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_phase10");
        yield "\"
                       class=\"buttonProject hoverA smallBaseSize\">";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("view_project"), "html", null, true);
        yield "</a>
                </div>
            </div>
        </div>
        <div id=\"interactive-book\" class=\"projectWrapper\">
            <img src=\"";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/projects/interactive_book/background_interactive_book.png"), "html", null, true);
        yield "\"
                 alt=\"Centered Image\"
                 class=\"centeredImage blurDarker\">
            <div class=\"project\">
                <div class=\"leftSide\">
                    <a href=\"#spotify\" class=\"smallBaseSize arrowMore projectNext\">
                        <span class=\"smallBaseSize\">";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("next_project"), "html", null, true);
        yield "</span>
                        <img src=\"";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/arrow.svg"), "html", null, true);
        yield "\" alt=\"arrow\">
                    </a>
                </div>
                <div class=\"middleSide\">
                    <a href=\"";
        // line 136
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_interactive_book");
        yield "\">
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
        // line 148
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/projects/interactive_book/icon_interactive_book.png"), "html", null, true);
        yield "\"
                                  alt=\"interactive book icon\">
                            <span class=\"textOverlay\">
                                <span class=\"midMiddleBaseSize\">";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("interactive_book.title"), "html", null, true);
        yield "</span>
                            </span>
                        </pre>
                        </div>
                    </a>
                </div>
                <div class=\"rightSide\">
                    <p class=\"midMiddleBaseSize title\">";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("interactive_book.title"), "html", null, true);
        yield "</p>
                    <p class=\"descriptionProject smallBaseSize\">";
        // line 159
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("interactive_book.description"), "html", null, true);
        yield "</p>
                    <a href=\"";
        // line 160
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_interactive_book");
        yield "\"
                       class=\"buttonProject hoverA smallBaseSize\">";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("view_project"), "html", null, true);
        yield "</a>
                </div>
            </div>
        </div>
        <div id=\"spotify\" class=\"projectWrapper\">
            <img src=\"";
        // line 166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/projects/spotify/background_spotify.png"), "html", null, true);
        yield "\" alt=\"Centered Image\"
                 class=\"centeredImage blurDarker\">
            <div class=\"project\">
                <div class=\"leftSide\">
                    <a href=\"#aloas\" class=\"smallBaseSize arrowMore projectNext\">
                        <span class=\"smallBaseSize\">";
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("next_project"), "html", null, true);
        yield "</span>
                        <img src=\"";
        // line 172
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/arrow.svg"), "html", null, true);
        yield "\" alt=\"arrow\">
                    </a>
                </div>
                <div class=\"middleSide\">
                    <a href=\"";
        // line 176
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_spotify");
        yield "\">
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
        // line 188
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/projects/spotify/icon_spotify.png"), "html", null, true);
        yield "\"
                                  alt=\"interactive book icon\">
                            <span class=\"textOverlay\">
                                <span class=\"midMiddleBaseSize\">";
        // line 191
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("spotify.title"), "html", null, true);
        yield "</span>
                            </span>
                        </pre>
                        </div>
                    </a>
                </div>
                <div class=\"rightSide\">
                    <p class=\"midMiddleBaseSize title\">";
        // line 198
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("spotify.title"), "html", null, true);
        yield "</p>
                    <p class=\"descriptionProject smallBaseSize\">";
        // line 199
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("spotify.description"), "html", null, true);
        yield "</p>
                    <a href=\"";
        // line 200
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_spotify");
        yield "\"
                       class=\"buttonProject hoverA smallBaseSize\">";
        // line 201
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("view_project"), "html", null, true);
        yield "</a>
                </div>
            </div>
        </div>
        <div id=\"aloas\" class=\"projectWrapper\">
            <img src=\"";
        // line 206
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/projects/aloas/background_aloas.png"), "html", null, true);
        yield "\" alt=\"Centered Image\"
                 class=\"centeredImage blurDarker\">
            <div class=\"project\">
                <div class=\"leftSide\">
                    <a href=\"#works\" class=\"smallBaseSize arrowMore projectNext reverseArrow\">
                        <img src=\"";
        // line 211
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/arrow.svg"), "html", null, true);
        yield "\" alt=\"arrow\">
                        <span class=\"smallBaseSize\">";
        // line 212
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("back_to_works"), "html", null, true);
        yield "</span>
                    </a>
                </div>
                <div class=\"middleSide\">
                    <a href=\"";
        // line 216
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_aloas");
        yield "\">
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
        // line 228
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/projects/aloas/icon_aloas.png"), "html", null, true);
        yield "\"
                                  alt=\"interactive book icon\">
                            <span class=\"textOverlay\">
                                <span class=\"midMiddleBaseSize\">";
        // line 231
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("aloas.title"), "html", null, true);
        yield "</span>
                            </span>
                        </pre>
                        </div>
                    </a>
                </div>
                <div class=\"rightSide\">
                    <p class=\"midMiddleBaseSize title\">";
        // line 238
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("aloas.title"), "html", null, true);
        yield "</p>
                    <p class=\"descriptionProject smallBaseSize\">";
        // line 239
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("aloas.description"), "html", null, true);
        yield "</p>
                    <a href=\"";
        // line 240
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_aloas");
        yield "\"
                       class=\"buttonProject hoverA smallBaseSize\">";
        // line 241
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("view_project"), "html", null, true);
        yield "</a>
                </div>
            </div>
        </div>
    </section>
    <div style=\"height: 1px; width: 100%; margin: 0; padding: 0; overflow: hidden;\"></div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 249
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

        // line 250
        yield "    <script src=\"/assets/js/background.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/particles.js\"></script>
    <script src=\"/assets/js/particles.js\"></script>
    <script src=\"https://code.createjs.com/1.0.0/createjs.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js\"></script>
    ";
        // line 255
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
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
        return array (  579 => 255,  572 => 250,  559 => 249,  541 => 241,  537 => 240,  533 => 239,  529 => 238,  519 => 231,  513 => 228,  498 => 216,  491 => 212,  487 => 211,  479 => 206,  471 => 201,  467 => 200,  463 => 199,  459 => 198,  449 => 191,  443 => 188,  428 => 176,  421 => 172,  417 => 171,  409 => 166,  401 => 161,  397 => 160,  393 => 159,  389 => 158,  379 => 151,  373 => 148,  358 => 136,  351 => 132,  347 => 131,  338 => 125,  330 => 120,  326 => 119,  322 => 118,  318 => 117,  308 => 110,  302 => 107,  287 => 95,  280 => 91,  276 => 90,  268 => 85,  260 => 80,  256 => 79,  252 => 78,  248 => 77,  238 => 70,  232 => 67,  217 => 55,  210 => 51,  206 => 50,  198 => 45,  191 => 41,  187 => 40,  182 => 38,  178 => 37,  174 => 36,  164 => 29,  160 => 28,  152 => 25,  148 => 24,  144 => 23,  140 => 22,  130 => 15,  126 => 14,  119 => 10,  115 => 9,  111 => 8,  107 => 6,  105 => 5,  102 => 4,  89 => 3,  65 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block title2 %} - {{ \"welcome\"|trans }}{% endblock %}
{% block body %}
    <canvas id=\"projector\"></canvas>
    {% include \"header.html.twig\" %}
    <main>
        <div class=\"wrapper\">
            <p class=\"title titleBaseSize\">{{ 'nothing'|trans }}</p>
            <p class=\"title titleBaseSize\">{{ 'is_impossible'|trans }}</p>
            <p class=\"description textBaseSize\">{{ 'portfolio_description'|trans }}</p>
        </div>
        <div class=\"more\">
            <a href=\"#who\" class=\"textBaseSize arrowMore\">
                <span class=\"textBaseSize\">{{ 'more'|trans }}</span>
                <img src=\"{{ asset('assets/svg/arrow.svg') }}\" alt=\"arrow\">
            </a>
        </div>
    </main>
    <section id=\"who\" class=\"sectionWho\">
        <div id=\"particles-js\"></div>
        <div class=\"wrapper\">
            <p class=\"titleWho middleBaseSize\">{{ 'who_is_quentin'|trans }}</p>
            <p class=\"descriptionWho textBaseSize\">{{ 'quentin_description'|trans }}</p>
            <p class=\"descriptionWho textBaseSize colorLightGray\">{{ 'quentin_details'|trans }}</p>
            <a class=\"aboutWho smallBaseSize hoverA\" href=\"{{ path('about') }}\">{{ 'learn_more'|trans }}</a>
            <div class=\"more\">
                <a href=\"#works\" class=\"textBaseSize arrowMore\">
                    <span class=\"textBaseSize\">{{ 'more'|trans }}</span>
                    <img src=\"{{ asset('assets/svg/arrow.svg') }}\" alt=\"arrow\">
                </a>
            </div>
        </div>
    </section>
    <section id=\"works\" class=\"sectionWorks\">
        <div class=\"titleWho stickyTitle\">
            <h1 class=\"middleBaseSize uppercase\">{{ 'works'|trans }}</h1>
            <p class=\"textBaseSize\">{{ 'want_to_see_my_work'|trans }}</p>
            <p class=\"textBaseSize\">{{ 'come_check_below'|trans }}</p>
            <a href=\"#chess\" class=\"textBaseSize arrowMore mt-7\">
                <span class=\"textBaseSize\">{{ 'check_my_projects'|trans }}</span>
                <img src=\"{{ asset('assets/svg/arrow.svg') }}\" alt=\"arrow\">
            </a>
        </div>
        <div id=\"chess\" class=\"projectWrapper\">
            <img src=\"{{ asset('assets/img/projects/chess/background_chess.png') }}\" alt=\"Centered Image\"
                 class=\"centeredImage blurDarker\">
            <div class=\"project\">
                <div class=\"leftSide\">
                    <a href=\"#phase10\" class=\"smallBaseSize arrowMore projectNext\">
                        <span class=\"smallBaseSize\">{{ 'next_project'|trans }}</span>
                        <img src=\"{{ asset('assets/svg/arrow.svg') }}\" alt=\"arrow\">
                    </a>
                </div>
                <div class=\"middleSide\">
                    <a href=\"{{ path('project_chess') }}\">
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
                                 <img src=\"{{ asset('assets/img/projects/chess/icon_chess.png') }}\"
                                      alt=\"icon chess game\">
                            <div class=\"textOverlay\">
                                <p class=\"midMiddleBaseSize\">{{ 'chess.title'|trans }}</p>
                            </div>
                        </pre>
                        </div>
                    </a>
                </div>
                <div class=\"rightSide\">
                    <p class=\"midMiddleBaseSize title\">{{ 'chess.title'|trans }}</p>
                    <p class=\"descriptionProject smallBaseSize\">{{ 'chess.description'|trans }}</p>
                    <a href=\"{{ path('project_chess') }}\"
                       class=\"buttonProject hoverA smallBaseSize\">{{ 'view_project'|trans }}</a>
                </div>
            </div>
        </div>
        <div id=\"phase10\" class=\"projectWrapper\">
            <img src=\"{{ asset('assets/img/projects/phase10/background_phase10.png') }}\" alt=\"Centered Image\"
                 class=\"centeredImage blurDarker\">
            <div class=\"project\">
                <div class=\"leftSide\">
                    <a href=\"#interactive-book\" class=\"smallBaseSize arrowMore projectNext\">
                        <span class=\"smallBaseSize\">{{ 'next_project'|trans }} </span>
                        <img src=\"{{ asset('assets/svg/arrow.svg') }}\" alt=\"arrow\">
                    </a>
                </div>
                <div class=\"middleSide\">
                    <a href=\"{{ path('project_phase10') }}\">
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
                               <img src=\"{{ asset('assets/img/projects/phase10/icon_phase10.png') }}\"
                                    alt=\"icon game phase 10\">
                            <span class=\"textOverlay\">
                                <span class=\"midMiddleBaseSize\">{{ 'phase10.title'|trans }}</span>
                            </span>
                        </pre>
                        </div>
                    </a>
                </div>
                <div class=\"rightSide\">
                    <p class=\"midMiddleBaseSize title\">{{ 'phase10.title'|trans }}</p>
                    <p class=\"descriptionProject smallBaseSize\">{{ 'phase10.description'|trans }}.</p>
                    <a href=\"{{ path('project_phase10') }}\"
                       class=\"buttonProject hoverA smallBaseSize\">{{ 'view_project'|trans }}</a>
                </div>
            </div>
        </div>
        <div id=\"interactive-book\" class=\"projectWrapper\">
            <img src=\"{{ asset('assets/img/projects/interactive_book/background_interactive_book.png') }}\"
                 alt=\"Centered Image\"
                 class=\"centeredImage blurDarker\">
            <div class=\"project\">
                <div class=\"leftSide\">
                    <a href=\"#spotify\" class=\"smallBaseSize arrowMore projectNext\">
                        <span class=\"smallBaseSize\">{{ 'next_project'|trans }}</span>
                        <img src=\"{{ asset('assets/svg/arrow.svg') }}\" alt=\"arrow\">
                    </a>
                </div>
                <div class=\"middleSide\">
                    <a href=\"{{ path('project_interactive_book') }}\">
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
                             <img src=\"{{ asset('assets/img/projects/interactive_book/icon_interactive_book.png') }}\"
                                  alt=\"interactive book icon\">
                            <span class=\"textOverlay\">
                                <span class=\"midMiddleBaseSize\">{{ 'interactive_book.title'|trans }}</span>
                            </span>
                        </pre>
                        </div>
                    </a>
                </div>
                <div class=\"rightSide\">
                    <p class=\"midMiddleBaseSize title\">{{ 'interactive_book.title'|trans }}</p>
                    <p class=\"descriptionProject smallBaseSize\">{{ 'interactive_book.description'|trans }}</p>
                    <a href=\"{{ path('project_interactive_book') }}\"
                       class=\"buttonProject hoverA smallBaseSize\">{{ 'view_project'|trans }}</a>
                </div>
            </div>
        </div>
        <div id=\"spotify\" class=\"projectWrapper\">
            <img src=\"{{ asset('assets/img/projects/spotify/background_spotify.png') }}\" alt=\"Centered Image\"
                 class=\"centeredImage blurDarker\">
            <div class=\"project\">
                <div class=\"leftSide\">
                    <a href=\"#aloas\" class=\"smallBaseSize arrowMore projectNext\">
                        <span class=\"smallBaseSize\">{{ 'next_project'|trans }}</span>
                        <img src=\"{{ asset('assets/svg/arrow.svg') }}\" alt=\"arrow\">
                    </a>
                </div>
                <div class=\"middleSide\">
                    <a href=\"{{ path('project_spotify') }}\">
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
                             <img src=\"{{ asset('assets/img/projects/spotify/icon_spotify.png') }}\"
                                  alt=\"interactive book icon\">
                            <span class=\"textOverlay\">
                                <span class=\"midMiddleBaseSize\">{{ 'spotify.title'|trans }}</span>
                            </span>
                        </pre>
                        </div>
                    </a>
                </div>
                <div class=\"rightSide\">
                    <p class=\"midMiddleBaseSize title\">{{ 'spotify.title'|trans }}</p>
                    <p class=\"descriptionProject smallBaseSize\">{{ 'spotify.description'|trans }}</p>
                    <a href=\"{{ path('project_spotify') }}\"
                       class=\"buttonProject hoverA smallBaseSize\">{{ 'view_project'|trans }}</a>
                </div>
            </div>
        </div>
        <div id=\"aloas\" class=\"projectWrapper\">
            <img src=\"{{ asset('assets/img/projects/aloas/background_aloas.png') }}\" alt=\"Centered Image\"
                 class=\"centeredImage blurDarker\">
            <div class=\"project\">
                <div class=\"leftSide\">
                    <a href=\"#works\" class=\"smallBaseSize arrowMore projectNext reverseArrow\">
                        <img src=\"{{ asset('assets/svg/arrow.svg') }}\" alt=\"arrow\">
                        <span class=\"smallBaseSize\">{{ 'back_to_works'|trans }}</span>
                    </a>
                </div>
                <div class=\"middleSide\">
                    <a href=\"{{ path('project_aloas') }}\">
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
                             <img src=\"{{ asset('assets/img/projects/aloas/icon_aloas.png') }}\"
                                  alt=\"interactive book icon\">
                            <span class=\"textOverlay\">
                                <span class=\"midMiddleBaseSize\">{{ 'aloas.title'|trans }}</span>
                            </span>
                        </pre>
                        </div>
                    </a>
                </div>
                <div class=\"rightSide\">
                    <p class=\"midMiddleBaseSize title\">{{ 'aloas.title'|trans }}</p>
                    <p class=\"descriptionProject smallBaseSize\">{{ 'aloas.description'|trans }}</p>
                    <a href=\"{{ path('project_aloas') }}\"
                       class=\"buttonProject hoverA smallBaseSize\">{{ 'view_project'|trans }}</a>
                </div>
            </div>
        </div>
    </section>
    <div style=\"height: 1px; width: 100%; margin: 0; padding: 0; overflow: hidden;\"></div>
{% endblock %}

{% block javascripts %}
    <script src=\"/assets/js/background.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/particles.js\"></script>
    <script src=\"/assets/js/particles.js\"></script>
    <script src=\"https://code.createjs.com/1.0.0/createjs.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js\"></script>
    {{ parent() }}
{% endblock %}", "index.html.twig", "/home/ubuntu/Projects/portfolio/templates/index.html.twig");
    }
}
