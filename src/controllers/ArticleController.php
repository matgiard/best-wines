<?php

namespace App\Controllers;

use Core\Controller;



class ArticleController extends Controller
{

    public function insert()
    {

        echo "ceci est la méthode insert article";
    }

    public function show()
    {
        echo "ceci est la méthode show article";
    }


    public function edit()
    {
        echo "ceci est la méthode " . __FUNCTION__ .
            " article";
    }
}
