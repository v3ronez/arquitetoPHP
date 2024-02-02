<?php

declare(strict_types = 1);

namespace App\NotaFiscal;

class BuilderNFProduto extends BuilderNotaFiscal
{

    function constroiNF(): NotaFiscal
    {
        $valorNotaFical = $this->notaFiscal->valor();
        $this->notaFiscal->valorImpostos = $valorNotaFical * 0.02;
        return $this->notaFiscal;
    }
}
