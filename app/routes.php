<?php
// Routes
use Cake\Database\Connection;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\Container;

$app->get('/databases', function ($request, $response) {
    /** @var Container $this */

    $query = $this->get(Connection::class)->newQuery();

    // fetch all rows as array
    $query = $query->select('*')->from('users');

    $rows = $query->execute()->fetchAll('assoc') ?: [];

    // return a json response
    return $response->withJson($rows);
});

$app->get('/', App\Action\HomeAction::class)
    ->setName('homepage');

$app->get('/home', App\Action\HomeAction::class)
    ->setName('homepage');

$app->get('/consultations', App\Action\ConsultationsAction::class)
    ->setName('consultations');

$app->get('/login', App\Action\LoginAction::class)
    ->setName('login');
