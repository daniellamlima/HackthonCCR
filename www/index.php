<?php
ob_start();

require_once __DIR__ . '/vendor/autoload.php';

/**
 * ROUTES
 */

use CoffeeCode\Router\Router;

$route = new Router(url(), ":");
$route->namespace("source\controllers");
$route->group(null);

/*
 * WEB ROUTES
 */
$route->get("/", "App:home");

/*
 * APP ROUTES
 */
$route->get("/", "App:home");


/**
 * ERROR ROUTES
 */
$route->group("/ops");
$route->get("/{errorcode}", "Accounts:error");
$route->group(null);

/**
 * ROUTE
 */
$route->dispatch();

/**
 * ERROR REDIRECT
 */

if ($route->error()) :
    $route->redirect("/ops/{$route->error()}");
endif;

ob_end_flush();