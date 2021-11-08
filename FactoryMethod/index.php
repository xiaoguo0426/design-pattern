<?php

use DesignPattern\FactoryMethod\CreatorA;
use DesignPattern\FactoryMethod\CreatorB;

require '../vendor/autoload.php';

$creator = new CreatorA();

$product = $creator->operator();

$product->show();


//$creator = new CreatorB();
//
//$product = $creator->operator();
//
//$product->show();

//可用在类中有一些通用处理但在运行时动态决定所需的子类
