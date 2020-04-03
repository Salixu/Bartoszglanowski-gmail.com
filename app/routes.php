<?php

use Slim\App;
use App\Http\Controllers\WelcomeController;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

return function (App $app) {
    $app->get('/home', function(Request $request, Response $response) {
        return view($response, 'home');
    });

    $app->get('/konsultacje', function(Request $request, Response $response) {
        return view($response, 'consultations');
    });

    $app->get('/login', function(Request $request, Response $response) {
        return view($response, 'login');
    });

    $app->get('/', [WelcomeController::class, 'index']);
};