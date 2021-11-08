<?php


namespace DesignPattern\Visitor;


class Lion implements Animal
{
    public function roar()
    {
        echo 'Roaaar!' . PHP_EOL;
    }

    public function accept(AnimalOperation $operation)
    {
        $operation->visitLion($this);
    }
}