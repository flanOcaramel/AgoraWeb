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

/* plateforme/edit.html.twig */
class __TwigTemplate_3ae9b1059bb50cdc0ce9e1c6ac7f5166 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "plateforme/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "plateforme/edit.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        // line 5
        yield "<div class=\"col-sm-8\">
    <section class=\"panel\">
        <div class=\"chat-room-head\">
            <h3><i class=\"fa fa-angle-right\"></i>Editer un genre</h3>
        </div>
        <div class=\"panel-body\">

    ";
        // line 12
        yield Twig\Extension\CoreExtension::include($this->env, $context, "plateforme/_form.html.twig", ["button_label" => "Update"]);
        yield "

    <h4>Jeux associés à cette plateforme :</h4>
    ";
        // line 15
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["plateforme"]) || array_key_exists("plateforme", $context) ? $context["plateforme"] : (function () { throw new RuntimeError('Variable "plateforme" does not exist.', 15, $this->source); })()), "jeuVideos", [], "any", false, false, false, 15))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 16
            yield "        <ul>
            ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["plateforme"]) || array_key_exists("plateforme", $context) ? $context["plateforme"] : (function () { throw new RuntimeError('Variable "plateforme" does not exist.', 17, $this->source); })()), "jeuVideos", [], "any", false, false, false, 17));
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
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_plateforme_index");
        yield "\"><button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-share\"></i></button></a>

    ";
        // line 27
        yield Twig\Extension\CoreExtension::include($this->env, $context, "plateforme/_delete_form.html.twig");
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
        return "plateforme/edit.html.twig";
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
        return array (  127 => 27,  122 => 25,  119 => 24,  115 => 22,  111 => 20,  100 => 18,  96 => 17,  93 => 16,  91 => 15,  85 => 12,  76 => 5,  63 => 4,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}
<div class=\"col-sm-8\">
    <section class=\"panel\">
        <div class=\"chat-room-head\">
            <h3><i class=\"fa fa-angle-right\"></i>Editer un genre</h3>
        </div>
        <div class=\"panel-body\">

    {{ include('plateforme/_form.html.twig', {'button_label': 'Update'}) }}

    <h4>Jeux associés à cette plateforme :</h4>
    {% if plateforme.jeuVideos is not empty %}
        <ul>
            {% for jeu in plateforme.jeuVideos %}
                <li>{{ jeu.nom }} ({{ jeu.refJeu }})</li>
            {% endfor %}
        </ul>
    {% else %}
        <p>Aucun jeu associé.</p>
    {% endif %}

    <a href=\"{{ path('app_plateforme_index') }}\"><button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-share\"></i></button></a>

    {{ include('plateforme/_delete_form.html.twig') }}
        </div>
    <!-- fin du div panel-body-->
    </section>
    <!-- fin section genre-->
    </div>
    <!-- fin div col-sm-8-->
{% endblock %}
", "plateforme/edit.html.twig", "/var/www/html/AP/Agora/templates/plateforme/edit.html.twig");
    }
}
