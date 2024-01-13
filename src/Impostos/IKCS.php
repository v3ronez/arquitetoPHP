<?php

namespace App\Impostos;

use App\Orcamento;

class IKCS extends ImpostoCom2Aliquotadas
{

    protected function deveAplicarTaxaMaxima(Orcamento $orcamento): float
    {
        return $orcamento->valor > 300 && $orcamento->itens > 3;
    }

    protected function calculaTaxaMinima(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.04;
    }

    protected function calculaTaxaMaxima(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.025;
    }
}
