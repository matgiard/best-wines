<?php

namespace App\Controllers;

use Core\Controller;
use App\Models\Supplier;

class SupplierController extends Controller

{

    public function showFournisseur()
    {
        $supplier = new Supplier;
        $suppliers =  $supplier->findAll();

        $this->renderView('fournisseur/index', compact('suppliers'));
    }
    public function showOne()
    {
        $this->renderView('fournisseur/details');
    }
    public function insertSupplier()
    {
    }
    public function EditSupplier()
    {
    }
}
