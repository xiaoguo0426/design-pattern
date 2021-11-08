<?php

use DesignPattern\Decorator\MilkCoffee;
use DesignPattern\Decorator\SimpleCoffee;
use DesignPattern\Decorator\VanillaCoffee;
use DesignPattern\Decorator\WhipCoffee;

require '../vendor/autoload.php';

$someCoffee = new SimpleCoffee();
echo $someCoffee->getCost() . PHP_EOL; // 10
echo $someCoffee->getDescription() . PHP_EOL; // Simple Coffee

$someCoffee = new MilkCoffee($someCoffee);
echo $someCoffee->getCost() . PHP_EOL; // 12
echo $someCoffee->getDescription() . PHP_EOL; // Simple Coffee, milk

$someCoffee = new WhipCoffee($someCoffee);
echo $someCoffee->getCost() . PHP_EOL; // 17
echo $someCoffee->getDescription() . PHP_EOL; // Simple Coffee, milk, whip

$someCoffee = new VanillaCoffee($someCoffee);
echo $someCoffee->getCost() . PHP_EOL; // 20
echo $someCoffee->getDescription() . PHP_EOL; // Simple Coffee, milk, whip, vanilla

//Decorator 模式允许您通过将对象包装在装饰器类的对象中来动态更改对象在运行时的行为。

//商品在不同的促销活动中有不同的价格显示，不同的会员有不同的折扣