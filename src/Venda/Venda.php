<?php

declare(strict_types = 1);

namespace App\Venda;

abstract class Venda
{

    public \DateTimeInterface $dataRealizacao;

    public function __construct(\DateTimeInterface $dataRealizacao)
    {
        $this->dataRealizacao = $dataRealizacao;
    }
}
