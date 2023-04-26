<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/commande/ticket' => [[['_route' => 'app_commande_ticket_index', '_controller' => 'App\\Controller\\CommandeTicketController::index'], null, ['GET' => 0], null, true, false, null]],
        '/commande/ticket/search' => [[['_route' => 'app_commande_ticket_search', '_controller' => 'App\\Controller\\CommandeTicketController::search'], null, null, null, false, false, null]],
        '/commande/ticket/triNE' => [[['_route' => 'app_commande_ticket_index_triNE', '_controller' => 'App\\Controller\\CommandeTicketController::indextriNE'], null, ['GET' => 0], null, false, false, null]],
        '/commande/ticket/triP' => [[['_route' => 'app_commande_ticket_index_triP', '_controller' => 'App\\Controller\\CommandeTicketController::indextriP'], null, ['GET' => 0], null, false, false, null]],
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
                .'|/commande/ticket(?'
                    .'|/(?'
                        .'|([^/]++)(*:38)'
                        .'|F/([^/]++)(*:55)'
                        .'|([^/]++)/edit(*:75)'
                        .'|F/([^/]++)/edit(*:97)'
                        .'|([^/]++)(*:112)'
                        .'|data(*:124)'
                    .')'
                    .'|data/download/([^/]++)(*:155)'
                .')'
                .'|/ticket/([^/]++)(?'
                    .'|(*:183)'
                    .'|/edit(*:196)'
                    .'|(*:204)'
                .')'
                .'|/qr\\-code/([^/]++)/([\\w\\W]+)(*:241)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:280)'
                    .'|wdt/([^/]++)(*:300)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:346)'
                            .'|router(*:360)'
                            .'|exception(?'
                                .'|(*:380)'
                                .'|\\.css(*:393)'
                            .')'
                        .')'
                        .'|(*:403)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => 'app_commande_ticket_show', '_controller' => 'App\\Controller\\CommandeTicketController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        55 => [[['_route' => 'app_commande_ticket_showF', '_controller' => 'App\\Controller\\CommandeTicketController::showF'], ['id'], ['GET' => 0], null, false, true, null]],
        75 => [[['_route' => 'app_commande_ticket_edit', '_controller' => 'App\\Controller\\CommandeTicketController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        97 => [[['_route' => 'app_commande_ticket_editF', '_controller' => 'App\\Controller\\CommandeTicketController::editF'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        112 => [[['_route' => 'app_commande_ticket_delete', '_controller' => 'App\\Controller\\CommandeTicketController::deleteF'], ['id'], ['POST' => 0], null, false, true, null]],
        124 => [[['_route' => 'users_data', '_controller' => 'App\\Controller\\CommandeTicketController::usersData'], [], null, null, false, false, null]],
        155 => [[['_route' => 'users_data_download', '_controller' => 'App\\Controller\\CommandeTicketController::usersDataDownload'], ['id'], null, null, false, true, null]],
        183 => [[['_route' => 'app_ticket_show', '_controller' => 'App\\Controller\\TicketController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        196 => [[['_route' => 'app_ticket_edit', '_controller' => 'App\\Controller\\TicketController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        204 => [[['_route' => 'app_ticket_delete', '_controller' => 'App\\Controller\\TicketController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        241 => [[['_route' => 'qr_code_generate', '_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['builder', 'data'], null, null, false, true, null]],
        280 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        300 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        346 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        360 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        380 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        393 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        403 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
