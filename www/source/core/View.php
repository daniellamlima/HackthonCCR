<?php

namespace source\core;

use League\Plates\Engine;

/**
 * @Descricao: Classe que implementa o View para exibição de dados ao Usuário
 * @Autor: Daniela Lima
 * @Email: daniellalima@gmail.com
 * @copyright (c) 2020, Daniela Lima
 */
class View
{

    private $Engine;

    public function __construct(
        string $path = CONF_VIEW_PATH,
        string $ext = CONF_VIEW_EXT
    ) {

        $this->Engine = Engine::create($path, $ext);
    }

    /**
     * @Descrição: Adiciona uma pasta ao caminho da view  
     */
    public function Path(string $Name, string $Path): View
    {

        $this->Engine->addFolder($Name, $Path);
        return $this;
    }

    /**
     * @Descrição: Renderizar as views
     */
    public function Render(string $TemplateName, array $Data): string
    {

        return $this->Engine->render($TemplateName, $Data);
    }

    /**
     * @Descrição: Retorna todas a sessão em forma de objeto 
     */
    public function Engine(): Engine
    {

        return $this->Engine();
    }
}