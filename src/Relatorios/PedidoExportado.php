<?php

namespace App\Relatorios;

use App\Impostos\Pedido;

class PedidoExportado implements ConteudoExportado
{

    private Pedido $pedido;

    public function __construct(Pedido $pedido)
    {
        $this->pedido = $pedido;
    }

    public function conteudo(): array
    {
        /*
         * @formatter:off
         * */
        return [
            'nome_cliente'     => $this->pedido->nomeCliente,
            'data_finalizacao' => $this->pedido->dataFinalizacao->format('d/m/y'),
        ];
    }
}
