<?php


namespace DesignPattern\AbstractFactory;


class WoodenDoorFactory implements DoorFactory
{

    public function makeDoor(): Door
    {
        return new WoodenDoor();
    }

    public function makeFittingExpert(): FittingExpert
    {
        return new Carpenter();
    }
}