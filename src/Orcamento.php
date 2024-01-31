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

//    public function aplicaEstadoAtual()
//    {
//        $this->valor -= $this->estadoAtual->calcularDescontoExtra($this);
//    }
//
//    public function aprova()
//    {
//        $this->estadoAtual->aprova($this);
//    }
//
//    public function reprova()
//    {
//        $this->estadoAtual->reprova($this);
//    }
//
//    public function finaliza()
//    {
//        $this->estadoAtual->finaliza($this);
//    }

    public function adicionaItem(Orcavel $item)
    {
        $this->itensDeOrcamento[] = $item;
    }

    public function valor(): float
    {
        return array_reduce($this->itensDeOrcamento, fn($acc, Orcavel $item) => $acc + $item->valor(), 0);
    }
}
