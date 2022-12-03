<?php


require_once 'core/Router.php';

use Core\Router;

Router::register('/test/all', 'TestController::delete' );
Router::register('/login', 'UserController::login');
Router::register('/register', 'UserController::register');
Router::register('/task/delete', 'TaskController::delete');
Router::register('/task/', 'TaskController::show');
Router::register('/task/add', 'TaskController::insert');
Router::register('/task/edit', 'TaskController::edit');
