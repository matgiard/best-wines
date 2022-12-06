<?php

namespace App\Controllers;

use Core\Controller;



class AdminController extends Controller
{

    public function insert()
    {

        $this->renderView('administrateur/insert');
    }

    public function showAll()
    {
        $this->renderView('administrateur/index');
    }


    public function edit()
    {
        $this->renderView('administrateur/edit');
    }
}
