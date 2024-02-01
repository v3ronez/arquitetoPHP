<?php

declare(strict_types = 1);

namespace App\Log;

class LogFile implements LoggerWriter
{
    private $arquivo;

    public function __construct(string $arquivoPath)
    {
        $this->arquivo = fopen($arquivoPath, 'ab+');
    }


    public function escreverLog(string $mensagem): void
    {
        fwrite($this->arquivo, $mensagem);
    }

    public function __destruct()
    {
        fclose($this->arquivo);
    }
}
