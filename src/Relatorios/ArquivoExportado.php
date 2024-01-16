<?php

namespace App\Relatorios;

interface ArquivoExportado
{
    public function exportar(ConteudoExportado $conteudoExportado): string;
}
