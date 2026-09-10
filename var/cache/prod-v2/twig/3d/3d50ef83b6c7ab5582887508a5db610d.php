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

/* base.html.twig */
class __TwigTemplate_216bd4123eb6585b1dcb84da274de353 extends Template
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
            'title' => [$this, 'block_title'],
            'title2' => [$this, 'block_title2'],
            'meta_description' => [$this, 'block_meta_description'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html lang=\"";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 2), "locale", [], "any", true, true, false, 2)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 2), "locale", [], "any", false, false, false, 2), "en")) : ("en")), "html", null, true);
        yield "\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield from $this->unwrap()->yieldBlock('title2', $context, $blocks);
        yield "</title>
    <link rel=\"icon\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/contact/qb.png"), "html", null, true);
        yield "\">
    <meta name=\"description\" content=\"";
        // line 8
        yield from $this->unwrap()->yieldBlock('meta_description', $context, $blocks);
        yield "\">
    ";
        // line 9
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 18
        yield "
    ";
        // line 19
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 22
        yield "</head>
<body>
";
        // line 24
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 25
        yield "</body>
</html>
";
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("portfolio"), "html", null, true);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title2(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_meta_description(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("default.meta_description"), "html", null, true);
        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 10
        yield "        <link rel=\"stylesheet\" href=\"/assets/css/style.css\">
        <link rel=\"stylesheet\" href=\"/assets/css/background.css\">
        <link rel=\"stylesheet\" href=\"/assets/css/basic-rule.css\">
        <link rel=\"stylesheet\" href=\"/assets/css/card.css\">
        <link rel=\"stylesheet\" href=\"/assets/css/particles.css\">
        <link rel=\"stylesheet\" href=\"/assets/css/about.css\">
        <link rel=\"stylesheet\" href=\"/assets/css/portfolio-v2.css\">
    ";
        yield from [];
    }

    // line 19
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 20
        yield "        <script src=\"/assets/js/language.js\"></script>
    ";
        yield from [];
    }

    // line 24
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  154 => 24,  148 => 20,  141 => 19,  129 => 10,  122 => 9,  111 => 8,  91 => 6,  84 => 25,  82 => 24,  78 => 22,  76 => 19,  73 => 18,  71 => 9,  67 => 8,  63 => 7,  58 => 6,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base.html.twig", "/home/ubuntu/Projects/portfolio/templates/base.html.twig");
    }
}
