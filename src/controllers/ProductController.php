<?php

namespace App\Controllers;

use Core\Controller;



class ProductController extends Controller
{

    public function insert()
    {

        echo "ceci est la méthode insert produit";
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
