<?php

namespace App\Auth;

class Auth
{

    protected $login = "admin";
    protected $password = "admin";

    public function attempt($login, $password)
    {
        if($login == $this->login && $password == $this->password){
            $_SESSION['admin'] = 1;
            return true;
        }else{
            $_SESSION['admin'] = 0;
            return false;
        }
    }
}