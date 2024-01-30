<?php

namespace App\Impostos;

use App\Orcamento;

class ICMS extends Imposto
{
    public function realizaCalculoEspecifico(Orcamento $valorOrcamento): float
    {
        return $valorOrcamento->valor * 0.1;
    }
}
