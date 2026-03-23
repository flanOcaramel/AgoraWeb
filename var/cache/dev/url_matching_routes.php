<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_wdt/styles' => [[['_route' => '_wdt_stylesheet', '_controller' => 'web_profiler.controller.profiler::toolbarStylesheetAction'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'accueil', '_controller' => 'App\\Controller\\AccueilController::index'], null, null, null, false, false, null]],
        '/cat/tournois' => [[['_route' => 'app_cat_tournois_index', '_controller' => 'App\\Controller\\CatTournoisController::index'], null, ['GET' => 0], null, false, false, null]],
        '/cat/tournois/new' => [[['_route' => 'app_cat_tournois_new', '_controller' => 'App\\Controller\\CatTournoisController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/genre' => [[['_route' => 'app_genre_index', '_controller' => 'App\\Controller\\GenreController::index'], null, ['GET' => 0], null, false, false, null]],
        '/genre/new' => [[['_route' => 'app_genre_new', '_controller' => 'App\\Controller\\GenreController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/jeu/video' => [[['_route' => 'app_jeu_video_index', '_controller' => 'App\\Controller\\JeuVideoController::index'], null, ['GET' => 0], null, false, false, null]],
        '/jeu/video/new' => [[['_route' => 'app_jeu_video_new', '_controller' => 'App\\Controller\\JeuVideoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login-trace' => [[['_route' => 'app_login_trace_index', '_controller' => 'App\\Controller\\LoginTraceController::index'], null, ['GET' => 0], null, false, false, null]],
        '/marque' => [[['_route' => 'app_marque_index', '_controller' => 'App\\Controller\\MarqueController::index'], null, ['GET' => 0], null, false, false, null]],
        '/marque/new' => [[['_route' => 'app_marque_new', '_controller' => 'App\\Controller\\MarqueController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/membre' => [[['_route' => 'app_membre_index', '_controller' => 'App\\Controller\\MembreController::index'], null, ['GET' => 0], null, false, false, null]],
        '/membre/new' => [[['_route' => 'app_membre_new', '_controller' => 'App\\Controller\\MembreController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/participant' => [[['_route' => 'app_participant_index', '_controller' => 'App\\Controller\\ParticipantController::index'], null, ['GET' => 0], null, false, false, null]],
        '/participant/new' => [[['_route' => 'app_participant_new', '_controller' => 'App\\Controller\\ParticipantController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/pegi' => [[['_route' => 'app_pegi_index', '_controller' => 'App\\Controller\\PegiController::index'], null, ['GET' => 0], null, false, false, null]],
        '/pegi/new' => [[['_route' => 'app_pegi_new', '_controller' => 'App\\Controller\\PegiController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/plateforme' => [[['_route' => 'app_plateforme_index', '_controller' => 'App\\Controller\\PlateformeController::index'], null, ['GET' => 0], null, false, false, null]],
        '/plateforme/new' => [[['_route' => 'app_plateforme_new', '_controller' => 'App\\Controller\\PlateformeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/profile' => [[['_route' => 'app_profile_show', '_controller' => 'App\\Controller\\ProfileController::show'], null, ['GET' => 0], null, true, false, null]],
        '/profile/edit' => [[['_route' => 'app_profile_edit', '_controller' => 'App\\Controller\\ProfileController::edit'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/tournoi' => [[['_route' => 'app_tournoi_index', '_controller' => 'App\\Controller\\TournoiController::index'], null, ['GET' => 0], null, false, false, null]],
        '/tournoi/new' => [[['_route' => 'app_tournoi_new', '_controller' => 'App\\Controller\\TournoiController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/statTournoi' => [[['_route' => 'app_stat_tournoi_index', '_controller' => 'App\\Controller\\TournoiStatController::index'], null, null, null, false, false, null]],
        '/statDql' => [[['_route' => 'app_stat_dql_tournoi', '_controller' => 'App\\Controller\\TournoisDQLStatController::indexDQL'], null, null, null, false, false, null]],
        '/statQb' => [[['_route' => 'app_stat_qb_tournoi', '_controller' => 'App\\Controller\\TournoisQBStatController::indexQB'], null, null, null, false, false, null]],
        '/statSql' => [[['_route' => 'app_stat_sql_tournoi', '_controller' => 'App\\Controller\\TournoisSQLStatController::indexSQL'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/cat/tournois/([^/]++)(?'
                    .'|(*:227)'
                    .'|/edit(*:240)'
                    .'|(*:248)'
                .')'
                .'|/genre/([^/]++)(?'
                    .'|(*:275)'
                    .'|/edit(*:288)'
                    .'|(*:296)'
                .')'
                .'|/jeu/video/([^/]++)(?'
                    .'|(*:327)'
                    .'|/edit(*:340)'
                    .'|(*:348)'
                .')'
                .'|/m(?'
                    .'|arque/([^/]++)(?'
                        .'|(*:379)'
                        .'|/edit(*:392)'
                        .'|(*:400)'
                    .')'
                    .'|embre/([^/]++)(?'
                        .'|(*:426)'
                        .'|/edit(*:439)'
                        .'|(*:447)'
                    .')'
                .')'
                .'|/p(?'
                    .'|articipant/([^/]++)(?'
                        .'|(*:484)'
                        .'|/edit(*:497)'
                        .'|(*:505)'
                    .')'
                    .'|egi/([^/]++)(?'
                        .'|(*:529)'
                        .'|/edit(*:542)'
                        .'|(*:550)'
                    .')'
                    .'|lateforme/([^/]++)(?'
                        .'|(*:580)'
                        .'|/edit(*:593)'
                        .'|(*:601)'
                    .')'
                .')'
                .'|/tournoi/([^/]++)(?'
                    .'|(*:631)'
                    .'|/edit(*:644)'
                    .'|(*:652)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        227 => [[['_route' => 'app_cat_tournois_show', '_controller' => 'App\\Controller\\CatTournoisController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        240 => [[['_route' => 'app_cat_tournois_edit', '_controller' => 'App\\Controller\\CatTournoisController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        248 => [[['_route' => 'app_cat_tournois_delete', '_controller' => 'App\\Controller\\CatTournoisController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        275 => [[['_route' => 'app_genre_show', '_controller' => 'App\\Controller\\GenreController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        288 => [[['_route' => 'app_genre_edit', '_controller' => 'App\\Controller\\GenreController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        296 => [[['_route' => 'app_genre_delete', '_controller' => 'App\\Controller\\GenreController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        327 => [[['_route' => 'app_jeu_video_show', '_controller' => 'App\\Controller\\JeuVideoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        340 => [[['_route' => 'app_jeu_video_edit', '_controller' => 'App\\Controller\\JeuVideoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        348 => [[['_route' => 'app_jeu_video_delete', '_controller' => 'App\\Controller\\JeuVideoController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        379 => [[['_route' => 'app_marque_show', '_controller' => 'App\\Controller\\MarqueController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        392 => [[['_route' => 'app_marque_edit', '_controller' => 'App\\Controller\\MarqueController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        400 => [[['_route' => 'app_marque_delete', '_controller' => 'App\\Controller\\MarqueController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        426 => [[['_route' => 'app_membre_show', '_controller' => 'App\\Controller\\MembreController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        439 => [[['_route' => 'app_membre_edit', '_controller' => 'App\\Controller\\MembreController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        447 => [[['_route' => 'app_membre_delete', '_controller' => 'App\\Controller\\MembreController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        484 => [[['_route' => 'app_participant_show', '_controller' => 'App\\Controller\\ParticipantController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        497 => [[['_route' => 'app_participant_edit', '_controller' => 'App\\Controller\\ParticipantController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        505 => [[['_route' => 'app_participant_delete', '_controller' => 'App\\Controller\\ParticipantController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        529 => [[['_route' => 'app_pegi_show', '_controller' => 'App\\Controller\\PegiController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        542 => [[['_route' => 'app_pegi_edit', '_controller' => 'App\\Controller\\PegiController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        550 => [[['_route' => 'app_pegi_delete', '_controller' => 'App\\Controller\\PegiController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        580 => [[['_route' => 'app_plateforme_show', '_controller' => 'App\\Controller\\PlateformeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        593 => [[['_route' => 'app_plateforme_edit', '_controller' => 'App\\Controller\\PlateformeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        601 => [[['_route' => 'app_plateforme_delete', '_controller' => 'App\\Controller\\PlateformeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        631 => [[['_route' => 'app_tournoi_show', '_controller' => 'App\\Controller\\TournoiController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        644 => [[['_route' => 'app_tournoi_edit', '_controller' => 'App\\Controller\\TournoiController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        652 => [
            [['_route' => 'app_tournoi_delete', '_controller' => 'App\\Controller\\TournoiController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
