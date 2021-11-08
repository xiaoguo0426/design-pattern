<?php

use DesignPattern\SimpleFactory\DoorFactory;

require '../vendor/autoload.php';

$width = 80;
$height = 190;

$door = DoorFactory::makeDoor($width, $height);

echo $door->getWidth() . PHP_EOL;
echo $door->getHeight() . PHP_EOL;

//简单工厂其实就是本来把实例化一个类换成了用工厂代替实例化，从而隐藏了具体的类
