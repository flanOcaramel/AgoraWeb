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

/* genre/index.html.twig */
class __TwigTemplate_ab8e1e0b955fe9d664cc74954d14bdc0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "genre/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "genre/index.html.twig"));

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
            <h3><i class=\"fa fa-angle-right\"></i> Gérer les genres</h3>
        </div>
        <div class=\"panel-body\">
            <table class=\"table table-striped table-advance table-hover\">
                <thead>
                    <tr class=\"tableau-entete\">
                        <th><i class=\"fa fa-bullhorn\"></i> Id</th>
                        <th><i class=\"fa fa-bookmark\"></i> Libellé</th>
                        <th><i class=\"fa fa-gamepad\"></i>Jeux</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["genres"]) || array_key_exists("genres", $context) ? $context["genres"] : (function () { throw new RuntimeError('Variable "genres" does not exist.', 21, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
            // line 22
            yield "                        <tr>
                            <td>";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["genre"], "id", [], "any", false, false, false, 23), "html", null, true);
            yield "</td>
                            <td>";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["genre"], "libGenre", [], "any", false, false, false, 24), "html", null, true);
            yield "</td>
                            <td>
                                ";
            // line 26
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["genre"], "jeuVideos", [], "any", false, false, false, 26))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 27
                yield "                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["genre"], "jeuVideos", [], "any", false, false, false, 27));
                foreach ($context['_seq'] as $context["_key"] => $context["jeuVideo"]) {
                    // line 28
                    yield "                                        <span class=\"badge bg-info text-dark\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["jeuVideo"], "nom", [], "any", false, false, false, 28), "html", null, true);
                    yield "</span>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['jeuVideo'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                yield "                                ";
            } else {
                // line 31
                yield "                                    <span class=\"badge bg-warning text-dark\">Aucun jeu</span>
                                ";
            }
            // line 33
            yield "                            </td>
                            <td>
                                <a href=\"";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_genre_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["genre"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            yield "\"><button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-tasks\"></i></button></a>
                                <a href=\"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_genre_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["genre"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            yield "\"><button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-pencil\"></i></button></a>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 39
        if (!$context['_iterated']) {
            // line 40
            yield "                        <tr>
                            <td colspan=\"4\">Aucun genre enregistré en base de données</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['genre'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        yield "                </tbody>
            </table>

            <a href=\"";
        // line 47
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_genre_new");
        yield "\"><button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-plus\"></i></button></a>
        </div>
        <!-- fin div panel body-->
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
        return "genre/index.html.twig";
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
        return array (  167 => 47,  162 => 44,  153 => 40,  151 => 39,  143 => 36,  139 => 35,  135 => 33,  131 => 31,  128 => 30,  119 => 28,  114 => 27,  112 => 26,  107 => 24,  103 => 23,  100 => 22,  95 => 21,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<!-- page start-->
<div class=\"col-sm-8\">
    <section class=\"panel\">
        <div class=\"chat-room-head\">
            <h3><i class=\"fa fa-angle-right\"></i> Gérer les genres</h3>
        </div>
        <div class=\"panel-body\">
            <table class=\"table table-striped table-advance table-hover\">
                <thead>
                    <tr class=\"tableau-entete\">
                        <th><i class=\"fa fa-bullhorn\"></i> Id</th>
                        <th><i class=\"fa fa-bookmark\"></i> Libellé</th>
                        <th><i class=\"fa fa-gamepad\"></i>Jeux</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for genre in genres %}
                        <tr>
                            <td>{{ genre.id }}</td>
                            <td>{{ genre.libGenre }}</td>
                            <td>
                                {% if genre.jeuVideos is not empty %}
                                    {% for jeuVideo in genre.jeuVideos %}
                                        <span class=\"badge bg-info text-dark\">{{ jeuVideo.nom }}</span>
                                    {% endfor %}
                                {% else %}
                                    <span class=\"badge bg-warning text-dark\">Aucun jeu</span>
                                {% endif %}
                            </td>
                            <td>
                                <a href=\"{{ path('app_genre_show', {'id': genre.id}) }}\"><button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-tasks\"></i></button></a>
                                <a href=\"{{ path('app_genre_edit', {'id': genre.id}) }}\"><button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-pencil\"></i></button></a>
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"4\">Aucun genre enregistré en base de données</td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>

            <a href=\"{{ path('app_genre_new') }}\"><button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-plus\"></i></button></a>
        </div>
        <!-- fin div panel body-->
    </section>
    <!-- fin section genre-->
</div>
<!-- fin div col-sm-8-->
{% endblock %}
", "genre/index.html.twig", "/var/www/html/AP/Agora/templates/genre/index.html.twig");
    }
}
