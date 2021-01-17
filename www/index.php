<?php
ob_start();

require_once __DIR__ . '/vendor/autoload.php';

/**
 * INICIALIZAÇÃO
 */

use source\core\Session;
use CoffeeCode\Router\Router;

echo "Pagina Inicial";
// $route->namespace("source\controllers");
// $route->group(null);

// /*
//  * APP ROUTES
//  */
// $route->get("/", "App:home");


// /**
//  * ROUTE
//  */
// $route->dispatch();

// /**
//  * ERROR REDIRECT
//  */

// if ($route->error()) :
//     $route->redirect("/ops/{$route->error()}");
// endif;

ob_end_flush();