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
        if (isset($_POST['submit'])) {


            $supplier = new Supplier;
            $supplier->setName(htmlentities($_POST['name']));
            $supplier->setContent(($_POST['content']));
            $supplier->setImage_supp($_FILES['image']['name']);


            if (count($_FILES) > 0) {
                $allowed[] = "image/jpeg";
                $allowed[] = "image/png";

                if ($_FILES['image']['error'] == 0 && in_array($_FILES['image']['type'], $allowed)) {

                    $folder = "uploads/supplier/";
                    if (!file_exists($folder)) {
                        mkdir($folder, 0777, true);
                    }
                    $destination = $folder . $_FILES['image']['name'];
                    move_uploaded_file($_FILES['image']['tmp_name'], $destination);
                    $_POST['image'] = $destination;
                }
            }

            $result = $supplier->insertSupp();

            if ($result) {
                $message =  "insertion bien effectuée";
            } else {
                $message =  "échec";
            };
            $this->renderView('fournisseur/insert', compact('message'));
        }

        $this->renderView('fournisseur/insert');
    }
    public function EditSupplier()
    {
        $this->renderView('fournisseur/edit');
    }
}
