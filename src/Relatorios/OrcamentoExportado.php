<?php

namespace App\Relatorios;

use App\Orcamento;

class OrcamentoExportado implements ConteudoExportado
{
    private Orcamento $orcamento;

    public function __construct(Orcamento $orcamento)
    {
        $this->orcamento = $orcamento;
    }

    public function conteudo(): array
    {
        return [
            'valor' => $this->orcamento->valor,
            'itens' => $this->orcamento->itens
        ];
    }
}
