<?php

namespace App\Impostos;

use App\Orcamento;

abstract class ImpostoCom2Aliquotadas extends Imposto
{

    public function realizaCalculoEspecifico(Orcamento $orcamento): float
    {
        if ($this->calculaTaxaMaxima($orcamento)) {
            return $this->calculaTaxaMaxima($orcamento);
        }
        return $this->calculaTaxaMinima($orcamento);
    }

    abstract protected function deveAplicarTaxaMaxima(Orcamento $orcamento
    ): float;

    abstract protected function calculaTaxaMaxima(Orcamento $orcamento
    ): float;

    abstract protected function calculaTaxaMinima(Orcamento $orcamento
    ): float;
}
