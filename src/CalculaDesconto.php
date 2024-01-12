<?php

namespace App;

use App\Descontos\DescontoMais500Reais;
use App\Descontos\DescontoMaisDe5Itens;
use App\Descontos\SemDesconto;

class CalculaDesconto
{
    public function calculaDesconto(Orcamento $orcamento): float
    {
        $cadeiaDeDescontos = new DescontoMaisDe5Itens(
            new DescontoMais500Reais(
                new SemDesconto(null)
            )
        );
        return $cadeiaDeDescontos->calculaDesconto($orcamento);
    }
}
