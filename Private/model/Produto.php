<?php

class Produto
{
    private $nome;
    private $valor;
    private $categoria;
    private $link;
    private $descri;

    public function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }

    public function __get($atributo)
    {
        return $this->$atributo;
    }
}
