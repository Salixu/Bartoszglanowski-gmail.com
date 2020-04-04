<?php


namespace App\Http\Controllers;

use App\Support\View;

class LoginController
{
    public function index(View $view)
    {
        return $view('login');
    }
}