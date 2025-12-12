<?php

require __DIR__ . '/vendor/autoload.php';

use Patterns\Generating\Factory\SimpleFactory;
use Patterns\Generating\Singleton;

echo "<h1>Singleton</h1>";
$singleton1 = Singleton::getInstance();
var_dump($singleton1);
echo "<br>";

$singleton2 = Singleton::getInstance();
var_dump($singleton2);
echo "<br>";

echo "<hr>";

echo "<h1>SimpleFactory</h1>";
//создаем объект фабрики и вызываем метод make
$simpleFactory = new SimpleFactory();
var_dump($simpleFactory);
echo "<br>";

$productSimpleFactory = $simpleFactory->make();
var_dump($productSimpleFactory);
