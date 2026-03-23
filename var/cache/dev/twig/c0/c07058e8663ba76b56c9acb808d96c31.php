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

/* genre/edit.html.twig */
class __TwigTemplate_10a89dc66c16000853607897f5889c56 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "genre/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "genre/edit.html.twig"));

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
            <h3><i class=\"fa fa-angle-right\"></i>Editer un genre</h3>
        </div>
        <div class=\"panel-body\">

    ";
        // line 12
        yield Twig\Extension\CoreExtension::include($this->env, $context, "genre/_form.html.twig", ["button_label" => "Enregistrer"]);
        yield "

    <h4>Jeux associés à ce genre :</h4>
    ";
        // line 15
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["genre"]) || array_key_exists("genre", $context) ? $context["genre"] : (function () { throw new RuntimeError('Variable "genre" does not exist.', 15, $this->source); })()), "jeuVideos", [], "any", false, false, false, 15))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 16
            yield "        <ul>
            ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["genre"]) || array_key_exists("genre", $context) ? $context["genre"] : (function () { throw new RuntimeError('Variable "genre" does not exist.', 17, $this->source); })()), "jeuVideos", [], "any", false, false, false, 17));
            foreach ($context['_seq'] as $context["_key"] => $context["jeu"]) {
                // line 18
                yield "                <li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["jeu"], "nom", [], "any", false, false, false, 18), "html", null, true);
                yield " (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["jeu"], "refJeu", [], "any", false, false, false, 18), "html", null, true);
                yield ")</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['jeu'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            yield "        </ul>
    ";
        } else {
            // line 22
            yield "        <p>Aucun jeu associé.</p>
    ";
        }
        // line 24
        yield "
    <a href=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_genre_index");
        yield "\"><button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-share\"></i></button></a>

    ";
        // line 27
        yield Twig\Extension\CoreExtension::include($this->env, $context, "genre/_delete_form.html.twig");
        yield "
    </div>
    <!-- fin du div panel-body-->
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
        return "genre/edit.html.twig";
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
        return array (  128 => 27,  123 => 25,  120 => 24,  116 => 22,  112 => 20,  101 => 18,  97 => 17,  94 => 16,  92 => 15,  86 => 12,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<!-- page start-->
<div class=\"col-sm-8\">
    <section class=\"panel\">
        <div class=\"chat-room-head\">
            <h3><i class=\"fa fa-angle-right\"></i>Editer un genre</h3>
        </div>
        <div class=\"panel-body\">

    {{ include('genre/_form.html.twig', {'button_label': 'Enregistrer'}) }}

    <h4>Jeux associés à ce genre :</h4>
    {% if genre.jeuVideos is not empty %}
        <ul>
            {% for jeu in genre.jeuVideos %}
                <li>{{ jeu.nom }} ({{ jeu.refJeu }})</li>
            {% endfor %}
        </ul>
    {% else %}
        <p>Aucun jeu associé.</p>
    {% endif %}

    <a href=\"{{ path('app_genre_index') }}\"><button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-share\"></i></button></a>

    {{ include('genre/_delete_form.html.twig') }}
    </div>
    <!-- fin du div panel-body-->
    </section>
    <!-- fin section genre-->
    </div>
    <!-- fin div col-sm-8-->
{% endblock %}
", "genre/edit.html.twig", "/var/www/html/AP/Agora/templates/genre/edit.html.twig");
    }
}
