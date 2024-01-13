<?php

namespace App\EstadosOrcamento;

use App\Orcamento;
use DomainException;

class Finalizado extends EstadoOrcamento
{

    public function calcularDescontoExtra(Orcamento $orcamento): float
    {
        throw new DomainException(
            'Um orcamento finalizado nao pode ganahr desconto'
        );
    }
}
