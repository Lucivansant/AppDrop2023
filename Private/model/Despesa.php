<?php

class Despesa
{
    private $nome;
    private $valor;
    private $tipo;

    public function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }

    public function __get($atributo)
    {
        return $this->$atributo;
    }
}
