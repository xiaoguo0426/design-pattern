<?php


namespace DesignPattern\FactoryMethod;


abstract class Creator
{
    abstract protected function factoryMethod();

    public function operator()
    {
        return $this->factoryMethod();
    }
}