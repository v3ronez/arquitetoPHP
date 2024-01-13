<?php

namespace App;

use App\EstadosOrcamento\EmAprovacao;
use App\EstadosOrcamento\EstadoOrcamento;

class Orcamento
{
    public float           $valor;
    public int             $itens;
    public EstadoOrcamento $estadoAtual;

    public function __construct()
    {
        $this->estadoAtual = new EmAprovacao();
    }

    public function aplicaEstadoAtual()
    {
        $this->valor -= $this->estadoAtual->calcularDescontoExtra($this);
    }

    public function aprova()
    {
        $this->estadoAtual->aprova($this);
    }

    public function reprova()
    {
        $this->estadoAtual->reprova($this);
    }

    public function finaliza()
    {
        $this->estadoAtual->finaliza($this);
    }

}
