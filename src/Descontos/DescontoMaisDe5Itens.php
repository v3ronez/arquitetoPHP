<?php

namespace App\Descontos;

use App\Orcamento;

class DescontoMaisDe5Itens extends Desconto
{

    public function calculaDesconto(Orcamento $orcamento): float
    {
        if ($orcamento->itens < 5) {
            return $orcamento->valor * 0.3;
        }
        return $this->proximoDesconto->calculaDesconto($orcamento);
    }
}
