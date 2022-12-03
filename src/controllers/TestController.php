<?php

namespace App\Controllers;

use Core\Controller;



class TestController extends Controller
{
    /**
     * afficher la liste des tâches
     * @return void
     */
    public function index() :void
    {
        
        echo "Test controller ".__FUNCTION__;
    }
    // ?id=10
    // task/show/10
    public function show(int $id)
    {

    }

    public function insert()
    {

        
        echo "Test controller ".__FUNCTION__;
    }

    public function delete()
    {

        echo "Test controller ".__FUNCTION__;
    }

    public function edit()
    {
        echo "Test controller ".__FUNCTION__;
    }
}