<?php

namespace source\core;

use source\core\View;

/**
 * @Descricao: Classe que implementa o Controller do sistema
 * @Autor: Iury Gomes de Oliveira
 * @Email: iurygdeoliveira@gmail.com
 * @copyright (c) 2020, Iury Gomes de Oliveira
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