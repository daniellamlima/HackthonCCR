<?php

namespace source\controllers;

use source\core\Controller;
use source\core\View;

/**
 * @Descricao: Classe que implementa o Controller App
 * @Autor: Daniela Lima
 * @Email: daniellalima@gmail.com
 * @copyright (c) 2020, Daniela Lima
 */
class AppController extends Controller
{

    private $template;

    /**
     * App constructor.
     */
    public function __construct()
    {
        $this->template = new View();
        $this->template->Path("teste", "app");
    }

    /**
     * APP HOME
     */
    public function home(): void
    {

        echo $this->View->Render("home", [
            "head" => $head,
            "AtivarMenuPainel" => "active",
            "Item1" => "active"
        ]);
    }
}