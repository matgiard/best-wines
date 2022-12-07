<?php

namespace App\Controllers;

use Core\Controller;

use App\Models\Region;
use App\Models\Product;



class StockController extends Controller
{

    public function showAll()
    {

        $product = new Product();

        $products = $product->findAll();
        $this->renderView('employe/stock/index', compact('products'));
    }


    public function edit()
    {
        $this->renderView('employe/stock/edit');
    }

    public function showAllRegion()
    {

        $region = new Region();
        $regions = $region->findAll();
        $this->renderView('employe/stock/insert', compact('regions'));
    }
}
