<?php

namespace App\AcoesGerarPedido;

use App\Impostos\Pedido;

class CriarPedidoNoBanco implements AcoesPosGerarPedido
{

    public function executarAcao(Pedido $pedido): void
    {
        echo "Criando Pedido no banco";
    }
}
