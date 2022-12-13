<?php

namespace Core\Partials;

// use Core\Partials\StartSession;



class CheckLog
{

   

    public static function checkIsEmployee(): void
    {
     
        if (!isset($_SESSION['user']['is_employee']) || !$_SESSION['user']['is_employee']) {
            header('Location: /best-wines');
            exit;
        }
    }

    public static function checkIsAdmin(): void
    {
      
        if (!isset($_SESSION['user']['is_admin']) || !$_SESSION['user']['is_admin']) {
            header('Location: /best-wines');
            exit;
        }
    }


    public static function checkIsNotLogged(): void
    {
        // StartSession::start();
        if (isset($_SESSION['user']['is_logged']) && $_SESSION['user']['is_logged']) {
            header('Location: /best-wines');
            exit;
        }
    }

    public static function checkClientIsLogged(): void
    {
        // StartSession::start();        
        if (!isset($_SESSION['user']['is_logged']) || !$_SESSION['user']['is_logged']) {
            header('Location: /best-wines/login');
            exit;
        }
    }


    public static function logoutUser(): void
    {
        if (isset($_SESSION['user']['is_logged']) && $_SESSION['user']['is_logged']) {
            unset($_SESSION["user"]);
        }
    }

    public static function errors(): void
    {
        if (isset($_SESSION['errors'])) {
            foreach ($_SESSION['errors'] as $error)
                echo ' <div class="alert alert-danger" role="alert">' . $error . '</div>';
        }
        $_SESSION['errors'] = [];
    }
}
