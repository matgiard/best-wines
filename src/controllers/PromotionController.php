<?php

namespace App\Controllers;

use Core\Controller;
use Core\Partials\CheckLog;

class PromotionController extends Controller
{

    public function insert()
    {
        CheckLog::checkIsEmployee();

        $this->renderView('employe/promotion/insert');
    }

    public function showAll()
    {
        
        CheckLog::checkIsEmployee();
        $this->renderView('employe/promotion/index');
    }


    public function edit()
    {
        
        CheckLog::checkIsEmployee();
        $this->renderView('employe/promotion/edit');
    }
}
