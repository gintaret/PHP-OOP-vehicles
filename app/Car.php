<?php

namespace DemoApp;

class Car extends Vehicle {
    private $carBodyType;

    public function __construct($brand, $model, $carBodyType) //perrasome konstruktoriu, kuris buvo nurodytas Vehicle klaseje
    {
        parent::__construct($brand, $model);

        $this->carBodyType = $carBodyType;
    }

    public function getAll()
    {
        $data = parent::getAll();
        $data[] = $this->carBodyType;

        return $data;
    }
//        public function __toString() //konvertuojame klases Car objekta i stringa
//    {
//        return $this->brand;
//        return $this->model;
//        return $this->carBodyType;
//    }
}