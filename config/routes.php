<?php


require_once 'core/Router.php';

use Core\Router;

Router::register('/', 'HomeController::show');


// Router::register('/task/delete', 'TaskController::delete');
// Router::register('/task/', 'TaskController::show');
// Router::register('/task/add', 'TaskController::insert');
// Router::register('/task/edit', 'TaskController::edit');

// product
Router::register('/product/insert', 'ProductController::insert');
Router::register('/product/delete', 'ProductController::delete');
Router::register('/product/update', 'ProductController::update');
Router::register('/product/show', 'ProductController::update');
Router::register('/product/show/all', 'ProductController::update');

// user
Router::register('/login', 'UserController::login');
Router::register('/register', 'UserController::register');
Router::register('/logout', 'UserController::logout');
Router::register('/user/add', 'UserController::insert');
Router::register('/logout', 'UserController::logout');

//article 
Router::register('/article/add', 'ArticleController::insert');
Router::register('/article/show', 'ArticleController::show');
Router::register('/article/edit', 'ArticleController::edit');
