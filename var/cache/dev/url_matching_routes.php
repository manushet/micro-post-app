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
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'posts', '_controller' => 'App\\Controller\\PostController::index'], null, ['GET' => 0], null, false, false, null]],
        '/new-post' => [[['_route' => 'add_post', '_controller' => 'App\\Controller\\PostController::addPost'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/notification/unread-count' => [[['_route' => 'notification_unread', '_controller' => 'App\\Controller\\NotificationController::unreadCount'], null, ['GET' => 0], null, false, false, null]],
        '/notification-mark-all' => [[['_route' => 'notification_mark_all', '_controller' => 'App\\Controller\\NotificationController::markAllAsRead'], null, ['GET' => 0], null, false, false, null]],
        '/notification/view' => [[['_route' => 'notification_view', '_controller' => 'App\\Controller\\NotificationController::notifications'], null, ['GET' => 0], null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\AuthController::login'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/logout' => [[['_route' => 'logout'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\AuthController::register'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/confirm' => [[['_route' => 'confirm', '_controller' => 'App\\Controller\\AuthController::confirm'], null, ['GET' => 0], null, false, false, null]],
        '/send-email' => [[['_route' => 'send_email', '_controller' => 'App\\Controller\\MailerController::sendEmail'], null, ['GET' => 0], null, false, false, null]],
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
                .'|/edit\\-post/([^/]++)(*:189)'
                .'|/remove\\-post/([^/]++)(*:219)'
                .'|/post/([^/]++)(*:241)'
                .'|/u(?'
                    .'|ser/([^/]++)(*:266)'
                    .'|n(?'
                        .'|follow/([^/]++)(*:293)'
                        .'|like/([^/]++)(*:314)'
                    .')'
                .')'
                .'|/follow/([^/]++)(*:340)'
                .'|/like/([^/]++)(*:362)'
                .'|/notification\\-mark/([^/]++)(*:398)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        189 => [[['_route' => 'edit_post', '_controller' => 'App\\Controller\\PostController::editPost'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        219 => [[['_route' => 'remove_post', '_controller' => 'App\\Controller\\PostController::removePost'], ['id'], ['GET' => 0], null, false, true, null]],
        241 => [[['_route' => 'post', '_controller' => 'App\\Controller\\PostController::viewPost'], ['id'], ['GET' => 0], null, false, true, null]],
        266 => [[['_route' => 'user_posts', '_controller' => 'App\\Controller\\PostController::userPosts'], ['username'], ['GET' => 0], null, false, true, null]],
        293 => [[['_route' => 'unfollow', '_controller' => 'App\\Controller\\FollowingController::unfollow'], ['id'], ['GET' => 0], null, false, true, null]],
        314 => [[['_route' => 'unlike', '_controller' => 'App\\Controller\\LikesController::unlike'], ['id'], ['GET' => 0], null, false, true, null]],
        340 => [[['_route' => 'follow', '_controller' => 'App\\Controller\\FollowingController::follow'], ['id'], ['GET' => 0], null, false, true, null]],
        362 => [[['_route' => 'like', '_controller' => 'App\\Controller\\LikesController::like'], ['id'], ['GET' => 0], null, false, true, null]],
        398 => [
            [['_route' => 'notification_mark', '_controller' => 'App\\Controller\\NotificationController::markAsRead'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
