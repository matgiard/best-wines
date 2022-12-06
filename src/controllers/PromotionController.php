<?php

namespace App\Controllers;

use Core\Controller;



class PromotionController extends Controller
{

    public function insert()
    {

        $this->renderView('employe/promotion/insert');
    }

    public function showAll()
    {
        $this->renderView('employe/promotion/index');
    }


    public function edit()
    {
        $this->renderView('employe/promotion/edit');
    }
}
