<?php

declare(strict_types = 1);

use App\ItemDeOrcamento;
use App\Orcamento;

require 'vendor/autoload.php';
$orcamento = new Orcamento();
$item1 = new ItemDeOrcamento();
$item2 = new ItemDeOrcamento();

$item1->valor = 300;
$item2->valor = 500;

$orcamento2 = new Orcamento();
$item3 = new ItemDeOrcamento();
$item3->valor = 100;
$orcamento2->adicionaItem($item3);

$orcamento->adicionaItem($item1);
$orcamento->adicionaItem($item2);
$orcamento->adicionaItem($orcamento2);

echo($orcamento->valor());
