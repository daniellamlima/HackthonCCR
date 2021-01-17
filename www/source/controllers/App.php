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
class App extends Controller
{

    /** @var Usuario */
    private $user;

    /**
     * App constructor.
     */
    public function __construct()
    {

        parent::__construct(__DIR__ . "/../../themes/" . CONF_VIEW_APP . "/");
    }

    /**
     * APP HOME
     */
    public function home(): void
    {

        $head = $this->Seo->render(
            CONF_SITE_NAME . " | Home ",
            CONF_SITE_DESC,
            url(),
            image("images/share/share.png", 1201, 1201),
            false
        );

        echo $this->View->Render("home", [
            "head" => $head,
            "AtivarMenuPainel" => "active",
            "Item1" => "active"
        ]);
    }
}