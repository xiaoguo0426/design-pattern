<?php


namespace DesignPattern\FactoryMethod;


class ProductA implements Product
{

    public function show()
    {
        echo 'I\'m A' . PHP_EOL;
    }
}