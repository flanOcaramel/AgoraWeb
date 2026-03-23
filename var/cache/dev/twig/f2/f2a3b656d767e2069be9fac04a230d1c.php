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

/* plateforme/index.html.twig */
class __TwigTemplate_f80dafe31be11ff161f6a82f4ee90c37 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "plateforme/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "plateforme/index.html.twig"));

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
            <h3><i class=\"fa fa-angle-right\"></i> Gérer les catégories plateformes</h3>
        </div>
        <div class=\"panel-body\">
            <table class=\"table table-striped table-advance table-hover\">
                <thead>
                    <tr class=\"tableau-entete\">
                        <th><i class=\"fa fa-bullhorn\"></i>Id</th>
                        <th><i class=\"fa fa-bookmark\"></i>Libellé</th>
                        <th><i class=\"fa fa-gamepad\"></i>Jeux</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["plateformes"]) || array_key_exists("plateformes", $context) ? $context["plateformes"] : (function () { throw new RuntimeError('Variable "plateformes" does not exist.', 20, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["plateforme"]) {
            // line 21
            yield "                        <tr>
                            <td>";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plateforme"], "id", [], "any", false, false, false, 22), "html", null, true);
            yield "</td>
                            <td>";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plateforme"], "libPlatforme", [], "any", false, false, false, 23), "html", null, true);
            yield "</td>
                            <td>
                                ";
            // line 25
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["plateforme"], "jeuVideos", [], "any", false, false, false, 25))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 26
                yield "                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["plateforme"], "jeuVideos", [], "any", false, false, false, 26));
                foreach ($context['_seq'] as $context["_key"] => $context["jeuVideo"]) {
                    // line 27
                    yield "                                        <span class=\"badge bg-info text-dark\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["jeuVideo"], "nom", [], "any", false, false, false, 27), "html", null, true);
                    yield "</span>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['jeuVideo'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 29
                yield "                                ";
            } else {
                // line 30
                yield "                                    <span class=\"badge bg-warning text-dark\">Aucun jeu</span>
                                ";
            }
            // line 32
            yield "                            </td>
                            <td>
                                <a href=\"";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_plateforme_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["plateforme"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            yield "\"><button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-tasks\"></i></button></a>
                                <a href=\"";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_plateforme_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["plateforme"], "id", [], "any", false, false, false, 35)]), "html", null, true);
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
                            <td colspan=\"4\">Aucune plateforme enregistrée en base de données</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['plateforme'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        yield "                </tbody>
            </table>

            <a href=\"";
        // line 46
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_plateforme_new");
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
        return "plateforme/index.html.twig";
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
            <h3><i class=\"fa fa-angle-right\"></i> Gérer les catégories plateformes</h3>
        </div>
        <div class=\"panel-body\">
            <table class=\"table table-striped table-advance table-hover\">
                <thead>
                    <tr class=\"tableau-entete\">
                        <th><i class=\"fa fa-bullhorn\"></i>Id</th>
                        <th><i class=\"fa fa-bookmark\"></i>Libellé</th>
                        <th><i class=\"fa fa-gamepad\"></i>Jeux</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for plateforme in plateformes %}
                        <tr>
                            <td>{{ plateforme.id }}</td>
                            <td>{{ plateforme.libPlatforme }}</td>
                            <td>
                                {% if plateforme.jeuVideos is not empty %}
                                    {% for jeuVideo in plateforme.jeuVideos %}
                                        <span class=\"badge bg-info text-dark\">{{ jeuVideo.nom }}</span>
                                    {% endfor %}
                                {% else %}
                                    <span class=\"badge bg-warning text-dark\">Aucun jeu</span>
                                {% endif %}
                            </td>
                            <td>
                                <a href=\"{{ path('app_plateforme_show', {'id': plateforme.id}) }}\"><button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-tasks\"></i></button></a>
                                <a href=\"{{ path('app_plateforme_edit', {'id': plateforme.id}) }}\"><button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-pencil\"></i></button></a>
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"4\">Aucune plateforme enregistrée en base de données</td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>

            <a href=\"{{ path('app_plateforme_new') }}\"><button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-plus\"></i></button></a>
        </div>
    </section>
</div>
{% endblock %}
", "plateforme/index.html.twig", "/var/www/html/AP/Agora/templates/plateforme/index.html.twig");
    }
}
