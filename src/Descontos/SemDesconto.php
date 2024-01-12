<?php

namespace App\Descontos;

use App\Orcamento;

class SemDesconto extends Descontoz
{

    public function calculaDesconto(Orcamento $orcamento): float
    {
    }
}
