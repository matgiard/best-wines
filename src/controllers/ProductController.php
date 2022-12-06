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
        $this->renderView('product/Boxs/boxAllProduct');
    }
    
    //Tous les coffrets vins rouges
    public function showAllRedBox()
    {
        $this->renderView('product/Boxs/boxProductRed');
    }
    
    //Tous les coffrets vins blancs
    public function showAllWhiteBox()
    {
        $this->renderView('product/Boxs/boxProductWhite');
    }
    
    //tous les coffrets champagnes
    public function showAllChampagneBox()
    {
        $this->renderView('product/Boxs/boxProductChampagnes');
    }
    
    //Tous les vins
    public function showAllWines()
    {
        $this->renderView('product/wines/allProductWines');
    }
    
    // tous les vins rouges
    public function showAllRedWines()
    {
        $this->renderView('product/wines/allProductRed');
    }
    

    // tous les vins blancs
    public function showAllWhiteWines()
    {
        $this->renderView('product/wines/allProductWhite');
    }

    // tous les champagnes
    public function showAllChampagne()
    {
        $this->renderView('product/wines/allProductChampagnes');
    }
}
