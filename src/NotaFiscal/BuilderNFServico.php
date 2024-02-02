<?php

declare(strict_types = 1);

namespace App\NotaFiscal;

class BuilderNFServico extends BuilderNotaFiscal
{

    function constroiNF(): NotaFiscal
    {
        $valorNotaFical = $this->notaFiscal->valor();
        $this->notaFiscal->valorImpostos = $valorNotaFical * 0.06;
        return $this->notaFiscal;
    }
}
