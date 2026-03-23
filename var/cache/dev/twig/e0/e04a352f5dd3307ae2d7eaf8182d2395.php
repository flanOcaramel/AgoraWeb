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

/* lesJeux.html.twig */
class __TwigTemplate_bbfa21be41402f727ebd1465209ade4e extends Template
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
        // line 11
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lesJeux.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lesJeux.html.twig"));

        $this->parent = $this->load("base.html.twig", 11);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 13
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

        // line 14
        yield "    <div class=\"col-sm-12\">
        <section class=\"panel\">
            ";
        // line 17
        yield "            <div class=\"chat-room-head\">
                <h3><i class=\"fa fa-gamepad\"></i> Gérer les jeux</h3>
            </div>

            <div class=\"panel-body\">
                ";
        // line 23
        yield "                <table class=\"table table-striped table-advance table-hover\">
                <thead>
                    <tr class=\"tableau-entete\">
                        <th><i class=\"fa fa-barcode\"></i> Réf.</th>
                        <th><i class=\"fa fa-bookmark\"></i> Nom</th>
                        <th><i class=\"fa fa-eur\"></i> Prix</th>
                        <th><i class=\"fa fa-calendar\"></i> Parution</th>
                        <th><i class=\"fa-solid fa-marker\"></i>Genre</th>
                        <th><i class=\"fa-solid fa-signature\"></i>Marque</th>
                        <th><i class=\"fa-brands fa-xbox\"></i>Plateforme</th>
                        <th><i class=\"fa-solid fa-1\"></i>PEGI</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 39
        yield "                    <tr>
                        <form action=\"index.php?uc=gererJeux\" method=\"post\">
                            ";
        // line 42
        yield "                            <td>
                                <input type=\"text\" 
                                       name=\"refJeu\" 
                                       size=\"10\" 
                                       required 
                                       placeholder=\"Référence\">
                            </td>

                            ";
        // line 51
        yield "                            <td>
                                <input type=\"text\" 
                                       name=\"nom\" 
                                       size=\"20\" 
                                       required 
                                       placeholder=\"Nom du jeu\">
                            </td>

                            ";
        // line 60
        yield "                            <td>
                                <input type=\"number\" 
                                       name=\"prix\" 
                                       step=\"0.01\" 
                                       style=\"width:80px;\" 
                                       required 
                                       placeholder=\"Prix\">
                            </td>

                            ";
        // line 70
        yield "                            <td>
                                <input type=\"date\" 
                                       name=\"dateParution\" 
                                       style=\"width:130px;\" 
                                       required>
                            </td>

                            ";
        // line 78
        yield "                            <td>
                                <select name=\"idGenre\">
                                    ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tbGenres"]) || array_key_exists("tbGenres", $context) ? $context["tbGenres"] : (function () { throw new RuntimeError('Variable "tbGenres" does not exist.', 80, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
            // line 81
            yield "                                        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["genre"], "identifiant", [], "any", false, false, false, 81), "html", null, true);
            yield "\">
                                            ";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["genre"], "libelle", [], "any", false, false, false, 82), "html", null, true);
            yield "
                                        </option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['genre'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        yield "                                </select>
                            </td>
                            ";
        // line 88
        yield "                            <td>
                                <select name=\"idMarque\">
                                    ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tbMarques"]) || array_key_exists("tbMarques", $context) ? $context["tbMarques"] : (function () { throw new RuntimeError('Variable "tbMarques" does not exist.', 90, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["marque"]) {
            // line 91
            yield "                                        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["marque"], "identifiant", [], "any", false, false, false, 91), "html", null, true);
            yield "\">
                                            ";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["marque"], "libelle", [], "any", false, false, false, 92), "html", null, true);
            yield "
                                        </option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['marque'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        yield "                                </select>
                            </td>

                            ";
        // line 99
        yield "                            <td>
                                <select name=\"idPlateforme\">
                                    ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tbPlateformes"]) || array_key_exists("tbPlateformes", $context) ? $context["tbPlateformes"] : (function () { throw new RuntimeError('Variable "tbPlateformes" does not exist.', 101, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["plateforme"]) {
            // line 102
            yield "                                        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plateforme"], "identifiant", [], "any", false, false, false, 102), "html", null, true);
            yield "\">
                                            ";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plateforme"], "libelle", [], "any", false, false, false, 103), "html", null, true);
            yield "
                                        </option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['plateforme'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        yield "                                </select>
                            </td>

                            ";
        // line 110
        yield "                            <td>
                                <select name=\"idPegi\">
                                    ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tbPegis"]) || array_key_exists("tbPegis", $context) ? $context["tbPegis"] : (function () { throw new RuntimeError('Variable "tbPegis" does not exist.', 112, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pegi"]) {
            // line 113
            yield "                                        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pegi"], "identifiant", [], "any", false, false, false, 113), "html", null, true);
            yield "\">
                                            ";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pegi"], "age", [], "any", false, false, false, 114), "html", null, true);
            yield "
                                        </option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['pegi'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        yield "                                </select>
                            </td>

                            ";
        // line 121
        yield "                            <td>
                                <button class=\"btn btn-primary btn-xs\" 
                                        type=\"submit\" 
                                        name=\"cmdAction\" 
                                        value=\"ajouterNouveauJeu\" 
                                        title=\"Enregistrer nouveau jeu\">
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
        // line 137
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tbJeux"]) || array_key_exists("tbJeux", $context) ? $context["tbJeux"] : (function () { throw new RuntimeError('Variable "tbJeux" does not exist.', 137, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["jeu"]) {
            // line 138
            yield "                        <tr>
                            <form action=\"index.php?uc=gererJeux\" method=\"post\" style=\"display: contents;\">
                                <input type=\"hidden\" name=\"refJeu\" value=\"";
            // line 140
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["jeu"], "refJeu", [], "any", false, false, false, 140));
            yield "\">
                                ";
            // line 142
            yield "                                ";
            if ((array_key_exists("refJeuModif", $context) && (CoreExtension::getAttribute($this->env, $this->source, $context["jeu"], "refJeu", [], "any", false, false, false, 142) == (isset($context["refJeuModif"]) || array_key_exists("refJeuModif", $context) ? $context["refJeuModif"] : (function () { throw new RuntimeError('Variable "refJeuModif" does not exist.', 142, $this->source); })())))) {
                // line 143
                yield "                                    ";
                // line 144
                yield "                                    <td>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["jeu"], "refJeu", [], "any", false, false, false, 144));
                yield "</td>

                                    ";
                // line 147
                yield "                                    <td>
                                        <input type=\"text\" 
                                               name=\"nom\" 
                                               value=\"";
                // line 150
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["jeu"], "nom", [], "any", false, false, false, 150));
                yield "\" 
                                               size=\"20\" 
                                               required>
                                    </td>

                                    ";
                // line 156
                yield "                                    <td>
                                        <input type=\"number\" 
                                               name=\"prix\" 
                                               step=\"0.01\" 
                                               value=\"";
                // line 160
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["jeu"], "prix", [], "any", false, false, false, 160));
                yield "\" 
                                               style=\"width:80px;\" 
                                               required>
                                    </td>

                                    ";
                // line 166
                yield "                                    <td>
                                        <input type=\"date\" 
                                               name=\"dateParution\" 
                                               value=\"";
                // line 169
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["jeu"], "dateParution", [], "any", false, false, false, 169));
                yield "\" 
                                               style=\"width:130px;\" 
                                               required>
                                    </td>

                                    ";
                // line 175
                yield "                                    <td>
                                        <select name=\"idGenre\">
                                            ";
                // line 177
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tbGenres"]) || array_key_exists("tbGenres", $context) ? $context["tbGenres"] : (function () { throw new RuntimeError('Variable "tbGenres" does not exist.', 177, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
                    // line 178
                    yield "                                                ";
                    $context["selected"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["jeu"], "libGenre", [], "any", false, false, false, 178) == CoreExtension::getAttribute($this->env, $this->source, $context["genre"], "libelle", [], "any", false, false, false, 178))) ? ("selected") : (""));
                    // line 179
                    yield "                                                <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["genre"], "identifiant", [], "any", false, false, false, 179), "html", null, true);
                    yield "\" ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["selected"]) || array_key_exists("selected", $context) ? $context["selected"] : (function () { throw new RuntimeError('Variable "selected" does not exist.', 179, $this->source); })()), "html", null, true);
                    yield ">
                                                    ";
                    // line 180
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["genre"], "libelle", [], "any", false, false, false, 180), "html", null, true);
                    yield "
                                                </option>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['genre'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 183
                yield "                                        </select>
                                    </td>

                                    ";
                // line 187
                yield "                                    <td>
                                        <select name=\"idMarque\">
                                            ";
                // line 189
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tbMarques"]) || array_key_exists("tbMarques", $context) ? $context["tbMarques"] : (function () { throw new RuntimeError('Variable "tbMarques" does not exist.', 189, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["marque"]) {
                    // line 190
                    yield "                                                ";
                    $context["selected"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["jeu"], "nomMarque", [], "any", false, false, false, 190) == CoreExtension::getAttribute($this->env, $this->source, $context["marque"], "libelle", [], "any", false, false, false, 190))) ? ("selected") : (""));
                    // line 191
                    yield "                                                <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["marque"], "identifiant", [], "any", false, false, false, 191), "html", null, true);
                    yield "\" ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["selected"]) || array_key_exists("selected", $context) ? $context["selected"] : (function () { throw new RuntimeError('Variable "selected" does not exist.', 191, $this->source); })()), "html", null, true);
                    yield ">
                                                    ";
                    // line 192
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["marque"], "libelle", [], "any", false, false, false, 192), "html", null, true);
                    yield "
                                                </option>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['marque'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 195
                yield "                                        </select>
                                    </td>

                                    ";
                // line 199
                yield "                                    <td>
                                        <select name=\"idPlateforme\">
                                            ";
                // line 201
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tbPlateformes"]) || array_key_exists("tbPlateformes", $context) ? $context["tbPlateformes"] : (function () { throw new RuntimeError('Variable "tbPlateformes" does not exist.', 201, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["plateforme"]) {
                    // line 202
                    yield "                                                ";
                    $context["selected"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["jeu"], "libPlateforme", [], "any", false, false, false, 202) == CoreExtension::getAttribute($this->env, $this->source, $context["plateforme"], "libelle", [], "any", false, false, false, 202))) ? ("selected") : (""));
                    // line 203
                    yield "                                                <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plateforme"], "identifiant", [], "any", false, false, false, 203), "html", null, true);
                    yield "\" ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["selected"]) || array_key_exists("selected", $context) ? $context["selected"] : (function () { throw new RuntimeError('Variable "selected" does not exist.', 203, $this->source); })()), "html", null, true);
                    yield ">
                                                    ";
                    // line 204
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plateforme"], "libelle", [], "any", false, false, false, 204), "html", null, true);
                    yield "
                                                </option>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['plateforme'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 207
                yield "                                        </select>
                                    </td>

                                    ";
                // line 211
                yield "                                    <td>
                                        <select name=\"idPegi\">
                                            ";
                // line 213
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tbPegis"]) || array_key_exists("tbPegis", $context) ? $context["tbPegis"] : (function () { throw new RuntimeError('Variable "tbPegis" does not exist.', 213, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["pegi"]) {
                    // line 214
                    yield "                                                ";
                    $context["selected"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["jeu"], "ageLimite", [], "any", false, false, false, 214) == CoreExtension::getAttribute($this->env, $this->source, $context["pegi"], "age", [], "any", false, false, false, 214))) ? ("selected") : (""));
                    // line 215
                    yield "                                                <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pegi"], "identifiant", [], "any", false, false, false, 215), "html", null, true);
                    yield "\" ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["selected"]) || array_key_exists("selected", $context) ? $context["selected"] : (function () { throw new RuntimeError('Variable "selected" does not exist.', 215, $this->source); })()), "html", null, true);
                    yield ">
                                                    ";
                    // line 216
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pegi"], "age", [], "any", false, false, false, 216), "html", null, true);
                    yield "
                                                </option>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['pegi'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 219
                yield "                                        </select>
                                    </td>

                                    ";
                // line 223
                yield "                                    <td>
                                        <button class=\"btn btn-primary btn-xs\" 
                                                type=\"submit\" 
                                                name=\"cmdAction\" 
                                                value=\"validerModifierJeu\" 
                                                title=\"Enregistrer\">
                                            <i class=\"fa fa-save\"></i>
                                        </button>
                                        <button class=\"btn btn-warning btn-xs\" 
                                                type=\"submit\" 
                                                name=\"cmdAction\" 
                                                value=\"annulerModifierJeu\" 
                                                title=\"Annuler\">
                                            <i class=\"fa fa-undo\"></i>
                                        </button>
                                    </td>
                                ";
                // line 240
                yield "                                ";
            } else {
                // line 241
                yield "                                    ";
                // line 242
                yield "                                    <td>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["jeu"], "refJeu", [], "any", false, false, false, 242));
                yield "</td>

                                    ";
                // line 245
                yield "                                    <td>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["jeu"], "nom", [], "any", false, false, false, 245));
                yield "</td>

                                    ";
                // line 248
                yield "                                    <td>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["jeu"], "prix", [], "any", false, false, false, 248));
                yield " €</td>

                                    ";
                // line 251
                yield "                                    <td>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["jeu"], "dateParution", [], "any", false, false, false, 251), "d/m/Y"), "html", null, true);
                yield "</td>

                                    ";
                // line 254
                yield "                                    <td>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["jeu"], "libGenre", [], "any", false, false, false, 254));
                yield "</td>

                                    ";
                // line 257
                yield "                                    <td>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["jeu"], "nomMarque", [], "any", false, false, false, 257));
                yield "</td>

                                    ";
                // line 260
                yield "                                    <td>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["jeu"], "libPlateforme", [], "any", false, false, false, 260));
                yield "</td>

                                    ";
                // line 263
                yield "                                    <td>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["jeu"], "ageLimite", [], "any", false, false, false, 263));
                yield "</td>

                                    ";
                // line 266
                yield "                                    <td>
                                        ";
                // line 268
                yield "                                        ";
                if ((((isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 268, $this->source); })()) != "rien") && (CoreExtension::getAttribute($this->env, $this->source, $context["jeu"], "refJeu", [], "any", false, false, false, 268) == (isset($context["refJeuNotif"]) || array_key_exists("refJeuNotif", $context) ? $context["refJeuNotif"] : (function () { throw new RuntimeError('Variable "refJeuNotif" does not exist.', 268, $this->source); })())))) {
                    // line 269
                    yield "                                            <button class=\"btn btn-success btn-xs\">
                                                <i class=\"fa fa-check\"></i> ";
                    // line 270
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 270, $this->source); })()), "html", null, true);
                    yield "
                                            </button>
                                        ";
                }
                // line 273
                yield "
                                        ";
                // line 275
                yield "                                        <button class=\"btn btn-primary btn-xs\" 
                                                type=\"submit\" 
                                                name=\"cmdAction\" 
                                                value=\"demanderModifierJeu\" 
                                                title=\"Modifier\">
                                            <i class=\"fa fa-pencil\"></i>
                                        </button>

                                        ";
                // line 284
                yield "                                        <button class=\"btn btn-danger btn-xs\" 
                                                type=\"submit\" 
                                                name=\"cmdAction\" 
                                                value=\"supprimerJeu\" 
                                                title=\"Supprimer\" 
                                                onclick=\"return confirm('Voulez-vous vraiment supprimer ce jeu ?');\">
                                            <i class=\"fa fa-trash-o\"></i>
                                        </button>
                                    </td>
                                ";
            }
            // line 294
            yield "                            </form>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['jeu'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 297
        yield "                </tbody>
            </table>
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
        return "lesJeux.html.twig";
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
        return array (  583 => 297,  575 => 294,  563 => 284,  553 => 275,  550 => 273,  544 => 270,  541 => 269,  538 => 268,  535 => 266,  529 => 263,  523 => 260,  517 => 257,  511 => 254,  505 => 251,  499 => 248,  493 => 245,  487 => 242,  485 => 241,  482 => 240,  464 => 223,  459 => 219,  450 => 216,  443 => 215,  440 => 214,  436 => 213,  432 => 211,  427 => 207,  418 => 204,  411 => 203,  408 => 202,  404 => 201,  400 => 199,  395 => 195,  386 => 192,  379 => 191,  376 => 190,  372 => 189,  368 => 187,  363 => 183,  354 => 180,  347 => 179,  344 => 178,  340 => 177,  336 => 175,  328 => 169,  323 => 166,  315 => 160,  309 => 156,  301 => 150,  296 => 147,  290 => 144,  288 => 143,  285 => 142,  281 => 140,  277 => 138,  273 => 137,  255 => 121,  250 => 117,  241 => 114,  236 => 113,  232 => 112,  228 => 110,  223 => 106,  214 => 103,  209 => 102,  205 => 101,  201 => 99,  196 => 95,  187 => 92,  182 => 91,  178 => 90,  174 => 88,  170 => 85,  161 => 82,  156 => 81,  152 => 80,  148 => 78,  139 => 70,  128 => 60,  118 => 51,  108 => 42,  104 => 39,  87 => 23,  80 => 17,  76 => 14,  63 => 13,  40 => 11,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# 
 # Template de gestion des jeux vidéo
 #
 # Fonctionnalités :
 # - Affichage de la liste complète des jeux
 # - Ajout d'un nouveau jeu
 # - Modification des informations d'un jeu
 # - Suppression d'un jeu
 # - Gestion des associations (genre, marque, plateforme, PEGI)
 #}
{% extends \"base.html.twig\" %}

{% block central %}
    <div class=\"col-sm-12\">
        <section class=\"panel\">
            {# En-tête du panneau #}
            <div class=\"chat-room-head\">
                <h3><i class=\"fa fa-gamepad\"></i> Gérer les jeux</h3>
            </div>

            <div class=\"panel-body\">
                {# Tableau des jeux #}
                <table class=\"table table-striped table-advance table-hover\">
                <thead>
                    <tr class=\"tableau-entete\">
                        <th><i class=\"fa fa-barcode\"></i> Réf.</th>
                        <th><i class=\"fa fa-bookmark\"></i> Nom</th>
                        <th><i class=\"fa fa-eur\"></i> Prix</th>
                        <th><i class=\"fa fa-calendar\"></i> Parution</th>
                        <th><i class=\"fa-solid fa-marker\"></i>Genre</th>
                        <th><i class=\"fa-solid fa-signature\"></i>Marque</th>
                        <th><i class=\"fa-brands fa-xbox\"></i>Plateforme</th>
                        <th><i class=\"fa-solid fa-1\"></i>PEGI</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    {# Formulaire d'ajout d'un nouveau jeu #}
                    <tr>
                        <form action=\"index.php?uc=gererJeux\" method=\"post\">
                            {# Référence du jeu #}
                            <td>
                                <input type=\"text\" 
                                       name=\"refJeu\" 
                                       size=\"10\" 
                                       required 
                                       placeholder=\"Référence\">
                            </td>

                            {# Nom du jeu #}
                            <td>
                                <input type=\"text\" 
                                       name=\"nom\" 
                                       size=\"20\" 
                                       required 
                                       placeholder=\"Nom du jeu\">
                            </td>

                            {# Prix du jeu #}
                            <td>
                                <input type=\"number\" 
                                       name=\"prix\" 
                                       step=\"0.01\" 
                                       style=\"width:80px;\" 
                                       required 
                                       placeholder=\"Prix\">
                            </td>

                            {# Date de parution #}
                            <td>
                                <input type=\"date\" 
                                       name=\"dateParution\" 
                                       style=\"width:130px;\" 
                                       required>
                            </td>

                            {# Sélection du genre #}
                            <td>
                                <select name=\"idGenre\">
                                    {% for genre in tbGenres %}
                                        <option value=\"{{ genre.identifiant }}\">
                                            {{ genre.libelle }}
                                        </option>
                                    {% endfor %}
                                </select>
                            </td>
                            {# Sélection de la marque #}
                            <td>
                                <select name=\"idMarque\">
                                    {% for marque in tbMarques %}
                                        <option value=\"{{ marque.identifiant }}\">
                                            {{ marque.libelle }}
                                        </option>
                                    {% endfor %}
                                </select>
                            </td>

                            {# Sélection de la plateforme #}
                            <td>
                                <select name=\"idPlateforme\">
                                    {% for plateforme in tbPlateformes %}
                                        <option value=\"{{ plateforme.identifiant }}\">
                                            {{ plateforme.libelle }}
                                        </option>
                                    {% endfor %}
                                </select>
                            </td>

                            {# Sélection du PEGI #}
                            <td>
                                <select name=\"idPegi\">
                                    {% for pegi in tbPegis %}
                                        <option value=\"{{ pegi.identifiant }}\">
                                            {{ pegi.age }}
                                        </option>
                                    {% endfor %}
                                </select>
                            </td>

                            {# Boutons d'action #}
                            <td>
                                <button class=\"btn btn-primary btn-xs\" 
                                        type=\"submit\" 
                                        name=\"cmdAction\" 
                                        value=\"ajouterNouveauJeu\" 
                                        title=\"Enregistrer nouveau jeu\">
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
                    {% for jeu in tbJeux %}
                        <tr>
                            <form action=\"index.php?uc=gererJeux\" method=\"post\" style=\"display: contents;\">
                                <input type=\"hidden\" name=\"refJeu\" value=\"{{ jeu.refJeu|e }}\">
                                {# Mode édition d'un jeu existant #}
                                {% if refJeuModif is defined and jeu.refJeu == refJeuModif %}
                                    {# Référence du jeu (en lecture seule) #}
                                    <td>{{ jeu.refJeu|e }}</td>

                                    {# Champ de modification du nom #}
                                    <td>
                                        <input type=\"text\" 
                                               name=\"nom\" 
                                               value=\"{{ jeu.nom|e }}\" 
                                               size=\"20\" 
                                               required>
                                    </td>

                                    {# Champ de modification du prix #}
                                    <td>
                                        <input type=\"number\" 
                                               name=\"prix\" 
                                               step=\"0.01\" 
                                               value=\"{{ jeu.prix|e }}\" 
                                               style=\"width:80px;\" 
                                               required>
                                    </td>

                                    {# Champ de modification de la date de parution #}
                                    <td>
                                        <input type=\"date\" 
                                               name=\"dateParution\" 
                                               value=\"{{ jeu.dateParution|e }}\" 
                                               style=\"width:130px;\" 
                                               required>
                                    </td>

                                    {# Liste déroulante des genres #}
                                    <td>
                                        <select name=\"idGenre\">
                                            {% for genre in tbGenres %}
                                                {% set selected = (jeu.libGenre == genre.libelle) ? 'selected' : '' %}
                                                <option value=\"{{ genre.identifiant }}\" {{ selected }}>
                                                    {{ genre.libelle }}
                                                </option>
                                            {% endfor %}
                                        </select>
                                    </td>

                                    {# Liste déroulante des marques #}
                                    <td>
                                        <select name=\"idMarque\">
                                            {% for marque in tbMarques %}
                                                {% set selected = (jeu.nomMarque == marque.libelle) ? 'selected' : '' %}
                                                <option value=\"{{ marque.identifiant }}\" {{ selected }}>
                                                    {{ marque.libelle }}
                                                </option>
                                            {% endfor %}
                                        </select>
                                    </td>

                                    {# Liste déroulante des plateformes #}
                                    <td>
                                        <select name=\"idPlateforme\">
                                            {% for plateforme in tbPlateformes %}
                                                {% set selected = (jeu.libPlateforme == plateforme.libelle) ? 'selected' : '' %}
                                                <option value=\"{{ plateforme.identifiant }}\" {{ selected }}>
                                                    {{ plateforme.libelle }}
                                                </option>
                                            {% endfor %}
                                        </select>
                                    </td>

                                    {# Liste déroulante des PEGI #}
                                    <td>
                                        <select name=\"idPegi\">
                                            {% for pegi in tbPegis %}
                                                {% set selected = (jeu.ageLimite == pegi.age) ? 'selected' : '' %}
                                                <option value=\"{{ pegi.identifiant }}\" {{ selected }}>
                                                    {{ pegi.age }}
                                                </option>
                                            {% endfor %}
                                        </select>
                                    </td>

                                    {# Boutons d'action pour la modification #}
                                    <td>
                                        <button class=\"btn btn-primary btn-xs\" 
                                                type=\"submit\" 
                                                name=\"cmdAction\" 
                                                value=\"validerModifierJeu\" 
                                                title=\"Enregistrer\">
                                            <i class=\"fa fa-save\"></i>
                                        </button>
                                        <button class=\"btn btn-warning btn-xs\" 
                                                type=\"submit\" 
                                                name=\"cmdAction\" 
                                                value=\"annulerModifierJeu\" 
                                                title=\"Annuler\">
                                            <i class=\"fa fa-undo\"></i>
                                        </button>
                                    </td>
                                {# Mode affichage normal d'un jeu #}
                                {% else %}
                                    {# Affichage de la référence #}
                                    <td>{{ jeu.refJeu|e }}</td>

                                    {# Affichage du nom #}
                                    <td>{{ jeu.nom|e }}</td>

                                    {# Affichage du prix #}
                                    <td>{{ jeu.prix|e }} €</td>

                                    {# Affichage de la date de parution #}
                                    <td>{{ jeu.dateParution|date('d/m/Y') }}</td>

                                    {# Affichage du genre #}
                                    <td>{{ jeu.libGenre|e }}</td>

                                    {# Affichage de la marque #}
                                    <td>{{ jeu.nomMarque|e }}</td>

                                    {# Affichage de la plateforme #}
                                    <td>{{ jeu.libPlateforme|e }}</td>

                                    {# Affichage de l'âge PEGI #}
                                    <td>{{ jeu.ageLimite|e }}</td>

                                    {# Boutons d'action #}
                                    <td>
                                        {# Affichage de la notification si présente #}
                                        {% if notification != 'rien' and jeu.refJeu == refJeuNotif %}
                                            <button class=\"btn btn-success btn-xs\">
                                                <i class=\"fa fa-check\"></i> {{ notification }}
                                            </button>
                                        {% endif %}

                                        {# Bouton de modification #}
                                        <button class=\"btn btn-primary btn-xs\" 
                                                type=\"submit\" 
                                                name=\"cmdAction\" 
                                                value=\"demanderModifierJeu\" 
                                                title=\"Modifier\">
                                            <i class=\"fa fa-pencil\"></i>
                                        </button>

                                        {# Bouton de suppression #}
                                        <button class=\"btn btn-danger btn-xs\" 
                                                type=\"submit\" 
                                                name=\"cmdAction\" 
                                                value=\"supprimerJeu\" 
                                                title=\"Supprimer\" 
                                                onclick=\"return confirm('Voulez-vous vraiment supprimer ce jeu ?');\">
                                            <i class=\"fa fa-trash-o\"></i>
                                        </button>
                                    </td>
                                {% endif %}
                            </form>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </section>
</div>
{% endblock %}


", "lesJeux.html.twig", "/var/www/html/AP/Agora/templates/lesJeux.html.twig");
    }
}
