<?php
class Dog{
    public $eye_color = "BLACK";
    public $nose = "Hmm OKAY";
    public $fur_color = "BROWN";
    protected $babies = "CUTE 🥰";

    function showAll(){
        echo $this->eye_color . "<br>";
        echo $this->nose . "<br>";
        echo $this->fur_color . "<br>";
        echo $this->babies . "<br>";
    }
}

$pit_bull = new Dog();
$pit_bull->showAll();