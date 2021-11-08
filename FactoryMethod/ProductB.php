<?php


namespace DesignPattern\FactoryMethod;


class ProductB implements Product
{

    public function show()
    {
        echo 'I\'m B' . PHP_EOL;
    }
}