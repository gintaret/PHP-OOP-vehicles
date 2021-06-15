<?php

namespace DemoApp;

class Bicycle extends Vehicle {
    private $bicycleType;

    public function __construct($brand, $model, $bicycleType) //perrasome konstruktoriu, kuris buo nurodytas Vehicle klaseje
    {
        parent::__construct($brand, $model);

        $this->bicycleType = $bicycleType;
    }

    public function getAll()
    {
        $data = parent::getAll();
        $data[] = $this->bicycleType;

        return $data;
    }
}