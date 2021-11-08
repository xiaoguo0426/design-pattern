<?php

require '../vendor/autoload.php';

use DesignPattern\Builder\BurgerBuilder;

$burger = (new BurgerBuilder(10))
    ->addPepperoni()
    ->addLettuce()
    ->addTomato()
    ->build();


//建造者模式就是为了防止构造函数过于臃肿和不易阅读，注入一个构造器，给类进行DIY，加强易读性

