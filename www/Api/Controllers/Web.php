<?php

declare(strict_types=1);

namespace Api\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;


class Web
{
    protected $faker;

    protected $connect;

    protected $error;


    public function home(
        Request $request,
        Response $response
    ): Response {

        // SENHA INCORRETA
        $response->getBody()->write("Pagina Inicial");

        return $response->withStatus(200);
    }
}