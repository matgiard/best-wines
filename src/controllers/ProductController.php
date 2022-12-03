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

        if (isset($_POST['submit'])){


            $product = new Product();
            
            $product->setName(htmlentities($_POST['name']));
            $product->setDescription(htmlentities($_POST['description']));
            $product->setPhoto(htmlentities($_POST['photo']));

            // $product->setNote(htmlentities($_POST['note']));
            $product->setStock(htmlentities($_POST['stock']));
            $product->setAlcohol_percentage(htmlentities($_POST['alcohol_percentage']));

            $result = $product->insert();

            if ($result ){
                $message =  "insertion bien effectuée";
            }else {
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
}
