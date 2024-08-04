<?php

namespace SavinMikhail\PhpParser;

use PHPUnit\Logging\Exception;

$classWIthCatches = new ClassWhichThrows();

try {
    $classWIthCatches->bar();
} catch (Exception $exception) {

}
