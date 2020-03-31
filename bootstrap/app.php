<?php
use Slim\Factory\AppFactory;
use DI\Container;
use Slim\Views\Twig;
use Slim\Views\TwigExtension;

require __DIR__ . '/../vendor/autoload.php';

$container = new Container();

$container->set('view', function($container) {
  $view = Twig::create(__DIR__ . '/../resources/views', ['cache' => false]);
  return $view;
});

AppFactory::setContainer($container);
$app = AppFactory::create();

$app->addErrorMiddleware(true, true, true);

require __DIR__.'/../app/routes.php';
