<?php

use DesignPattern\ChainOfResponsibilities\Bank;
use DesignPattern\ChainOfResponsibilities\Bitcoin;
use DesignPattern\ChainOfResponsibilities\Paypal;

require '../vendor/autoload.php';

$bank = new Bank(100);          // Bank with balance 100
$paypal = new Paypal(200);      // Paypal with balance 200
$bitcoin = new Bitcoin(300);    // Bitcoin with balance 300

$bank->setNext($paypal);
$paypal->setNext($bitcoin);

// Let's try to pay using the first priority i.e. bank
$bank->pay(259);

//它有助于构建一系列对象。请求从一端进入并继续从一个对象到另一个对象，直到找到合适的处理程序。