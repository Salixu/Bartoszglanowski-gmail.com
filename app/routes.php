<?php

$app->get('/', 'HomeController:index');
$app->get('/home', 'HomeController:index');

$app->get('/consultations', 'ConsultationsController:getConsultations');

$app->get('/login', 'LoginController:getLogin');
