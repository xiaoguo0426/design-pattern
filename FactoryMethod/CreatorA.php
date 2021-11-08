<?php


namespace DesignPattern\FactoryMethod;


class CreatorA extends Creator
{

    protected function factoryMethod()
    {
        return new ProductA();
    }
}