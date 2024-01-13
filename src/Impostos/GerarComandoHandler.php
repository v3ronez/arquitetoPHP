<?php

namespace App\Impostos;

use App\Orcamento;
use DateTime;

class GerarComandoHandler
{

    public function execute(GerarPedido $gerarPedido)
    {
        $orcamento = new Orcamento();
        $orcamento->itens = $gerarPedido->getNumeroItens();
        $orcamento->valor = $gerarPedido->getValorOrcamento();

        $pedido = new Pedido();
        $pedido->orcamento = $orcamento;
        $pedido->dataFinalizacao = new DateTime();
        $pedido->nomeCliente = $gerarPedido->getNomeCliente();

        //pedido repository
        echo ('Pedido salvo').PHP_EOL;
        //enviar email;
        echo ('enviando email cliente').PHP_EOL;
    }
}
