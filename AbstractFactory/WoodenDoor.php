<?php


namespace DesignPattern\AbstractFactory;


class WoodenDoor implements Door
{

    public function getDescription()
    {
        echo 'I am a wooden door' . PHP_EOL;
    }
}