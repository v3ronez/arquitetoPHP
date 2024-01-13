<?php

namespace App\Impostos;

use App\Orcamento;

class ICPP extends ImpostoCom2Aliquotadas
{

    protected function deveAplicarTaxaMaxima(Orcamento $orcamento): float
    {
        return $orcamento->valor > 1000 && $orcamento->itens > 5;
    }

    protected function calculaTaxaMaxima(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.5;
    }

    protected function calculaTaxaMinima(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.1;
    }
}
