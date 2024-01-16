<?php

use App\Orcamento;
use App\Relatorios\ArquivoExportadoXML;
use App\Relatorios\OrcamentoExportado;

require 'vendor/autoload.php';
$arquivo = new ArquivoExportadoXML('orcamento');
$orcamento = new Orcamento();
$orcamento->valor = 230.42;
$orcamento->itens = 10;

$orcamentoExportado = new OrcamentoExportado($orcamento);
$arquivoXML = new ArquivoExportadoXML('orcamento');
echo($arquivoXML->exportar($orcamentoExportado));
