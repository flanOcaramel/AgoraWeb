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

/* lesPegis.html.twig */
class __TwigTemplate_69ba9f621b02e3acefdbc53dc79cdc70 extends Template
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
            'central' => [$this, 'block_central'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 14
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lesPegis.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lesPegis.html.twig"));

        $this->parent = $this->load("base.html.twig", 14);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_central(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "central"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "central"));

        // line 17
        yield "    ";
        // line 18
        yield "    <div class=\"col-sm-6\">
        <section class=\"panel\">
            ";
        // line 21
        yield "            <div class=\"chat-room-head\">
                <h3><i class=\"fa fa-angle-right\"></i> Gérer les pegis</h3>
            </div>

            ";
        // line 26
        yield "            <div class=\"panel-body\">
                ";
        // line 28
        yield "                <table class=\"table table-striped table-advance table-hover\">
                    <thead>
                        <tr class=\"tableau-entete\">
                            <th><i class=\"fa fa-bullhorn\"></i> Identifiant</th>
                            <th><i class=\"fas fa-hashtag\"></i> Age minimum</th>
                            <th><i class=\"fas fa-users\"></i> Description</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 39
        yield "                        <tr>
                            <form action=\"index.php?uc=gererPegis\" method=\"post\">
                                ";
        // line 42
        yield "                                <td>Nouveau</td>

                                ";
        // line 45
        yield "                                <td>
                                    <input type=\"text\" 
                                           id=\"txtAge\" 
                                           name=\"txtAge\" 
                                           size=\"4\" 
                                           required 
                                           placeholder=\"Âge\" />
                                </td>

                                ";
        // line 55
        yield "                                <td>
                                    <input type=\"text\" 
                                           id=\"txtDescription\" 
                                           name=\"txtDescription\" 
                                           size=\"24\" 
                                           required 
                                           placeholder=\"Description\" />
                                </td>

                                ";
        // line 65
        yield "                                <td>
                                    <button class=\"btn btn-primary btn-xs\" 
                                            type=\"submit\" 
                                            name=\"cmdAction\" 
                                            value=\"ajouterNouveauPegi\" 
                                            title=\"Enregistrer nouveau pegi\">
                                        <i class=\"fa fa-save\"></i>
                                    </button>
                                    <button class=\"btn btn-info btn-xs\" 
                                            type=\"reset\" 
                                            title=\"Effacer la saisie\">
                                        <i class=\"fa fa-eraser\"></i>
                                    </button>
                                </td>
                            </form>
                        </tr>
                        ";
        // line 82
        yield "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tbPegis"]) || array_key_exists("tbPegis", $context) ? $context["tbPegis"] : (function () { throw new RuntimeError('Variable "tbPegis" does not exist.', 82, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pegi"]) {
            // line 83
            yield "                            <tr>
                                <form action=\"index.php?uc=gererPegis\" method=\"post\" style=\"display: contents;\">
                                    ";
            // line 86
            yield "                                    <input type=\"hidden\" 
                                           name=\"txtIdPegi\" 
                                           value=\"";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pegi"], "identifiant", [], "any", false, false, false, 88), "html", null, true);
            yield "\" />

                                    ";
            // line 91
            yield "                                    <td>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pegi"], "identifiant", [], "any", false, false, false, 91), "html", null, true);
            yield "</td>

                                    ";
            // line 94
            yield "                                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["pegi"], "identifiant", [], "any", false, false, false, 94) != (isset($context["idPegiModif"]) || array_key_exists("idPegiModif", $context) ? $context["idPegiModif"] : (function () { throw new RuntimeError('Variable "idPegiModif" does not exist.', 94, $this->source); })()))) {
                // line 95
                yield "                                        ";
                // line 96
                yield "                                        <td>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pegi"], "age", [], "any", false, false, false, 96), "html", null, true);
                yield "</td>
                                        <td>";
                // line 97
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pegi"], "description", [], "any", false, false, false, 97), "html", null, true);
                yield "</td>
                                        <td>
                                            ";
                // line 100
                yield "                                            ";
                if (((((isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 100, $this->source); })()) != "rien") && array_key_exists("idPegiNotif", $context)) && (CoreExtension::getAttribute($this->env, $this->source, $context["pegi"], "identifiant", [], "any", false, false, false, 100) == (isset($context["idPegiNotif"]) || array_key_exists("idPegiNotif", $context) ? $context["idPegiNotif"] : (function () { throw new RuntimeError('Variable "idPegiNotif" does not exist.', 100, $this->source); })())))) {
                    // line 101
                    yield "                                                <button class=\"btn btn-success btn-xs\">
                                                    <i class=\"fa fa-check\"></i> ";
                    // line 102
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 102, $this->source); })()), "html", null, true);
                    yield "
                                                </button>
                                            ";
                }
                // line 105
                yield "
                                            ";
                // line 107
                yield "                                            <button class=\"btn btn-primary btn-xs\" 
                                                    type=\"submit\" 
                                                    name=\"cmdAction\" 
                                                    value=\"demanderModifierPegi\" 
                                                    title=\"Modifier\">
                                                <i class=\"fa fa-pencil\"></i>
                                            </button>
                                            <button class=\"btn btn-danger btn-xs\" 
                                                    type=\"submit\" 
                                                    name=\"cmdAction\" 
                                                    value=\"supprimerPegi\" 
                                                    title=\"Supprimer\" 
                                                    onclick=\"return confirm('Voulez-vous vraiment supprimer ce pegi?');\">
                                                <i class=\"fa fa-trash-o\"></i>
                                            </button>
                                        </td>
                                    ";
            } else {
                // line 124
                yield "                                        ";
                // line 125
                yield "                                        <td>
                                            <input type=\"text\" 
                                                   name=\"txtAge\" 
                                                   size=\"4\" 
                                                   required 
                                                   value=\"";
                // line 130
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pegi"], "age", [], "any", false, false, false, 130), "html", null, true);
                yield "\" />
                                        </td>
                                        <td>
                                            <input type=\"text\" 
                                                   name=\"txtDescription\" 
                                                   size=\"24\" 
                                                   required 
                                                   value=\"";
                // line 137
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pegi"], "description", [], "any", false, false, false, 137), "html", null, true);
                yield "\" />
                                        </td>
                                        <td>
                                            ";
                // line 141
                yield "                                            <button class=\"btn btn-primary btn-xs\" 
                                                    type=\"submit\" 
                                                    name=\"cmdAction\" 
                                                    value=\"validerModifierPegi\" 
                                                    title=\"Enregistrer\">
                                                <i class=\"fa fa-save\"></i>
                                            </button>
                                            <button class=\"btn btn-info btn-xs\" 
                                                    type=\"reset\" 
                                                    title=\"Effacer la saisie\">
                                                <i class=\"fa fa-eraser\"></i>
                                            </button>
                                            <button class=\"btn btn-warning btn-xs\" 
                                                    type=\"submit\" 
                                                    name=\"cmdAction\" 
                                                    value=\"annulerModifierPegi\" 
                                                    title=\"Annuler\">
                                                <i class=\"fa fa-undo\"></i>
                                            </button>
                                        </td>
                                    ";
            }
            // line 162
            yield "                                </form>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['pegi'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 165
        yield "                    </tbody>
                </table>
            </div>";
        // line 168
        yield "        </section>";
        // line 169
        yield "    </div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "lesPegis.html.twig";
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
        return array (  286 => 169,  284 => 168,  280 => 165,  272 => 162,  249 => 141,  243 => 137,  233 => 130,  226 => 125,  224 => 124,  205 => 107,  202 => 105,  196 => 102,  193 => 101,  190 => 100,  185 => 97,  180 => 96,  178 => 95,  175 => 94,  169 => 91,  164 => 88,  160 => 86,  156 => 83,  151 => 82,  133 => 65,  122 => 55,  111 => 45,  107 => 42,  103 => 39,  91 => 28,  88 => 26,  82 => 21,  78 => 18,  76 => 17,  63 => 16,  40 => 14,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# 
 # Template de gestion des classifications PEGI
 #
 # Fonctionnalités :
 # - Affichage de la liste des classifications PEGI
 # - Ajout d'une nouvelle classification PEGI
 # - Modification d'une classification existante
 # - Suppression d'une classification
 #
 # PEGI (Pan European Game Information) est le système européen 
 # de classification par âge des jeux vidéo
 #}

{% extends \"base.html.twig\" %}

{% block central %}
    {# Section principale de gestion des PEGI #}
    <div class=\"col-sm-6\">
        <section class=\"panel\">
            {# En-tête du panneau #}
            <div class=\"chat-room-head\">
                <h3><i class=\"fa fa-angle-right\"></i> Gérer les pegis</h3>
            </div>

            {# Corps du panneau #}
            <div class=\"panel-body\">
                {# Tableau des classifications PEGI #}
                <table class=\"table table-striped table-advance table-hover\">
                    <thead>
                        <tr class=\"tableau-entete\">
                            <th><i class=\"fa fa-bullhorn\"></i> Identifiant</th>
                            <th><i class=\"fas fa-hashtag\"></i> Age minimum</th>
                            <th><i class=\"fas fa-users\"></i> Description</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        {# Formulaire d'ajout d'une nouvelle classification PEGI #}
                        <tr>
                            <form action=\"index.php?uc=gererPegis\" method=\"post\">
                                {# Cellule d'identifiant (nouveau) #}
                                <td>Nouveau</td>

                                {# Champ de saisie de l'âge minimum #}
                                <td>
                                    <input type=\"text\" 
                                           id=\"txtAge\" 
                                           name=\"txtAge\" 
                                           size=\"4\" 
                                           required 
                                           placeholder=\"Âge\" />
                                </td>

                                {# Champ de saisie de la description #}
                                <td>
                                    <input type=\"text\" 
                                           id=\"txtDescription\" 
                                           name=\"txtDescription\" 
                                           size=\"24\" 
                                           required 
                                           placeholder=\"Description\" />
                                </td>

                                {# Boutons d'action pour l'ajout #}
                                <td>
                                    <button class=\"btn btn-primary btn-xs\" 
                                            type=\"submit\" 
                                            name=\"cmdAction\" 
                                            value=\"ajouterNouveauPegi\" 
                                            title=\"Enregistrer nouveau pegi\">
                                        <i class=\"fa fa-save\"></i>
                                    </button>
                                    <button class=\"btn btn-info btn-xs\" 
                                            type=\"reset\" 
                                            title=\"Effacer la saisie\">
                                        <i class=\"fa fa-eraser\"></i>
                                    </button>
                                </td>
                            </form>
                        </tr>
                        {# Boucle d'affichage des classifications PEGI existantes #}
                        {% for pegi in tbPegis %}
                            <tr>
                                <form action=\"index.php?uc=gererPegis\" method=\"post\" style=\"display: contents;\">
                                    {# ID du PEGI (champ caché) #}
                                    <input type=\"hidden\" 
                                           name=\"txtIdPegi\" 
                                           value=\"{{ pegi.identifiant }}\" />

                                    {# Affichage de l'identifiant #}
                                    <td>{{ pegi.identifiant }}</td>

                                    {# Mode affichage normal ou édition #}
                                    {% if pegi.identifiant != idPegiModif %}
                                        {# Mode affichage normal #}
                                        <td>{{ pegi.age }}</td>
                                        <td>{{ pegi.description }}</td>
                                        <td>
                                            {# Affichage de la notification si présente #}
                                            {% if notification != 'rien' and idPegiNotif is defined and pegi.identifiant == idPegiNotif %}
                                                <button class=\"btn btn-success btn-xs\">
                                                    <i class=\"fa fa-check\"></i> {{ notification }}
                                                </button>
                                            {% endif %}

                                            {# Boutons d'action en mode affichage #}
                                            <button class=\"btn btn-primary btn-xs\" 
                                                    type=\"submit\" 
                                                    name=\"cmdAction\" 
                                                    value=\"demanderModifierPegi\" 
                                                    title=\"Modifier\">
                                                <i class=\"fa fa-pencil\"></i>
                                            </button>
                                            <button class=\"btn btn-danger btn-xs\" 
                                                    type=\"submit\" 
                                                    name=\"cmdAction\" 
                                                    value=\"supprimerPegi\" 
                                                    title=\"Supprimer\" 
                                                    onclick=\"return confirm('Voulez-vous vraiment supprimer ce pegi?');\">
                                                <i class=\"fa fa-trash-o\"></i>
                                            </button>
                                        </td>
                                    {% else %}
                                        {# Mode édition #}
                                        <td>
                                            <input type=\"text\" 
                                                   name=\"txtAge\" 
                                                   size=\"4\" 
                                                   required 
                                                   value=\"{{ pegi.age }}\" />
                                        </td>
                                        <td>
                                            <input type=\"text\" 
                                                   name=\"txtDescription\" 
                                                   size=\"24\" 
                                                   required 
                                                   value=\"{{ pegi.description }}\" />
                                        </td>
                                        <td>
                                            {# Boutons d'action en mode édition #}
                                            <button class=\"btn btn-primary btn-xs\" 
                                                    type=\"submit\" 
                                                    name=\"cmdAction\" 
                                                    value=\"validerModifierPegi\" 
                                                    title=\"Enregistrer\">
                                                <i class=\"fa fa-save\"></i>
                                            </button>
                                            <button class=\"btn btn-info btn-xs\" 
                                                    type=\"reset\" 
                                                    title=\"Effacer la saisie\">
                                                <i class=\"fa fa-eraser\"></i>
                                            </button>
                                            <button class=\"btn btn-warning btn-xs\" 
                                                    type=\"submit\" 
                                                    name=\"cmdAction\" 
                                                    value=\"annulerModifierPegi\" 
                                                    title=\"Annuler\">
                                                <i class=\"fa fa-undo\"></i>
                                            </button>
                                        </td>
                                    {% endif %}
                                </form>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>{# Fin du corps du panneau #}
        </section>{# Fin de la section des PEGI #}
    </div>{# Fin de la colonne #}
{% endblock %}


", "lesPegis.html.twig", "/var/www/html/AP/Agora/templates/lesPegis.html.twig");
    }
}
