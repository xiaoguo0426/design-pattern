<?php


namespace DesignPattern\AbstractFactory;


class SteelDoor implements Door
{


    function getDescription()
    {
        echo 'I am an steel door' . PHP_EOL;
    }
}