<?php


namespace DesignPattern\AbstractFactory;


class SteelDoorFactory implements DoorFactory
{

    public function makeDoor(): Door
    {
        return new SteelDoor();
    }

    public function makeFittingExpert(): FittingExpert
    {
        return new Welder();
    }
}