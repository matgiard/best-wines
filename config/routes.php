<?php

use Core\Router;

//Home
Router::register('/', 'HomeController::show');


// product  for employee
Router::register('/product/insert', 'ProductController::insert');
Router::register('/product/delete', 'ProductController::delete');
Router::register('/product/edit', 'ProductController::edit');

// show all products 
Router::register('/nos-vins', 'ProductController::showAllWines');
Router::register('/nos-coffrets', 'ProductController::showAllboxes');

// product box
Router::register('/nos-coffrets/vin-blanc', 'ProductController::showAllWhiteBox');
Router::register('/nos-coffrets/vin-rouge', 'ProductController::showAllRedBox');
Router::register('/nos-coffrets/nos-champagne', 'ProductController::showAllChampagneBox');

// product wines
Router::register('/nos-vins/blanc', 'ProductController::showAllWhiteWines');
Router::register('/nos-vins/rouge', 'ProductController::showAllRedWines');
Router::register('/nos-vins/nos-champagne', 'ProductController::showAllChampagne');


// Fournisseur 
Router::register('/nos-fournisseurs', 'SupplierController::showFournisseur');

// Qui-sommes-nous
Router::register('/qui-sommes-nous/contact', 'PresentationController::showContact');
Router::register('/qui-sommes-nous/faq', 'PresentationController::showFaq');
Router::register('/qui-sommes-nous/mentions-legales', 'PresentationController::showMention');
Router::register('/qui-sommes-nous/presse', 'PresentationController::showPresse');

// Blog / articles
Router::register('/blog', 'BlogController::showArticle');
Router::register('/blog/insert', 'BlogController::insertArticle');
Router::register('/blog/edit', 'BlogController::editArticle');

// user
Router::register('/login', 'UserController::login');
Router::register('/register', 'UserController::insert');
Router::register('/logout', 'UserController::logout');

// Accueil espace employé
Router::register('/employe', 'EmployeeController::index');

// espace employé Commandes
Router::register('/employe/commandes', 'OrderTrackingController::showAll');
Router::register('/employe/commandes/details', 'OrderTrackingController::showOne');


// Gestion des paiements
Router::register('/employe/paiements', 'PaiementsController::index');

// Gestion des stocks
Router::register('/employe/stock', 'StockController::showAll');
Router::register('/employe/stock/insert', 'StockController::insert');
Router::register('/employe/stock/edit', 'StockController::edit');

// Gestion des codes promos
Router::register('/employe/promotion', 'PromotionController::showAll');
Router::register('/employe/promotion/insert', 'PromotionController::insert');
Router::register('/employe/promotion/edit', 'PromotionController::edit');

// Gestion des salariés

Router::register('/administrateur', 'AdminController::showAll');
Router::register('/administrateur/insert', 'AdminController::insert');
Router::register('/administrateur/edit', 'AdminController::edit');












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
