<?php

namespace App\Controllers;

use Core\Controller;
use App\Models\Product;



class CartController extends Controller
{

    public function addProduct()
    { 
        $name = $_GET['name'];
        dump($name);
        dd($_POST);

        // if(!empty($_POST["quantity"])) {
		// 	$productByName = $db_handle->runQuery("SELECT * FROM tblproduct WHERE code='" . $_GET["code"] . "'");
		// 	$itemArray = array($productByCode[0]["code"]=>array('name'=>$productByCode[0]["name"], 'code'=>$productByCode[0]["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["price"], 'image'=>$productByCode[0]["image"]));
			
		// 	if(!empty($_SESSION["cart_item"])) {
		// 		if(in_array($productByCode[0]["code"],array_keys($_SESSION["cart_item"]))) {
		// 			foreach($_SESSION["cart_item"] as $k => $v) {
		// 					if($productByCode[0]["code"] == $k) {
		// 						if(empty($_SESSION["cart_item"][$k]["quantity"])) {
		// 							$_SESSION["cart_item"][$k]["quantity"] = 0;
		// 						}
		// 						$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
		// 					}
		// 			}
		// 		} else {
		// 			$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
		// 		}
		// 	} else {
		// 		$_SESSION["cart_item"] = $itemArray;
		// 	}
		// }



        $this->renderView('cart/index');
    }

    public function editProduct()
    {
        $this->renderView('blog/index');
    }


    public function removeProduct()
    {
        $this->renderView('blog/edit');
    }

    public function emptyCart()
    {
        $this->renderView('blog/edit');
    }

    public function numRows($query) {
		$result  = mysqli_query($this->conn,$query);
		$rowcount = mysqli_num_rows($result);
		return $rowcount;	
	}
}
