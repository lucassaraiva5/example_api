<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/v1/movies' => [
            [['_route' => 'movie_save', '_controller' => 'App\\Controller\\MovieController::new'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'movie_get_all', '_controller' => 'App\\Controller\\MovieController::getAll'], null, ['GET' => 0], null, false, false, null],
        ],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\UserController::register'], null, null, null, false, false, null]],
        '/api/doc.json' => [[['_route' => 'app.swagger', '_controller' => 'nelmio_api_doc.controller.swagger'], null, ['GET' => 0], null, false, false, null]],
        '/authentication_token' => [[['_route' => 'authentication_token'], null, ['POST' => 0], null, false, false, null]],
        '/api/doc' => [[['_route' => 'app.swagger_ui', '_controller' => 'nelmio_api_doc.controller.swagger_ui'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api/v1/movies/([^/]++)(*:30)'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:65)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        30 => [[['_route' => 'movie_get_one', '_controller' => 'App\\Controller\\MovieController::getById'], ['id'], ['GET' => 0], null, false, true, null]],
        65 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
