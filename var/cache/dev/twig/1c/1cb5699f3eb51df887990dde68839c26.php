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

/* genre/show.html.twig */
class __TwigTemplate_0446b0aedc167a71e796fbf63317a40e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "genre/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "genre/show.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        yield "<!-- page start-->
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
                <td>";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["genre"]) || array_key_exists("genre", $context) ? $context["genre"] : (function () { throw new RuntimeError('Variable "genre" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th class=\"tableau-entete\"><i class=\"fa fa-bookmark\"></i> Libellé</th>
                <td>";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["genre"]) || array_key_exists("genre", $context) ? $context["genre"] : (function () { throw new RuntimeError('Variable "genre" does not exist.', 19, $this->source); })()), "libGenre", [], "any", false, false, false, 19), "html", null, true);
        yield "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 24
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_genre_index");
        yield "\"><button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-share\"></i></button></a>

    <a href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_genre_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["genre"]) || array_key_exists("genre", $context) ? $context["genre"] : (function () { throw new RuntimeError('Variable "genre" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26)]), "html", null, true);
        yield "\"><button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-pencil\"></i></button></a>

    ";
        // line 28
        yield Twig\Extension\CoreExtension::include($this->env, $context, "genre/_delete_form.html.twig");
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
        return "genre/show.html.twig";
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
        return array (  114 => 28,  109 => 26,  104 => 24,  96 => 19,  89 => 15,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<!-- page start-->
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
                <td>{{ genre.id }}</td>
            </tr>
            <tr>
                <th class=\"tableau-entete\"><i class=\"fa fa-bookmark\"></i> Libellé</th>
                <td>{{ genre.libGenre }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_genre_index') }}\"><button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-share\"></i></button></a>

    <a href=\"{{ path('app_genre_edit', {'id': genre.id}) }}\"><button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-pencil\"></i></button></a>

    {{ include('genre/_delete_form.html.twig') }}
    </div>
    <!-- fin div panel-body-->
    </section>
    <!-- fin section genre-->
    </div>
    <!-- fin div col-sm-8-->
{% endblock %}
", "genre/show.html.twig", "/var/www/html/AP/Agora/templates/genre/show.html.twig");
    }
}
