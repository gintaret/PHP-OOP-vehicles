<?php

namespace DemoApp;

class Vehicle{
    private $brand; //savybes
    private $model;
    private $price; //objekto sukurimui price ir kitos likusios savybes nera labai svarbios, todel issikvieciame tada, kai prireikia (su seteriu)
    private $weight;
    private $engine;
    private $enginePower;
    private $maxSpeed;
    private $description;
    private $numberOfSeats;

    public function __construct($brand,$model) // konstruktorius, kuris kvieciamas inicijuojant objekta (objekto kurimo metu) (magic method - su 2 buksneliais __)
    {
        $this->brand = $brand;
        $this->model = $model;
    }

    public function setPrice($price){ //seteris gali uzsetinti papildoma savybe(kuri yra optional, ne required), kuri nebuvo uzsetinta objekto kurimo metu; price svarbi tik tada, kai ja kvieciu. Ji automatiskai nera kvieciama. O jeigu konstruktoriu su construct esu apsirasiusi, vadinasi, jis visada yra kvieciamas
        $this->price = $price;
    }

    public function setWeight($weight){ //seteris
        $this->weight = $weight;
    }

    public function setEngine($engine){ //seteris
        $this->engine = $engine;
    }

    public function setEnginePower($enginePower){ //seteris
        $this->enginePower = $enginePower;
    }

    public function setMaxSpeed($maxSpeed){ //seteris
        $this->maxSpeed = $maxSpeed;
    }

    public function setDescription($description){ //seteris
        $this->description = $description;
    }

    public function setNumberOfSeats($numberOfSeats){ //seteris
        $this->numberOfSeats = $numberOfSeats;
    }


    public function getAll(){ //get All metodas grazina pagrindines savybes, kurias nurodeme objekto kurimo metu
        return [
            $this->brand,
            $this->model
        ];
    }

//    public function __toString() //konvertuojame klases Vehicle objekta i stringa
//    {
//        return $this->brand;
//        return $this->model;
//    }

    public function getPrice(){ //geteris, grazins tas savybes, kurioms konstruktoriaus nesusikureme
        return $this->price;
    }

    public function getWeight(){
        return $this->weight;
    }

    public function getEngine(){
        return $this->engine;
    }

    public function getEnginePower(){
        return $this->enginePower;
    }

    public function getMaxSpeed(){
        return $this->maxSpeed;
    }

    public function getDescription(){
        return $this->description;
    }

    public function getNumberOfSeats(){
        return $this->numberOfSeats;
    }

}