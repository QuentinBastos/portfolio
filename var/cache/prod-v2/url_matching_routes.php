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
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/change\\-language/([^/]++)(*:33)'
                .'|/projects/([a-z0-9-]+)(*:62)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        33 => [[['_route' => 'change_language', '_controller' => 'App\\Controller\\LanguageController::changeLanguage'], ['language'], null, null, false, true, null]],
        62 => [
            [['_route' => 'project_show', '_controller' => 'App\\Controller\\ProjectsController::show'], ['slug'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
