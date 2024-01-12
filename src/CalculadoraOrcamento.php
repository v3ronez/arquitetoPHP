<?php

namespace App;

use App\Impostos\Imposto;

class CalculadoraOrcamento
{

    public function calcula(Orcamento $orcamento, Imposto $imposto)
    {
        return $imposto->calculaImposto($orcamento);
    }
}
