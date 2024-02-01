<?php

declare(strict_types = 1);

namespace App\Log;

class StdOutLogManager extends LogManager
{

    public function criarLog(): LoggerWriter
    {
        return new StdOutLog();
    }
}
