<?php

session_start();

require __DIR__ . '/../vendor/autoload.php';

$app = new \Slim\App([
    'settings' => [

        'displayErrorDetails' => true,

        'db' => [
            'driver' => 'mysql',
            'host' => 'localhost',
            'database' => 'consuldb',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => '',
        ],

        "jwt" => [
            'secret' => 'secretpass'
        ],
    ],
]);

$container = $app->getContainer();

$container['db'] =

$capsule = new \Illuminate\Database\Capsule\Manager;
$capsule->addConnection($container['settings']['db']);
$capsule->setAsGlobal();
$capsule->bootEloquent();

$container['db'] = function ($container) use ($capsule){
    return $capsule;
};

$container['view'] = function($container) {
    $view = new \Slim\Views\Twig(__DIR__ . '/../resources/views', [
        'cache' => false,
    ]);

    $view->addExtension(new \Slim\Views\TwigExtension(
       $container->router,
        $container->request->getUri()
    ));

    return $view;
};

$container['HomeController'] = function($container){
    return new \App\Controllers\HomeController($container);
};

$container['ConsultationsController'] = function($container){
    return new \App\Controllers\ConsultationsController($container);
};

$container['LoginController'] = function($container){
    return new \App\Controllers\LoginController($container);
};

$container['AdminController'] = function($container){
    return new \App\Controllers\AdminController($container);
};

$container['auth'] = function($container){
    return new \App\Auth\Auth;
};

$container['view']['basePath'] = rtrim(str_ireplace("index.php", "", $container["request"]->getUri()->getBasePath()), "/");

// Added admin email
require __DIR__ . '/../app/email.php';

// Register middleware
require __DIR__ . '/../app/middleware.php';

// Register routes
require __DIR__ . '/../app/routes.php';
