<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/reponse' => [[['_route' => 'repondre', '_controller' => 'App\\Controller\\DefaultController::repAction'], null, null, null, false, false, null]],
        '/users' => [[['_route' => 'users', '_controller' => 'App\\Controller\\DefaultController::usersAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'homepage', '_controller' => 'App\\Controller\\DefaultController::indexAction'], null, null, null, false, false, null]],
        '/proprietes' => [[['_route' => 'prop', '_controller' => 'App\\Controller\\DefaultController::propsAction'], null, null, null, false, false, null]],
        '/chercheproprietes' => [[['_route' => 'chercheprop', '_controller' => 'App\\Controller\\DefaultController::cherhcepropsAction'], null, null, null, false, false, null]],
        '/listepartenariat' => [[['_route' => 'liste_partenariat', '_controller' => 'App\\Controller\\DefaultController::listepartenariatAction'], null, null, null, false, false, null]],
        '/devenir_partenaire' => [[['_route' => 'partenaire', '_controller' => 'App\\Controller\\DefaultController::partenaireAction'], null, null, null, false, false, null]],
        '/cgv' => [[['_route' => 'cgv', '_controller' => 'App\\Controller\\DefaultController::cgvAction'], null, null, null, false, false, null]],
        '/annonces' => [[['_route' => 'Annonces', '_controller' => 'App\\Controller\\DefaultController::AnnoncesAction'], null, null, null, false, false, null]],
        '/mesannonces' => [[['_route' => 'mesannonces', '_controller' => 'App\\Controller\\DefaultController::mesannoncesAction'], null, null, null, false, false, null]],
        '/mesreservations' => [[['_route' => 'mesreservations', '_controller' => 'App\\Controller\\DefaultController::mesreservationsAction'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'adminpage', '_controller' => 'App\\Controller\\DefaultController::adminAction'], null, null, null, true, false, null]],
        '/envoi' => [[['_route' => 'envoimessage', '_controller' => 'App\\Controller\\DefaultController::EnvoiAction'], null, null, null, false, false, null]],
        '/checkout.php' => [[['_route' => 'checkout', '_controller' => 'App\\Controller\\DefaultController::validerAction'], null, null, null, false, false, null]],
        '/devenirpartenaire' => [[['_route' => 'dm_partenaire', '_controller' => 'App\\Controller\\DefaultController::dmpartenaireAction'], null, null, null, false, false, null]],
        '/prisesdevue' => [[['_route' => 'listeprises', '_controller' => 'App\\Controller\\DefaultController::listeprisesAction'], null, null, null, false, false, null]],
        '/mesprisesdevue' => [[['_route' => 'mesprises', '_controller' => 'App\\Controller\\DefaultController::malisteprisesAction'], null, null, null, false, false, null]],
        '/mentions' => [[['_route' => 'mentions', '_controller' => 'App\\Controller\\DefaultController::MentionsAction'], null, null, null, false, false, null]],
        '/cgu' => [[['_route' => 'cgu', '_controller' => 'App\\Controller\\DefaultController::cguAction'], null, null, null, false, false, null]],
        '/politique' => [[['_route' => 'politique', '_controller' => 'App\\Controller\\DefaultController::politiqueAction'], null, null, null, false, false, null]],
        '/supprimercompte' => [[['_route' => 'supprimercompte', '_controller' => 'App\\Controller\\DefaultController::supprimercompteAction'], null, null, null, false, false, null]],
        '/messagerie' => [[['_route' => 'messagerie', '_controller' => 'App\\Controller\\DefaultController::MessagerieAction'], null, null, null, false, false, null]],
        '/sitemap.xml' => [[['_route' => 'sitemap', '_format' => 'xml', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, false, false, null]],
        '/AddHabitat' => [[['_route' => 'habitat_Add', '_controller' => 'App\\Controller\\DefaultController::addAction'], null, null, null, false, false, null]],
        '/description' => [[['_route' => 'description', '_controller' => 'App\\Controller\\DefaultController::descriptionAction'], null, null, null, false, false, null]],
        '/editdescr' => [[['_route' => 'editdescr', '_controller' => 'App\\Controller\\DefaultController::editdescrAction'], null, null, null, false, false, null]],
        '/statistique' => [[['_route' => 'statistique', '_controller' => 'App\\Controller\\DefaultController::statistiqueAction'], null, null, null, false, false, null]],
        '/Ajoutpropriete' => [[['_route' => 'Ajoutprodyn', '_controller' => 'App\\Controller\\DefaultController::AjoutpropeAction'], null, null, null, false, false, null]],
        '/habitat' => [[['_route' => 'habitat_index', '_controller' => 'App\\Controller\\HabitatController::indexAction'], null, null, null, true, false, null]],
        '/habitat/new' => [[['_route' => 'habitat_new', '_controller' => 'App\\Controller\\HabitatController::newAction'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/a(?'
                    .'|nnonces/([^/]++)(?'
                        .'|(*:193)'
                        .'|/(?'
                            .'|reserve(*:212)'
                            .'|([^/]++)/delete(*:235)'
                            .'|delete(*:249)'
                        .')'
                    .')'
                    .'|dmintouser/([^/]++)(*:278)'
                .')'
                .'|/mes(?'
                    .'|reservations/([^/]++)(?'
                        .'|(*:318)'
                        .'|/(?'
                            .'|commenter(*:339)'
                            .'|delete(*:353)'
                            .'|prisedevue(*:371)'
                        .')'
                    .')'
                    .'|annonces/([^/]++)/edit(*:403)'
                .')'
                .'|/photos/([^/]++)/delete(*:435)'
                .'|/listeprisedevue/([^/]++)/delete(*:475)'
                .'|/supprimer(?'
                    .'|user/([^/]++)(*:509)'
                    .'|propriete/([^/]++)(*:535)'
                .')'
                .'|/desableuser/([^/]++)(*:565)'
                .'|/enableuser/([^/]++)(*:593)'
                .'|/userto(?'
                    .'|admin/([^/]++)(*:625)'
                    .'|partenaire/([^/]++)(*:652)'
                .')'
                .'|/habitat/([^/]++)(?'
                    .'|(*:681)'
                    .'|/(?'
                        .'|edit(*:697)'
                        .'|delete(*:711)'
                    .')'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        193 => [[['_route' => 'annonces_show', '_controller' => 'App\\Controller\\DefaultController::afficherAction'], ['id'], null, null, false, true, null]],
        212 => [[['_route' => 'reserver', '_controller' => 'App\\Controller\\DefaultController::reservationAction'], ['id'], null, null, false, false, null]],
        235 => [[['_route' => 'supprimercommentaire', '_controller' => 'App\\Controller\\DefaultController::deletecommentaireAction'], ['id', 'idd'], null, null, false, false, null]],
        249 => [[['_route' => 'supprimerhabitat', '_controller' => 'App\\Controller\\DefaultController::deleteAction'], ['id'], null, null, false, false, null]],
        278 => [[['_route' => 'admintouser', '_controller' => 'App\\Controller\\DefaultController::admintouserAction'], ['id'], null, null, false, true, null]],
        318 => [[['_route' => 'reservation_show', '_controller' => 'App\\Controller\\DefaultController::afficherreservationAction'], ['id'], null, null, false, true, null]],
        339 => [[['_route' => 'commenter', '_controller' => 'App\\Controller\\DefaultController::newcommentaireAction'], ['id'], null, null, false, false, null]],
        353 => [[['_route' => 'supprimerreservation', '_controller' => 'App\\Controller\\DefaultController::deletereservationAction'], ['id'], null, null, false, false, null]],
        371 => [[['_route' => 'newprisedevue', '_controller' => 'App\\Controller\\DefaultController::newprisedevueAction'], ['id'], null, null, false, false, null]],
        403 => [[['_route' => 'editannonce', '_controller' => 'App\\Controller\\DefaultController::editAction'], ['id'], null, null, false, false, null]],
        435 => [[['_route' => 'supprimerphoto', '_controller' => 'App\\Controller\\DefaultController::deletePhotoAction'], ['id'], null, null, false, false, null]],
        475 => [[['_route' => 'supprimerprise', '_controller' => 'App\\Controller\\DefaultController::deletepriseAction'], ['id'], null, null, false, false, null]],
        509 => [[['_route' => 'supprimeruser', '_controller' => 'App\\Controller\\DefaultController::supprimeruserAction'], ['id'], null, null, false, true, null]],
        535 => [[['_route' => 'supprimerpropriete', '_controller' => 'App\\Controller\\DefaultController::supprimerproprieteAction'], ['id'], null, null, false, true, null]],
        565 => [[['_route' => 'desableuser', '_controller' => 'App\\Controller\\DefaultController::desableAction'], ['id'], null, null, false, true, null]],
        593 => [[['_route' => 'enableuser', '_controller' => 'App\\Controller\\DefaultController::enableAction'], ['id'], null, null, false, true, null]],
        625 => [[['_route' => 'usertoadmin', '_controller' => 'App\\Controller\\DefaultController::usertoadminAction'], ['id'], null, null, false, true, null]],
        652 => [[['_route' => 'usertopartenaire', '_controller' => 'App\\Controller\\DefaultController::usertopartenaireAction'], ['id'], null, null, false, true, null]],
        681 => [[['_route' => 'habitat_show', '_controller' => 'App\\Controller\\HabitatController::showAction'], ['id'], null, null, false, true, null]],
        697 => [[['_route' => 'habitat_edit', '_controller' => 'App\\Controller\\HabitatController::editAction'], ['id'], null, null, false, false, null]],
        711 => [
            [['_route' => 'habitat_delete', '_controller' => 'App\\Controller\\HabitatController::deleteAction'], ['id'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
