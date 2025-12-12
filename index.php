<?php

require __DIR__ . '/vendor/autoload.php';

use Patterns\Generating\Singleton;

echo "<h1>Singleton</h1>";
$singleton1 = Singleton::getInstance();
var_dump($singleton1);
echo "<br>";

$singleton2 = Singleton::getInstance();
var_dump($singleton2);
echo "<br>";

echo "<hr>";