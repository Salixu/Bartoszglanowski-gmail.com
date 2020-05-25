<?php
namespace App\Controllers;

use Slim\Views\Twig;
use Slim\Http\Request;
use Slim\Http\Response;
use App\Models\AdminsConsultations;

final class AdminController extends Controller
{

  public function getAdminPanel($request, $response)
  {
    $data = [
        'admin' => $_SESSION['admin']
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
      $consultation->save();
    }else {
      AdminsConsultations::where('day_of_the_week', $params['day'])
            ->update(['consultation_start' => $params['start'],
          'consultation_end'=>$params['end']]);
    }


    return $response->withRedirect($this->router->pathFor('adminPage'));
  }
}
