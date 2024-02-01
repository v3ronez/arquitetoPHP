<?php

declare(strict_types = 1);

use App\ItemDeOrcamento;
use App\NotaFiscal\BuilderNotaFiscal;
use App\NotaFiscal\NotaFiscal;

require 'vendor/autoload.php';


$nota = new NotaFiscal();
$nf = new BuilderNotaFiscal($nota);

//
//$nf->paraEmpresa('7023132', 'empresa daora');
//$nf->comItem(new ItemDeOrcamento());
//$nf->comItem(new ItemDeOrcamento());
//$nf->comItem(new ItemDeOrcamento());
//$nf->observacoes('volto amanha');


//fluent interface https://pt.stackoverflow.com/questions/106955/o-que-%C3%A9-fluent-interface
$nf->paraEmpresa('7023132', 'empresa daora')
    ->comItem(new ItemDeOrcamento())
    ->comItem(new ItemDeOrcamento())
    ->comItem(new ItemDeOrcamento())
    ->observacoes('volto amanha');
//fluent interface (return $this);


$nfPronta = $nf->constroiNF();
