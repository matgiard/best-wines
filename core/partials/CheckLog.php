<?php
namespace Core\Partials;

// use Core\Partials\StartSession;



class CheckLog {

    public static function checkIsNotLogged () : void {

    // StartSession::start();
    if (isset($_SESSION['user']['is_logged']) && $_SESSION['user']['is_logged']) {
        header('Location: /best-wines');
        exit;
    }
}

    public static function checkIsLogged () : void {

        // StartSession::start();        
        if (!isset($_SESSION['user']['is_logged']) || !$_SESSION['user']['is_logged']) {
            // header('Location: login.php');
            exit;
        }
    }

    public static function destroySession() : void {

        if (isset($_SESSION['user']['is_logged']) && $_SESSION['user']['is_logged']) {
            session_destroy();
        }
        
    }

    public static function errors() : void {

        if (isset($_SESSION['errors'])) : ?>
            <?php foreach ($_SESSION['errors'] as $error) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= $error ?>
                </div>
            <?php endforeach ?>
        
            <?php $_SESSION['errors'] = [] ?>
        <?php endif ;
    }
}