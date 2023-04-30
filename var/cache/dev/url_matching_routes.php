<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/commentaire/rec' => [[['_route' => 'app_commentaire_rec_index', '_controller' => 'App\\Controller\\CommentaireRecController::index'], null, ['GET' => 0], null, true, false, null]],
        '/commentaire/rec/new' => [[['_route' => 'app_commentaire_rec_new', '_controller' => 'App\\Controller\\CommentaireRecController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reclamation/new' => [[['_route' => 'app_reclamation_new', '_controller' => 'App\\Controller\\ReclamationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/frontend' => [[['_route' => 'app_reclamation_frontend', '_controller' => 'App\\Controller\\ReclamationController::frontIndex'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'app_reclamation_contact', '_controller' => 'App\\Controller\\ReclamationController::contactIndex'], null, null, null, false, false, null]],
        '/statistiques' => [[['_route' => 'app_reclamation_statistique', '_controller' => 'App\\Controller\\ReclamationController::statistique'], null, null, null, false, false, null]],
        '/reclamations/list' => [[['_route' => 'app_reclamation_index', '_controller' => 'App\\Controller\\ReclamationController::list'], null, ['GET' => 0], null, false, false, null]],
        '/reclamation' => [[['_route' => 'app_reclamation', '_controller' => 'App\\Controller\\ReclamationController::index'], null, ['GET' => 0], null, false, false, null]],
        '/generate-pdf' => [[['_route' => 'generate_pdf', '_controller' => 'App\\Controller\\PdfController::generatePdf'], null, ['GET' => 0], null, false, false, null]],
        '/download-remote-pdf' => [[['_route' => 'download_remote_pdf', '_controller' => 'App\\Controller\\RemotePdfController::download'], null, ['GET' => 0], null, false, false, null]],
        '/send-sms' => [[['_route' => 'commentairerec_send_sms', '_controller' => 'App\\Controller\\CommentaireRecController::sendSms'], null, null, null, false, false, null]],
        '/tri' => [[['_route' => 'reclamation_show', '_controller' => 'App\\Controller\\ReclamationController::showReclamations'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/commentaire/rec/([^/]++)(?'
                    .'|(*:35)'
                    .'|/edit(*:47)'
                    .'|(*:54)'
                .')'
                .'|/reclamation/([^/]++)(?'
                    .'|(*:86)'
                    .'|/edit(*:98)'
                    .'|(*:105)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:145)'
                    .'|wdt/([^/]++)(*:165)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:211)'
                            .'|router(*:225)'
                            .'|exception(?'
                                .'|(*:245)'
                                .'|\\.css(*:258)'
                            .')'
                        .')'
                        .'|(*:268)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => 'app_commentaire_rec_show', '_controller' => 'App\\Controller\\CommentaireRecController::show'], ['idComm'], ['GET' => 0], null, false, true, null]],
        47 => [[['_route' => 'app_commentaire_rec_edit', '_controller' => 'App\\Controller\\CommentaireRecController::edit'], ['idComm'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        54 => [[['_route' => 'app_commentaire_rec_delete', '_controller' => 'App\\Controller\\CommentaireRecController::delete'], ['idComm'], ['POST' => 0], null, false, true, null]],
        86 => [[['_route' => 'app_reclamation_show', '_controller' => 'App\\Controller\\ReclamationController::show'], ['idRec'], ['GET' => 0], null, false, true, null]],
        98 => [[['_route' => 'app_reclamation_edit', '_controller' => 'App\\Controller\\ReclamationController::edit'], ['idRec'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        105 => [[['_route' => 'app_reclamation_delete', '_controller' => 'App\\Controller\\ReclamationController::delete'], ['idRec'], ['POST' => 0], null, false, true, null]],
        145 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        165 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        211 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        225 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        245 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        258 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        268 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
