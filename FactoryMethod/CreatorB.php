<?php


namespace DesignPattern\FactoryMethod;


class CreatorB extends Creator
{

    protected function factoryMethod()
    {
        return new ProductB();
    }
}