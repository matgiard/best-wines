<?php

namespace App\Controllers;

use Core\Controller;

//En cours de réalisation
//Gestion des statuts de commandes

class OrderTrackingController extends Controller
{
    
    public function showAll()
    {
        $this->renderView('employe/commandes/index');
    }


    public function showOne()
    {
        $this->renderView('employe/commandes/details');
    }
}
