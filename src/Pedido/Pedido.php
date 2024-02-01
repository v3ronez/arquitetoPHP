<?php

declare(strict_types = 1);

namespace App\Pedido;

use App\Orcamento;

class Pedido
{
    public Orcamento $orcamento;
    public TemplatePedido $templatePedido;
}
