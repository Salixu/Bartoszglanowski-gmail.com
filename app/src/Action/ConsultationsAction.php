<?php
namespace App\Action;

use Slim\Views\Twig;
use Psr\Log\LoggerInterface;
use Slim\Http\Request;
use Slim\Http\Response;

final class ConsultationsAction
{
    private $view;

    public function __construct(Twig $view)
    {
        $this->view = $view;
    }

    public function __invoke(Request $request, Response $response, $args)
    {
        $data = [
            'subjects' => ['Pierwszy', 'Drugi', 'Trzeci']
        ];

        $this->view->render($response, 'consultations.twig', $data);
        return $response;
    }
}
