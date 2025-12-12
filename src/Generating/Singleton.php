<?php

namespace Patterns\Generating;
class Singleton
{
    private static ?Singleton $instance;

    /**
     * Доступ к $instance только через метод getInstance
     * Если экземпляр еще не создан, то создать.
     * Иначе вернуть уже готовый
     * Для позднего статического связывания используем new static
     **/
    public static function getInstance(): Singleton
    {
        if (!isset(self::$instance)) {
            self::$instance = new static();
        }

        return self::$instance;
    }

    //Конструктор закрыт, чтобы предотвратить создание через new
    private function __construct(){}

    //нельзя клонировать, т.к объекты передаются по ссылке
    private function __clone(){}

    //Нельзя восстановить
    public function __wakeup(){
        throw new \Exception('Cannot unserialize a singleton');
    }
}