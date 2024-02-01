<?php

declare(strict_types = 1);

namespace App\Log;

interface LoggerWriter
{

    public function escreverLog(string $mensagem): void;
}
