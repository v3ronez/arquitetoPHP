<?php

namespace App\Relatorios;

use SimpleXMLElement;

class ArquivoExportadoXML implements ArquivoExportado
{
    private string $nomeElementoPai;

    public function __construct(string $nomeElementoPai)
    {
        $this->nomeElementoPai = $nomeElementoPai;
    }

    public function exportar(ConteudoExportado $conteudoExportado): string
    {
        $elemento = new SimpleXMLElement("<{$this->nomeElementoPai}/>");

        foreach ($conteudoExportado as $key => $value) {
            $elemento->addChild($key, $value);
        }
        $temp = tempnam(sys_get_temp_dir(), 'xml');
        return $temp;
    }
}
