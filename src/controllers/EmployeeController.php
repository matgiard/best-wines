<?php

namespace App\Controllers;

use Core\Controller;



class EmployeeController extends Controller
{

    public function index()
    {

        $this->renderView('employe/index');
    }
}
