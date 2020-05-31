<?php

class Car {
    public $color;
    public $year;

    public function run(){
        return "Car is running...";
    }

    public function stop(){
        return "Car has stopped";
    }
}

$car = new Car();
$car->color = 'white';
$car->year = 1990;