<?php

namespace DemoApp;

class Motorcycle extends Vehicle {
    private $motorcycleType;

    public function __construct($brand, $model, $motorcycleType) //perrasome konstruktoriu, kuris buo nurodytas Vehicle klaseje
    {
        parent::__construct($brand, $model);

        $this->motorcycleType = $motorcycleType;
    }
}