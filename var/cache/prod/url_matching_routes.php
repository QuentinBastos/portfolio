<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/about' => [[['_route' => 'about', '_controller' => 'App\\Controller\\AboutController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'default', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, false, false, null]],
        '/projects/chess' => [[['_route' => 'project_chess', '_controller' => 'App\\Controller\\ProjectsController::chess'], null, null, null, false, false, null]],
        '/projects/phase10' => [[['_route' => 'project_phase10', '_controller' => 'App\\Controller\\ProjectsController::phase10'], null, null, null, false, false, null]],
        '/projects/interactive-book' => [[['_route' => 'project_interactive_book', '_controller' => 'App\\Controller\\ProjectsController::interactiveBook'], null, null, null, false, false, null]],
        '/projects/spotify' => [[['_route' => 'project_spotify', '_controller' => 'App\\Controller\\ProjectsController::spotify'], null, null, null, false, false, null]],
        '/projects/aloas' => [[['_route' => 'project_aloas', '_controller' => 'App\\Controller\\ProjectsController::aloas'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/change\\-language/([^/]++)(*:33)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        33 => [
            [['_route' => 'change_language', '_controller' => 'App\\Controller\\LanguageController::changeLanguage'], ['language'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
