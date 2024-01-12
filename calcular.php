<?php

use App\CalculadoraOrcamento;
use App\Impostos\ICMS;
use App\Impostos\ISS;
use App\Orcamento;

require __DIR__.'/vendor/autoload.php';

$orcamento = new Orcamento(2000.00);
$calc = new CalculadoraOrcamento();
$icms = new ICMS();
$iss = new ISS();
echo ($calc->calcula($orcamento, $icms)).PHP_EOL;
echo ($calc->calcula($orcamento, $iss)).PHP_EOL;
