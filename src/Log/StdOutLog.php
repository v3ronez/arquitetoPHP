<?php

declare(strict_types = 1);

namespace App\Log;

class StdOutLog implements LoggerWriter
{

    public function escreverLog(string $mensagem): void
    {
        echo($mensagem);
    }
}
