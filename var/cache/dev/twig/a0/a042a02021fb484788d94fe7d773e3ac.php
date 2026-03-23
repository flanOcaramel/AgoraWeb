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

/* menu.html.twig */
class __TwigTemplate_fb41717a4a22d80aaee3dbd321294f3a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menu.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menu.html.twig"));

        // line 14
        yield "
";
        // line 16
        yield "<aside>
    <div id=\"sidebar\" class=\"nav-collapse\">
        ";
        // line 19
        yield "        <ul class=\"sidebar-menu\" id=\"nav-accordion\">
            ";
        // line 21
        yield "            <p class=\"centered\">
                <a href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_show");
        yield "\">
                    <img src=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->getAssetUrl("assets/img/greece-1162816_640.jpg"), "html", null, true);
        yield "\"
                         class=\"img-circle\" 
                         width=\"80\" 
                         alt=\"Logo MJC Agora\">
                </a>
            </p>
            <h5 class=\"centered\">MJC Agora</h5>
            ";
        // line 31
        yield "            <li class=\"sub-menu\">
                ";
        // line 33
        yield "                <a ";
        if ((array_key_exists("menuActif", $context) && ((isset($context["menuActif"]) || array_key_exists("menuActif", $context) ? $context["menuActif"] : (function () { throw new RuntimeError('Variable "menuActif" does not exist.', 33, $this->source); })()) == "Jeux"))) {
            yield "class=\"active\"";
        }
        // line 34
        yield "                   href=\"index.php\">
                    <i class=\"fa fa-desktop\"></i>
                    <span>Jeux vidéos</span>
                </a>

                ";
        // line 40
        yield "                <ul class=\"sub\">
                    ";
        // line 42
        yield "                    <li>
                        <a href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_jeu_video_index");
        yield "\">Jeux</a>
                    </li>
                    ";
        // line 46
        yield "                    <li>
                        <a href=\"";
        // line 47
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_genre_index");
        yield "\">Genres</a>
                    </li>
                    ";
        // line 50
        yield "                    <li>
                        <a href=\"";
        // line 51
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_plateforme_index");
        yield "\">Plateformes</a>
                    </li>
                    ";
        // line 54
        yield "                    <li>
                        <a href=\"";
        // line 55
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_marque_index");
        yield "\">Marques</a>
                    </li>
                    ";
        // line 58
        yield "                    <li>
                        <a href=\"";
        // line 59
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pegi_index");
        yield "\">Pegi</a>
                    </li>
                </ul>
            </li>
            <li class=\"sub-menu\">
                <a ";
        // line 64
        if ((array_key_exists("menuActif", $context) && ((isset($context["menuActif"]) || array_key_exists("menuActif", $context) ? $context["menuActif"] : (function () { throw new RuntimeError('Variable "menuActif" does not exist.', 64, $this->source); })()) == "Tournois"))) {
            yield "class=\"active\"";
        }
        // line 65
        yield "                   href=\"javascript:;\">
                    <i class=\"fa-solid fa-trophy\"></i>
                    <span>Tournois</span>
                </a>
                ";
        // line 70
        yield "                <ul class=\"sub\">
                    ";
        // line 72
        yield "                    <li>
                        <a href=\"";
        // line 73
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tournoi_index");
        yield "\">Tournois</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 76
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participant_index");
        yield "\">Participants</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 79
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cat_tournois_index");
        yield "\">Catégorie de tournois</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 82
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stat_sql_tournoi");
        yield "\">Dashboard tournois (SQL)</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 85
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stat_dql_tournoi");
        yield "\">Dashboard tournois (DQL)</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 88
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stat_qb_tournoi");
        yield "\">Dashboard tournois (Query Builder)</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 91
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stat_tournoi_index");
        yield "\">Statistiques tournois</a>
                    </li>
                </ul>
            </li>
            ";
        // line 96
        yield "            <li class=\"sub-menu\">
                <a ";
        // line 97
        if ((array_key_exists("menuActif", $context) && ((isset($context["menuActif"]) || array_key_exists("menuActif", $context) ? $context["menuActif"] : (function () { throw new RuntimeError('Variable "menuActif" does not exist.', 97, $this->source); })()) == "Clubs"))) {
            yield "class=\"active\"";
        }
        // line 98
        yield "                   href=\"javascript:;\">
                    <i class=\"fa fa-group\"></i>
                    <span>Clubs d'activités</span>
                </a>
                ";
        // line 103
        yield "                <ul class=\"sub\">
                    <li><a href=\"index.php\">sous-menu 1</a></li>
                    <li><a href=\"index.php\">sous-menu 2</a></li>
                    <li><a href=\"index.php\">sous-menu 3</a></li>
                    <li><a href=\"index.php\">sous-menu 4</a></li>
                    <li><a href=\"index.php\">sous-menu 5</a></li>
                </ul>
            </li>

            ";
        // line 113
        yield "            <li class=\"sub-menu\">
                <a ";
        // line 114
        if ((array_key_exists("menuActif", $context) && ((isset($context["menuActif"]) || array_key_exists("menuActif", $context) ? $context["menuActif"] : (function () { throw new RuntimeError('Variable "menuActif" does not exist.', 114, $this->source); })()) == "Formations"))) {
            yield "class=\"active\"";
        }
        // line 115
        yield "                   href=\"javascript:;\">
                    <i class=\"fa fa-th\"></i>
                    <span>Formations</span>
                </a>
                ";
        // line 120
        yield "                <ul class=\"sub\">
                    <li><a href=\"index.php\">sous-menu 1</a></li>
                    <li><a href=\"index.php\">sous-menu 2</a></li>
                    <li><a href=\"index.php\">sous-menu 3</a></li>
                    <li><a href=\"index.php\">sous-menu 4</a></li>
                    <li><a href=\"index.php\">sous-menu 5</a></li>
                </ul>
            </li>

            ";
        // line 130
        yield "            <li class=\"sub-menu\">
                <a ";
        // line 131
        if ((array_key_exists("menuActif", $context) && ((isset($context["menuActif"]) || array_key_exists("menuActif", $context) ? $context["menuActif"] : (function () { throw new RuntimeError('Variable "menuActif" does not exist.', 131, $this->source); })()) == "Profil"))) {
            yield "class=\"active\"";
        }
        // line 132
        yield "                   href=\"javascript:;\">
                    <i class=\"fa fa-user\"></i>
                    <span>Mon Profil</span>
                </a>
                <ul class=\"sub\">
                    <li><a href=\"";
        // line 137
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_show");
        yield "\">Voir mon profil</a></li>
                    <li><a href=\"";
        // line 138
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_edit");
        yield "\">Modifier mon profil</a></li>
                </ul>
            </li>

            ";
        // line 143
        yield "            ";
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 144
            yield "            <li class=\"sub-menu\">
                <a ";
            // line 145
            if ((array_key_exists("menuActif", $context) && ((isset($context["menuActif"]) || array_key_exists("menuActif", $context) ? $context["menuActif"] : (function () { throw new RuntimeError('Variable "menuActif" does not exist.', 145, $this->source); })()) == "Membres"))) {
                yield "class=\"active\"";
            }
            // line 146
            yield "                   href=\"javascript:;\">
                    <i class=\"fa fa-user-md\"></i>
                    <span>Gestion des Membres</span>
                </a>
                <ul class=\"sub\">
                    <li><a href=\"";
            // line 151
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_membre_index");
            yield "\">Liste des membres</a></li>
                    <li><a href=\"";
            // line 152
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_membre_new");
            yield "\">Ajouter un membre</a></li>
                </ul>
            </li>
            ";
        }
        // line 156
        yield "
            ";
        // line 158
        yield "            <li class=\"sub-menu\">
                <a ";
        // line 159
        if ((array_key_exists("menuActif", $context) && ((isset($context["menuActif"]) || array_key_exists("menuActif", $context) ? $context["menuActif"] : (function () { throw new RuntimeError('Variable "menuActif" does not exist.', 159, $this->source); })()) == "Intervenants"))) {
            yield "class=\"active\"";
        }
        // line 160
        yield "                   href=\"javascript:;\">
                    <i class=\"fa fa-smile-o\"></i>
                    <span>Intervenants</span>
                </a>
                ";
        // line 165
        yield "                <ul class=\"sub\">
                    <li><a href=\"index.php\">sous-menu 1</a></li>
                    <li><a href=\"index.php\">sous-menu 2</a></li>
                    <li><a href=\"index.php\">sous-menu 3</a></li>
                    <li><a href=\"index.php\">sous-menu 4</a></li>
                    <li><a href=\"index.php\">sous-menu 5</a></li>
                </ul>
            </li>

            ";
        // line 175
        yield "            ";
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 176
            yield "            <li class=\"sub-menu\">
                <a ";
            // line 177
            if ((array_key_exists("menuActif", $context) && ((isset($context["menuActif"]) || array_key_exists("menuActif", $context) ? $context["menuActif"] : (function () { throw new RuntimeError('Variable "menuActif" does not exist.', 177, $this->source); })()) == "Logs"))) {
                yield "class=\"active\"";
            }
            // line 178
            yield "                   href=\"javascript:;\">
                    <i class=\"fa fa-history\"></i>
                    <span>Logs</span>
                </a>
                <ul class=\"sub\">
                    <li><a href=\"";
            // line 183
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login_trace_index");
            yield "\">Historique des connexions</a></li>
                </ul>
            </li>
            ";
        }
        // line 187
        yield "        </ul>";
        // line 188
        yield "    </div>";
        // line 189
        yield "</aside>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "menu.html.twig";
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
        return array (  351 => 189,  349 => 188,  347 => 187,  340 => 183,  333 => 178,  329 => 177,  326 => 176,  323 => 175,  312 => 165,  306 => 160,  302 => 159,  299 => 158,  296 => 156,  289 => 152,  285 => 151,  278 => 146,  274 => 145,  271 => 144,  268 => 143,  261 => 138,  257 => 137,  250 => 132,  246 => 131,  243 => 130,  232 => 120,  226 => 115,  222 => 114,  219 => 113,  208 => 103,  202 => 98,  198 => 97,  195 => 96,  188 => 91,  182 => 88,  176 => 85,  170 => 82,  164 => 79,  158 => 76,  152 => 73,  149 => 72,  146 => 70,  140 => 65,  136 => 64,  128 => 59,  125 => 58,  120 => 55,  117 => 54,  112 => 51,  109 => 50,  104 => 47,  101 => 46,  96 => 43,  93 => 42,  90 => 40,  83 => 34,  78 => 33,  75 => 31,  65 => 23,  61 => 22,  58 => 21,  55 => 19,  51 => 16,  48 => 14,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# 
 # Template du menu principal de l'application Agora
 #
 # Ce template définit la structure de la barre latérale (sidebar)
 # qui contient les liens de navigation principaux de l'application.
 #
 # Sections du menu :
 # - Jeux vidéos (gestion complète)
 # - Clubs d'activités
 # - Formations
 # - Membres
 # - Intervenants
 #}

{# Début de la barre latérale #}
<aside>
    <div id=\"sidebar\" class=\"nav-collapse\">
        {# Menu principal #}
        <ul class=\"sidebar-menu\" id=\"nav-accordion\">
            {# Logo et titre #}
            <p class=\"centered\">
                <a href=\"{{ path('app_profile_show') }}\">
                    <img src=\"{{ asset('assets/img/greece-1162816_640.jpg') }}\"
                         class=\"img-circle\" 
                         width=\"80\" 
                         alt=\"Logo MJC Agora\">
                </a>
            </p>
            <h5 class=\"centered\">MJC Agora</h5>
            {# Section Jeux vidéos #}
            <li class=\"sub-menu\">
                {# Lien principal avec état actif conditionnel #}
                <a {% if menuActif is defined and menuActif == 'Jeux' %}class=\"active\"{% endif %}
                   href=\"index.php\">
                    <i class=\"fa fa-desktop\"></i>
                    <span>Jeux vidéos</span>
                </a>

                {# Sous-menu des fonctionnalités jeux #}
                <ul class=\"sub\">
                    {# Gestion des jeux #}
                    <li>
                        <a href=\"{{ path('app_jeu_video_index') }}\">Jeux</a>
                    </li>
                    {# Gestion des genres #}
                    <li>
                        <a href=\"{{ path('app_genre_index') }}\">Genres</a>
                    </li>
                    {# Gestion des plateformes #}
                    <li>
                        <a href=\"{{ path('app_plateforme_index') }}\">Plateformes</a>
                    </li>
                    {# Gestion des marques #}
                    <li>
                        <a href=\"{{ path('app_marque_index') }}\">Marques</a>
                    </li>
                    {# Gestion des classifications PEGI #}
                    <li>
                        <a href=\"{{ path('app_pegi_index') }}\">Pegi</a>
                    </li>
                </ul>
            </li>
            <li class=\"sub-menu\">
                <a {% if menuActif is defined and menuActif == 'Tournois' %}class=\"active\"{% endif %}
                   href=\"javascript:;\">
                    <i class=\"fa-solid fa-trophy\"></i>
                    <span>Tournois</span>
                </a>
                {# Sous-menu des clubs - À implémenter #}
                <ul class=\"sub\">
                    {# Gestion des tournois #}
                    <li>
                        <a href=\"{{ path('app_tournoi_index') }}\">Tournois</a>
                    </li>
                    <li>
                        <a href=\"{{ path('app_participant_index') }}\">Participants</a>
                    </li>
                    <li>
                        <a href=\"{{ path('app_cat_tournois_index') }}\">Catégorie de tournois</a>
                    </li>
                    <li>
                        <a href=\"{{ path('app_stat_sql_tournoi') }}\">Dashboard tournois (SQL)</a>
                    </li>
                    <li>
                        <a href=\"{{ path('app_stat_dql_tournoi') }}\">Dashboard tournois (DQL)</a>
                    </li>
                    <li>
                        <a href=\"{{ path('app_stat_qb_tournoi') }}\">Dashboard tournois (Query Builder)</a>
                    </li>
                    <li>
                        <a href=\"{{ path('app_stat_tournoi_index') }}\">Statistiques tournois</a>
                    </li>
                </ul>
            </li>
            {# Section Clubs d'activités #}
            <li class=\"sub-menu\">
                <a {% if menuActif is defined and menuActif == 'Clubs' %}class=\"active\"{% endif %}
                   href=\"javascript:;\">
                    <i class=\"fa fa-group\"></i>
                    <span>Clubs d'activités</span>
                </a>
                {# Sous-menu des clubs - À implémenter #}
                <ul class=\"sub\">
                    <li><a href=\"index.php\">sous-menu 1</a></li>
                    <li><a href=\"index.php\">sous-menu 2</a></li>
                    <li><a href=\"index.php\">sous-menu 3</a></li>
                    <li><a href=\"index.php\">sous-menu 4</a></li>
                    <li><a href=\"index.php\">sous-menu 5</a></li>
                </ul>
            </li>

            {# Section Formations #}
            <li class=\"sub-menu\">
                <a {% if menuActif is defined and menuActif == 'Formations' %}class=\"active\"{% endif %}
                   href=\"javascript:;\">
                    <i class=\"fa fa-th\"></i>
                    <span>Formations</span>
                </a>
                {# Sous-menu des formations - À implémenter #}
                <ul class=\"sub\">
                    <li><a href=\"index.php\">sous-menu 1</a></li>
                    <li><a href=\"index.php\">sous-menu 2</a></li>
                    <li><a href=\"index.php\">sous-menu 3</a></li>
                    <li><a href=\"index.php\">sous-menu 4</a></li>
                    <li><a href=\"index.php\">sous-menu 5</a></li>
                </ul>
            </li>

            {# Section Profil utilisateur #}
            <li class=\"sub-menu\">
                <a {% if menuActif is defined and menuActif == 'Profil' %}class=\"active\"{% endif %}
                   href=\"javascript:;\">
                    <i class=\"fa fa-user\"></i>
                    <span>Mon Profil</span>
                </a>
                <ul class=\"sub\">
                    <li><a href=\"{{ path('app_profile_show') }}\">Voir mon profil</a></li>
                    <li><a href=\"{{ path('app_profile_edit') }}\">Modifier mon profil</a></li>
                </ul>
            </li>

            {# Section Membres - Réservée aux administrateurs #}
            {% if is_granted('ROLE_ADMIN') %}
            <li class=\"sub-menu\">
                <a {% if menuActif is defined and menuActif == 'Membres' %}class=\"active\"{% endif %}
                   href=\"javascript:;\">
                    <i class=\"fa fa-user-md\"></i>
                    <span>Gestion des Membres</span>
                </a>
                <ul class=\"sub\">
                    <li><a href=\"{{ path('app_membre_index') }}\">Liste des membres</a></li>
                    <li><a href=\"{{ path('app_membre_new') }}\">Ajouter un membre</a></li>
                </ul>
            </li>
            {% endif %}

            {# Section Intervenants #}
            <li class=\"sub-menu\">
                <a {% if menuActif is defined and menuActif == 'Intervenants' %}class=\"active\"{% endif %}
                   href=\"javascript:;\">
                    <i class=\"fa fa-smile-o\"></i>
                    <span>Intervenants</span>
                </a>
                {# Sous-menu des intervenants - À implémenter #}
                <ul class=\"sub\">
                    <li><a href=\"index.php\">sous-menu 1</a></li>
                    <li><a href=\"index.php\">sous-menu 2</a></li>
                    <li><a href=\"index.php\">sous-menu 3</a></li>
                    <li><a href=\"index.php\">sous-menu 4</a></li>
                    <li><a href=\"index.php\">sous-menu 5</a></li>
                </ul>
            </li>

            {# Section Logs de connexion - Réservée aux administrateurs #}
            {% if is_granted('ROLE_ADMIN') %}
            <li class=\"sub-menu\">
                <a {% if menuActif is defined and menuActif == 'Logs' %}class=\"active\"{% endif %}
                   href=\"javascript:;\">
                    <i class=\"fa fa-history\"></i>
                    <span>Logs</span>
                </a>
                <ul class=\"sub\">
                    <li><a href=\"{{ path('app_login_trace_index') }}\">Historique des connexions</a></li>
                </ul>
            </li>
            {% endif %}
        </ul>{# Fin du menu principal #}
    </div>{# Fin du conteneur sidebar #}
</aside>{# Fin de la barre latérale #}", "menu.html.twig", "/var/www/html/AP/Agora/templates/menu.html.twig");
    }
}
