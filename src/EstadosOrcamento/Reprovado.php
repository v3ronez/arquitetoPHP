<?php

namespace App\EstadosOrcamento;

use App\Orcamento;
use DomainException;

class Reprovado extends EstadoOrcamento
{

    public function calcularDescontoExtra(Orcamento $orcamento): float
    {
        throw new DomainException(
            'Um orcamento reprovado nao pode ganahr desconto'
        );
    }

    public function finaliza(Orcamento $orcamento)
    {
        $orcamento->estadoAtual = new Finalizado();
    }
}
