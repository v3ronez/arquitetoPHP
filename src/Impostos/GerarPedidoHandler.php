<?php

namespace App\Impostos;

use App\AcoesGerarPedido\AcoesPosGerarPedido;
use App\Orcamento;
use DateTime;

class GerarPedidoHandler
{
    /**
     * @var AcoesPosGerarPedido[]
     */
    private array $acoesAposGerarPedido = [];

    public function adicionarAcoesAposGerarPedido(AcoesPosGerarPedido $acoes
    ): void {
        foreach ($acoes as $acao) {
            $this->acoesAposGerarPedido[] = $acao;
        }
    }

    public function execute(GerarPedido $gerarPedido)
    {
        $orcamento = new Orcamento();
        $orcamento->itens = $gerarPedido->getNumeroItens();
        $orcamento->valor = $gerarPedido->getValorOrcamento();

        $pedido = new Pedido();
        $pedido->orcamento = $orcamento;
        $pedido->dataFinalizacao = new DateTime();
        $pedido->nomeCliente = $gerarPedido->getNomeCliente();

        foreach ($this->acoesAposGerarPedido as $acao) {
            $acao->executarAcao($pedido);
        }
    }
}
