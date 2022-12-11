<?php

namespace App\Controllers;

use Core\Controller;


class PayController extends Controller
{



    public function index()
    {
        $total = $_SESSION['total_price'];
     
        
        $this->renderView('pay/index', compact('total'));
    }
}