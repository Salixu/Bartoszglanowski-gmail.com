<?php


namespace App\Http\Controllers;

use App\Support\View;

class WelcomeController
{
    public function index(View $view)
    {
        return $view('login');
    }

    public function show(Request $request, Response $response, $name)
    {
        $response->getBody()->write("Welcome {$name}");
        return $response;
    }
}