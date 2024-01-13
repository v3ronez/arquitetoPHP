<?php

namespace App\Impostos;

use App\Orcamento;
use DateTimeInterface;

class Pedido
{
    public Orcamento         $orcamento;
    public DateTimeInterface $dataFinalizacao;
    public string            $nomeCliente;

    public function __construct()
    {
    }
}
