<?php
require __DIR__ . '/vendor/autoload.php';

abstract class Taxi{
    abstract public function getTaxiType();

    public string $model, $price;

    public function call($order){
        $call=$this->getTaxiType();
        $call->order($order);
    }
    public function __construct($model, $price)
    {
        $this->model=$model;
        $this->price=$price;
    }
}

class EcoTaxi extends Taxi {
    public function getTaxiType()
    {
        return new EcoTaxi($this->model, $this->price);
    }
}

class StandTaxi extends Taxi {
    public function getTaxiType()
    {
        return new StandTaxi($this->model, $this->price);
    }
}

class LuxTaxi extends Taxi {
    public function getTaxiType()
    {
        return new LuxTaxi($this->model, $this->price);
    }
}









