<?php

namespace App\Controllers;

use Slim\Views\Twig as View;
use App\Models\User;

class HomeController extends Controller
{

    public function index($request, $response){

//         EXAMPLE OF USER CREATE
//        $user = User::create([
//            'username' => 'janek',
//            'email' => 'awfaw',
//            'first_name' => 'afsdfs',
//            'last_name' => 'awfafwa'
//        ]);
//        die();

        return $this->view->render($response, 'home.twig');
    }
}
