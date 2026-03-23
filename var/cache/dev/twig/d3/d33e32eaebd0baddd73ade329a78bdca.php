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

/* tournoi_stat/sql.html.twig */
class __TwigTemplate_3527a32b59d07c1e865b4c518954cdb0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tournoi_stat/sql.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tournoi_stat/sql.html.twig"));

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

        yield "Statistiques ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 3, $this->source); })()), "html", null, true);
        
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
        yield "
<div class=\"col-sm-8\">

<section class=\"panel\">

<div class=\"chat-room-head\">

<h3>

<i class=\"fa fa-database\"></i> Dashboard Tournois avec ";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 15, $this->source); })()), "html", null, true);
        yield "

</h3>

</div>

<div class=\"panel-body\">

<form method=\"get\" action=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "request", [], "any", false, false, false, 23), "pathinfo", [], "any", false, false, false, 23), "html", null, true);
        yield "\" class=\"mb-3\">

<label for=\"datemax\">Afficher les tournois après le :</label>

<input type=\"date\" name=\"datemax\" id=\"datemax\" value=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["datemax"]) || array_key_exists("datemax", $context) ? $context["datemax"] : (function () { throw new RuntimeError('Variable "datemax" does not exist.', 27, $this->source); })()), "html", null, true);
        yield "\" />

<button type=\"submit\" class=\"btn btn-primary btn-sm\">Filtrer</button>

</form>

<table class=\"table table-striped table-advance table-hover\">

<thead>

<tr>

<th>Libellé</th>

<th>Catégorie</th>

<th>Date</th>

</tr>

</thead>

<tbody>

";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 51, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 52
            yield "
<tr>

<td>";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "libelle", [], "any", false, false, false, 55), "html", null, true);
            yield "</td>

<td>";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "categorie", [], "any", false, false, false, 57), "html", null, true);
            yield "</td>

<td>";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "date", [], "any", false, false, false, 59), "html", null, true);
            yield "</td>

</tr>

";
            $context['_iterated'] = true;
        }
        // line 63
        if (!$context['_iterated']) {
            // line 64
            yield "
<tr>

<td colspan=\"3\"><em>Aucun tournoi trouvé après ";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["datemax"]) || array_key_exists("datemax", $context) ? $context["datemax"] : (function () { throw new RuntimeError('Variable "datemax" does not exist.', 67, $this->source); })()), "html", null, true);
            yield "</em></td>

</tr>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['t'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        yield "
</tbody>

</table>

</div>

</section>

</div>

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
        return "tournoi_stat/sql.html.twig";
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
        return array (  204 => 72,  193 => 67,  188 => 64,  186 => 63,  177 => 59,  172 => 57,  167 => 55,  162 => 52,  157 => 51,  130 => 27,  123 => 23,  112 => 15,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Statistiques {{ mode }}{% endblock %}

{% block body %}

<div class=\"col-sm-8\">

<section class=\"panel\">

<div class=\"chat-room-head\">

<h3>

<i class=\"fa fa-database\"></i> Dashboard Tournois avec {{ mode }}

</h3>

</div>

<div class=\"panel-body\">

<form method=\"get\" action=\"{{ app.request.pathinfo }}\" class=\"mb-3\">

<label for=\"datemax\">Afficher les tournois après le :</label>

<input type=\"date\" name=\"datemax\" id=\"datemax\" value=\"{{ datemax }}\" />

<button type=\"submit\" class=\"btn btn-primary btn-sm\">Filtrer</button>

</form>

<table class=\"table table-striped table-advance table-hover\">

<thead>

<tr>

<th>Libellé</th>

<th>Catégorie</th>

<th>Date</th>

</tr>

</thead>

<tbody>

{% for t in stats %}

<tr>

<td>{{ t.libelle }}</td>

<td>{{ t.categorie }}</td>

<td>{{ t.date }}</td>

</tr>

{% else %}

<tr>

<td colspan=\"3\"><em>Aucun tournoi trouvé après {{ datemax }}</em></td>

</tr>

{% endfor %}

</tbody>

</table>

</div>

</section>

</div>

{% endblock %}

", "tournoi_stat/sql.html.twig", "/var/www/html/AP/Agora/templates/tournoi_stat/sql.html.twig");
    }
}
