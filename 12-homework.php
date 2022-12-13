<?php
require __DIR__ . '/vendor/autoload.php';

abstract class Taxi{
    abstract public function getTaxiType();

    public string $model, $price;

    public function call(string $order)
    {
        $call = $this->getTaxiType();
        $call->order($order);

    }
    abstract public function order();

    public function __construct(string $model, string $price){
        $this->model=$model;
        $this->price=$price;
    }

}

class EcoTaxi extends Taxi {
    public function getTaxiType()
    {
        return new EcoTaxi($this->model, $this->price);
    }

    public function order(): void
    {
        echo "Your car $this->model, price for trip $this->price";
    }

}

class StandTaxi extends Taxi {
    public function getTaxiType()
    {
        return new StandTaxi($this->model, $this->price);
    }

    public function order(): void
    {
        echo "Your car $this->model, price for trip $this->price";
    }
}

class LuxTaxi extends Taxi {
    public function getTaxiType()
    {
        return new LuxTaxi($this->model, $this->price);
    }

    public function order(): void
    {
        echo "Your car $this->model, price for trip $this->price";
    }
}

function clientCode(Taxi $creator)
{
    $creator->call(1);
}


clientCode(new EcoTaxi('Skoda', 150));
echo ' <br/>';
clientCode(new StandTaxi('Hyundai', 180));
echo ' <br/>';
clientCode(new LuxTaxi('Mercedes-Benz', 320));
echo ' <br/>';

















