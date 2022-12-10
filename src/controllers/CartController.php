<?php

namespace App\Controllers;

use Core\Controller;
use App\Models\Product;



class CartController extends Controller
{

    public function addProduct()
    {



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
