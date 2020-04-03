<?php

declare(strict_types=1);

use Slim\App;
use \Slim\Routing\RouteCollectorProxy;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use App\Http\Controllers\TestingClass;

return function (App $app){
  // $container = $app->getContainer();

  // $app->group('', function(RouteCollectorProxy $view){

  //   $view->get('/', function ($request, $response){
  //     $view = 'index.twig';
  //     return $this->get('view')->render($response, $view);
  //   });

  //   $view->get('/home', function ($request, $response){
  //     $view = 'index.twig';
  //     return $this->get('view')->render($response, $view);
  //   });

  //   $view->get('/konsultacje', function ($request, $response){
  //     $view = 'consultations.twig';
  //     return $this->get('view')->render($response, $view);
  //   });

  //   $view->get('/login', function ($request, $response){
  //     $view = 'login.twig';
  //     return $this->get('view')->render($response, $view);
  //   });
     $app->get('/testing', [TestingClass::class, 'testing']);
    
     $app->get('/login', [TestingClass::class, 'loginView']);

   

  // })->add($container->get('viewMiddleware'));
};
