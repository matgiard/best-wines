<?php

namespace App\Controllers;

use App\Models\User;
use Core\Controller;
use Core\Partials\CheckLog;

class UserController extends Controller
{

    public function login()
    {

        $errors = null;

        echo "ceci est la méthode login";

        CheckLog::checkIsNotLogged();

        if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['password'])) {
            $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
            $user = UserController::findOneByEmail($email);
            if (!$user) {
                $_SESSION['errors'][] = "nous n'avons pas un compte avec cette adresse";
            } else {
                if (password_verify(htmlspecialchars($_POST['password']), $user->password)) {
                    $_SESSION['user'] = [
                        'is_logged' => TRUE,
                        'email' => $user->email,
                        'id' => $user->id,
                        "is_employee" => $user->is_employee,
                        "is_admin" => $user->is_admin
                    ];

                    header('Location: /best-wines');
                    exit;
                } else {
                    $_SESSION['errors'][] = "Le mot de passe est erroné";
                }
            }
        } // else {
        //     // $_SESSION['errors'][] = "Tous les champs sont obligatoires";
        // }
        $errors = CheckLog::errors();

        $this->renderView('user/login', compact('errors'));
    }

    public function register()
    {
        echo "ceci est la méthode register";
    }


    public function logout()
    {
        if (!empty($_SESSION['user']['is_logged'])) {
            CheckLog::logoutUser();
            echo "Bye";
        } else {
            echo "Vous n'êtes même pas connecté ! ";
        }
        $this->renderView('user/logout');
    }


    /**
     * Insérer un nouvel utilsiateur
     *
     * @return void
     */
    public function insert()
    {
        if (isset($_POST['submit'])) {
            $user = new User();
            $user->setEmail(htmlentities($_POST['email']));
            $user->setPassword(htmlentities($_POST['password']));

            $result = $user->insert();

            if ($result) {
                $message =  "insertion bien effectuée";
            } else {
                $message =  "échec";
            }
            $this->renderView('user/insert', [
                'message' => $message
            ]);
        }
        $this->renderView('user/insert');
    }

    public static function findOneByEmail(string $email): object|array|false
    {
        $user_to_find = new User();
        $user = $user_to_find->findOneItemBy(['email' => $email]);

        return $user;
    }
}
