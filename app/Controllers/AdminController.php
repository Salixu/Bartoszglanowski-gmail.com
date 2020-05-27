<?php
namespace App\Controllers;

use Slim\Views\Twig;
use Slim\Http\Request;
use Slim\Http\Response;
use App\Models\AdminsConsultations;
use App\Models\StudentConsultations;

final class AdminController extends Controller
{

  public function getAdminPanel($request, $response)
  {
    $data = [
        'admin' => $_SESSION['admin'],
        'consultations' => AdminsConsultations::all(),
        'studentConsultations' => StudentConsultations::all()
    ];
      $this->view->render($response, 'adminPanel.twig', $data);
      return $response;
  }

  public function setVisit($request, $response){
    $params = $request->getParams();

    $record = AdminsConsultations::where('day_of_the_week', '=', $params['day'])->get();

    if ($record->count() == 0){
      $consultation = new AdminsConsultations();
      $consultation->consultation_start = $params['start'];
      $consultation->consultation_end = $params['end'];
      $consultation->day_of_the_week = $params['day'];
      $consultation->day_name = AdminController::findName($params['day']);
      $consultation->save();
    }else {
      AdminsConsultations::where('day_of_the_week', $params['day'])
            ->update(['consultation_start' => $params['start'],
          'consultation_end'=>$params['end']]);
    }

    return $response->withRedirect($this->router->pathFor('adminPage'));
  }

  public function confirmVisit($request, $response){
    $params = $request->getParams();

    if ( $params['dec'] == null){
      StudentConsultations::find($params['conf'])->update([
         'status' => 'confirmed'
       ]);
    }else{
      StudentConsultations::find($params['dec'])->delete();
    }
    return $response->withRedirect($this->router->pathFor('adminPage'));
  }

  public function deleteVisit($request, $response){
    $param = $request->getParams();
    $data = [
        'admin' => $_SESSION['admin'],
        'consultations' => AdminsConsultations::all()
    ];

    AdminsConsultations::where('day_name', $param['day_name'])->delete();


    return  $response->withRedirect($this->router->pathFor('adminPage'));
  }

  private function findName($consultation){
    switch ($consultation) {
      case '1':
        return "Poniedziałek";

      case '2':
        return "Wtorek";

      case '3':
        return "Środa";

      case '4':
        return "Czwartek";

      case '5':
        return "Piątek";
    }
  }
}
