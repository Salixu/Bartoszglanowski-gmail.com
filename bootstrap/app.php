<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

session_start();
require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();

$app->get('/', function (Request $request, Response $response, $args){
  $response->getBody()->write("Hello World!");
  return $response;
});

require __DIR__ . '/../app/routes.php';

$user = new \App\Models\User('Bartosz');
echo 'Imie: '.$user->getName().'<br>';
var_dump($user);
die();

$container = $app->getContainer();
$container['view'] = function ($container){
  $view = new \Slim\Views\Twig(__DIR__.'/../views',[
  'cache' => false
]);

$view->addExtension(new \Slim\Views\TwigExtension(
    $container->router,
    $container->request->getUri()
  ));
  return $view;
};
 ?>
