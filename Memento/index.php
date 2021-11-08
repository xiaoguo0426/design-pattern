<?php

use DesignPattern\Memento\Editor;

require '../vendor/autoload.php';

$editor = new Editor();

// Type some stuff
$editor->type('This is the first sentence.');
$editor->type('This is second.');

// Save the state to restore to : This is the first sentence. This is second.
$saved = $editor->save();

// Type some more
$editor->type('And this is third.');

// Output: Content before Saving
echo $editor->getContent(); // This is the first sentence. This is second. And this is third.

// Restoring to last saved state
$editor->restore($saved);

$editor->getContent(); // This is the first sentence. This is second.

//Memento 模式是关于以稍后可以以平滑方式恢复的方式捕获和存储对象的当前状态。