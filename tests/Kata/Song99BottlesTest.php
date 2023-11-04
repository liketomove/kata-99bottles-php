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

    public function testShouldReturn99StringOfSong(): void
    {
        $this->assertEquals(
            '99 bottles of beer on the wall, 99 bottles of beer. Take one down and pass it around, 98 bottles of beer on the wall.',
            $this->main->handle(99)
        );
    }

    public function testShouldReturn98StringOfSong(): void
    {
        $this->assertEquals(
            '98 bottles of beer on the wall, 98 bottles of beer. Take one down and pass it around, 97 bottles of beer on the wall.',
            $this->main->handle(98)
        );
    }

    public function testShouldReturn97StringOfSong(): void
    {
        $this->assertEquals(
            '97 bottles of beer on the wall, 97 bottles of beer. Take one down and pass it around, 96 bottles of beer on the wall.',
            $this->main->handle(97)
        );
    }

    public function testShouldReturnMoreStringsOfSong(): void
    {
        $this->assertEquals(

        );
    }
}
