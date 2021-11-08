<?php

use DesignPattern\Fade\Computer;
use DesignPattern\Fade\ComputerFacade;

require '../vendor/autoload.php';

$computer = new ComputerFacade(new Computer());
$computer->turnOn(); // Ouch! Beep beep! Loading.. Ready to be used!
echo PHP_EOL;
$computer->turnOff(); // Bup bup buzzz! Haah! Zzzzz
echo PHP_EOL;