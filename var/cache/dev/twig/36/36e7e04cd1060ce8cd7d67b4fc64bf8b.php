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

/* participant/show.html.twig */
class __TwigTemplate_d1443b357d6095e72138f00adbbe1591 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "participant/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "participant/show.html.twig"));

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
            <h3><i class=\"fa fa-angle-right\"></i> Détails du participant</h3>
        </div>
        <div class=\"panel-body\">

    <table class=\"table table-striped\">
        <tbody>
            <tr>
                <th><i class=\"fa fa-bullhorn\"></i> Id</th>
                <td>";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["participant"]) || array_key_exists("participant", $context) ? $context["participant"] : (function () { throw new RuntimeError('Variable "participant" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th><i class=\"fa fa-user\"></i> Prénom</th>
                <td>";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["participant"]) || array_key_exists("participant", $context) ? $context["participant"] : (function () { throw new RuntimeError('Variable "participant" does not exist.', 19, $this->source); })()), "prenom", [], "any", false, false, false, 19), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th><i class=\"fa fa-user\"></i> Nom</th>
                <td>";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["participant"]) || array_key_exists("participant", $context) ? $context["participant"] : (function () { throw new RuntimeError('Variable "participant" does not exist.', 23, $this->source); })()), "nom", [], "any", false, false, false, 23), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th><i class=\"fa fa-phone\"></i> Téléphone</th>
                <td>";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["participant"]) || array_key_exists("participant", $context) ? $context["participant"] : (function () { throw new RuntimeError('Variable "participant" does not exist.', 27, $this->source); })()), "telephone", [], "any", false, false, false, 27), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th><i class=\"fa fa-envelope\"></i> Email</th>
                <td>";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["participant"]) || array_key_exists("participant", $context) ? $context["participant"] : (function () { throw new RuntimeError('Variable "participant" does not exist.', 31, $this->source); })()), "email", [], "any", false, false, false, 31), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th><i class=\"fa fa-gamepad\"></i> Tournois</th>
                <td>
                ";
        // line 36
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["participant"]) || array_key_exists("participant", $context) ? $context["participant"] : (function () { throw new RuntimeError('Variable "participant" does not exist.', 36, $this->source); })()), "tournois", [], "any", false, false, false, 36))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 37
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["participant"]) || array_key_exists("participant", $context) ? $context["participant"] : (function () { throw new RuntimeError('Variable "participant" does not exist.', 37, $this->source); })()), "tournois", [], "any", false, false, false, 37));
            foreach ($context['_seq'] as $context["_key"] => $context["tournoi"]) {
                // line 38
                yield "                        <span class=\"badge bg-info text-dark\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tournoi"], "libelle", [], "any", false, false, false, 38), "html", null, true);
                yield "</span>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['tournoi'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            yield "                ";
        } else {
            // line 41
            yield "                    <span class=\"badge bg-warning text-dark\">Aucun tournoi</span>
                ";
        }
        // line 43
        yield "                </td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 48
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participant_index");
        yield "\"><button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-share\"></i></button></a>

    <a href=\"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participant_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["participant"]) || array_key_exists("participant", $context) ? $context["participant"] : (function () { throw new RuntimeError('Variable "participant" does not exist.', 50, $this->source); })()), "id", [], "any", false, false, false, 50)]), "html", null, true);
        yield "\"><button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-pencil\"></i></button></a>

    ";
        // line 52
        yield Twig\Extension\CoreExtension::include($this->env, $context, "participant/_delete_form.html.twig");
        yield "
    </div>
    <!-- fin du div panel-body-->
    </section>
    <!-- fin section participant-->
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
        return "participant/show.html.twig";
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
        return array (  165 => 52,  160 => 50,  155 => 48,  148 => 43,  144 => 41,  141 => 40,  132 => 38,  127 => 37,  125 => 36,  117 => 31,  110 => 27,  103 => 23,  96 => 19,  89 => 15,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"col-sm-8\">
    <section class=\"panel\">
        <div class=\"chat-room-head\">
            <h3><i class=\"fa fa-angle-right\"></i> Détails du participant</h3>
        </div>
        <div class=\"panel-body\">

    <table class=\"table table-striped\">
        <tbody>
            <tr>
                <th><i class=\"fa fa-bullhorn\"></i> Id</th>
                <td>{{ participant.id }}</td>
            </tr>
            <tr>
                <th><i class=\"fa fa-user\"></i> Prénom</th>
                <td>{{ participant.prenom }}</td>
            </tr>
            <tr>
                <th><i class=\"fa fa-user\"></i> Nom</th>
                <td>{{ participant.nom }}</td>
            </tr>
            <tr>
                <th><i class=\"fa fa-phone\"></i> Téléphone</th>
                <td>{{ participant.telephone }}</td>
            </tr>
            <tr>
                <th><i class=\"fa fa-envelope\"></i> Email</th>
                <td>{{ participant.email }}</td>
            </tr>
            <tr>
                <th><i class=\"fa fa-gamepad\"></i> Tournois</th>
                <td>
                {% if participant.tournois is not empty %}
                    {% for tournoi in participant.tournois %}
                        <span class=\"badge bg-info text-dark\">{{ tournoi.libelle }}</span>
                    {% endfor %}
                {% else %}
                    <span class=\"badge bg-warning text-dark\">Aucun tournoi</span>
                {% endif %}
                </td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_participant_index') }}\"><button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-share\"></i></button></a>

    <a href=\"{{ path('app_participant_edit', {'id': participant.id}) }}\"><button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-pencil\"></i></button></a>

    {{ include('participant/_delete_form.html.twig') }}
    </div>
    <!-- fin du div panel-body-->
    </section>
    <!-- fin section participant-->
    </div>
    <!-- fin div col-sm-8-->
{% endblock %}
", "participant/show.html.twig", "/var/www/html/AP/Agora/templates/participant/show.html.twig");
    }
}
