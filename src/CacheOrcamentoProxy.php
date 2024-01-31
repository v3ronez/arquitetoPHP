<?php

declare(strict_types = 1);

namespace App;

class CacheOrcamentoProxy extends Orcamento
{
    private float $valorCached;
    private Orcamento $orcamento;

    public function __construct(Orcamento $orcamento)
    {
        parent::__construct();
        $this->valorCached = 0;
        $this->orcamento = $orcamento;
    }

//    public function adicionaItem(Orcavel $item)
//    {
//              final no metodo/funcao para nao permitir override
//    }

    public function valor(): float
    {
        if (!$this->valorCached) {
            $this->valorCached = $this->orcamento->valor();
        }
        return $this->valorCached;
    }

}
