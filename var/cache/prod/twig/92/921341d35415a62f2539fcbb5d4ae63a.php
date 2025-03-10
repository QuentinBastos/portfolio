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

/* projects/interactive_book.html.twig */
class __TwigTemplate_7e5a459f922ee4c5898495a5fb2fc2ab extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "projects/interactive_book.html.twig", 1);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("interactive_book.title"), "html", null, true);
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
        yield "    ";
        yield from $this->loadTemplate("header.html.twig", "projects/interactive_book.html.twig", 4)->unwrap()->yield($context);
        // line 5
        yield "    <section class=\"projectView\">
        <div class=\"wrapperView\">
            <div class=\"titleProject\">
                <h1 class=\"middleBaseSize\">";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("interactive_book.title"), "html", null, true);
        yield "</h1>
            </div>
            <div class=\"wrapperVideo\">
                <video class=\"video\" controls>
                    <source src=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/video/interactiveBook.mp4"), "html", null, true);
        yield "\" type=\"video/mp4\">
                    ";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("video.not_supported"), "html", null, true);
        yield "
                </video>
            </div>
            <div class=\"wrapperInformation\">
                <div class=\"wrapperDescription\">
                    <div class=\"align-center flex flex-column h-100\">
                        <h2 class=\"midMiddleBaseSize\">";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("description"), "html", null, true);
        yield "</h2>
                        <p class=\"smallBaseSize\">";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("interactive_book.long_description"), "html", null, true);
        yield "</p>
                    </div>
                </div>
                <div class=\"wrapperDescription\">
                    <div class=\"align-center flex flex-column h-100\">
                        <h2 class=\"midMiddleBaseSize\">";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("languages"), "html", null, true);
        yield "</h2>
                        <div class=\"flex flex-wrap justify-center\">
                            <div class=\"language\">
                                <img class=\"icon\" src=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icon/dark-symfony.png"), "html", null, true);
        yield "\" alt=\"symfony\">
                                <span class=\"flex align-center smallBaseSize\">Symfony</span>
                            </div>
                            <div class=\"language\">
                                <img class=\"icon\" src=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icon/tailwinds.png"), "html", null, true);
        yield "\"
                                     alt=\"tailwinds\">
                                <span class=\"flex align-center smallBaseSize\">Tailwinds</span>
                            </div>
                            <div class=\"language\">
                                <img class=\"icon\" src=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icon/twig.png"), "html", null, true);
        yield "\" alt=\"twig\">
                                <span class=\"flex align-center smallBaseSize\">Twig</span>
                            </div>
                            <div class=\"language\">
                                <img class=\"icon\" src=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icon/scss.png"), "html", null, true);
        yield "\" alt=\"scss\">
                                <span class=\"flex align-center smallBaseSize\">SASS</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
";
        yield from [];
    }

    // line 52
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 53
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 56
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 57
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
        return "projects/interactive_book.html.twig";
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
        return array (  178 => 57,  171 => 56,  163 => 53,  156 => 52,  141 => 41,  134 => 37,  126 => 32,  119 => 28,  113 => 25,  105 => 20,  101 => 19,  92 => 13,  88 => 12,  81 => 8,  76 => 5,  73 => 4,  66 => 3,  54 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "projects/interactive_book.html.twig", "/home/ubuntu/Projects/portfolio/templates/projects/interactive_book.html.twig");
    }
}
