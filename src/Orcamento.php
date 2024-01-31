<?php

namespace App;

use App\EstadosOrcamento\EmAprovacao;
use App\EstadosOrcamento\EstadoOrcamento;

class Orcamento implements Orcavel
{
    /* @var ItemDeOrcamentoDeOrcamento[] */
    private array $itensDeOrcamento;
    public EstadoOrcamento $estadoAtual;


    public function __construct()
    {
        $this->estadoAtual = new EmAprovacao();
        $this->itensDeOrcamento = [];
    }

    final public function adicionaItem(Orcavel $item)
    {
        $this->itensDeOrcamento[] = $item;
    }

    public function valor(): float
    {
        sleep(2);
        return array_reduce($this->itensDeOrcamento, fn($acc, Orcavel $item) => $acc + $item->valor(), 0);
    }
}
