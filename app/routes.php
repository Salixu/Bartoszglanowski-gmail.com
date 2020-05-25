<?php

$app->get('/', 'HomeController:index')->setName('homePage');
$app->get('/home', 'HomeController:index');

$app->group('/consultations', function () use ($app){
    $app->get('/date', 'ConsultationsController:datePickerConsultations')->setName('consultationsDatePage');
    $app->post('/date','ConsultationsController:postDatePickerConsultations');
    $app->post('/time', 'ConsultationsController:postTimePickerConsultations')->setName('consultationsTimePage');
    $app->post('/data', 'ConsultationsController:postDataConsultations')->setName('consultationsDataPage');
});
//
//
//$app->post('/consultations/time', 'ConsultationsController:timePickerConsultations')->setName('consultationsTimePage');

$app->get('/login', 'LoginController:getLogin')->setName('loginPage');
$app->post('/login', 'LoginController:login');
$app->get('/logout', "LoginController:logout");