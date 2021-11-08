<?php


namespace DesignPattern\AbstractFactory;


interface DoorFactory
{
    public function makeDoor(): Door;
    //装修专家
    public function makeFittingExpert(): FittingExpert;
}