<?php

namespace App\Controllers;

use App\Models\User;
use Core\Controller;


class UserController extends Controller
{

    public function login()
    {

        echo "ceci est la méthode login";
    }

    public function register()
    {
        echo "ceci est la méthode register";
    }


    public function logout()
    {
        echo "ceci est la méthode " . __FUNCTION__;
    }


    /**
     * Insérer un nouvel utilsiateur
     *
     * @return void
     */
    public function insert()
    {

        if (isset($_POST['submit'])){


            $user = new User();
            
            $user->setEmail(htmlentities($_POST['email']));
            $user->setPassword(htmlentities($_POST['password']));

            $result = $user->insert();

            if ($result ){
                $message =  "insertion bien effectuée";
            }else {
                $message =  "échec";
            }
            $this->renderView('user/insert', [
                'message' => $message
            ]);

        }
        $this->renderView('user/insert');
    }
}
