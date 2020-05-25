<?php

$app->get('/', 'HomeController:index')->setName('homePage');
$app->get('/home', 'HomeController:index');

$app->get('/consultations', 'ConsultationsController:datePickerConsultations')->setName('consultationsPage');
$app->post('/consultations', 'ConsultationsController:postDatePickerConsultations');
$app->get('/consultations/{date}', 'ConsultationsController:timePickerConsultations');

$app->get('/login', 'LoginController:getLogin')->setName('loginPage');
$app->post('/login', 'LoginController:login');
$app->get('/logout', "LoginController:logout");

$app->get('/adminConsultations', 'AdminController:getAdminPanel')->setName('adminPage');
$app->post('/adminConsultations', 'AdminController:setVisit');
