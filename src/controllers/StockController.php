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
        //dd($_SERVER['QUERY_STRING']);
        dd($_GET);
        $this->renderView('employe/stock/edit');
    }

    public function deleteFromStock()
    {
        //dd($_SERVER['QUERY_STRING']);
       
        $id=$_GET['id'];
        // dd($id);
        $to_delete = new Product;
        $to_delete->delete($id);
        header('Location: /best-wines/employe/stock');
    }

    public function showAllRegion()
    {

        $region = new Region();
        $regions = $region->findAll();
        $this->renderView('employe/stock/insert', compact('regions'));
    }
}
