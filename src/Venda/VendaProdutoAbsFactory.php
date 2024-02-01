<?php

declare(strict_types = 1);

namespace App\Venda;

use App\Impostos\ICMS;
use App\Impostos\Imposto;

class VendaProdutoAbsFactory implements VendaFactory
{

    public function criarVenda(): Venda
    {
        return new VendaProdutoAbsFactory(new \DateTimeImmutable(), 2000);
    }

    public function imposto(): Imposto
    {
        return new ICMS();
    }
}
