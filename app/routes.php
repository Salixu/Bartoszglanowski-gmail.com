<?php

$app->get('/', 'HomeController:index')->setName('homePage');
$app->get('/home', 'HomeController:index');

$app->get('/consultations', 'ConsultationsController:getConsultations');

$app->get('/login', 'LoginController:getLogin')->setName('loginPage');
$app->post('/login', 'LoginController:login');
$app->get('/logout', "LoginController:logout");