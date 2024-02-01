<?php

declare(strict_types = 1);

namespace App\Log;

class LogFileManager extends LogManager
{

    private string $caminhoArquivo;

    public function __construct(string $caminhoArquivo)
    {
        $this->caminhoArquivo = $caminhoArquivo;
    }

    public function criarLog(): LoggerWriter
    {
        return new LogFile($this->caminhoArquivo);
    }
}
