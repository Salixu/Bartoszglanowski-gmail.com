<?php

declare(strict_types=1);

use DI\Container;
use DI\Bridge\Slim\Bridge as SlimAppFactory;
// use Slim\Factory\AppFactory;

require __DIR__.'/../vendor/autoload.php';

$container = new Container();

$settings = require __DIR__.'/../app/settings.php';
$settings($container);

$logger = require __DIR__.'/../app/logger.php';
$logger($container);


$app = SlimAppFactory::create($container);

// Set Container on app
// AppFactory::setContainer($container);

// Create App
// $app = AppFactory::create();

$views = require __DIR__.'/../app/views.php';
$views($app);

$middleware = require __DIR__.'/../app/middleware.php';
$middleware($app);

$routes = require __DIR__.'/../app/routes.php';
$routes($app);

$app->run();

// use Slim\Factory\AppFactory;
// use DI\Container;
// use Slim\Views\Twig;
// use Slim\Views\TwigExtension;

// require __DIR__ . '/../vendor/autoload.php';

// $container = new Container();

// $container->set('view', function($container) {
//   $view = Twig::create(__DIR__ . '/../resources/views', ['cache' => false]);
//   return $view;
// });

// AppFactory::setContainer($container);
// $app = AppFactory::create();

// $app->addErrorMiddleware(true, true, true);

// require __DIR__.'/../config/routes.php';
