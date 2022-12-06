<?php

namespace App\Controllers;

use Core\Controller;



class StockController extends Controller
{

    public function insert()
    {

        $this->renderView('employe/stock/insert');
    }

    public function showAll()
    {
        $this->renderView('employe/stock/index');
    }


    public function edit()
    {
        $this->renderView('employe/stock/edit');
    }
}
