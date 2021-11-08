<?php

use DesignPattern\Command\Bulb;
use DesignPattern\Command\RemoteControl;
use DesignPattern\Command\TurnOff;
use DesignPattern\Command\TurnOn;

require '../vendor/autoload.php';

$bulb = new Bulb();

$turnOn = new TurnOn($bulb);
$turnOff = new TurnOff($bulb);

$remote = new RemoteControl();
$remote->submit($turnOn); // Bulb has been lit!
$remote->submit($turnOff); // Darkness!

//允许您将操作封装在对象中。这种模式背后的关键思想是提供将客户端与接收器分离的方法。