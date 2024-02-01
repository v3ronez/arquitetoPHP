<?php

declare(strict_types = 1);

namespace App\Venda;

use App\Impostos\Imposto;
use App\Impostos\ISS;

class VendaServicoAbsFactory implements VendaFactory
{
    private string $nomePrestador;

    public function __construct(string $nomePrestador)
    {
        $this->nomePrestador = $nomePrestador;
    }

    public function criarVenda(): Venda
    {
        return new VendaServico(new \DateTimeImmutable(), $this->nomePrestador);
    }

    public function imposto(): Imposto
    {
        return new ISS();
    }
}
