<?php

namespace App\Http\Controllers;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

class TestingClass{

    public function testing(Request $request, Response $response){
        $response->getBody()->write("hello world");
        return $response;
    }

    public function loginView(Request $request, Response $response){
        $view = 'login.twig';
        $response->getBody()->write;
        return $response;
    }
}