<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/commande/ticket' => [[['_route' => 'app_commande_ticket_index', '_controller' => 'App\\Controller\\CommandeTicketController::index'], null, ['GET' => 0], null, true, false, null]],
        '/commande/ticket/new' => [[['_route' => 'app_commande_ticket_new', '_controller' => 'App\\Controller\\CommandeTicketController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/commande/ticket/newF' => [[['_route' => 'app_commande_ticket_newF', '_controller' => 'App\\Controller\\CommandeTicketController::newF'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/ticket' => [[['_route' => 'app_ticket_index', '_controller' => 'App\\Controller\\TicketController::index'], null, ['GET' => 0], null, true, false, null]],
        '/ticket/F' => [[['_route' => 'app_ticket_indexF', '_controller' => 'App\\Controller\\TicketController::indexF'], null, ['GET' => 0], null, false, false, null]],
        '/ticket/new' => [[['_route' => 'app_ticket_new', '_controller' => 'App\\Controller\\TicketController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/commande/ticket/(?'
                    .'|([^/]++)(*:35)'
                    .'|F/([^/]++)(*:52)'
                    .'|([^/]++)(?'
                        .'|/edit(*:75)'
                        .'|(*:82)'
                    .')'
                    .'|F/([^/]++)(*:100)'
                .')'
                .'|/ticket/([^/]++)(?'
                    .'|(*:128)'
                    .'|/edit(*:141)'
                    .'|(*:149)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:189)'
                    .'|wdt/([^/]++)(*:209)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:255)'
                            .'|router(*:269)'
                            .'|exception(?'
                                .'|(*:289)'
                                .'|\\.css(*:302)'
                            .')'
                        .')'
                        .'|(*:312)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => 'app_commande_ticket_show', '_controller' => 'App\\Controller\\CommandeTicketController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        52 => [[['_route' => 'app_commande_ticket_showF', '_controller' => 'App\\Controller\\CommandeTicketController::showF'], ['id'], ['GET' => 0], null, false, true, null]],
        75 => [[['_route' => 'app_commande_ticket_edit', '_controller' => 'App\\Controller\\CommandeTicketController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        82 => [[['_route' => 'app_commande_ticket_delete', '_controller' => 'App\\Controller\\CommandeTicketController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        100 => [[['_route' => 'app_commande_ticket_deleteF', '_controller' => 'App\\Controller\\CommandeTicketController::deleteF'], ['id'], ['POST' => 0], null, false, true, null]],
        128 => [[['_route' => 'app_ticket_show', '_controller' => 'App\\Controller\\TicketController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        141 => [[['_route' => 'app_ticket_edit', '_controller' => 'App\\Controller\\TicketController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        149 => [[['_route' => 'app_ticket_delete', '_controller' => 'App\\Controller\\TicketController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        189 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        209 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        255 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        269 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        289 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        302 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        312 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
