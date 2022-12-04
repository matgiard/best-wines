<?php

namespace App\Controllers;

use Core\Controller;

class HomeController extends Controller{

public function show()
    {

        $this->renderView('home/index'); // Afficher page home depuis view/home/index.php
    }

}