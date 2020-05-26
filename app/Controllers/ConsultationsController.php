<?php
namespace App\Controllers;

use App\Models\StudentConsultations;
use App\Models\AdminsConsultations;
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
            'daysOffList' => $this->getDaysOffList(),
            'consultationsDaysList' => $this->getConsultationsDaysList()
        ];

        $this->view->render($response, 'consultations-date-picker.twig', $data);

        return $response;
    }

    //Funkcja zwracajaca liste z datami dni wolnych
    public function getDaysOffList(){
        //TODO
        return ['2020/05/20', '2020/05/05'];
    }

    //Funkcja zwracajaca numery dni w ktore odbywaja sie konsultacje np 2(wtorek) i 4(czwartek)
    public function getConsultationsDaysList(){
        $daysList = [];

        $consultationsDaysList = AdminsConsultations::all();

        if($consultationsDaysList != null){
            for($i = 0; $i < sizeof($consultationsDaysList); $i++){
                array_push($daysList, $consultationsDaysList[$i]->day_of_the_week);
            }
        }

        return $daysList;
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

        $this->insertData();

        return $this->view->render($response, 'home.twig');
    }

    public function emailSend(){

    }

    public function getFreeHours(){
        $hours = $this->getHoursForDay();

        $startHour = $hours['startHour'];
        $endHour = $hours['endHour'];

        $busyHoursList = $this->getBusyHoursList();

        $countsOfHoursList = 0;
        $freeHours = [];

        while($startHour != $endHour){

            if(!empty($busyHoursList)){
                if($countsOfHoursList < sizeof($busyHoursList)){
                    if($startHour == $busyHoursList[$countsOfHoursList]['startHour']){
                        $startHour = $busyHoursList[$countsOfHoursList]['endHour'];
                        $countsOfHoursList++;
                        continue;
                    }
                }
            }

            $fStartHour = $startHour;

            $minPos = strpos($startHour, ":")+1;
            $hourPos = strpos($startHour, ":");

            $minutes = substr($startHour,  $minPos);
            $hours = substr($startHour, 0, $hourPos);

            if((int) $minutes < 50){
                $startHour = strval($hours) . ":" . strval(intval($minutes) + 10);
                $fEndHour = $startHour;
            }else{
                $startHour = strval(intval($hours) + 1) . ":00";
                $fEndHour = $startHour;
            }

            array_push($freeHours, [
               'startHour' => $fStartHour,
               'endHour' => $fEndHour
            ]);
        }

        return $freeHours;
    }

    public function getHoursForDay(){
        $date = strtotime($_SESSION['date']);
        $day = date('w', $date);

        $hoursForDay = AdminsConsultations::where('day_of_the_week', '=', $day)->first();

        return [
            'startHour' => $hoursForDay->consultation_start,
            'endHour' => $hoursForDay->consultation_end];
    }

    public function getBusyHoursList(){
        $date = $_SESSION['date'];

        $busyHours = StudentConsultations::where('consultation_date', '=', $date)->get();

        if(!empty($busyHours)){
            $hoursList = [];
            for($i = 0; $i < sizeof($busyHours); $i++){
                $record = [
                    'startHour' => $busyHours[$i]->consultation_start,
                    'endHour' => $busyHours[$i]->consultation_end
                ];

                array_push($hoursList, $record);
            }
            return $hoursList;
        }else{
            return [];
        }

    }

    public function insertData(){
        $studentConsultations = StudentConsultations::create([
            'student_name' => $_SESSION['data']['name'],
            'student_surname' => $_SESSION['data']['surname'],
            'student_mail' => $_SESSION['data']['email'],
            'subject' => $_SESSION['data']['subject'],
            'status' => 'unconfirmed',
            'consultation_date' => $_SESSION['date'],
            'consultation_start' => $_SESSION['hours']['startHour'],
            'consultation_end' => $_SESSION['hours']['endHour']
        ]);

    }

    function console_log($output, $with_script_tags = true) {
        $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) .
            ');';
        if ($with_script_tags) {
            $js_code = '<script>' . $js_code . '</script>';
        }
        echo $js_code;
    }

    public function timePickerConsultations($request, $response)
    {
        $this->view->render($response, 'consultations-time-picker.twig', $this->date);
        return $response;
    }
}
