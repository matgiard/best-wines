<?php

namespace App\Controllers;

use Core\Controller;

use App\Models\Region;



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

    public function showAllRegion()
    {

        $region = new Region();



        $regions = $region->findAllByRegion();



        $this->renderView('employe/stock/insert', compact('regions'));
    }
}
