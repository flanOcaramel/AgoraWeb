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

/* jeu_video/show.html.twig */
class __TwigTemplate_0709e0a512fbd0d9531407ec3ab07b11 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jeu_video/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jeu_video/show.html.twig"));

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
    <table class=\"table\">
        <tbody>
            <tr>
                <th class=\"tableau-entete\"><i class=\"fa fa-bullhorn\"></i> Identifier</th>
                <td>";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["jeu_video"]) || array_key_exists("jeu_video", $context) ? $context["jeu_video"] : (function () { throw new RuntimeError('Variable "jeu_video" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th class=\"tableau-entete\"><i class=\"fa fa-bookmark\"></i> RefJeu</th>
                <td>";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["jeu_video"]) || array_key_exists("jeu_video", $context) ? $context["jeu_video"] : (function () { throw new RuntimeError('Variable "jeu_video" does not exist.', 19, $this->source); })()), "refJeu", [], "any", false, false, false, 19), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th class=\"tableau-entete\"><i class=\"fa fa-bookmark\"></i> Nom</th>
                <td>";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["jeu_video"]) || array_key_exists("jeu_video", $context) ? $context["jeu_video"] : (function () { throw new RuntimeError('Variable "jeu_video" does not exist.', 23, $this->source); })()), "nom", [], "any", false, false, false, 23), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th class=\"tableau-entete\"><i class=\"fa fa-bookmark\"></i> PRIX</th>
                <td>";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["jeu_video"]) || array_key_exists("jeu_video", $context) ? $context["jeu_video"] : (function () { throw new RuntimeError('Variable "jeu_video" does not exist.', 27, $this->source); })()), "PRIX", [], "any", false, false, false, 27), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th class=\"tableau-entete\"><i class=\"fa fa-bookmark\"></i> DateParution</th>
                <td>";
        // line 31
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["jeu_video"]) || array_key_exists("jeu_video", $context) ? $context["jeu_video"] : (function () { throw new RuntimeError('Variable "jeu_video" does not exist.', 31, $this->source); })()), "dateParution", [], "any", false, false, false, 31)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["jeu_video"]) || array_key_exists("jeu_video", $context) ? $context["jeu_video"] : (function () { throw new RuntimeError('Variable "jeu_video" does not exist.', 31, $this->source); })()), "dateParution", [], "any", false, false, false, 31), "Y-m-d H:i:s"), "html", null, true)) : (""));
        yield "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 36
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_jeu_video_index");
        yield "\"><button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-share\"></i></button></a>

    <a href=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_jeu_video_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["jeu_video"]) || array_key_exists("jeu_video", $context) ? $context["jeu_video"] : (function () { throw new RuntimeError('Variable "jeu_video" does not exist.', 38, $this->source); })()), "id", [], "any", false, false, false, 38)]), "html", null, true);
        yield "\"><button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-pencil\"></i></button></a>

    ";
        // line 40
        yield Twig\Extension\CoreExtension::include($this->env, $context, "jeu_video/_delete_form.html.twig");
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
        return "jeu_video/show.html.twig";
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
        return array (  135 => 40,  130 => 38,  125 => 36,  117 => 31,  110 => 27,  103 => 23,  96 => 19,  89 => 15,  76 => 4,  63 => 3,  40 => 1,);
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
    <table class=\"table\">
        <tbody>
            <tr>
                <th class=\"tableau-entete\"><i class=\"fa fa-bullhorn\"></i> Identifier</th>
                <td>{{ jeu_video.id }}</td>
            </tr>
            <tr>
                <th class=\"tableau-entete\"><i class=\"fa fa-bookmark\"></i> RefJeu</th>
                <td>{{ jeu_video.refJeu }}</td>
            </tr>
            <tr>
                <th class=\"tableau-entete\"><i class=\"fa fa-bookmark\"></i> Nom</th>
                <td>{{ jeu_video.nom }}</td>
            </tr>
            <tr>
                <th class=\"tableau-entete\"><i class=\"fa fa-bookmark\"></i> PRIX</th>
                <td>{{ jeu_video.PRIX }}</td>
            </tr>
            <tr>
                <th class=\"tableau-entete\"><i class=\"fa fa-bookmark\"></i> DateParution</th>
                <td>{{ jeu_video.dateParution ? jeu_video.dateParution|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_jeu_video_index') }}\"><button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-share\"></i></button></a>

    <a href=\"{{ path('app_jeu_video_edit', {'id': jeu_video.id}) }}\"><button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-pencil\"></i></button></a>

    {{ include('jeu_video/_delete_form.html.twig') }}
    </div>
    <!-- fin div panel-body-->
    </section>
    <!-- fin section genre-->
    </div>
    <!-- fin div col-sm-8-->
{% endblock %}
", "jeu_video/show.html.twig", "/var/www/html/AP/Agora/templates/jeu_video/show.html.twig");
    }
}
