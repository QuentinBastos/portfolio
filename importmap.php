<?php

return [
    'app' => [
        'path' => './assets/app.js',
        'entrypoint' => true,
    ],
    'background_js' => [
        'path' => './assets/js/background.js',
        'entrypoint' => true,
    ],
    'particles_js' => [
        'path' => './assets/js/particles.js',
        'entrypoint' => true,
    ],
    'loader_js' => [
        'path' => './assets/js/loader.js',
        'entrypoint' => true,
    ],
    '@hotwired/stimulus' => [
        'version' => '3.2.2',
    ],
    '@symfony/stimulus-bundle' => [
        'path' => './vendor/symfony/stimulus-bundle/assets/dist/loader.js',
    ],
    '@hotwired/turbo' => [
        'version' => '7.3.0',
    ],
];
