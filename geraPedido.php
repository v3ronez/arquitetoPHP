<?php

use App\Impostos\GerarComandoHandler;
use App\Impostos\GerarPedido;

require_once 'vendor/autoload.php';

$valorOrcamento = $argv[1];
$itens = $argv[2];
$nomeCliente = $argv[3];


$gerarPedido = new GerarPedido($valorOrcamento, $itens, $nomeCliente);
$handle = new GerarComandoHandler($gerarPedido);
$handle->execute($gerarPedido);
