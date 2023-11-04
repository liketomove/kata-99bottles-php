<?php

namespace Kata;

class Song99Bottles
{
    public function handle(int $numberOfBottles): string
    {

        return sprintf(
            '%s bottles of beer on the wall, %s bottles of beer. Take one down and pass it around, %s bottles of beer on the wall.',
            $numberOfBottles,
            $numberOfBottles,
            $numberOfBottles -1,
        );
    }
}
