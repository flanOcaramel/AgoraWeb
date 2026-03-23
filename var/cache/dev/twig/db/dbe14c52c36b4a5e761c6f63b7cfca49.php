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

/* lesMarques.html.twig */
class __TwigTemplate_636355e4fe8557a2edec7e01af319f3c extends Template
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
        // line 10
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lesMarques.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lesMarques.html.twig"));

        $this->parent = $this->load("base.html.twig", 10);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 12
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

        // line 13
        yield "    ";
        // line 14
        yield "    <div class=\"col-sm-6\">
        <section class=\"panel\">
            ";
        // line 17
        yield "            <div class=\"chat-room-head\">
                <h3><i class=\"fa fa-angle-right\"></i> Gérer les marques</h3>
            </div>

            ";
        // line 22
        yield "            <div class=\"panel-body\">
                ";
        // line 24
        yield "                <table class=\"table table-striped table-advance table-hover\">
                    <thead>
                        <tr class=\"tableau-entete\">
                            <th><i class=\"fa fa-bullhorn\"></i> Identifiant</th>
                            <th><i class=\"fa fa-bookmark\"></i> Nom</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 34
        yield "                        <tr>
                            <form action=\"index.php?uc=gererMarques\" method=\"post\">
                                ";
        // line 37
        yield "                                <td>Nouveau</td>

                                ";
        // line 40
        yield "                                <td>
                                    <input type=\"text\" 
                                           id=\"txtNomMarque\" 
                                           name=\"txtNomMarque\" 
                                           size=\"24\" 
                                           required 
                                           minlength=\"2\" 
                                           maxlength=\"24\" 
                                           placeholder=\"Nom de la marque\" 
                                           title=\"De 2 à 24 caractères\" />
                                </td>

                                ";
        // line 53
        yield "                                <td> 
                                    <button class=\"btn btn-primary btn-xs\" 
                                            type=\"submit\" 
                                            name=\"cmdAction\" 
                                            value=\"ajouterNouvelleMarque\" 
                                            title=\"Enregistrer nouvelle marque\">
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
        // line 70
        yield "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tbMarques"]) || array_key_exists("tbMarques", $context) ? $context["tbMarques"] : (function () { throw new RuntimeError('Variable "tbMarques" does not exist.', 70, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["marque"]) {
            // line 71
            yield "                            <tr>
                                <form action=\"index.php?uc=gererMarques\" method=\"post\" style=\"display: contents;\">
                                    ";
            // line 74
            yield "                                    <input type=\"hidden\" 
                                           name=\"txtIdMarque\" 
                                           value=\"";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["marque"], "identifiant", [], "any", false, false, false, 76), "html", null, true);
            yield "\" />

                                    ";
            // line 79
            yield "                                    <td>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["marque"], "identifiant", [], "any", false, false, false, 79), "html", null, true);
            yield "</td>

                                    <td>
                                        ";
            // line 83
            yield "                                        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["marque"], "identifiant", [], "any", false, false, false, 83) != (isset($context["idMarqueModif"]) || array_key_exists("idMarqueModif", $context) ? $context["idMarqueModif"] : (function () { throw new RuntimeError('Variable "idMarqueModif" does not exist.', 83, $this->source); })()))) {
                // line 84
                yield "                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["marque"], "libelle", [], "any", false, false, false, 84), "html", null, true);
                yield "
                                            </td>
                                            <td>
                                                ";
                // line 88
                yield "                                                ";
                if ((((isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 88, $this->source); })()) != "rien") && (CoreExtension::getAttribute($this->env, $this->source, $context["marque"], "identifiant", [], "any", false, false, false, 88) == (isset($context["idMarqueNotif"]) || array_key_exists("idMarqueNotif", $context) ? $context["idMarqueNotif"] : (function () { throw new RuntimeError('Variable "idMarqueNotif" does not exist.', 88, $this->source); })())))) {
                    // line 89
                    yield "                                                    <button class=\"btn btn-success btn-xs\">
                                                        <i class=\"fa fa-check\"></i> ";
                    // line 90
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 90, $this->source); })()), "html", null, true);
                    yield "
                                                    </button>
                                                ";
                }
                // line 93
                yield "
                                                ";
                // line 95
                yield "                                                <button class=\"btn btn-primary btn-xs\" 
                                                        type=\"submit\" 
                                                        name=\"cmdAction\" 
                                                        value=\"demanderModifierMarque\" 
                                                        title=\"Modifier\">
                                                    <i class=\"fa fa-pencil\"></i>
                                                </button>
                                                <button class=\"btn btn-danger btn-xs\" 
                                                        type=\"submit\" 
                                                        name=\"cmdAction\" 
                                                        value=\"supprimerMarque\" 
                                                        title=\"Supprimer\" 
                                                        onclick=\"return confirm('Voulez-vous vraiment supprimer cette marque ?');\">
                                                    <i class=\"fa fa-trash-o\"></i>
                                                </button>
                                            </td>
                                        ";
                // line 112
                yield "                                        ";
            } else {
                // line 113
                yield "                                            ";
                // line 114
                yield "                                            <input type=\"text\" 
                                                   id=\"txtNomMarque\" 
                                                   name=\"txtNomMarque\" 
                                                   size=\"24\" 
                                                   required 
                                                   minlength=\"2\" 
                                                   maxlength=\"24\" 
                                                   value=\"";
                // line 121
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["marque"], "libelle", [], "any", false, false, false, 121), "html", null, true);
                yield "\" />     
                                            </td>
                                            <td>
                                                ";
                // line 125
                yield "                                                <button class=\"btn btn-primary btn-xs\" 
                                                        type=\"submit\" 
                                                        name=\"cmdAction\" 
                                                        value=\"validerModifierMarque\" 
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
                                                        value=\"annulerModifierMarque\" 
                                                        title=\"Annuler\">
                                                    <i class=\"fa fa-undo\"></i>
                                                </button>
                                            </td>              
                                        ";
            }
            // line 146
            yield "                                </form>
                            </tr>  
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['marque'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        yield "                    </tbody>
                </table>
            </div>";
        // line 152
        yield "        </section>";
        // line 153
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
        return "lesMarques.html.twig";
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
        return array (  267 => 153,  265 => 152,  261 => 149,  253 => 146,  230 => 125,  224 => 121,  215 => 114,  213 => 113,  210 => 112,  192 => 95,  189 => 93,  183 => 90,  180 => 89,  177 => 88,  170 => 84,  167 => 83,  160 => 79,  155 => 76,  151 => 74,  147 => 71,  142 => 70,  124 => 53,  110 => 40,  106 => 37,  102 => 34,  91 => 24,  88 => 22,  82 => 17,  78 => 14,  76 => 13,  63 => 12,  40 => 10,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# 
 # Template de gestion des marques de jeux vidéo
 #
 # Fonctionnalités :
 # - Affichage de la liste des marques
 # - Ajout d'une nouvelle marque
 # - Modification d'une marque existante
 # - Suppression d'une marque
 #}
{% extends \"base.html.twig\" %}

{% block central %}
    {# Section principale de gestion des marques #}
    <div class=\"col-sm-6\">
        <section class=\"panel\">
            {# En-tête du panneau #}
            <div class=\"chat-room-head\">
                <h3><i class=\"fa fa-angle-right\"></i> Gérer les marques</h3>
            </div>

            {# Corps du panneau #}
            <div class=\"panel-body\">
                {# Tableau des marques #}
                <table class=\"table table-striped table-advance table-hover\">
                    <thead>
                        <tr class=\"tableau-entete\">
                            <th><i class=\"fa fa-bullhorn\"></i> Identifiant</th>
                            <th><i class=\"fa fa-bookmark\"></i> Nom</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        {# Formulaire d'ajout d'une nouvelle marque #}
                        <tr>
                            <form action=\"index.php?uc=gererMarques\" method=\"post\">
                                {# Cellule d'identifiant (nouveau) #}
                                <td>Nouveau</td>

                                {# Champ de saisie du nom de la marque #}
                                <td>
                                    <input type=\"text\" 
                                           id=\"txtNomMarque\" 
                                           name=\"txtNomMarque\" 
                                           size=\"24\" 
                                           required 
                                           minlength=\"2\" 
                                           maxlength=\"24\" 
                                           placeholder=\"Nom de la marque\" 
                                           title=\"De 2 à 24 caractères\" />
                                </td>

                                {# Boutons d'action pour l'ajout #}
                                <td> 
                                    <button class=\"btn btn-primary btn-xs\" 
                                            type=\"submit\" 
                                            name=\"cmdAction\" 
                                            value=\"ajouterNouvelleMarque\" 
                                            title=\"Enregistrer nouvelle marque\">
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
                        {# Boucle d'affichage des marques existantes #}
                        {% for marque in tbMarques %}
                            <tr>
                                <form action=\"index.php?uc=gererMarques\" method=\"post\" style=\"display: contents;\">
                                    {# ID de la marque (champ caché) #}
                                    <input type=\"hidden\" 
                                           name=\"txtIdMarque\" 
                                           value=\"{{ marque.identifiant }}\" />

                                    {# Affichage de l'identifiant #}
                                    <td>{{ marque.identifiant }}</td>

                                    <td>
                                        {# Mode affichage normal #}
                                        {% if marque.identifiant != idMarqueModif %}
                                            {{ marque.libelle }}
                                            </td>
                                            <td>
                                                {# Affichage de la notification si présente #}
                                                {% if notification != 'rien' and marque.identifiant == idMarqueNotif %}
                                                    <button class=\"btn btn-success btn-xs\">
                                                        <i class=\"fa fa-check\"></i> {{ notification }}
                                                    </button>
                                                {% endif %}

                                                {# Boutons d'action en mode affichage #}
                                                <button class=\"btn btn-primary btn-xs\" 
                                                        type=\"submit\" 
                                                        name=\"cmdAction\" 
                                                        value=\"demanderModifierMarque\" 
                                                        title=\"Modifier\">
                                                    <i class=\"fa fa-pencil\"></i>
                                                </button>
                                                <button class=\"btn btn-danger btn-xs\" 
                                                        type=\"submit\" 
                                                        name=\"cmdAction\" 
                                                        value=\"supprimerMarque\" 
                                                        title=\"Supprimer\" 
                                                        onclick=\"return confirm('Voulez-vous vraiment supprimer cette marque ?');\">
                                                    <i class=\"fa fa-trash-o\"></i>
                                                </button>
                                            </td>
                                        {# Mode édition #}
                                        {% else %}
                                            {# Champ de modification du nom #}
                                            <input type=\"text\" 
                                                   id=\"txtNomMarque\" 
                                                   name=\"txtNomMarque\" 
                                                   size=\"24\" 
                                                   required 
                                                   minlength=\"2\" 
                                                   maxlength=\"24\" 
                                                   value=\"{{ marque.libelle }}\" />     
                                            </td>
                                            <td>
                                                {# Boutons d'action en mode édition #}
                                                <button class=\"btn btn-primary btn-xs\" 
                                                        type=\"submit\" 
                                                        name=\"cmdAction\" 
                                                        value=\"validerModifierMarque\" 
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
                                                        value=\"annulerModifierMarque\" 
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
        </section>{# Fin de la section des marques #}
    </div>{# Fin de la colonne #}
{% endblock %}


", "lesMarques.html.twig", "/var/www/html/AP/Agora/templates/lesMarques.html.twig");
    }
}
