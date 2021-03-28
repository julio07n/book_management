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
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/book' => [[['_route' => 'book_index', '_controller' => 'App\\Controller\\BookController::index'], null, ['GET' => 0], null, true, false, null]],
        '/book/new' => [[['_route' => 'book_new', '_controller' => 'App\\Controller\\BookController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/library' => [[['_route' => 'library_index', '_controller' => 'App\\Controller\\LibraryController::index'], null, ['GET' => 0], null, true, false, null]],
        '/library/new' => [[['_route' => 'library_new', '_controller' => 'App\\Controller\\LibraryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/library/data-list' => [[['_route' => 'library_data_list', '_controller' => 'App\\Controller\\LibraryController::dataList'], null, null, null, false, false, null]],
        '/library/csv' => [[['_route' => 'csv', '_controller' => 'App\\Controller\\LibraryController::csv'], null, null, null, false, false, null]],
        '/notification/remember-reservation' => [[['_route' => 'notification_remember_reservation', '_controller' => 'App\\Controller\\NotificationController::rememberReservation'], null, null, null, false, false, null]],
        '/reserve/new' => [[['_route' => 'reserve_new', '_controller' => 'App\\Controller\\ReserveController::index'], null, null, null, false, false, null]],
        '/reserve/list' => [[['_route' => 'reserve_list', '_controller' => 'App\\Controller\\ReserveController::list'], null, null, null, false, false, null]],
        '/reserve/data-list' => [[['_route' => 'reserve_data_list', '_controller' => 'App\\Controller\\ReserveController::dataList'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user/data-list' => [[['_route' => 'user_data_list', '_controller' => 'App\\Controller\\UserController::dataList'], null, null, null, false, false, null]],
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
                .'|/book/(?'
                    .'|([^/]++)(?'
                        .'|/edit(*:194)'
                        .'|(*:202)'
                    .')'
                    .'|data\\-list(*:221)'
                    .'|list(*:233)'
                .')'
                .'|/library/([^/]++)/(?'
                    .'|edit(*:267)'
                    .'|delete(*:281)'
                .')'
                .'|/reserve/delete/([^/]++)(*:314)'
                .'|/user/([^/]++)/(?'
                    .'|edit(*:344)'
                    .'|delete(*:358)'
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
        194 => [[['_route' => 'book_edit', '_controller' => 'App\\Controller\\BookController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        202 => [[['_route' => 'book_delete', '_controller' => 'App\\Controller\\BookController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        221 => [[['_route' => 'book_data_list', '_controller' => 'App\\Controller\\BookController::dataList'], [], null, null, false, false, null]],
        233 => [[['_route' => 'book_list', '_controller' => 'App\\Controller\\BookController::listBook'], [], ['POST' => 0], null, true, false, null]],
        267 => [[['_route' => 'library_edit', '_controller' => 'App\\Controller\\LibraryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        281 => [[['_route' => 'library_delete', '_controller' => 'App\\Controller\\LibraryController::delete'], ['id'], null, null, false, false, null]],
        314 => [[['_route' => 'reserve_delete', '_controller' => 'App\\Controller\\ReserveController::delete'], ['id'], ['GET' => 0], null, false, true, null]],
        344 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        358 => [
            [['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
