<?php

use DesignPattern\AbstractFactory\SteelDoorFactory;
use DesignPattern\AbstractFactory\WoodenDoorFactory;

require '../vendor/autoload.php';

$woodenFactory = new WoodenDoorFactory();

$woodenDoor = $woodenFactory->makeDoor();
$woodenFittingExpert = $woodenFactory->makeFittingExpert();

$woodenDoor->getDescription();
$woodenFittingExpert->getDescription();


$steelFactory = new SteelDoorFactory();

$steelDoor = $steelFactory->makeDoor();
$steelFittingExpert = $steelFactory->makeFittingExpert();

$steelDoor->getDescription();

$steelFittingExpert->getDescription();


//工厂将个体进行分组，但把有关系/依赖的工厂组装在一起，并且不会指定它们的实例




