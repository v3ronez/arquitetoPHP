<?php

declare(strict_types = 1);

namespace App\NotaFiscal;

use App\ItemDeOrcamento;

abstract class BuilderNotaFiscal
{
    protected NotaFiscal $notaFiscal;

    public function __construct(NotaFiscal $notaFiscal)
    {
        $this->notaFiscal = $notaFiscal;
    }

    public function paraEmpresa(string $cnpj, string $razao): BuilderNotaFiscal
    {
        $this->notaFiscal->cnpj = $cnpj;
        $this->notaFiscal->razaoSocial = $razao;
        return $this;
    }

    public function comItem(ItemDeOrcamento $item): BuilderNotaFiscal
    {
        $this->notaFiscal->itens[] = $item;
        return $this;
    }

    public function observacoes(string $observacao): BuilderNotaFiscal
    {
        $this->notaFiscal->observacoes = $observacao;
        return $this;
    }

    public function dataEmissao(\DateTimeImmutable $data = new \DateTimeImmutable()): BuilderNotaFiscal
    {
        $this->notaFiscal->dataEmissao = $data;
        return $this;
    }

    abstract function constroiNF(): NotaFiscal;
}
