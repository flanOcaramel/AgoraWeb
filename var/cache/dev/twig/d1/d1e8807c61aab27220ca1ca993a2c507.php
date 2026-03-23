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

/* liste.html.twig */
class __TwigTemplate_6283e1e913f57724b4ccad53faf1bfc1 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "liste.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "liste.html.twig"));

        // line 14
        yield "<select name=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 14, $this->source); })()), "html", null, true);
        yield "\" id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 14, $this->source); })()), "html", null, true);
        yield "\" size=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 14, $this->source); })()), "html", null, true);
        yield "\">
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tbObjets"]) || array_key_exists("tbObjets", $context) ? $context["tbObjets"] : (function () { throw new RuntimeError('Variable "tbObjets" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["objet"]) {
            // line 16
            yield "        <option 
            value=\"";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["objet"], "identifiant", [], "any", false, false, false, 17), "html", null, true);
            yield "\"
            ";
            // line 18
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["objet"], "identifiant", [], "any", false, false, false, 18) == (isset($context["idSelect"]) || array_key_exists("idSelect", $context) ? $context["idSelect"] : (function () { throw new RuntimeError('Variable "idSelect" does not exist.', 18, $this->source); })()))) {
                yield "selected";
            }
            // line 19
            yield "        >
            ";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["objet"], "libelle", [], "any", false, false, false, 20), "html", null, true);
            yield "
        </option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['objet'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        yield "</select>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "liste.html.twig";
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
        return array (  84 => 23,  75 => 20,  72 => 19,  68 => 18,  64 => 17,  61 => 16,  57 => 15,  48 => 14,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# 
 # Composant de liste déroulante réutilisable
 #
 # Paramètres attendus :
 # - name : Nom du champ select (utilisé pour name et id)
 # - size : Nombre de lignes visibles
 # - tbObjets : Tableau d'objets à afficher dans la liste
 # - idSelect : ID de l'élément à présélectionner (optionnel)
 #
 # Chaque objet doit avoir :
 # - identifiant : Valeur de l'option
 # - libelle : Texte à afficher
 #}
<select name=\"{{ name }}\" id=\"{{ name }}\" size=\"{{ size }}\">
    {% for key, objet in tbObjets %}
        <option 
            value=\"{{ objet.identifiant }}\"
            {% if objet.identifiant == idSelect %}selected{% endif %}
        >
            {{ objet.libelle }}
        </option>
    {% endfor %}
</select>", "liste.html.twig", "/var/www/html/AP/Agora/templates/liste.html.twig");
    }
}
