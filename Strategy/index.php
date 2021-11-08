<?php

use DesignPattern\Strategy\BubbleSortStrategy;
use DesignPattern\Strategy\QuickSortStrategy;
use DesignPattern\Strategy\Sorter;

require '../vendor/autoload.php';

$dataset = [1, 5, 4, 3, 2, 8];

$sorter = new Sorter(new BubbleSortStrategy());
$sorter->sort($dataset); // Output : Sorting using bubble sort

$sorter = new Sorter(new QuickSortStrategy());
$sorter->sort($dataset); // Output : Sorting using quick sort

//策略模式允许您根据情况切换算法或策略。