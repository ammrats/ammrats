<?php

namespace App\Logging;

use Monolog\Formatter\LineFormatter;

class LineExFormatter extends LineFormatter
{
    public function format($record)
    {
        return json_encode($record);
    }
}
