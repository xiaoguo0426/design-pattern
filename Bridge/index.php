<?php

use DesignPattern\Bridge\About;
use DesignPattern\Bridge\Careers;
use DesignPattern\Bridge\DarkTheme;

require '../vendor/autoload.php';


$darkTheme = new DarkTheme();

$about = new About($darkTheme);
$careers = new Careers($darkTheme);

echo $about->getContent() . PHP_EOL; // "About page in Dark Black";
echo $careers->getContent() . PHP_EOL; // "Careers page in Dark Black";

//有控制反转的味道