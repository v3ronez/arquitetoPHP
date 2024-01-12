<?php

namespace App\Descontos;

use App\Orcamento;

class DescontoMais500Reais extends Desconto
{
    public function calculaDesconto(Orcamento $orcamento): float
    {
        if ($orcamento->valor > 500) {
            return $orcamento->valor * 0.5;
        }
        return $this->proximoDesconto->calculaDesconto($orcamento);
    }
}
