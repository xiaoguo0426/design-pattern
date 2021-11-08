<?php

use DesignPattern\Mediator\ChatRoom;
use DesignPattern\Mediator\User;

require '../vendor/autoload.php';

$mediator = new ChatRoom();

$john = new User('John Doe', $mediator);
$jane = new User('Jane Doe', $mediator);

$john->send('Hi there!');
$jane->send('Hey!');