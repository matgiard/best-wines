<?php

use Core\Router;

//Home
Router::register('/', 'HomeController::show');

// product
Router::register('/product/insert', 'ProductController::insert');
Router::register('/product/delete', 'ProductController::delete');
Router::register('/product/update', 'ProductController::update');
Router::register('/product/show', 'ProductController::update');


 // show all products 
Router::register('/nos-vins', 'ProductController::showAllWines');
Router::register('/nos-coffrets', 'ProductController::showAllboxes');

// product box
Router::register('/nos-coffrets/vin-blanc', 'ProductController::showAllWhiteBox');
Router::register('/nos-coffrets/vin-rouge', 'ProductController::showAllRedBox');
Router::register('/nos-coffrets/nos-champagne', 'ProductController::showAllChampagneBox');

// product whines
Router::register('/nos-vins/blanc', 'ProductController::showAllWhiteWines');
Router::register('/nos-vins/rouge', 'ProductController::showAllRedWines');
Router::register('/nos-vins/nos-champagne', 'ProductController::showAllChampagne');

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



//
// - Home (http://bestwines.fr)
// - Nos vins (http://bestwines.fr/nos-vins)
// - Nos coffrets (http://bestwines.fr/nos-coffrets)
// - Nos fournisseurs (http://bestwines.fr/nos-fournisseurs)
// - Qui sommes-nous ? (http://bestwines.fr/qui-sommes-nous)
// - Blog (http://bestwines.fr/blog)
// - Espace Client (http://bestwines.fr/mon-compte)
// En plus de ces pages principales, les pages suivantes doivent être accessibles depuis le footer :
// - Nos vins (http://bestwines.fr/nos-vins)
// o Nos rouges
// o Nos blancs
// o Nos champagnes
// - Nos coffrets (http://bestwines.fr/nos-coffrets)
// - Aide
// o FAQ
// o Mentions légales (http://bestwines.fr/mentions-legales)
// o Contact (http://bestwines.fr/nous-contacter)
// - Presse (http://bestwines.fr/presse)
// - Qui sommes-nous ? (http://bestwines.fr/qui-sommes-nous)
// - Blog (http://bestwines.fr/blog)
