<?php

namespace DesignPattern\Visitor;

interface Animal
{
    public function accept(AnimalOperation $operation);
}