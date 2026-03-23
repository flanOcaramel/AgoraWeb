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

/* base.html.twig */
class __TwigTemplate_f02211caf2cc3d9d3347d523fc200caa extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'menu' => [$this, 'block_menu'],
            'central' => [$this, 'block_central'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 18
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    ";
        // line 22
        yield "    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"Interface d'administration de la MJC Agora\">
    <meta name=\"author\" content=\"sio\">
    <meta name=\"keyword\" content=\"MJC, Agora\">
    <title>AgorA - Administration</title>
    ";
        // line 28
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 45
        yield " <!-- =======================================================
 Template Name: Dashio
 Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
 Author: TemplateMag.com
 License: https://templatemag.com/license/
 ======================================================= -->
 </head>
<body>
    <section id=\"container\">
        ";
        // line 55
        yield "        <header class=\"header black-bg\">
            ";
        // line 57
        yield "            <div class=\"sidebar-toggle-box\">
                <div class=\"fa fa-bars tooltips\" 
                     data-placement=\"right\" 
                     data-original-title=\"Toggle Navigation\">
                </div>
            </div>

            ";
        // line 65
        yield "            <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        yield "\" class=\"logo\">
                <b>Ago<span>rA</span></b>
            </a>

            ";
        // line 70
        yield "                           <ul class=\"nav pull-right top-menu\">
                    ";
        // line 72
        yield "                    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 72, $this->source); })()), "user", [], "any", false, false, false, 72)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 73
            yield "                        ";
            // line 74
            yield "                        <a href=\"\" class=\"userAgo\">
                            ";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "user", [], "any", false, false, false, 75), "prenomMembre", [], "any", false, false, false, 75), "html", null, true);
            yield " 
                            ";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "user", [], "any", false, false, false, 76), "nomMembre", [], "any", false, false, false, 76), "html", null, true);
            yield "
                        </a>
                        <li>
                            <a class=\"logout\" href=\"";
            // line 79
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">
                                Se déconnecter
                            </a>
                        </li>
                    ";
        } elseif (((        // line 83
array_key_exists("app", $context) && CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", true, true, false, 83)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 83, $this->source); })()), "session", [], "any", false, false, false, 83), "has", ["idUtilisateur"], "method", false, false, false, 83))) {
            // line 84
            yield "                        ";
            // line 85
            yield "                        <a href=\"\" class=\"userAgo\">
                            ";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 86, $this->source); })()), "session", [], "any", false, false, false, 86), "get", ["prenomUtilisateur"], "method", false, false, false, 86), "html", null, true);
            yield " 
                            ";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 87, $this->source); })()), "session", [], "any", false, false, false, 87), "get", ["nomUtilisateur"], "method", false, false, false, 87), "html", null, true);
            yield "
                        </a>
                        <li>
                            <a class=\"logout\" href=\"";
            // line 90
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">
                                Se déconnecter
                            </a>
                        </li>
                    ";
        } elseif ((        // line 94
array_key_exists("session", $context) && CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "idUtilisateur", [], "any", true, true, false, 94))) {
            // line 95
            yield "                        ";
            // line 96
            yield "                        <a href=\"\" class=\"userAgo\">
                            ";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 97, $this->source); })()), "prenomUtilisateur", [], "any", false, false, false, 97), "html", null, true);
            yield " 
                            ";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 98, $this->source); })()), "nomUtilisateur", [], "any", false, false, false, 98), "html", null, true);
            yield "
                        </a>
                        <li>
                            <a class=\"logout\" href=\"index.php?uc=deconnexion\">
                                Se déconnecter
                            </a>
                        </li>
                    ";
        } else {
            // line 106
            yield "                        ";
            // line 107
            yield "                        <li>
                            <a class=\"logout\" href=\"";
            // line 108
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
            yield "\">
                                Se connecter
                            </a>
                        </li>
                    ";
        }
        // line 113
        yield "                </ul>
 </header>
 <!--header end-->
 
";
        // line 117
        yield from $this->unwrap()->yieldBlock('menu', $context, $blocks);
        // line 123
        yield " 
";
        // line 125
        yield Twig\Extension\CoreExtension::include($this->env, $context, "messages.html.twig");
        yield "

        ";
        // line 128
        yield "        <section id=\"main-content\">
            <section class=\"wrapper\">
                <div class=\"container-fluid\">
                    ";
        // line 132
        yield "                    ";
        yield from $this->unwrap()->yieldBlock('central', $context, $blocks);
        // line 134
        yield "
                    ";
        // line 136
        yield "                    ";
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 138
        yield "                </div>
            </section>
        </section>

        ";
        // line 143
        yield "        <footer class=\"site-footer\">
            <div class=\"text-center\">
                ";
        // line 146
        yield "                <p>
                    Crée par Logma avec le template bootstrap Dashio :
                    &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
                </p>

                ";
        // line 152
        yield "                <div class=\"credits\">
                    Created with Dashio template by 
                    <a href=\"https://templatemag.com/\">TemplateMag</a>
                </div>

                ";
        // line 158
        yield "                <a href=\"#\" class=\"go-top\">
                    <i class=\"fa fa-angle-up\"></i>
                </a>
            </div>
        </footer>
 <!--footer end-->
 </section>
 <!-- js placed at the end of the document so the pages load faster -->
 <script src=\"";
        // line 166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->getAssetUrl("assets/lib/jquery/jquery.min.js"), "html", null, true);
        yield "\"></script>
 <script src=\"";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->getAssetUrl("assets/lib/bootstrap/js/bootstrap.min.js"), "html", null, true);
        yield "\"></script>
 <script class=\"include\" type=\"text/javascript\" src=\"";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->getAssetUrl("assets/lib/jquery.dcjqaccordion.2.7.js"), "html", null, true);
        yield "\"></script>
 <script src=\"";
        // line 169
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->getAssetUrl("assets/lib/jquery.scrollTo.min.js"), "html", null, true);
        yield "\"></script>
 <!--common script for all pages-->
 <script src=\"";
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->getAssetUrl("assets/lib/common-scripts.js"), "html", null, true);
        yield "\"></script>
 <script>
 // Initialisation du menu sidebar au chargement de la page
 \$(document).ready(function() {
     // S'assurer que le menu est initialisé même si le script common-scripts.js n'a pas fonctionné
     if (typeof Script !== 'undefined') {
         Script();
     }
     
     // Gestionnaire alternatif pour le bouton hamburger
     \$('.sidebar-toggle-box, .fa-bars').on('click', function(e) {
         e.preventDefault();
         if (\$('#sidebar > ul').is(\":visible\") === true) {
             \$('#main-content').css({'margin-left': '0px'});
             \$('#sidebar').css({'margin-left': '-210px'});
             \$('#sidebar > ul').hide();
             \$(\"#container\").addClass(\"sidebar-closed\");
         } else {
             \$('#main-content').css({'margin-left': '210px'});
             \$('#sidebar > ul').show();
             \$('#sidebar').css({'margin-left': '0'});
             \$(\"#container\").removeClass(\"sidebar-closed\");
         }
     });
 });
 </script>
 <!--script pour le calendrier-->
 <script src=\"";
        // line 198
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->getAssetUrl("assets/lib/jquery-ui-1.9.2.custom.min.js"), "html", null, true);
        yield "\"></script>
 <script src=\"";
        // line 199
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->getAssetUrl("assets/lib/fullcalendar/fullcalendar.min.js"), "html", null, true);
        yield "\"></script>
 <script src=\"";
        // line 200
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->getAssetUrl("assets/lib/calendar-conf-events.js"), "html", null, true);
        yield "\"></script>
 <!-- pour la connexion -->
 <script src=\"";
        // line 202
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->getAssetUrl("assets/libAgora/sha512.js"), "html", null, true);
        yield "\"></script>
</body>
</html>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 28
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 29
        yield " <!-- Bootstrap core CSS -->
 <link href=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->getAssetUrl("assets/lib/bootstrap/css/bootstrap.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\"/>
 <!--external css-->
 <link href=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->getAssetUrl("assets/lib/font-awesome/css/font-awesome.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />
 <link href=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->getAssetUrl("assets/lib/fullcalendar/bootstrap-fullcalendar.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />
 <!--external css pour les dates dans la gestion des tournois-->
 <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->getAssetUrl("assets/lib/bootstrap-fileupload/bootstrap-fileupload.css"), "html", null, true);
        yield "\" />
 <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->getAssetUrl("assets/lib/bootstrap-datepicker/css/datepicker.css"), "html", null, true);
        yield "\" />
 <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->getAssetUrl("assets/lib/bootstrap-timepicker/compiled/timepicker.css"), "html", null, true);
        yield "\" />
 <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->getAssetUrl("assets/lib/bootstrap-datetimepicker/css/datetimepicker.css"), "html", null, true);
        yield "\" />
 <!-- Custom styles for this template -->
 <link href=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
 <link href=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->getAssetUrl("assets/css/style-responsive.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
 <!-- Style pour agora -->
 <link href=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->getAssetUrl("assets/css/styleAgora.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
 ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 117
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_menu(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 118
        $context["isLogged"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 118, $this->source); })()), "user", [], "any", false, false, false, 118) || ((array_key_exists("app", $context) && CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", true, true, false, 118)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 118, $this->source); })()), "session", [], "any", false, false, false, 118), "has", ["idUtilisateur"], "method", false, false, false, 118))) || (array_key_exists("session", $context) && CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "idUtilisateur", [], "any", true, true, false, 118)));
        // line 119
        if ((($tmp = (isset($context["isLogged"]) || array_key_exists("isLogged", $context) ? $context["isLogged"] : (function () { throw new RuntimeError('Variable "isLogged" does not exist.', 119, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 120
            yield " ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "menu.html.twig");
            yield "
";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 132
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

        // line 133
        yield "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 136
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

        // line 137
        yield "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  463 => 137,  450 => 136,  439 => 133,  426 => 132,  411 => 120,  409 => 119,  407 => 118,  394 => 117,  381 => 43,  376 => 41,  372 => 40,  367 => 38,  363 => 37,  359 => 36,  355 => 35,  350 => 33,  346 => 32,  341 => 30,  338 => 29,  325 => 28,  309 => 202,  304 => 200,  300 => 199,  296 => 198,  266 => 171,  261 => 169,  257 => 168,  253 => 167,  249 => 166,  239 => 158,  232 => 152,  225 => 146,  221 => 143,  215 => 138,  212 => 136,  209 => 134,  206 => 132,  201 => 128,  196 => 125,  193 => 123,  191 => 117,  185 => 113,  177 => 108,  174 => 107,  172 => 106,  161 => 98,  157 => 97,  154 => 96,  152 => 95,  150 => 94,  143 => 90,  137 => 87,  133 => 86,  130 => 85,  128 => 84,  126 => 83,  119 => 79,  113 => 76,  109 => 75,  106 => 74,  104 => 73,  101 => 72,  98 => 70,  90 => 65,  81 => 57,  78 => 55,  67 => 45,  65 => 28,  57 => 22,  52 => 18,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# 
 # Template de base de l'application
 #
 # Ce template définit la structure commune à toutes les pages :
 # - En-tête HTML avec métadonnées
 # - Feuilles de style communes
 # - Structure de navigation
 # - Barre latérale (menu)
 # - Zone de contenu principal
 # - Pied de page
 # 
 # Blocs disponibles :
 # - stylesheets : CSS additionnels
 # - menu : Menu latéral (peut être désactivé)
 # - central : Contenu principal de la page
 # - body : Contenu alternatif (rarement utilisé)
 #}
<!DOCTYPE html>
<html lang=\"fr\">
<head>
    {# Métadonnées de base #}
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"Interface d'administration de la MJC Agora\">
    <meta name=\"author\" content=\"sio\">
    <meta name=\"keyword\" content=\"MJC, Agora\">
    <title>AgorA - Administration</title>
    {% block stylesheets %}
 <!-- Bootstrap core CSS -->
 <link href=\"{{ asset('assets/lib/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\"/>
 <!--external css-->
 <link href=\"{{ asset('assets/lib/font-awesome/css/font-awesome.css') }}\" rel=\"stylesheet\" />
 <link href=\"{{ asset('assets/lib/fullcalendar/bootstrap-fullcalendar.css') }}\" rel=\"stylesheet\" />
 <!--external css pour les dates dans la gestion des tournois-->
 <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/lib/bootstrap-fileupload/bootstrap-fileupload.css') }}\" />
 <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/lib/bootstrap-datepicker/css/datepicker.css') }}\" />
 <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/lib/bootstrap-timepicker/compiled/timepicker.css') }}\" />
 <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/lib/bootstrap-datetimepicker/css/datetimepicker.css') }}\" />
 <!-- Custom styles for this template -->
 <link href=\"{{ asset('assets/css/style.css') }}\" rel=\"stylesheet\">
 <link href=\"{{ asset('assets/css/style-responsive.css') }}\" rel=\"stylesheet\">
 <!-- Style pour agora -->
 <link href=\"{{ asset('assets/css/styleAgora.css') }}\" rel=\"stylesheet\">
 {% endblock %}
 <!-- =======================================================
 Template Name: Dashio
 Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
 Author: TemplateMag.com
 License: https://templatemag.com/license/
 ======================================================= -->
 </head>
<body>
    <section id=\"container\">
        {# En-tête de l'application #}
        <header class=\"header black-bg\">
            {# Bouton de basculement du menu latéral #}
            <div class=\"sidebar-toggle-box\">
                <div class=\"fa fa-bars tooltips\" 
                     data-placement=\"right\" 
                     data-original-title=\"Toggle Navigation\">
                </div>
            </div>

            {# Logo et lien vers l'accueil #}
            <a href=\"{{ path('accueil') }}\" class=\"logo\">
                <b>Ago<span>rA</span></b>
            </a>

            {# Menu utilisateur en haut à droite #}
                           <ul class=\"nav pull-right top-menu\">
                    {# Gestion de l'affichage selon l'état de connexion #}
                    {% if app.user %}
                        {# Utilisateur connecté - Version Symfony Security #}
                        <a href=\"\" class=\"userAgo\">
                            {{ app.user.prenomMembre }} 
                            {{ app.user.nomMembre }}
                        </a>
                        <li>
                            <a class=\"logout\" href=\"{{ path('app_logout') }}\">
                                Se déconnecter
                            </a>
                        </li>
                    {% elseif app is defined and app.session is defined and app.session.has('idUtilisateur') %}
                        {# Utilisateur connecté - Version Symfony Session #}
                        <a href=\"\" class=\"userAgo\">
                            {{ app.session.get('prenomUtilisateur') }} 
                            {{ app.session.get('nomUtilisateur') }}
                        </a>
                        <li>
                            <a class=\"logout\" href=\"{{ path('app_logout') }}\">
                                Se déconnecter
                            </a>
                        </li>
                    {% elseif session is defined and session.idUtilisateur is defined %}
                        {# Utilisateur connecté - Version classique #}
                        <a href=\"\" class=\"userAgo\">
                            {{ session.prenomUtilisateur }} 
                            {{ session.nomUtilisateur }}
                        </a>
                        <li>
                            <a class=\"logout\" href=\"index.php?uc=deconnexion\">
                                Se déconnecter
                            </a>
                        </li>
                    {% else %}
                        {# Utilisateur non connecté #}
                        <li>
                            <a class=\"logout\" href=\"{{ path('accueil') }}\">
                                Se connecter
                            </a>
                        </li>
                    {% endif %}
                </ul>
 </header>
 <!--header end-->
 
{% block menu %}
{% set isLogged = app.user or (app is defined and app.session is defined and app.session.has('idUtilisateur')) or (session is defined and session.idUtilisateur is defined) %}
{% if isLogged %}
 {{ include('menu.html.twig') }}
{% endif %}
{% endblock %}
 
{# Affichage des messages flash #}
{{ include('messages.html.twig') }}

        {# Zone de contenu principal #}
        <section id=\"main-content\">
            <section class=\"wrapper\">
                <div class=\"container-fluid\">
                    {# Bloc pour le contenu principal des pages #}
                    {% block central %}
                    {% endblock %}

                    {# Bloc alternatif pour le contenu (rarement utilisé) #}
                    {% block body %}
                    {% endblock %}
                </div>
            </section>
        </section>

        {# Pied de page #}
        <footer class=\"site-footer\">
            <div class=\"text-center\">
                {# Informations de copyright #}
                <p>
                    Crée par Logma avec le template bootstrap Dashio :
                    &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
                </p>

                {# Crédits du template #}
                <div class=\"credits\">
                    Created with Dashio template by 
                    <a href=\"https://templatemag.com/\">TemplateMag</a>
                </div>

                {# Bouton retour en haut #}
                <a href=\"#\" class=\"go-top\">
                    <i class=\"fa fa-angle-up\"></i>
                </a>
            </div>
        </footer>
 <!--footer end-->
 </section>
 <!-- js placed at the end of the document so the pages load faster -->
 <script src=\"{{ asset('assets/lib/jquery/jquery.min.js') }}\"></script>
 <script src=\"{{ asset('assets/lib/bootstrap/js/bootstrap.min.js') }}\"></script>
 <script class=\"include\" type=\"text/javascript\" src=\"{{ asset('assets/lib/jquery.dcjqaccordion.2.7.js') }}\"></script>
 <script src=\"{{ asset('assets/lib/jquery.scrollTo.min.js') }}\"></script>
 <!--common script for all pages-->
 <script src=\"{{ asset('assets/lib/common-scripts.js') }}\"></script>
 <script>
 // Initialisation du menu sidebar au chargement de la page
 \$(document).ready(function() {
     // S'assurer que le menu est initialisé même si le script common-scripts.js n'a pas fonctionné
     if (typeof Script !== 'undefined') {
         Script();
     }
     
     // Gestionnaire alternatif pour le bouton hamburger
     \$('.sidebar-toggle-box, .fa-bars').on('click', function(e) {
         e.preventDefault();
         if (\$('#sidebar > ul').is(\":visible\") === true) {
             \$('#main-content').css({'margin-left': '0px'});
             \$('#sidebar').css({'margin-left': '-210px'});
             \$('#sidebar > ul').hide();
             \$(\"#container\").addClass(\"sidebar-closed\");
         } else {
             \$('#main-content').css({'margin-left': '210px'});
             \$('#sidebar > ul').show();
             \$('#sidebar').css({'margin-left': '0'});
             \$(\"#container\").removeClass(\"sidebar-closed\");
         }
     });
 });
 </script>
 <!--script pour le calendrier-->
 <script src=\"{{ asset('assets/lib/jquery-ui-1.9.2.custom.min.js') }}\"></script>
 <script src=\"{{ asset('assets/lib/fullcalendar/fullcalendar.min.js') }}\"></script>
 <script src=\"{{ asset('assets/lib/calendar-conf-events.js') }}\"></script>
 <!-- pour la connexion -->
 <script src=\"{{ asset('assets/libAgora/sha512.js') }}\"></script>
</body>
</html>

", "base.html.twig", "/var/www/html/AP/Agora/templates/base.html.twig");
    }
}
