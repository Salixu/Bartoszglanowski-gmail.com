<?php
namespace App\Controllers;

use Slim\Views\Twig;
use Slim\Http\Request;
use Slim\Http\Response;

final class LoginController extends Controller
{

    public function getLogin($request, $response)
    {

        return $this->view->render($response, 'login.twig');
    }

    public function postLogin(Request $request, Response $response){

    }
}
