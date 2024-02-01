<?php

declare(strict_types = 1);

namespace App\NotaFiscal;

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
        return 0;
    }
}
