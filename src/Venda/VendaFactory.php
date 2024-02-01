<?php

declare(strict_types = 1);

namespace App\Venda;

use App\Impostos\Imposto;

interface VendaFactory
{

    public function criarVenda(): Venda;

    public function imposto(): Imposto;
}
