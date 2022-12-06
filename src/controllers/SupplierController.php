<?php

namespace App\Controllers;

use Core\Controller;


class SupplierController extends Controller

{

    public function showFournisseur()
    {
        $this->renderView('fournisseur/fournisseur');
    }
}
