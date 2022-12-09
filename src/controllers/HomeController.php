<?php

namespace App\Controllers;

use Core\Controller;
use App\Models\Region;
use App\Models\Cepage;
use App\Models\Taste;
use App\Models\Association;
use App\Models\TypeProduct;
use App\Models\Product;

class HomeController extends Controller
{



    public function showLast()
    {
        $product = new Product();


        $lastWhiteWine = $product->findLastBy(['id_type' => 1]);
        $lastRedWine = $product->findLastBy(['id_type' => 2]);
        $lastChampagne = $product->findLastBy(['id_type' => 3]);
        $lastBox = $product->findLastBy(['id_type' => 4]);
        $this->renderView('home/index', compact('lastWhiteWine', 'lastRedWine', 'lastChampagne', 'lastBox'));
    }
}
