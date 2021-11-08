<?php


namespace DesignPattern\State;


class UpperCase  implements WritingState
{

    public function write(string $words)
    {
        echo strtoupper($words);
    }
}