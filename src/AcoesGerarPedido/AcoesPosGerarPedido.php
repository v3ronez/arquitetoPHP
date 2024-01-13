<?php

namespace App\AcoesGerarPedido;

use App\Impostos\Pedido;

interface AcoesPosGerarPedido
{

    public function executarAcao(Pedido $pedido): void;
}
