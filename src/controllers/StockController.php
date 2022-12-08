<?php

namespace App\Controllers;

use Core\Controller;

use App\Models\Region;
use App\Models\Product;

use App\Models\Cepage;
use App\Models\Taste;
use App\Models\Association;
use App\Models\TypeProduct;




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
        $id = $_GET['id'];

        $to_edit = new Product;
        $to_edit->findOneBy(['id' => $id]);
        $edit_temp = $to_edit->findOneBy(['id' => $id]);

        $region = new Region();
        $regions = $region->findAll();

        $cepage = new Cepage();
        $cepages = $cepage->findAll();

        $taste = new Taste();
        $tastes = $taste->findAll();

        $association = new Association();
        $associations = $association->findAll();

        $type_product = new TypeProduct();
        $type_products = $type_product->findAll();



        if (isset($_POST['submit'])) {
            $to_edit->edit($id);
            $result = $to_edit->edit($id);
            if ($result) {
                $message =  "edit bien effectuée";
            } else {
                $message =  "échec de l'édit";
            };
            $to_edit->findOneBy(['id' => $id]);
            $edit_temp = $to_edit->findOneBy(['id' => $id]);
            $this->renderView(
                'employe/stock/edit',
                compact('message', 'id', 'edit_temp', 'regions', 'cepages', 'tastes', 'associations', 'type_products')
            );
        }
        $this->renderView('employe/stock/edit', compact('id', 'edit_temp', 'regions', 'cepages', 'tastes', 'associations', 'type_products'));
    }

    public function deleteFromStock()
    {
        //dd($_SERVER['QUERY_STRING']);

        $id = $_GET['id'];
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
