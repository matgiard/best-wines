<?php

namespace App\Controllers;

use Core\Controller;
use App\Models\Product;
use App\Models\Article;
class HomeController extends Controller
{



    public function showLast()
    {
        
        $product = new Product();
        $lastarticles = new Article;
        $articles = $lastarticles->findLast();
        
        $lastWhiteWine = $product->findLastBy(['id_type' => 1]);
        $lastRedWine = $product->findLastBy(['id_type' => 2]);
        $lastChampagne = $product->findLastBy(['id_type' => 3]);
        $lastBox = $product->findLastBy(['id_type' => 4]);


        $featuredWhiteWine = $product->findFeaturedBy(['id_type' => 1, ]);
        $featuredRedWine = $product->findFeaturedBy(['id_type' => 2]);
        $featuredChampagne = $product->findFeaturedBy(['id_type' => 3]);
        $featuredBox = $product->findFeaturedBy(['id_type' => 4]);
        $this->renderView('home/index', compact('articles','lastWhiteWine','featuredWhiteWine', 'featuredRedWine','featuredChampagne', 'featuredBox','lastRedWine', 'lastChampagne', 'lastBox'));
        
    }

}
