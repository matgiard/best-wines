<?php

namespace App\Controllers;

use Core\Controller;
use App\Models\Product;

class HomeController extends Controller
{


    public function show(): void
    {


        $this->renderView('home/index');
    }
}
