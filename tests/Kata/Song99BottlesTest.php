<?php

namespace Kata;

use PHPUnit\Framework\TestCase;
use Kata\Song99Bottles;

class Song99BottlesTest extends TestCase
{
    private Song99Bottles $main;

    protected function setUp(): void
    {
        $this->main = new Song99Bottles();
    }

    public function testShallPass(): void
    {
        $this->assertEquals(1, 1);
    }

    public function testHandleReturnTrue(): void
    {
        $this->assertEquals(true, $this->main->handle());
    }
}
