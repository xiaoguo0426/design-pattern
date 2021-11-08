<?php

namespace DesignPattern\Strategy;

interface SortStrategy
{
    public function sort(array $dataset): array;
}