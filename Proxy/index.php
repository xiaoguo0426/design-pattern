<?php

use DesignPattern\Proxy\LabDoor;
use DesignPattern\Proxy\SecuredDoor;

require '../vendor/autoload.php';

$door = new SecuredDoor(new LabDoor());
$door->open('invalid'); // Big no! It ain't possible.

$door->open('$ecr@t'); // Opening lab door
$door->close(); // Closing lab door

//使用代理模式，类表示另一个类的功能。
//例子：mysql中间件 跳板机