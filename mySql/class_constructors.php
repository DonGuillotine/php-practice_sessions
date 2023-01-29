<?php
class Car{
    var $volvo;
//A CONSTRUCTOR RUNS EACH TIME A CLASS IS INSTANTIATED
    function __construct(){
       echo $this->volvo= "peace" . "<br>";
    }
}

new Car();
new Car();
new Car();
new Car();
new Car();
