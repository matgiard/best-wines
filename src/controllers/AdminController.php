<?php

namespace App\Controllers;

use Core\Controller;
use App\Models\User;



class AdminController extends Controller
{

    public function insert()
    {

        $this->renderView('administrateur/insert');
    }

    public function showAll()
    {
        $user = new User();
        $all_users = $user->findAll();
        $this->renderView('administrateur/index', compact('all_users'));
    }


    public function edit()
    {

        
        $this->renderView('administrateur/index');
    }
}
