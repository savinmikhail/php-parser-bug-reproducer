<?php

declare(strict_types=1);

namespace SavinMikhail\PhpParser;

use PhpParser\Node;
use PhpParser\Node\Stmt\TryCatch;
use PhpParser\NodeVisitorAbstract;

final class CatchVisitor extends NodeVisitorAbstract
{
    /**
     * @var TryCatch[]
     */
    private array $tryCatchStack = [];

    public function leaveNode(Node $node): ?Node
    {
        if ($node instanceof TryCatch) {
            array_pop($this->tryCatchStack);
        }

        return null;
    }

    public function enterNode(Node $node): ?Node
    {
        if ($node instanceof TryCatch) {
            $this->tryCatchStack[] = $node;
            foreach ($this->tryCatchStack as $tryCatch) {
                foreach ($tryCatch->catches as $catch) {
                    foreach ($catch->types as $catchType) {
                        dump($catchType->name);
                    }
                }
            }
        }

        return null;
    }
}