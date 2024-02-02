<?php

declare(strict_types = 1);

use App\ItemDeOrcamento;
use App\NotaFiscal\BuilderNFProduto;
use App\NotaFiscal\NotaFiscal;

require 'vendor/autoload.php';


$nota = new NotaFiscal();
//$nf = new BuilderNFServico($nota);
$nf = new BuilderNFProduto($nota);

//
//$nf->paraEmpresa('7023132', 'empresa daora');
//$nf->comItem(new ItemDeOrcamento());
//$nf->comItem(new ItemDeOrcamento());
//$nf->comItem(new ItemDeOrcamento());
//$nf->observacoes('volto amanha');


//fluent interface https://pt.stackoverflow.com/questions/106955/o-que-%C3%A9-fluent-interface
$item = new ItemDeOrcamento();
$item2 = new ItemDeOrcamento();
$item3 = new ItemDeOrcamento();
$item->valor = 100;
$item2->valor = 1200;
$item3->valor = 200;
$nf->paraEmpresa('7023132', 'empresa daora')
    ->comItem($item)
    ->comItem($item2)
    ->comItem($item3)
    ->observacoes('volto amanha');
//fluent interface (return $this);

$nf2 = clone $nota; //call the magic method __clone;
$nf2->itens[] = new ItemDeOrcamento();
$nf2Builder = new BuilderNFProduto($nf2);
$nf2Builder->observacoes("volto nada");

$nfPronta = $nf->constroiNF();

echo $nfPronta->valor().PHP_EOL;
echo $nfPronta->valorImpostos;
