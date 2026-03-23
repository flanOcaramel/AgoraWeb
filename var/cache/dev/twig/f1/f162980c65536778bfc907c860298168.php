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

/* cat_tournois/index.html.twig */
class __TwigTemplate_961db3877d79a9218ef776cce9fce7d3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cat_tournois/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cat_tournois/index.html.twig"));

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
            <h3><i class=\"fa fa-angle-right\"></i> Gérer les catégories tournois</h3>
        </div>
        <div class=\"panel-body\">
            <table class=\"table table-striped table-advance table-hover\">
                <thead>
                    <tr class=\"tableau-entete\">
                        <th><i class=\"fa fa-bullhorn\"></i>Id</th>
                        <th><i class=\"fa fa-bookmark\"></i>Libellé</th>
                        <th><i class=\"fa fa-gamepad\"></i>Tournois</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["cat_tournois"]) || array_key_exists("cat_tournois", $context) ? $context["cat_tournois"] : (function () { throw new RuntimeError('Variable "cat_tournois" does not exist.', 20, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["cat_tournoi"]) {
            // line 21
            yield "                        <tr>
                            <td>";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cat_tournoi"], "id", [], "any", false, false, false, 22), "html", null, true);
            yield "</td>
                            <td>";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cat_tournoi"], "libelle", [], "any", false, false, false, 23), "html", null, true);
            yield "</td>
                            <td>
                                ";
            // line 25
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["cat_tournoi"], "tournois", [], "any", false, false, false, 25))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 26
                yield "                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["cat_tournoi"], "tournois", [], "any", false, false, false, 26));
                foreach ($context['_seq'] as $context["_key"] => $context["tournoi"]) {
                    // line 27
                    yield "                                        <span class=\"badge bg-info text-dark\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tournoi"], "libelle", [], "any", false, false, false, 27), "html", null, true);
                    yield "</span>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['tournoi'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 29
                yield "                                ";
            } else {
                // line 30
                yield "                                    <span class=\"badge bg-warning text-dark\">Aucun tournoi</span>
                                ";
            }
            // line 32
            yield "                            </td>
                            <td>
                                <a href=\"";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cat_tournois_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["cat_tournoi"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            yield "\"><button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-tasks\"></i></button></a>
                                <a href=\"";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cat_tournois_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["cat_tournoi"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            yield "\"><button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-pencil\"></i></button></a>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 38
        if (!$context['_iterated']) {
            // line 39
            yield "                        <tr>
                            <td colspan=\"4\">Aucune catégorie de tournois enregistrée en base de données</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['cat_tournoi'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        yield "                </tbody>
            </table>

            <a href=\"";
        // line 46
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cat_tournois_new");
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
        return "cat_tournois/index.html.twig";
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
        return array (  166 => 46,  161 => 43,  152 => 39,  150 => 38,  142 => 35,  138 => 34,  134 => 32,  130 => 30,  127 => 29,  118 => 27,  113 => 26,  111 => 25,  106 => 23,  102 => 22,  99 => 21,  94 => 20,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"col-sm-8\">
    <section class=\"panel\">
        <div class=\"chat-room-head\">
            <h3><i class=\"fa fa-angle-right\"></i> Gérer les catégories tournois</h3>
        </div>
        <div class=\"panel-body\">
            <table class=\"table table-striped table-advance table-hover\">
                <thead>
                    <tr class=\"tableau-entete\">
                        <th><i class=\"fa fa-bullhorn\"></i>Id</th>
                        <th><i class=\"fa fa-bookmark\"></i>Libellé</th>
                        <th><i class=\"fa fa-gamepad\"></i>Tournois</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for cat_tournoi in cat_tournois %}
                        <tr>
                            <td>{{ cat_tournoi.id }}</td>
                            <td>{{ cat_tournoi.libelle }}</td>
                            <td>
                                {% if cat_tournoi.tournois is not empty %}
                                    {% for tournoi in cat_tournoi.tournois %}
                                        <span class=\"badge bg-info text-dark\">{{ tournoi.libelle }}</span>
                                    {% endfor %}
                                {% else %}
                                    <span class=\"badge bg-warning text-dark\">Aucun tournoi</span>
                                {% endif %}
                            </td>
                            <td>
                                <a href=\"{{ path('app_cat_tournois_show', {'id': cat_tournoi.id}) }}\"><button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-tasks\"></i></button></a>
                                <a href=\"{{ path('app_cat_tournois_edit', {'id': cat_tournoi.id}) }}\"><button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-pencil\"></i></button></a>
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"4\">Aucune catégorie de tournois enregistrée en base de données</td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>

            <a href=\"{{ path('app_cat_tournois_new') }}\"><button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-plus\"></i></button></a>
        </div>
    </section>
</div>
{% endblock %}
", "cat_tournois/index.html.twig", "/var/www/html/AP/Agora/templates/cat_tournois/index.html.twig");
    }
}
