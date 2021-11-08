<?php

use DesignPattern\Adapter\Hunter;
use DesignPattern\Adapter\WildDog;
use DesignPattern\Adapter\WildDogAdapter;

require '../vendor/autoload.php';

$wildDog = new WildDog();
$wildDogAdapter = new WildDogAdapter($wildDog);

$hunter = new Hunter();
$hunter->hunt($wildDogAdapter);