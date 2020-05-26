<?php

$app->get('/', 'HomeController:index')->setName('homePage');
$app->get('/home', 'HomeController:index');

$app->group('/consultations', function () use ($app){
    $app->get('/date', 'ConsultationsController:datePickerConsultations')->setName('consultationsDatePage');
    $app->post('/date','ConsultationsController:postDatePickerConsultations');
    $app->post('/time', 'ConsultationsController:postTimePickerConsultations')->setName('consultationsTimePage');
    $app->post('/data', 'ConsultationsController:postDataConsultations')->setName('consultationsDataPage');
});

$app->get('/login', 'LoginController:getLogin')->setName('loginPage');
$app->post('/login', 'LoginController:login');
$app->get('/logout', "LoginController:logout");

$app->get('/adminConsultations', 'AdminController:getAdminPanel')->setName('adminPage');
$app->post('/adminConsultations', 'AdminController:setVisit');
