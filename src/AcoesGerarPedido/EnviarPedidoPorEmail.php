<?php

namespace App\AcoesGerarPedido;

use App\Impostos\Pedido;

class EnviarPedidoPorEmail implements AcoesPosGerarPedido
{

    public function executarAcao(Pedido $pedido): void
    {
        echo "Enviando pedido por email";
    }
}
