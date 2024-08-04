<?php

namespace SavinMikhail\PhpParser;

require __DIR__ . DIRECTORY_SEPARATOR . '../vendor/autoload.php';

use PhpParser\NodeTraverser;
use PhpParser\NodeVisitor\NameResolver;
use PhpParser\ParserFactory;

use const DIRECTORY_SEPARATOR;

$code = file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'FileToAnalyze.php');
$parser = (new ParserFactory())->createForHostVersion();
$ast = $parser->parse($code);

$traverser = new NodeTraverser();

$traverser->addVisitor(new NameResolver());
$traverser->addVisitor(new CatchVisitor());

$traverser->traverse($ast);
