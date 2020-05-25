<?php
namespace App\Controllers;

use Slim\Views\Twig;
use Psr\Log\LoggerInterface;
use Slim\Http\Request;
use Slim\Http\Response;
use App\Controllers\Date;

final class ConsultationsController extends Controller
{

    protected $data;

    protected $userData;

    public function __construct($container)
    {
        parent::__construct($container);
        $this->data['admin'] = $_SESSION['admin'];

    }

    public function datePickerConsultations($request, $response)
    {
        //TODO Pobranie listy dostepny dni
        $data = [
            'dateList' => ['2020/05/20', '2020/05/05']
        ];

        $this->view->render($response, 'consultations-date-picker.twig', $data);
        return $response;
    }

    public function postDatePickerConsultations($request, $response){
        $date = $request->getParams()['date'];

        $_SESSION['date'] = $date;

//      //TODO Pobranie godzin dla danego dnia;

        $data['hoursList'] = $this->getFreeHours();

        $this->view->render($response, 'consultations-time-picker.twig', $data);
    }

    public function postTimePickerConsultations($request, $response){
        $startHour = $request->getParams()['startHour'];
        $endHour = $request->getParams()['endHour'];

        $_SESSION['hours'] = [
            'startHour' => $startHour,
            'endHour' => $endHour
        ];

        //TODO Pobranie przedmiotow ewentualnie ustalenie na sztywno co jest zrobione

        $data = [
            'subjectsList' => ['SB', 'PSK', 'SW', 'IAMI']
        ];

        $this->view->render($response, 'consultations-data.twig', $data);
    }

    public function postDataConsultations($request, $response){
        $name = $request->getParams()['first_name'];
        $surname = $request->getParams()['last_name'];
        $email = $request->getParams()['email'];
        $subject = $request->getParams()['subject'];

        $_SESSION['data'] = [
            'name' => $name,
            'surname' => $surname,
            'email' => $email,
            'subject' => $subject
        ];

        var_dump($_SESSION['date']);
        var_dump($_SESSION['hours']);
        var_dump($_SESSION['data']);
        die();

    }

    public function getFreeHours(){
        $startHour = '10:00';
        $endHour = '11:00';

        $hoursList = [
            0 => [
                'startHour' => '10:00',
                'endHour' => '10:20'
            ],

            1 => [
                'startHour' => '10:40',
                'endHour' => '10:50'
            ]
        ];

        $countsOfHoursList = 0;
        $countsOfFreeHoursList = 0;
        $freeHours = [];

        while($startHour != $endHour){

            if($countsOfHoursList < sizeof($hoursList)){
                if($startHour == $hoursList[$countsOfHoursList]['startHour']){
                    $startHour = $hoursList[$countsOfHoursList]['endHour'];
                    $countsOfHoursList++;
                    continue;
                }
            }

            $fStartHour = $startHour;

            $minutes = substr($startHour, strpos($startHour, ":") + 1);
            $hours = substr($startHour, 0, strpos($startHour, ":"));

            if(intval($minutes) < 50){
                $startHour = str_replace($minutes, $minutes+10, $startHour);
                $fEndHour = $startHour;
            }else{
                $startHour = str_replace($hours, $hours+1, $startHour);
                $startHour = str_replace($minutes, '00', $startHour);
                $fEndHour = $startHour;
            }

            array_push($freeHours, [
               'startHour' => $fStartHour,
               'endHour' => $fEndHour
            ]);
        }

        return $freeHours;
    }

    public function timePickerConsultations($request, $response)
    {
        $this->view->render($response, 'consultations-time-picker.twig', $this->date);
        return $response;
    }
}
