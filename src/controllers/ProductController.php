<?php

namespace App\Controllers;

use App\Models\Product;
use Core\Controller;


class ProductController extends Controller
{

    /**
     * Insérer un nouveau produit
     *
     * @return void
     */
    public function insert()
    {

        if (isset($_POST['submit'])) {


            $product = new Product();

            $product->setName(htmlentities($_POST['name']));
            $product->setDescription(htmlentities($_POST['description']));
            $product->setPhoto(htmlentities($_POST['photo']));

            // $product->setNote(htmlentities($_POST['note']));
            $product->setStock(htmlentities($_POST['stock']));
            $product->setAlcohol_percentage(htmlentities($_POST['alcohol_percentage']));

            $result = $product->insert();

            if ($result) {
                $message =  "insertion bien effectuée";
            } else {
                $message =  "échec";
            }
            $this->renderView('product/insert', [
                'message' => $message
            ]);
        }
        $this->renderView('product/insert');
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
        $products = $product->findAllBy(['id_type' => 4]);
        $this->renderView('product/Boxs/boxAllProduct', compact('products'));
    }


    //Tous les vins
    public function showAllWines()
    { {
            $product = new Product();

            $products = $product->findAll();
            $this->renderView('product/wines/allProductWines', compact('products'));
        }
    }


    // tous les vins rouges  id_type = 2 
    public function showAllRedWines()
    {

        $product = new Product();
        $products = $product->findAllBy(['id_type' => 2, 'id_cepage' => 9]);
        $this->renderView('product/wines/allProductRed', compact('products'));
    }


    // tous les vins blancs
    public function showAllWhiteWines()
    {
        $product = new Product();
        $products = $product->findAllBy(['id_type' => 1]);
        $this->renderView('product/wines/allProductWhite', compact('products'));
    }

    // tous les champagnes
    public function showAllChampagne()
    {
        $product = new Product();
        $products = $product->findAllBy(['id_type' => 3]);
        $this->renderView('product/wines/allProductChampagnes', compact('products'));
    }
}
