<?php

namespace App\Controllers;

use Core\Controller;



class UserController extends Controller
{

    public function insert()
    {

        echo "ceci est la méthode insert";
    }

    public function update()
    {
        echo "ceci est la méthode update";
    }


    public function delete()
    {
        echo "ceci est la méthode " . __FUNCTION__;
    }
}
