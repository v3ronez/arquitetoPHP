<?php

namespace App;

class Orcamento
{
    public float $valor;

    public function __construct($valor)
    {
        $this->valor = $valor;
    }
}
