<?php
namespace App\Controllers;

use Slim\Views\Twig;
use Slim\Http\Request;
use Slim\Http\Response;

final class LoginController extends Controller
{

    public function getLogin($request, $response)
    {
        $data = [
            'admin' => $_SESSION['admin']
        ];

        return $this->view->render($response, 'login.twig', $data);
    }

    public function login($request, $response)
    {
        $params = $request->getParams();
        $auth = $this->auth->attempt($params['login'], $params['password']);

        if(!$auth){
            return $response->withRedirect($this->router->pathFor('loginPage'));
        }
        return $response->withRedirect($this->router->pathFor('homePage'));
    }

    public function logout($request, $response){
        $_SESSION['admin'] = 0;
        return $response->withRedirect($this->router->pathFor('homePage'));
    }
}
