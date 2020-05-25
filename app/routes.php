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

<<<<<<< HEAD
$app->get('/adminConsultations', 'AdminController:getAdminPanel')->setName('adminPage');
$app->post('/adminConsultations', 'AdminController:setVisit');
=======
$app->get('/forgotpassword/:id', function($id) use ($app) {
    $param = "secret-password-reset-code";

    $mail = new PHPMailer;

    $mail->setFrom('admin@badger-dating.com', 'BadgerDating.com');
    $mail->addAddress($id);
    $mail->addReplyTo('kasprzakdominik@outlook.com', 'BadgerDating.com');

    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'Instructions for resetting the password for your account with BadgerDating.com';
    $mail->Body    = "
        <p>Hi,</p>
        <p>            
        Thanks for choosing BadgerDating.com!  We have received a request for a password reset on the account associated with this email address.
        </p>
        <p>
        To confirm and reset your password, please click <a href=\"http://badger-dating.com/resetpassword/$id/$param\">here</a>.  If you did not initiate this request,
        please disregard this message.
        </p>
        <p>
        If you have any questions about this email, you may contact us at support@badger-dating.com.
        </p>
        <p>
        With regards,
        <br>
        The BadgerDating.com Team
        </p>";

    if(!$mail->send()) {
        $app->flash("error", "We're having trouble with our mail servers at the moment.  Please try again later, or contact us directly by phone.");
        error_log('Mailer Error: ' . $mail->errorMessage());
        $app->halt(500);
    }
});
>>>>>>> c93901be20a658014119bc239c785826346c6f88
