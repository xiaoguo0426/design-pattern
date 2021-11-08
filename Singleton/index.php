<?php

require '../vendor/autoload.php';

use DesignPattern\Singleton\President;

$instance = President::getInstance();

$instance->speech();

// wrong
//$new = new President();
//$new = clone $instance;


//保证类只实例化一次，减少开销