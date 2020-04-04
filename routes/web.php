<?php

use App\Support\Route;
use App\Support\View;

Route::get('/', function(View $view){return $view('home');});

Route::get('/home', function(View $view){return $view('home');});

Route::get('/consultations', 'ConsultationsController@index');

Route::get('/login', 'LoginController@index');