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

/* projects/phase10.html.twig */
class __TwigTemplate_ce10e7bd3d20dde0c2cde31da8bcd24b extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "projects/phase10.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "projects/phase10.html.twig", 1);
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
        yield from $this->loadTemplate("header.html.twig", "projects/phase10.html.twig", 3)->unwrap()->yield($context);
        // line 4
        yield "    <section class=\"projectView\">
        <div class=\"wrapperView\">
            <div class=\"titleProject\">
                <h1 class=\"middleBaseSize\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("phase10.title"), "html", null, true);
        yield "</h1>
            </div>
            <div class=\"flex justify-center\">
                <p class=\"midMiddleBaseSize\">";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("video.soon"), "html", null, true);
        yield "</p>
            </div>
            <div class=\"wrapperVideo\">
                <video class=\"video\" controls>
                    <source src=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/video/phase10.mp4"), "html", null, true);
        yield "\" type=\"video/mp4\">
                    ";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("video.not_supported"), "html", null, true);
        yield "
                </video>
            </div>
            <div class=\"wrapperInformation\">
                <div class=\"wrapperDescription\">
                    <div class=\"align-center flex flex-column h-100\">
                        <h2 class=\"midMiddleBaseSize\">";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("description"), "html", null, true);
        yield "</h2>
                        <p class=\"smallBaseSize\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("phase10.long_description"), "html", null, true);
        yield "</p>
                    </div>
                </div>
                <div class=\"wrapperDescription\">
                    <div class=\"align-center flex flex-column h-100\">
                        <h2 class=\"midMiddleBaseSize\">";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("languages"), "html", null, true);
        yield "</h2>
                        <div class=\"flex flex-wrap justify-center\">
                            <div class=\"language\">
                                <img class=\"icon\" src=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icon/node.png"), "html", null, true);
        yield "\" alt=\"nodejs\">
                                <span class=\"flex align-center smallBaseSize\">NodeJS</span>
                            </div>
                            <div class=\"language\">
                                <img class=\"icon\" src=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icon/socket.png"), "html", null, true);
        yield "\"
                                     alt=\"socket\">
                                <span class=\"flex align-center smallBaseSize\">Socket.io</span>
                            </div>
                            <div class=\"language\">
                                <img class=\"icon\" src=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icon/angular.png"), "html", null, true);
        yield "\" alt=\"angular\">
                                <span class=\"flex align-center smallBaseSize\">Angular</span>
                            </div>
                            <div class=\"language\">
                                <img class=\"icon\" src=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icon/typescript.png"), "html", null, true);
        yield "\" alt=\"js\">
                                <span class=\"flex align-center smallBaseSize\">Typescript</span>
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

    // line 54
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 55
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 58
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 59
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
        return "projects/phase10.html.twig";
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
        return array (  192 => 59,  182 => 58,  171 => 55,  161 => 54,  143 => 43,  136 => 39,  128 => 34,  121 => 30,  115 => 27,  107 => 22,  103 => 21,  94 => 15,  90 => 14,  83 => 10,  77 => 7,  72 => 4,  69 => 3,  59 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
    {% include \"header.html.twig\" %}
    <section class=\"projectView\">
        <div class=\"wrapperView\">
            <div class=\"titleProject\">
                <h1 class=\"middleBaseSize\">{{ \"phase10.title\"|trans }}</h1>
            </div>
            <div class=\"flex justify-center\">
                <p class=\"midMiddleBaseSize\">{{ \"video.soon\"|trans }}</p>
            </div>
            <div class=\"wrapperVideo\">
                <video class=\"video\" controls>
                    <source src=\"{{ asset('assets/video/phase10.mp4') }}\" type=\"video/mp4\">
                    {{ \"video.not_supported\"|trans }}
                </video>
            </div>
            <div class=\"wrapperInformation\">
                <div class=\"wrapperDescription\">
                    <div class=\"align-center flex flex-column h-100\">
                        <h2 class=\"midMiddleBaseSize\">{{ \"description\"|trans }}</h2>
                        <p class=\"smallBaseSize\">{{ \"phase10.long_description\"|trans }}</p>
                    </div>
                </div>
                <div class=\"wrapperDescription\">
                    <div class=\"align-center flex flex-column h-100\">
                        <h2 class=\"midMiddleBaseSize\">{{ \"languages\"|trans }}</h2>
                        <div class=\"flex flex-wrap justify-center\">
                            <div class=\"language\">
                                <img class=\"icon\" src=\"{{ asset('assets/img/icon/node.png') }}\" alt=\"nodejs\">
                                <span class=\"flex align-center smallBaseSize\">NodeJS</span>
                            </div>
                            <div class=\"language\">
                                <img class=\"icon\" src=\"{{ asset('assets/img/icon/socket.png') }}\"
                                     alt=\"socket\">
                                <span class=\"flex align-center smallBaseSize\">Socket.io</span>
                            </div>
                            <div class=\"language\">
                                <img class=\"icon\" src=\"{{ asset('assets/img/icon/angular.png') }}\" alt=\"angular\">
                                <span class=\"flex align-center smallBaseSize\">Angular</span>
                            </div>
                            <div class=\"language\">
                                <img class=\"icon\" src=\"{{ asset('assets/img/icon/typescript.png') }}\" alt=\"js\">
                                <span class=\"flex align-center smallBaseSize\">Typescript</span>
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
{% endblock %}", "projects/phase10.html.twig", "/home/ubuntu/Projects/portfolio/templates/projects/phase10.html.twig");
    }
}
