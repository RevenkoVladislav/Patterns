<?php

namespace Patterns\Generating\Factory;

class SimpleFactory
{
    public function make(): ProductSimpleFactory
    {
        //создать объект продукта
        return new ProductSimpleFactory();
    }
}