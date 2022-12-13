<?php

namespace App\Controllers;

use Core\Controller;
use Core\Partials\CheckLog;

class PayController extends Controller
{



    public function index()
    {

        CheckLog::checkClientIsLogged();
        $total = $_SESSION['total_price'];
     
        
        $this->renderView('pay/index', compact('total'));
    }
}