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

/* pegi/index.html.twig */
class __TwigTemplate_665d980ee85c8926b3cefe8b9a94cf1e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pegi/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pegi/index.html.twig"));

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
        yield "<div class=\"col-sm-8\">
    <section class=\"panel\">
        <div class=\"chat-room-head\">
            <h3><i class=\"fa fa-angle-right\"></i> Gérer les catégories pegis</h3>
        </div>
        <div class=\"panel-body\">
    <table class=\"table\" \"table-striped table-advance table-hiver\">
        <thead>
            <tr class=\"tableau-entete\">
                <th><i class=\"fa fa-bullhorn\"></id>Id</th>
                <th><i class=\"fa fa-bookmark\"></i>AgeLimite</th>
                <th><i class=\"fa fa-bookmark\"></i>DescPegi</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pegis"]) || array_key_exists("pegis", $context) ? $context["pegis"] : (function () { throw new RuntimeError('Variable "pegis" does not exist.', 20, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["pegi"]) {
            // line 21
            yield "            <tr>
                <td>";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pegi"], "id", [], "any", false, false, false, 22), "html", null, true);
            yield "</td>
                <td>";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pegi"], "ageLimite", [], "any", false, false, false, 23), "html", null, true);
            yield "</td>
                <td>";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pegi"], "descPegi", [], "any", false, false, false, 24), "html", null, true);
            yield "</td>
                <td>
                    <a href=\"";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pegi_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["pegi"], "id", [], "any", false, false, false, 26)]), "html", null, true);
            yield "\"><button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-tasks\"></i></button></a>
                    <a href=\"";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pegi_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["pegi"], "id", [], "any", false, false, false, 27)]), "html", null, true);
            yield "\"><button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-pencil\"></i></button></a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        // line 30
        if (!$context['_iterated']) {
            // line 31
            yield "            <tr>
                <td colspan=\"4\">aucun pegi enregistré en base de données</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['pegi'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        yield "        </tbody>
    </table>

    <a href=\"";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pegi_new");
        yield "\"><button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-plus\"></i></button></a>
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
        return "pegi/index.html.twig";
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
        return array (  143 => 38,  138 => 35,  129 => 31,  127 => 30,  119 => 27,  115 => 26,  110 => 24,  106 => 23,  102 => 22,  99 => 21,  94 => 20,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"col-sm-8\">
    <section class=\"panel\">
        <div class=\"chat-room-head\">
            <h3><i class=\"fa fa-angle-right\"></i> Gérer les catégories pegis</h3>
        </div>
        <div class=\"panel-body\">
    <table class=\"table\" \"table-striped table-advance table-hiver\">
        <thead>
            <tr class=\"tableau-entete\">
                <th><i class=\"fa fa-bullhorn\"></id>Id</th>
                <th><i class=\"fa fa-bookmark\"></i>AgeLimite</th>
                <th><i class=\"fa fa-bookmark\"></i>DescPegi</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        {% for pegi in pegis %}
            <tr>
                <td>{{ pegi.id }}</td>
                <td>{{ pegi.ageLimite }}</td>
                <td>{{ pegi.descPegi }}</td>
                <td>
                    <a href=\"{{ path('app_pegi_show', {'id': pegi.id}) }}\"><button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-tasks\"></i></button></a>
                    <a href=\"{{ path('app_pegi_edit', {'id': pegi.id}) }}\"><button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-pencil\"></i></button></a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"4\">aucun pegi enregistré en base de données</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_pegi_new') }}\"><button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-plus\"></i></button></a>
    </div>
</section>
</div>
{% endblock %}
", "pegi/index.html.twig", "/var/www/html/AP/Agora/templates/pegi/index.html.twig");
    }
}
