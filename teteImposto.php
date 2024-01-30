<?php

declare(strict_types = 1);

use App\CalculadoraOrcamento;
use App\Impostos\ISS;
use App\Orcamento;

require 'vendor/autoload.php';

$calc = new CalculadoraOrcamento();
$orc = new Orcamento();
$orc->valor = 100;

echo($calc->calcula($orc, new ISS()));
