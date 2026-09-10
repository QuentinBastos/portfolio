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

/* header.html.twig */
class __TwigTemplate_9ffedfb951487eb59512f1a9b0a1cff4 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<header>
    <nav>
        <ul>
            <li><a href=\"";
        // line 4
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("default");
        yield "\" class=\"textBaseSize\">_QB</a></li>
            <li class=\"rightMenu\">
                <a ";
        // line 6
        if ((array_key_exists("works", $context) && ($context["works"] ?? null))) {
            yield "href=\"#works\" ";
        } else {
            yield "href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("default");
            yield "#works\" ";
        }
        yield "class=\"textBaseSize hoverA\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("nav.works"), "html", null, true);
        yield "</a>
                <a href=\"";
        // line 7
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about");
        yield "\" class=\"textBaseSize hoverA\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("nav.about"), "html", null, true);
        yield "</a>
                <a href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 8), "get", ["_locale"], "method", false, false, false, 8) == "fr")) ? ("assets/files/BASTOS_QUENTIN_CV.pdf") : ("assets/files/BASTOS_QUENTIN_CV_EN.pdf"))), "html", null, true);
        yield "\" class=\"textBaseSize hoverA\" target=\"_blank\" rel=\"noopener\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("nav.cv"), "html", null, true);
        yield "</a>
                ";
        // line 9
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 9), "get", ["_locale"], "method", false, false, false, 9) == "fr")) {
            // line 10
            yield "                    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("change_language", ["language" => "en"]);
            yield "\" class=\"flex\" aria-label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("nav.switch_language"), "html", null, true);
            yield "\">
                        <img class=\"flagCountry\" src=\"";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/uk.svg"), "html", null, true);
            yield "\" alt=\"\">
                    </a>
                ";
        } else {
            // line 14
            yield "                    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("change_language", ["language" => "fr"]);
            yield "\" class=\"flex\" aria-label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("nav.switch_language"), "html", null, true);
            yield "\">
                        <img class=\"flagCountry\" src=\"";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/france.svg"), "html", null, true);
            yield "\" alt=\"\">
                    </a>
                ";
        }
        // line 18
        yield "            </li>
        </ul>
    </nav>
</header>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "header.html.twig";
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
        return array (  104 => 18,  98 => 15,  91 => 14,  85 => 11,  78 => 10,  76 => 9,  70 => 8,  64 => 7,  52 => 6,  47 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "header.html.twig", "/home/ubuntu/Projects/portfolio/templates/header.html.twig");
    }
}
