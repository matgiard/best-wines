<?php

namespace App\Controllers;

use Core\Controller;

use App\Models\Region;
use App\Models\Cepage;
use App\Models\Taste;
use App\Models\Association;
use App\Models\TypeProduct;
use App\Models\Product;

class ProductController extends Controller
{

    /**
     * Insérer un nouveau produit
     *
     * @return void
     */


    public function insert()
    {
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

        $this->renderView('employe/stock/insert', compact('regions', 'cepages', 'tastes', 'associations', 'type_products'));


        if (isset($_POST['submit'])) {


            $product = new Product();

            $product->setName(htmlentities($_POST['name']));
            $product->setDescription(htmlentities($_POST['description']));
            $product->setStock(htmlentities($_POST['stock']));
            $product->setAlcohol_percentage(htmlentities($_POST['alcohol_percentage']));
            $product->setId_region($_POST['id_region']);
            $product->setId_cepage($_POST['id_cepage']);
            $product->setId_taste($_POST['id_taste']);
            $product->setId_association($_POST['id_association']);
            $product->setId_type($_POST['id_type']);
            $product->setPrice($_POST['price']);
            // $product->setPhoto($_POST['photo']);

            $result = $product->insert();

            if ($result) {
                $message =  "insertion bien effectuée";
            } else {
                $message =  "échec de l'insertion";
            }
            $this->renderView('employe/stock/insert', [
                'message' => $message
            ]);
        }
        $this->renderView('employe/stock/insert');
    }

    public function update()
    {
        echo "ceci est la méthode update produit";
    }


    public function delete()
    {
        echo "ceci est la méthode " . __FUNCTION__ .
            " produit";
    }


    //Tous les coffrets 
    public function showAllBoxes()
    {
        $product = new Product();
        $products = $product->findAllProductBy(['id_type' => 4]);
        $this->renderView('product/Boxs/boxAllProduct', compact('products'));
    }


    //Tous les vins
    public function showAllWines()
    {
        $product = new Product();

        $products = $product->findAllProduct();
        $this->renderView('product/wines/allProductWines', compact('products'));
    }


    // tous les vins rouges  id_type = 2 
    public function showAllRedWines()
    {

        $product = new Product();
        $products = $product->findAllProductBy(['id_type' => 2, 'id_cepage' => 9]);
        $this->renderView('product/wines/allProductRed', compact('products'));
    }


    // tous les vins blancs
    public function showAllWhiteWines()
    {
        $product = new Product();
        $products = $product->findAllProductBy(['id_type' => 1]);
        $this->renderView('product/wines/allProductWhite', compact('products'));
    }

    // tous les champagnes
    public function showAllChampagne()
    {
        $product = new Product();
        $products = $product->findAllProductBy(['id_type' => 3]);
        $this->renderView('product/wines/allProductChampagnes', compact('products'));
    }
}
