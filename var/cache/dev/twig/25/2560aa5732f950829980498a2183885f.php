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

/* participant/index.html.twig */
class __TwigTemplate_33bc25cb43ea517fa654ce2bd3653bca extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "participant/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "participant/index.html.twig"));

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
            <h3><i class=\"fa fa-angle-right\"></i> Gérer les participants</h3>
        </div>
        <div class=\"panel-body\">
            <table class=\"table table-striped table-advance table-hover\">
                <thead>
                    <tr class=\"tableau-entete\">
                        <th><i class=\"fa fa-bullhorn\"></i>Id</th>
                        <th><i class=\"fa fa-bookmark\"></i>Prénom</th>
                        <th><i class=\"fa fa-bookmark\"></i>Nom</th>
                        <th><i class=\"fa fa-phone\"></i>Téléphone</th>
                        <th><i class=\"fa fa-envelope\"></i>Email</th>
                        <th><i class=\"fa fa-gamepad\"></i>Tournois</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["participants"]) || array_key_exists("participants", $context) ? $context["participants"] : (function () { throw new RuntimeError('Variable "participants" does not exist.', 24, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["participant"]) {
            // line 25
            yield "                        <tr>
                            <td>";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "id", [], "any", false, false, false, 26), "html", null, true);
            yield "</td>
                            <td>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "prenom", [], "any", false, false, false, 27), "html", null, true);
            yield "</td>
                            <td>";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "nom", [], "any", false, false, false, 28), "html", null, true);
            yield "</td>
                            <td>";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "telephone", [], "any", false, false, false, 29), "html", null, true);
            yield "</td>
                            <td>";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "email", [], "any", false, false, false, 30), "html", null, true);
            yield "</td>
                            <td>
                                ";
            // line 32
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "tournois", [], "any", false, false, false, 32))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 33
                yield "                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "tournois", [], "any", false, false, false, 33));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["tournoi"]) {
                    // line 34
                    yield "                                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tournoi"], "libelle", [], "any", false, false, false, 34), "html", null, true);
                    if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 34)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield ", ";
                    }
                    // line 35
                    yield "                                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['tournoi'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                yield "                                ";
            } else {
                // line 37
                yield "                                    -
                                ";
            }
            // line 39
            yield "                            </td>
                            <td>
                                <a href=\"";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participant_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            yield "\"><button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-tasks\"></i></button></a>
                                <a href=\"";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participant_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            yield "\"><button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-pencil\"></i></button></a>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 45
        if (!$context['_iterated']) {
            // line 46
            yield "                        <tr>
                            <td colspan=\"7\">Aucun participant enregistré en base de données</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['participant'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        yield "                </tbody>
            </table>

            <a href=\"";
        // line 53
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participant_new");
        yield "\"><button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-plus\"></i></button></a>
        </div>
    </section>
</div>
<!-- fin div col-sm-8-->
<!-- fin page-->
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
        return "participant/index.html.twig";
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
        return array (  206 => 53,  201 => 50,  192 => 46,  190 => 45,  182 => 42,  178 => 41,  174 => 39,  170 => 37,  167 => 36,  153 => 35,  147 => 34,  129 => 33,  127 => 32,  122 => 30,  118 => 29,  114 => 28,  110 => 27,  106 => 26,  103 => 25,  98 => 24,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<!-- page start-->
<div class=\"col-sm-8\">
    <section class=\"panel\">
        <div class=\"chat-room-head\">
            <h3><i class=\"fa fa-angle-right\"></i> Gérer les participants</h3>
        </div>
        <div class=\"panel-body\">
            <table class=\"table table-striped table-advance table-hover\">
                <thead>
                    <tr class=\"tableau-entete\">
                        <th><i class=\"fa fa-bullhorn\"></i>Id</th>
                        <th><i class=\"fa fa-bookmark\"></i>Prénom</th>
                        <th><i class=\"fa fa-bookmark\"></i>Nom</th>
                        <th><i class=\"fa fa-phone\"></i>Téléphone</th>
                        <th><i class=\"fa fa-envelope\"></i>Email</th>
                        <th><i class=\"fa fa-gamepad\"></i>Tournois</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for participant in participants %}
                        <tr>
                            <td>{{ participant.id }}</td>
                            <td>{{ participant.prenom }}</td>
                            <td>{{ participant.nom }}</td>
                            <td>{{ participant.telephone }}</td>
                            <td>{{ participant.email }}</td>
                            <td>
                                {% if participant.tournois is not empty %}
                                    {% for tournoi in participant.tournois %}
                                        {{ tournoi.libelle }}{% if not loop.last %}, {% endif %}
                                    {% endfor %}
                                {% else %}
                                    -
                                {% endif %}
                            </td>
                            <td>
                                <a href=\"{{ path('app_participant_show', {'id': participant.id}) }}\"><button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-tasks\"></i></button></a>
                                <a href=\"{{ path('app_participant_edit', {'id': participant.id}) }}\"><button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-pencil\"></i></button></a>
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"7\">Aucun participant enregistré en base de données</td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>

            <a href=\"{{ path('app_participant_new') }}\"><button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-plus\"></i></button></a>
        </div>
    </section>
</div>
<!-- fin div col-sm-8-->
<!-- fin page-->
{% endblock %}
", "participant/index.html.twig", "/var/www/html/AP/Agora/templates/participant/index.html.twig");
    }
}
