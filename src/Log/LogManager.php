<?php

declare(strict_types = 1);

namespace App\Log;

abstract class LogManager
{
    public function log(string $severidade, string $mensagem)
    {
        /** @var LoggerWriter $logWrite */
        $logWrite = $this->criarLog();
        $dataHoje = date('d/m/Y');
        $mensagemFormatada = "[{$dataHoje}][{$severidade}]: {$mensagem}".PHP_EOL;
        $logWrite->escreverLog($mensagemFormatada);
    }

    abstract public function criarLog(): LoggerWriter;
}
