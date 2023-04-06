<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
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
                .'|/a(?'
                    .'|nnonces/([^/]++)(?'
                        .'|(*:31)'
                        .'|/(?'
                            .'|reserve(*:49)'
                            .'|([^/]++)/delete(*:71)'
                            .'|delete(*:84)'
                        .')'
                    .')'
                    .'|dmintouser/([^/]++)(*:112)'
                .')'
                .'|/mes(?'
                    .'|reservations/([^/]++)(?'
                        .'|(*:152)'
                        .'|/(?'
                            .'|commenter(*:173)'
                            .'|delete(*:187)'
                            .'|prisedevue(*:205)'
                        .')'
                    .')'
                    .'|annonces/([^/]++)/edit(*:237)'
                .')'
                .'|/photos/([^/]++)/delete(*:269)'
                .'|/listeprisedevue/([^/]++)/delete(*:309)'
                .'|/supprimer(?'
                    .'|user/([^/]++)(*:343)'
                    .'|propriete/([^/]++)(*:369)'
                .')'
                .'|/desableuser/([^/]++)(*:399)'
                .'|/enableuser/([^/]++)(*:427)'
                .'|/userto(?'
                    .'|admin/([^/]++)(*:459)'
                    .'|partenaire/([^/]++)(*:486)'
                .')'
                .'|/habitat/([^/]++)(?'
                    .'|(*:515)'
                    .'|/(?'
                        .'|edit(*:531)'
                        .'|delete(*:545)'
                    .')'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        31 => [[['_route' => 'annonces_show', '_controller' => 'App\\Controller\\DefaultController::afficherAction'], ['id'], null, null, false, true, null]],
        49 => [[['_route' => 'reserver', '_controller' => 'App\\Controller\\DefaultController::reservationAction'], ['id'], null, null, false, false, null]],
        71 => [[['_route' => 'supprimercommentaire', '_controller' => 'App\\Controller\\DefaultController::deletecommentaireAction'], ['id', 'idd'], null, null, false, false, null]],
        84 => [[['_route' => 'supprimerhabitat', '_controller' => 'App\\Controller\\DefaultController::deleteAction'], ['id'], null, null, false, false, null]],
        112 => [[['_route' => 'admintouser', '_controller' => 'App\\Controller\\DefaultController::admintouserAction'], ['id'], null, null, false, true, null]],
        152 => [[['_route' => 'reservation_show', '_controller' => 'App\\Controller\\DefaultController::afficherreservationAction'], ['id'], null, null, false, true, null]],
        173 => [[['_route' => 'commenter', '_controller' => 'App\\Controller\\DefaultController::newcommentaireAction'], ['id'], null, null, false, false, null]],
        187 => [[['_route' => 'supprimerreservation', '_controller' => 'App\\Controller\\DefaultController::deletereservationAction'], ['id'], null, null, false, false, null]],
        205 => [[['_route' => 'newprisedevue', '_controller' => 'App\\Controller\\DefaultController::newprisedevueAction'], ['id'], null, null, false, false, null]],
        237 => [[['_route' => 'editannonce', '_controller' => 'App\\Controller\\DefaultController::editAction'], ['id'], null, null, false, false, null]],
        269 => [[['_route' => 'supprimerphoto', '_controller' => 'App\\Controller\\DefaultController::deletePhotoAction'], ['id'], null, null, false, false, null]],
        309 => [[['_route' => 'supprimerprise', '_controller' => 'App\\Controller\\DefaultController::deletepriseAction'], ['id'], null, null, false, false, null]],
        343 => [[['_route' => 'supprimeruser', '_controller' => 'App\\Controller\\DefaultController::supprimeruserAction'], ['id'], null, null, false, true, null]],
        369 => [[['_route' => 'supprimerpropriete', '_controller' => 'App\\Controller\\DefaultController::supprimerproprieteAction'], ['id'], null, null, false, true, null]],
        399 => [[['_route' => 'desableuser', '_controller' => 'App\\Controller\\DefaultController::desableAction'], ['id'], null, null, false, true, null]],
        427 => [[['_route' => 'enableuser', '_controller' => 'App\\Controller\\DefaultController::enableAction'], ['id'], null, null, false, true, null]],
        459 => [[['_route' => 'usertoadmin', '_controller' => 'App\\Controller\\DefaultController::usertoadminAction'], ['id'], null, null, false, true, null]],
        486 => [[['_route' => 'usertopartenaire', '_controller' => 'App\\Controller\\DefaultController::usertopartenaireAction'], ['id'], null, null, false, true, null]],
        515 => [[['_route' => 'habitat_show', '_controller' => 'App\\Controller\\HabitatController::showAction'], ['id'], null, null, false, true, null]],
        531 => [[['_route' => 'habitat_edit', '_controller' => 'App\\Controller\\HabitatController::editAction'], ['id'], null, null, false, false, null]],
        545 => [
            [['_route' => 'habitat_delete', '_controller' => 'App\\Controller\\HabitatController::deleteAction'], ['id'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
