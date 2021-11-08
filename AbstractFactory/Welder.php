<?php


namespace DesignPattern\AbstractFactory;

/**
 * 电焊工
 * Class Welder
 * @package DesignPattern\AbstractFactory
 */
class Welder implements FittingExpert
{

    public function getDescription()
    {
        echo 'I can only fit steel doors' . PHP_EOL;
    }
}