<?php

namespace source\core;

use source\core\View;

/**
 * @Descricao: Classe que implementa o Controller do sistema
 * @Autor: Daniela Lima
 * @Email: daniellalima@gmail.com
 * @copyright (c) 2020, Daniela Lima
 */
class Controller
{

    /** @var View */
    protected $View;

    public function __construct(string $pathToViews = null)
    {

        $this->View = new View($pathToViews);
    }
}