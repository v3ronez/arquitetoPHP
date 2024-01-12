<?php

namespace App\Impostos;

use App\Orcamento;

interface Imposto
{
    public function calculaImposto(Orcamento $valor): float;
}
