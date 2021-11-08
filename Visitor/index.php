<?php

use DesignPattern\Visitor\Dolphin;
use DesignPattern\Visitor\Jump;
use DesignPattern\Visitor\Lion;
use DesignPattern\Visitor\Monkey;
use DesignPattern\Visitor\Speak;

require '../vendor/autoload.php';

$monkey = new Monkey();
$lion = new Lion();
$dolphin = new Dolphin();

$speak = new Speak();

$jump = new Jump();

$monkey->accept($speak);   // Ooh oo aa aa!
$monkey->accept($jump);    // Jumped 20 feet high! on to the tree!

$lion->accept($speak);     // Roaaar!
$lion->accept($jump);      // Jumped 7 feet! Back on the ground!

$dolphin->accept($speak);  // Tuut tutt tuutt!
$dolphin->accept($jump);   // Walked on water a little and disappeared

//访客模式允许您向对象添加更多操作，而无需修改它们。