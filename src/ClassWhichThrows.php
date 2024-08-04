<?php

declare(strict_types=1);

namespace SavinMikhail\PhpParser;

use Exception;

final readonly class ClassWhichThrows
{
    public function bar()
    {
        throw new Exception();
    }
}
