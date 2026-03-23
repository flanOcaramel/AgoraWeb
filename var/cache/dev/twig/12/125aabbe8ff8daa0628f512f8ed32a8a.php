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

/* plateforme/show.html.twig */
class __TwigTemplate_03c0f1fca700ba478dd6f494ae73798f extends Template
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
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "plateforme/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "plateforme/show.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Plateforme";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "<div class=\"col-sm-8\">
    <section class=\"panel\">
        <div class=\"chat-room-head\">
            <h3><i class=\"fa fa-angle-right\"></i> Créer un genre</h3>
        </div>
        <div class=\"panel-body\">

    <table class=\"table\" \"table-striped table-advance table-hover\">
        <tbody>
            <tr>
                <th class=\"tableau-entete\"><i class=\"fa fa-bullhorn\"></i> Identifier</th>
                <td>";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["plateforme"]) || array_key_exists("plateforme", $context) ? $context["plateforme"] : (function () { throw new RuntimeError('Variable "plateforme" does not exist.', 17, $this->source); })()), "id", [], "any", false, false, false, 17), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th class=\"tableau-entete\"><i class=\"fa fa-bookmark\"></i> LibPlatforme</th>
                <td>";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["plateforme"]) || array_key_exists("plateforme", $context) ? $context["plateforme"] : (function () { throw new RuntimeError('Variable "plateforme" does not exist.', 21, $this->source); })()), "libPlatforme", [], "any", false, false, false, 21), "html", null, true);
        yield "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_plateforme_index");
        yield "\"><button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-share\"></i></button></a>

    <a href=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_plateforme_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["plateforme"]) || array_key_exists("plateforme", $context) ? $context["plateforme"] : (function () { throw new RuntimeError('Variable "plateforme" does not exist.', 28, $this->source); })()), "id", [], "any", false, false, false, 28)]), "html", null, true);
        yield "\"><button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-pencil\"></i></button></a>

    ";
        // line 30
        yield Twig\Extension\CoreExtension::include($this->env, $context, "plateforme/_delete_form.html.twig");
        yield "
    </div>
    <!-- fin div panel-body-->
    </section>
    <!-- fin section genre-->
    </div>
    <!-- fin div col-sm-8-->
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
        return "plateforme/show.html.twig";
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
        return array (  138 => 30,  133 => 28,  128 => 26,  120 => 21,  113 => 17,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Plateforme{% endblock %}

{% block body %}
<div class=\"col-sm-8\">
    <section class=\"panel\">
        <div class=\"chat-room-head\">
            <h3><i class=\"fa fa-angle-right\"></i> Créer un genre</h3>
        </div>
        <div class=\"panel-body\">

    <table class=\"table\" \"table-striped table-advance table-hover\">
        <tbody>
            <tr>
                <th class=\"tableau-entete\"><i class=\"fa fa-bullhorn\"></i> Identifier</th>
                <td>{{ plateforme.id }}</td>
            </tr>
            <tr>
                <th class=\"tableau-entete\"><i class=\"fa fa-bookmark\"></i> LibPlatforme</th>
                <td>{{ plateforme.libPlatforme }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_plateforme_index') }}\"><button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-share\"></i></button></a>

    <a href=\"{{ path('app_plateforme_edit', {'id': plateforme.id}) }}\"><button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-pencil\"></i></button></a>

    {{ include('plateforme/_delete_form.html.twig') }}
    </div>
    <!-- fin div panel-body-->
    </section>
    <!-- fin section genre-->
    </div>
    <!-- fin div col-sm-8-->
{% endblock %}
", "plateforme/show.html.twig", "/var/www/html/AP/Agora/templates/plateforme/show.html.twig");
    }
}
