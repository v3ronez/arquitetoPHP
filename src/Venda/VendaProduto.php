<?php

declare(strict_types = 1);

namespace App\Venda;

class VendaProduto extends Venda
{
    private int $pesoEmGrama;

    public function __construct(\DateTimeInterface $dataRealizacao, int $pesoEmGrama)
    {
        parent::__construct($dataRealizacao);
        $this->pesoEmGrama = $pesoEmGrama;
    }

}
