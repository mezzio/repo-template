<?php

declare(strict_types=1);

namespace MezzioTest\{component-namespace};

use PHPUnit\Framework\TestCase;


class Test extends TestCase
{
    public function testEmpty(): void
    {
        $this->expectNotToPerformAssertions();
    }
}
