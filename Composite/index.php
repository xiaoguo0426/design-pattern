<?php

use DesignPattern\Composite\Designer;
use DesignPattern\Composite\Developer;
use DesignPattern\Composite\Organization;

require '../vendor/autoload.php';

$john = new Developer('John Doe', 12000);
$jane = new Designer('Jane Doe', 15000);

// Add them to organization
$organization = new Organization();
$organization->addEmployee($john);
$organization->addEmployee($jane);

echo "Net salaries: " . $organization->getNetSalaries() . PHP_EOL; // Net Salaries: 27000

//通过实现复合模式，客户可以统一处理单个对象和组合。