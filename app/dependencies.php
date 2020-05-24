<?php
// DIC configuration

use Cake\Database\Connection;
use Cake\Database\Driver\Mysql;

$container = $app->getContainer();

// -----------------------------------------------------------------------------
// Service providers
// -----------------------------------------------------------------------------

// Twig
$container['view'] = function ($c) {
    $settings = $c->get('settings');
    $view = new Slim\Views\Twig($settings['view']['template_path'], $settings['view']['twig']);

    // Add extensions
    $view->addExtension(new Slim\Views\TwigExtension($c->get('router'), $c->get('request')->getUri()));

    return $view;
};

// Flash messages
$container['flash'] = function ($c) {
    return new Slim\Flash\Messages;
};

// -----------------------------------------------------------------------------
// Service factories
// -----------------------------------------------------------------------------

// monolog
$container['logger'] = function ($c) {
    $settings = $c->get('settings');
    $logger = new Monolog\Logger($settings['logger']['name']);
    $logger->pushProcessor(new Monolog\Processor\UidProcessor());
    $logger->pushHandler(new Monolog\Handler\StreamHandler($settings['logger']['path'], Monolog\Logger::DEBUG));
    return $logger;
};

// -----------------------------------------------------------------------------
// Action factories
// -----------------------------------------------------------------------------

$container[App\Action\HomeAction::class] = function ($c) {
    return new App\Action\HomeAction($c->get('view'));
};

$container[App\Action\ConsultationsAction::class] = function ($c) {
    return new App\Action\ConsultationsAction($c->get('view'));
};

$container[App\Action\LoginAction::class] = function ($c) {
    return new App\Action\LoginAction($c->get('view'));
};

$container[PDO::class] = function (\Slim\Container $container) {
    $settings = $container->get('settings');

    $host = $settings['db']['host'];
    $dbname = $settings['db']['database'];
    $username = $settings['db']['username'];
    $password = $settings['db']['password'];
    $charset = $settings['db']['charset'];
    $collate = $settings['db']['collation'];

    $dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";

    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_PERSISTENT => false,
        PDO::ATTR_EMULATE_PREPARES => true,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES $charset COLLATE $collate"
    ];

    return new PDO($dsn, $username, $password, $options);
};


$container[Connection::class] = function (\Slim\Container $container) {
    $settings = $container->get('settings');
    $driver = new Mysql($settings['db']);

    return new Connection(['driver' => $driver]);
};

$container[PDO::class] = function (\Slim\Container $container) {
    /** @var Connection $connection */
    $connection = $container->get(Connection::class);
    $connection->getDriver()->connect();

    return $connection->getDriver()->getConnection();
};