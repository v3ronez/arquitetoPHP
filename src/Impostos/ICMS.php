<?php

namespace App\Impostos;

use App\Orcamento;

class ICMS implements Imposto
{
    public function calculaImposto(Orcamento $valorOrcamento): float
    {
        return $valorOrcamento->valor * 0.1;
    }
}
