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

/* projects/spotify.html.twig */
class __TwigTemplate_482fde98eb1535e5cffcee704515ed90 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "projects/spotify.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "projects/spotify.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        yield "    ";
        yield from $this->loadTemplate("header.html.twig", "projects/spotify.html.twig", 3)->unwrap()->yield($context);
        // line 4
        yield "    <section class=\"projectView\">
        <div class=\"wrapperView\">
            <div class=\"titleProject\">
                <h1 class=\"middleBaseSize\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("spotify.title"), "html", null, true);
        yield "</h1>
            </div>
            <div class=\"wrapperVideo\">
                <video class=\"video\" controls>
                    <source src=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/video/spotify.mp4"), "html", null, true);
        yield "\" type=\"video/mp4\">
                    ";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("video.not_supported"), "html", null, true);
        yield "
                </video>
            </div>
            <div class=\"wrapperInformation\">
                <div class=\"wrapperDescription\">
                    <div class=\"align-center flex flex-column h-100\">
                        <h2 class=\"midMiddleBaseSize\">";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("description"), "html", null, true);
        yield "</h2>
                        <p class=\"smallBaseSize\">";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("spotify.long_description"), "html", null, true);
        yield "</p>
                    </div>
                </div>
                <div class=\"wrapperDescription\">
                    <div class=\"align-center flex flex-column h-100\">
                        <h2 class=\"midMiddleBaseSize\">";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("languages"), "html", null, true);
        yield "</h2>
                        <div class=\"flex flex-wrap justify-center\">
                            <div class=\"language\">
                                <img class=\"icon\" src=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icon/dark-symfony.png"), "html", null, true);
        yield "\" alt=\"symfony\">
                                <span class=\"flex align-center smallBaseSize\">Symfony</span>
                            </div>
                            <div class=\"language\">
                                <img class=\"icon\" src=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icon/bootstrap.png"), "html", null, true);
        yield "\"
                                     alt=\"bootstrap\">
                                <span class=\"flex align-center smallBaseSize\">Bootstrap</span>
                            </div>
                            <div class=\"language\">
                                <img class=\"icon\" src=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icon/twig.png"), "html", null, true);
        yield "\" alt=\"twig\">
                                <span class=\"flex align-center smallBaseSize\">Twig</span>
                            </div>
                            <div class=\"language\">
                                <img class=\"icon\" src=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icon/scss.png"), "html", null, true);
        yield "\" alt=\"sass\">
                                <span class=\"flex align-center smallBaseSize\">SASS</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 51
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 52
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 55
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 56
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "projects/spotify.html.twig";
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
        return array (  186 => 56,  176 => 55,  165 => 52,  155 => 51,  137 => 40,  130 => 36,  122 => 31,  115 => 27,  109 => 24,  101 => 19,  97 => 18,  88 => 12,  84 => 11,  77 => 7,  72 => 4,  69 => 3,  59 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
    {% include \"header.html.twig\" %}
    <section class=\"projectView\">
        <div class=\"wrapperView\">
            <div class=\"titleProject\">
                <h1 class=\"middleBaseSize\">{{ \"spotify.title\"|trans }}</h1>
            </div>
            <div class=\"wrapperVideo\">
                <video class=\"video\" controls>
                    <source src=\"{{ asset('assets/video/spotify.mp4') }}\" type=\"video/mp4\">
                    {{ \"video.not_supported\"|trans }}
                </video>
            </div>
            <div class=\"wrapperInformation\">
                <div class=\"wrapperDescription\">
                    <div class=\"align-center flex flex-column h-100\">
                        <h2 class=\"midMiddleBaseSize\">{{ \"description\"|trans }}</h2>
                        <p class=\"smallBaseSize\">{{ \"spotify.long_description\"|trans }}</p>
                    </div>
                </div>
                <div class=\"wrapperDescription\">
                    <div class=\"align-center flex flex-column h-100\">
                        <h2 class=\"midMiddleBaseSize\">{{ \"languages\"|trans }}</h2>
                        <div class=\"flex flex-wrap justify-center\">
                            <div class=\"language\">
                                <img class=\"icon\" src=\"{{ asset('assets/img/icon/dark-symfony.png') }}\" alt=\"symfony\">
                                <span class=\"flex align-center smallBaseSize\">Symfony</span>
                            </div>
                            <div class=\"language\">
                                <img class=\"icon\" src=\"{{ asset('assets/img/icon/bootstrap.png') }}\"
                                     alt=\"bootstrap\">
                                <span class=\"flex align-center smallBaseSize\">Bootstrap</span>
                            </div>
                            <div class=\"language\">
                                <img class=\"icon\" src=\"{{ asset('assets/img/icon/twig.png') }}\" alt=\"twig\">
                                <span class=\"flex align-center smallBaseSize\">Twig</span>
                            </div>
                            <div class=\"language\">
                                <img class=\"icon\" src=\"{{ asset('assets/img/icon/scss.png') }}\" alt=\"sass\">
                                <span class=\"flex align-center smallBaseSize\">SASS</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
{% endblock %}

{% block stylesheets %}
    {{ parent() }}
{% endblock %}", "projects/spotify.html.twig", "/home/ubuntu/Projects/portfolio/templates/projects/spotify.html.twig");
    }
}
