<?php

namespace App\Controllers;

use Core\Controller;
use App\Models\Promotion;
use Core\Partials\CheckLog;

class PromotionController extends Controller
{
    public function showAll()
    {
        CheckLog::checkIsEmployee();
        $promotion = new Promotion();
        $all_promotions = $promotion->findAll();

        $this->renderView('employe/promotion/index', compact('all_promotions'));
    }

    public function insert()
    {
        CheckLog::checkIsEmployee();

        $message = "";
        if (isset($_POST['submit'])) {
            $promotion = new Promotion();
            $promotion->setPromotionName(htmlentities($_POST['promotion_name']));
            $promotion->setStartDate($_POST['start_date']);
            $promotion->setEndDate($_POST['end_date']);
            $promotion->setPercentage($_POST['percentage']);
            $result = $promotion->insert();

            if ($result) {
                $message =  "L'insertion a été prise en compte";
            } else {
                $message =  "échec de l'insertion";
            }
        }
        $this->renderView('employe/promotion/insert', [
            'message' => $message
        ]);
    }



    public function edit()
    {

        CheckLog::checkIsEmployee();
        $this->renderView('employe/promotion/edit');
    }
}
