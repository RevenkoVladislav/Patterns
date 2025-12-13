<?php

namespace Patterns\Generating\Factory;

//Вторая реализация простой фабрики, с использованием switch / case
class SimpleFactory2
{
    public static function create($type) {
        switch ($type) {
            case 'user': return new UserSimpleFactory2();
            case 'admin': return new AdminSimpleFactory2();
            default:
                throw new \Exception('Wrong user type passed.');
        }
    }
}