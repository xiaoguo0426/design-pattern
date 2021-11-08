<?php

use DesignPattern\TemplateMethod\AndroidBuilder;
use DesignPattern\TemplateMethod\IosBuilder;

require '../vendor/autoload.php';

$androidBuilder = new AndroidBuilder();
$androidBuilder->build();

// Output:
// Running android tests
// Linting the android code
// Assembling the android build
// Deploying android build to server

$iosBuilder = new IosBuilder();
$iosBuilder->build();

// Output:
// Running ios tests
// Linting the ios code
// Assembling the ios build
// Deploying ios build to server

//模板方法定义了如何执行某个算法的框架，但是将这些步骤的实现推迟到子类。