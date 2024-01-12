<?php

namespace App\Impostos;

use App\Orcamento;

class ISS implements Imposto
{

    public function calculaImposto(Orcamento $valorOrcamento): float
    {
        return $valorOrcamento->valor * 0.6;
    }
}
