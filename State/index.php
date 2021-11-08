<?php

use DesignPattern\State\DefaultText;
use DesignPattern\State\LowerCase;
use DesignPattern\State\TextEditor;
use DesignPattern\State\UpperCase;

require '../vendor/autoload.php';

$editor = new TextEditor(new DefaultText());

$editor->type('First line');

$editor->setState(new UpperCase());

$editor->type('Second line');
$editor->type('Third line');

//它允许您在状态更改时更改类的行为。

$editor->setState(new LowerCase());

$editor->type('Fourth line');
$editor->type('Fifth line');
