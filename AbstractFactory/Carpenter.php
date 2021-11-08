<?php


namespace DesignPattern\AbstractFactory;

/**
 * 木匠
 * Class Carpenter
 * @package DesignPattern\AbstractFactory
 */
class Carpenter implements FittingExpert
{

    public function getDescription()
    {
        echo 'I can only fit wooden doors' . PHP_EOL;
    }
}