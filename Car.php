<?php

class Car {
    public $color;
    public $year;
    public $model;

    public function run(){
        return $this->model . " Car is running...";
    }

    public function stop(){
        return $this->model . " Car has stopped";
    }
}

$car = new Car();
$car->color = 'white';
$car->year = 1990;
$car->model = "Corsa";

echo $car->run();
echo $car->stop();

$car2 = new Car();

$car2->color = 'red';
$car2->year = 1995;

$car2->run();
$car2->stop();
