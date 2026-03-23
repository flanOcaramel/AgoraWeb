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

/* jeu_video/index.html.twig */
class __TwigTemplate_ca0f06725b5ba5af2451933ee4f51ec7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jeu_video/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jeu_video/index.html.twig"));

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
<div class=\"col-sm8\">
    <section class=\"panel\">
        <div class=\"chat-room-head\">
            <h3><i class=\"fa fa-angle-right\"></i> Gérer les genres</h3>
        </div>
        <div class=\"panel-body\">

    <table class=\"table\" \"table-striped table-advance table-hover\">
        <thead>
            <tr class=\"tableau-entete\">
                <th><i class=\"fa fa-bullhorn\"></i> Identifier </th>
                <th><i class=\"fa fa-bookmark\"></i> RefJeu</th>
                <th><i class=\"fa fa-bookmark\"></i> Nom</th>
                <th><i class=\"fa fa-bookmark\"></i> PRIX</th>
                <th><i class=\"fa fa-bookmark\"></i> DateParution</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["jeu_videos"]) || array_key_exists("jeu_videos", $context) ? $context["jeu_videos"] : (function () { throw new RuntimeError('Variable "jeu_videos" does not exist.', 24, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["jeu_video"]) {
            // line 25
            yield "            <tr>
                <td>";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["jeu_video"], "id", [], "any", false, false, false, 26), "html", null, true);
            yield "</td>
                <td>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["jeu_video"], "refJeu", [], "any", false, false, false, 27), "html", null, true);
            yield "</td>
                <td>";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["jeu_video"], "nom", [], "any", false, false, false, 28), "html", null, true);
            yield "</td>
                <td>";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["jeu_video"], "PRIX", [], "any", false, false, false, 29), "html", null, true);
            yield "</td>
                <td>";
            // line 30
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["jeu_video"], "dateParution", [], "any", false, false, false, 30)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["jeu_video"], "dateParution", [], "any", false, false, false, 30), "Y-m-d H:i:s"), "html", null, true)) : (""));
            yield "</td>
                <td>
                    <a href=\"";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_jeu_video_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["jeu_video"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            yield "\"><button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-task\"></i></button></a>
                    <a href=\"";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_jeu_video_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["jeu_video"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            yield "\"><button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-pencil\"></i></button></a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        // line 36
        if (!$context['_iterated']) {
            // line 37
            yield "            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['jeu_video'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        yield "        </tbody>
    </table>

    <a href=\"";
        // line 44
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_jeu_video_new");
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
        return "jeu_video/index.html.twig";
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
        return array (  155 => 44,  150 => 41,  141 => 37,  139 => 36,  131 => 33,  127 => 32,  122 => 30,  118 => 29,  114 => 28,  110 => 27,  106 => 26,  103 => 25,  98 => 24,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<!-- page start-->
<div class=\"col-sm8\">
    <section class=\"panel\">
        <div class=\"chat-room-head\">
            <h3><i class=\"fa fa-angle-right\"></i> Gérer les genres</h3>
        </div>
        <div class=\"panel-body\">

    <table class=\"table\" \"table-striped table-advance table-hover\">
        <thead>
            <tr class=\"tableau-entete\">
                <th><i class=\"fa fa-bullhorn\"></i> Identifier </th>
                <th><i class=\"fa fa-bookmark\"></i> RefJeu</th>
                <th><i class=\"fa fa-bookmark\"></i> Nom</th>
                <th><i class=\"fa fa-bookmark\"></i> PRIX</th>
                <th><i class=\"fa fa-bookmark\"></i> DateParution</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        {% for jeu_video in jeu_videos %}
            <tr>
                <td>{{ jeu_video.id }}</td>
                <td>{{ jeu_video.refJeu }}</td>
                <td>{{ jeu_video.nom }}</td>
                <td>{{ jeu_video.PRIX }}</td>
                <td>{{ jeu_video.dateParution ? jeu_video.dateParution|date('Y-m-d H:i:s') : '' }}</td>
                <td>
                    <a href=\"{{ path('app_jeu_video_show', {'id': jeu_video.id}) }}\"><button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-task\"></i></button></a>
                    <a href=\"{{ path('app_jeu_video_edit', {'id': jeu_video.id}) }}\"><button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-pencil\"></i></button></a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_jeu_video_new') }}\"><button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-plus\"></i></button></a>
    </div>
    <!-- fin div panel body-->
    </section>
    <!-- fin section genre-->
    </div>
    <!-- fin div col-sm-8-->
{% endblock %}
", "jeu_video/index.html.twig", "/var/www/html/AP/Agora/templates/jeu_video/index.html.twig");
    }
}
