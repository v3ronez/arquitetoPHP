<?php

namespace App\AcoesGerarPedido;

use App\Impostos\Pedido;

class LogGerarPedido implements AcoesPosGerarPedido
{

    public function executarAcao(Pedido $pedido): void
    {
        echo "Criando log Pedido";
    }
}
