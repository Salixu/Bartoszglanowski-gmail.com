<?php
use Slim\Factory\AppFactory;
use DI\Container;

$app->get('/', function($request, $response){
  return $this->get('view')->render($response, 'index.twig');
});

$app->get('/home', function($request, $response){
  return $this->get('view')->render($response, 'index.twig');
});

$app->get('/konsultacje', function($request, $response){
  return $this->get('view')->render($response, 'konsultacje.twig');
});

$app->get('/login', function($request, $response){
  return $this->get('view')->render($response, 'login.twig');
});

?>
