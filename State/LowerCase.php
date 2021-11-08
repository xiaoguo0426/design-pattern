<?php


namespace DesignPattern\State;


class LowerCase implements WritingState
{

    public function write(string $words)
    {
        echo strtolower($words);
    }
}