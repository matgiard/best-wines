<?php

namespace App\Controllers;

use Core\Controller;
use App\Models\User;



class AdminController extends Controller
{

    public function insertEmployee()
    {
        $message ="";
        if (isset($_POST['submit'])) {
            $user = new User();
            $user->setEmail(htmlentities($_POST['email']));
            $user->setPassword(htmlentities($_POST['password']));
            $user->setIs_employee(1);
            $result = $user->insertEmployee();

            if ($result) {
                $message =  "L'insertion a été prise en compte";
            } else {
                $message =  "échec de l'insertion";
            }
        }
        $this->renderView('administrateur/insert', [
            'message' => $message
        ]);
    }

    public function showAll()
    {
        $user = new User();
        $all_users = $user->findAll();
        $this->renderView('administrateur/index', compact('all_users'));
    }


    public function delete()
    {
        $id = $_GET['id'];
        $to_delete = new User;
        $to_delete->delete($id);
        header('Location: /best-wines/administrateur');
    }
    public function edit()
    {


        $this->renderView('administrateur/index');
    }
}
