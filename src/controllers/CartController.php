<?php

namespace App\Controllers;

use Core\Controller;
use App\Models\Product;



class CartController extends Controller
{

	public function index()
    {
		$_SESSION['last_page'] = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'index.php';

        $this->renderView('cart/index');
    }

    public function addProduct()
    { 
		$_SESSION['last_page'] = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'index.php';

        $product = new Product; 

        $id = $_GET['id'];
        
        if(!empty($_POST["qty"])) {
			$productByName = $product->findOneItemBy(['id' => $id]);
			

			$itemArray = array($productByName->name => array('name'=>$productByName->name, 'name'=>$productByName->name, 'id'=>$productByName->id, 'quantity'=>$_POST["qty"], 'price'=>$productByName->price, 'image'=>$productByName->photo));

			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByName->name,array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v ) {
							if($productByName->name == $k) {
								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
								$_SESSION["cart_item"][$k]["quantity"] += $_POST["qty"];
							}
					}
					
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}

		header('Location: /best-wines/cart');
		exit;
       
    }


    public function removeProduct()
    {

		dd($_SESSION['cart_item']);
		
        if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_GET["id"] == $v['id'])
						unset($_SESSION["cart_item"][$k]);				
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}

        header('Location: /best-wines/cart');
		exit;
       
    }

    public function emptyCart()
    {
		unset($_SESSION["cart_item"]);
	
		header('Location: /best-wines/cart');
		exit;
    }

}
