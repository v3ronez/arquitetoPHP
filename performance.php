<?php

declare(strict_types = 1);

use App\Impostos\Pedido;
use App\Orcamento;

require 'vendor/autoload.php';

$pedidos = [];
$dateTimeImmutable = new DateTimeImmutable();
for ($i = 0; $i < 100000; $i++) {
    $pedido = new Pedido();
    $pedido->nomeCliente = md5((string)rand(1, 1000000));
    $pedido->orcamento = new Orcamento();
    $pedido->dataFinalizacao = $dateTimeImmutable;
    $pedidos[] = $pedido;
}

echo memory_get_peak_usage();

//padrao flyweight

//prox aula 479
