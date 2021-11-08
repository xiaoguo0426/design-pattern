<?php

namespace DesignPattern\State;

interface WritingState
{
    public function write(string $words);
}