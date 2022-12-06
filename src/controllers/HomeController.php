<?php

namespace App\Controllers;

use Core\Controller;
use App\Models\Product;

class HomeController extends Controller
{


    public function show(): void
    {
        $product = new Product();

        $products = $product->findAll();

        $this->renderView('home/index', compact('products'));
    }
}
