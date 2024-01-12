<?php

namespace App;

class Orcamento
{
    public float $valor;
    public int $itens;

    public function __construct($valor, $itens)
    {
        $this->valor = $valor;
        $this->itens = $itens;
    }
}
