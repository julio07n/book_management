<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '\\d+', 'code'], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    'admin' => [[], ['_controller' => 'App\\Controller\\AdminController::index'], [], [['text', '/admin']], [], []],
    'book_index' => [[], ['_controller' => 'App\\Controller\\BookController::index'], [], [['text', '/book/']], [], []],
    'book_new' => [[], ['_controller' => 'App\\Controller\\BookController::new'], [], [['text', '/book/new']], [], []],
    'book_edit' => [['id'], ['_controller' => 'App\\Controller\\BookController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/book']], [], []],
    'book_delete' => [['id'], ['_controller' => 'App\\Controller\\BookController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/book']], [], []],
    'book_data_list' => [[], ['_controller' => 'App\\Controller\\BookController::dataList'], [], [['text', '/book/data-list']], [], []],
    'book_list' => [[], ['_controller' => 'App\\Controller\\BookController::listBook'], [], [['text', '/book/list/']], [], []],
    'library_index' => [[], ['_controller' => 'App\\Controller\\LibraryController::index'], [], [['text', '/library/']], [], []],
    'library_new' => [[], ['_controller' => 'App\\Controller\\LibraryController::new'], [], [['text', '/library/new']], [], []],
    'library_edit' => [['id'], ['_controller' => 'App\\Controller\\LibraryController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/library']], [], []],
    'library_delete' => [['id'], ['_controller' => 'App\\Controller\\LibraryController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id'], ['text', '/library']], [], []],
    'library_data_list' => [[], ['_controller' => 'App\\Controller\\LibraryController::dataList'], [], [['text', '/library/data-list']], [], []],
    'csv' => [[], ['_controller' => 'App\\Controller\\LibraryController::csv'], [], [['text', '/library/csv']], [], []],
    'notification_remember_reservation' => [[], ['_controller' => 'App\\Controller\\NotificationController::rememberReservation'], [], [['text', '/notification/remember-reservation']], [], []],
    'reserve_new' => [[], ['_controller' => 'App\\Controller\\ReserveController::index'], [], [['text', '/reserve/new']], [], []],
    'reserve_list' => [[], ['_controller' => 'App\\Controller\\ReserveController::list'], [], [['text', '/reserve/list']], [], []],
    'reserve_delete' => [['id'], ['_controller' => 'App\\Controller\\ReserveController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/reserve/delete']], [], []],
    'reserve_data_list' => [[], ['_controller' => 'App\\Controller\\ReserveController::dataList'], [], [['text', '/reserve/data-list']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
    'user_index' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/user/']], [], []],
    'user_new' => [[], ['_controller' => 'App\\Controller\\UserController::new'], [], [['text', '/user/new']], [], []],
    'user_edit' => [['id'], ['_controller' => 'App\\Controller\\UserController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/user']], [], []],
    'user_delete' => [['id'], ['_controller' => 'App\\Controller\\UserController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id'], ['text', '/user']], [], []],
    'user_data_list' => [[], ['_controller' => 'App\\Controller\\UserController::dataList'], [], [['text', '/user/data-list']], [], []],
];
