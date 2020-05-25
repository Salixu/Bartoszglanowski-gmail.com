<?php
namespace App\Controllers;

use Slim\Views\Twig;
use Psr\Log\LoggerInterface;
use Slim\Http\Request;
use Slim\Http\Response;

final class ConsultationsController extends Controller
{

    public function getConsultations($request, $response)
    {
        $data = [
            'subjects' => ['Pierwszy', 'Drugi', 'Trzeci']
        ];

        $this->view->render($response, 'consultations.twig', $data);
        return $response;
    }
}
