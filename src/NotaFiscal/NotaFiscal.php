<?php

declare(strict_types = 1);

namespace App\NotaFiscal;

use App\ItemDeOrcamento;

class NotaFiscal
{
    public string $cnpj;
    public string $razaoSocial;
    public array $itens;
    public string $observacoes;
    public \DateTimeImmutable $dataEmissao;
    public float $valorImpostos;


    public function valor()
    {
        return array_reduce(
            $this->itens,
            fn($acc, ItemDeOrcamento $item) => $acc + $item->valor,
            0
        );
    }
}
