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

/* lesPlateformes.html.twig */
class __TwigTemplate_151824afac9c5127dffd4bec2c82a4d6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lesPlateformes.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lesPlateformes.html.twig"));

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
                <h3><i class=\"fa fa-angle-right\"></i> Gérer les plateformes</h3>
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
                            <th><i class=\"fa fa-bookmark\"></i> Libellé</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 38
        yield "                        <tr>
                            <form action=\"index.php?uc=gererPlateformes\" method=\"post\">
                                ";
        // line 41
        yield "                                <td>Nouveau</td>

                                ";
        // line 44
        yield "                                <td>
                                    <input type=\"text\" 
                                           id=\"txtLibPlateforme\" 
                                           name=\"txtLibPlateforme\" 
                                           size=\"24\" 
                                           required 
                                           minlength=\"2\" 
                                           maxlength=\"24\" 
                                           placeholder=\"Libellé\" 
                                           title=\"De 2 à 24 caractères\" />
                                </td>

                                ";
        // line 57
        yield "                                <td> 
                                    <button class=\"btn btn-primary btn-xs\" 
                                            type=\"submit\" 
                                            name=\"cmdAction\" 
                                            value=\"ajouterNouvellePlateforme\" 
                                            title=\"Enregistrer nouvelle plateforme\">
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
        // line 74
        yield "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tbPlateformes"]) || array_key_exists("tbPlateformes", $context) ? $context["tbPlateformes"] : (function () { throw new RuntimeError('Variable "tbPlateformes" does not exist.', 74, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["plateforme"]) {
            // line 75
            yield "                            <tr>
                                <form action=\"index.php?uc=gererPlateformes\" method=\"post\" style=\"display: contents;\">
                                    ";
            // line 78
            yield "                                    <input type=\"hidden\" 
                                           name=\"txtIdPlateforme\" 
                                           value=\"";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plateforme"], "identifiant", [], "any", false, false, false, 80), "html", null, true);
            yield "\" />

                                    ";
            // line 83
            yield "                                    <td>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plateforme"], "identifiant", [], "any", false, false, false, 83), "html", null, true);
            yield "</td>

                                    ";
            // line 86
            yield "                                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["plateforme"], "identifiant", [], "any", false, false, false, 86) != (isset($context["idPlateformeModif"]) || array_key_exists("idPlateformeModif", $context) ? $context["idPlateformeModif"] : (function () { throw new RuntimeError('Variable "idPlateformeModif" does not exist.', 86, $this->source); })()))) {
                // line 87
                yield "                                        ";
                // line 88
                yield "                                        <td>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plateforme"], "libelle", [], "any", false, false, false, 88), "html", null, true);
                yield "</td>
                                        <td>
                                            ";
                // line 91
                yield "                                            ";
                if ((((isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 91, $this->source); })()) != "rien") && (CoreExtension::getAttribute($this->env, $this->source, $context["plateforme"], "identifiant", [], "any", false, false, false, 91) == (isset($context["idPlateformeNotif"]) || array_key_exists("idPlateformeNotif", $context) ? $context["idPlateformeNotif"] : (function () { throw new RuntimeError('Variable "idPlateformeNotif" does not exist.', 91, $this->source); })())))) {
                    // line 92
                    yield "                                                <button class=\"btn btn-success btn-xs\">
                                                    <i class=\"fa fa-check\"></i> ";
                    // line 93
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 93, $this->source); })()), "html", null, true);
                    yield "
                                                </button>
                                            ";
                }
                // line 96
                yield "
                                            ";
                // line 98
                yield "                                            <button class=\"btn btn-primary btn-xs\" 
                                                    type=\"submit\" 
                                                    name=\"cmdAction\" 
                                                    value=\"demanderModifierPlateforme\" 
                                                    title=\"Modifier\">
                                                <i class=\"fa fa-pencil\"></i>
                                            </button>
                                            <button class=\"btn btn-danger btn-xs\" 
                                                    type=\"submit\" 
                                                    name=\"cmdAction\" 
                                                    value=\"supprimerPlateforme\" 
                                                    title=\"Supprimer\" 
                                                    onclick=\"return confirm('Voulez-vous vraiment supprimer cette plateforme ?');\">
                                                <i class=\"fa fa-trash-o\"></i>
                                            </button>
                                        </td>
                                    ";
            } else {
                // line 115
                yield "                                        ";
                // line 116
                yield "                                        <td>
                                            <input type=\"text\" 
                                                   id=\"txtLibPlateforme\" 
                                                   name=\"txtLibPlateforme\" 
                                                   size=\"24\" 
                                                   required 
                                                   minlength=\"2\" 
                                                   maxlength=\"24\" 
                                                   value=\"";
                // line 124
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plateforme"], "libelle", [], "any", false, false, false, 124), "html", null, true);
                yield "\" />     
                                        </td>
                                        <td>
                                            ";
                // line 128
                yield "                                            <button class=\"btn btn-primary btn-xs\" 
                                                    type=\"submit\" 
                                                    name=\"cmdAction\" 
                                                    value=\"validerModifierPlateforme\" 
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
                                                    value=\"annulerModifierPlateforme\" 
                                                    title=\"Annuler\">
                                                <i class=\"fa fa-undo\"></i>
                                            </button>
                                        </td>
                                    ";
            }
            // line 149
            yield "                                </form>
                            </tr>  
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['plateforme'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        yield "                    </tbody>
                </table>
            </div>";
        // line 155
        yield "        </section>";
        // line 156
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
        return "lesPlateformes.html.twig";
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
        return array (  266 => 156,  264 => 155,  260 => 152,  252 => 149,  229 => 128,  223 => 124,  213 => 116,  211 => 115,  192 => 98,  189 => 96,  183 => 93,  180 => 92,  177 => 91,  171 => 88,  169 => 87,  166 => 86,  160 => 83,  155 => 80,  151 => 78,  147 => 75,  142 => 74,  124 => 57,  110 => 44,  106 => 41,  102 => 38,  91 => 28,  88 => 26,  82 => 21,  78 => 18,  76 => 17,  63 => 16,  40 => 14,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# 
 # Template de gestion des plateformes de jeux
 #
 # Fonctionnalités :
 # - Affichage de la liste des plateformes (consoles, PC, etc.)
 # - Ajout d'une nouvelle plateforme
 # - Modification d'une plateforme existante
 # - Suppression d'une plateforme
 #
 # Les plateformes représentent les différents supports
 # sur lesquels les jeux peuvent être joués
 #}

{% extends \"base.html.twig\" %}

{% block central %}
    {# Section principale de gestion des plateformes #}
    <div class=\"col-sm-6\">
        <section class=\"panel\">
            {# En-tête du panneau #}
            <div class=\"chat-room-head\">
                <h3><i class=\"fa fa-angle-right\"></i> Gérer les plateformes</h3>
            </div>

            {# Corps du panneau #}
            <div class=\"panel-body\">
                {# Tableau des plateformes #}
                <table class=\"table table-striped table-advance table-hover\">
                    <thead>
                        <tr class=\"tableau-entete\">
                            <th><i class=\"fa fa-bullhorn\"></i> Identifiant</th>
                            <th><i class=\"fa fa-bookmark\"></i> Libellé</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        {# Formulaire d'ajout d'une nouvelle plateforme #}
                        <tr>
                            <form action=\"index.php?uc=gererPlateformes\" method=\"post\">
                                {# Cellule d'identifiant (nouveau) #}
                                <td>Nouveau</td>

                                {# Champ de saisie du libellé #}
                                <td>
                                    <input type=\"text\" 
                                           id=\"txtLibPlateforme\" 
                                           name=\"txtLibPlateforme\" 
                                           size=\"24\" 
                                           required 
                                           minlength=\"2\" 
                                           maxlength=\"24\" 
                                           placeholder=\"Libellé\" 
                                           title=\"De 2 à 24 caractères\" />
                                </td>

                                {# Boutons d'action pour l'ajout #}
                                <td> 
                                    <button class=\"btn btn-primary btn-xs\" 
                                            type=\"submit\" 
                                            name=\"cmdAction\" 
                                            value=\"ajouterNouvellePlateforme\" 
                                            title=\"Enregistrer nouvelle plateforme\">
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
                        {# Boucle d'affichage des plateformes existantes #}
                        {% for plateforme in tbPlateformes %}
                            <tr>
                                <form action=\"index.php?uc=gererPlateformes\" method=\"post\" style=\"display: contents;\">
                                    {# ID de la plateforme (champ caché) #}
                                    <input type=\"hidden\" 
                                           name=\"txtIdPlateforme\" 
                                           value=\"{{ plateforme.identifiant }}\" />

                                    {# Affichage de l'identifiant #}
                                    <td>{{ plateforme.identifiant }}</td>

                                    {# Mode affichage normal ou édition #}
                                    {% if plateforme.identifiant != idPlateformeModif %}
                                        {# Mode affichage normal #}
                                        <td>{{ plateforme.libelle }}</td>
                                        <td>
                                            {# Affichage de la notification si présente #}
                                            {% if notification != 'rien' and plateforme.identifiant == idPlateformeNotif %}
                                                <button class=\"btn btn-success btn-xs\">
                                                    <i class=\"fa fa-check\"></i> {{ notification }}
                                                </button>
                                            {% endif %}

                                            {# Boutons d'action en mode affichage #}
                                            <button class=\"btn btn-primary btn-xs\" 
                                                    type=\"submit\" 
                                                    name=\"cmdAction\" 
                                                    value=\"demanderModifierPlateforme\" 
                                                    title=\"Modifier\">
                                                <i class=\"fa fa-pencil\"></i>
                                            </button>
                                            <button class=\"btn btn-danger btn-xs\" 
                                                    type=\"submit\" 
                                                    name=\"cmdAction\" 
                                                    value=\"supprimerPlateforme\" 
                                                    title=\"Supprimer\" 
                                                    onclick=\"return confirm('Voulez-vous vraiment supprimer cette plateforme ?');\">
                                                <i class=\"fa fa-trash-o\"></i>
                                            </button>
                                        </td>
                                    {% else %}
                                        {# Mode édition #}
                                        <td>
                                            <input type=\"text\" 
                                                   id=\"txtLibPlateforme\" 
                                                   name=\"txtLibPlateforme\" 
                                                   size=\"24\" 
                                                   required 
                                                   minlength=\"2\" 
                                                   maxlength=\"24\" 
                                                   value=\"{{ plateforme.libelle }}\" />     
                                        </td>
                                        <td>
                                            {# Boutons d'action en mode édition #}
                                            <button class=\"btn btn-primary btn-xs\" 
                                                    type=\"submit\" 
                                                    name=\"cmdAction\" 
                                                    value=\"validerModifierPlateforme\" 
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
                                                    value=\"annulerModifierPlateforme\" 
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
        </section>{# Fin de la section des plateformes #}
    </div>{# Fin de la colonne #}
{% endblock %}


", "lesPlateformes.html.twig", "/var/www/html/AP/Agora/templates/lesPlateformes.html.twig");
    }
}
