<?php

use DesignPattern\Prototype\Sheep;

require '../vendor/autoload.php';

$original = new Sheep('Jolly');

echo $original->getName() . PHP_EOL;
echo $original->getCategory() . PHP_EOL;

$cloned = clone $original;

$cloned->setName('Dolly');

echo $cloned->getName() . PHP_EOL;
echo $cloned->getCategory() . PHP_EOL;

//当需要一个与现有对象类似的对象时，或者与克隆相比，创建的成本会很高。


