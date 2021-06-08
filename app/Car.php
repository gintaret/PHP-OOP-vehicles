<?php

namespace DemoApp;

class Car extends Vehicle {
    private $carBodyType;

    public function __construct($brand, $model, $carBodyType) //perrasome konstruktoriu, kuris buvo nurodytas Vehicle klaseje
    {
        parent::__construct($brand, $model);

        $this->carBodyType = $carBodyType;
    }

}