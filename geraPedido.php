<?php

use App\AcoesGerarPedido\CriarPedidoNoBanco;
use App\AcoesGerarPedido\EnviarPedidoPorEmail;
use App\AcoesGerarPedido\LogGerarPedido;
use App\Impostos\GerarPedido;
use App\Impostos\GerarPedidoHandler;

require_once 'vendor/autoload.php';

$valorOrcamento = $argv[1];
$itens = $argv[2];
$nomeCliente = $argv[3];


$gerarPedido = new GerarPedido($valorOrcamento, $itens, $nomeCliente);
$handle = new GerarPedidoHandler();
$handle->adicionarAcoesAposGerarPedido(
    [
        new LogGerarPedido(),
        new CriarPedidoNoBanco(),
        new EnviarPedidoPorEmail(),
    ]
);
$handle->execute($gerarPedido);
