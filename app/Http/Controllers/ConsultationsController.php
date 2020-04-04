<?php

namespace App\Http\Controllers;

use App\Support\View;

class ConsultationsController
{
    public function index(View $view)
    {
        return $view('consultations');
    }
}