<?php

namespace App\Controllers;

use Core\Controller;


class PayController extends Controller
{



    public function index()
    {
        
        $this->renderView('pay/index');
    }
}