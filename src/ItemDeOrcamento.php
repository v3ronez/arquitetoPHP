<?php

declare(strict_types = 1);

namespace App;

class ItemDeOrcamento implements Orcavel
{
    public float $valor;

    public function valor(): float
    {
        return $this->valor;
    }
}
