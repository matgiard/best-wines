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


    public function show() {
    // {
    //     if (empty($criteria)) {
    //         throw  new \Exception("Il faut passer au moins un critère");
    //     }
    //     $sql_query = "SELECT * FROM {$this->table_name} WHERE ".$criteria."ORDER BY id DESC LIMIT 1";
    //     dd($sql_query);
    //     $stmt = $this->pdo->prepare($sql_query);
        
    //     foreach ($criteria as $key => $value) {
    //         $stmt->bindParam(":$key", $value);
    //     }
    //     // if ($is_array)
    //     $stmt->setFetchMode(\PDO::FETCH_ASSOC);
    //     // else
    //     //     $stmt->setFetchMode(\PDO::FETCH_CLASS, get_called_class());

    //     $stmt->execute();
    //     return $stmt->fetch();
        

        // $this->renderView('home/index',compact('lastWhiteWine'));

        // $product = new Product();
        // $lastWhiteWine = $product->findLastBy(['id_type' => 1]);
        // $lastRedWine = $product->findLastBy(['id_type' => 2]);
        // $lastChampagne = $product->findLastBy(['id_type' => 3]);
        // $lastBox = $product->findLastBy(['id_type' => 4]);
        // $this->renderView('home/index', compact('lastWhiteWine','lastRedWine','lastChampagne','lastBox'));
    }
    public function showLast()
    {
    $product = new Product();
 
    
    $lastWhiteWine = $product->findLastBy(['id_type' => 1]);
    $lastRedWine = $product->findLastBy(['id_type' => 2]);
    $lastChampagne = $product->findLastBy(['id_type' => 3]);
    $lastBox = $product->findLastBy(['id_type' => 4]);
    $this->renderView('home/index', compact('lastWhiteWine','lastRedWine', 'lastChampagne', 'lastBox' ));

    }
}
