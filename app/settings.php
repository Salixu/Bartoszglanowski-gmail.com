<?php

declare(strict_types=1);

use DI\Container;
use Slim\Views\Twig;
use Monolog\Logger;
// use Slim\Views\TwigExtension;

return function (Container $container){
    $container->set('settings', function() {
        return [
            'name' => 'Slim App Project',
            'displayErrorDetails' => true,
            'logErrorDetails' => true,
            'logErrors' => true,
            'logger' => [
                'name' => 'slim-app',
                'path' => __DIR__.'/../logs/app.log',
                'level' => Logger::DEBUG
            ],
            'views' => [
                'path' => __DIR__.'/../src/views',
                'settings' => ['cache' => false]
            ]
        ];
    });
};