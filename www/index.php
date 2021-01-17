<?php

ob_start();

require __DIR__ . "/vendor/autoload.php";

use Slim\Views\PhpRenderer;
use Slim\Exception\HttpNotFoundException;
use Slim\Factory\AppFactory;
use Api\Controllers\Admin;
use Api\Controllers\Login;
use Api\Controllers\Web;

$app = AppFactory::create();

$app->options('/{routes:.+}', function ($request, $response, $args) {
    return $response;
});

$app->add(function ($request, $handler) {
    $response = $handler->handle($request);
    return $response
        ->withHeader('Access-Control-Allow-Origin', '*')
        ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
        ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS');
});


// ROUTES ###########################################

// Create Authentication
$app->get('/', function ($request, $response, $args) {

    $renderer = new PhpRenderer('./templates');
    return $renderer->render($response, "web.php", $args);
});


$app->map(['GET', 'POST', 'PUT', 'DELETE', 'PATCH'], '/{routes:.+}', function ($request, $response) {
    throw new HttpNotFoundException($request);
});

// RUN ###########################################

$app->run();

ob_end_flush();