<?php

namespace DesignPattern\Decorator;

class SimpleCoffee implements Coffee
{

    public function getCost()
    {
        return 10;
    }

    public function getDescription()
    {
        return 'Simple coffee';
    }
}