<?php
class Phone{
   var $screen = 9 . " meters";
   var $ports = 8;
   var $camera =  "HP OMEN 15 i7 core";
   var $apps = "inbuilt applications";


function memory(){
//    echo "4GB RAM" . "<br>";
    $this->ports = 15 . " ports";
}
}

$rolls_royce = new Phone();//A CLASS CAN BE INSTANTIATED MANY TIMES

echo $rolls_royce-> memory();
echo "<br>" . $rolls_royce->screen = "126 GB SSD  ";//overwriting the $screen variable in the class
echo "<br>" . $rolls_royce->ports;
$rolls_royce->apps = "AMAZON";//THIS HAS BEEN OVERRIDDEN BY THE CLASS INHERITING THIS CLASS
//TO CHECK IF A CLASS EXISTS 7:03AM 9/10/2020
//if(method_exists("Phone", "memory")){
//    echo "The Method Exists";
//}
//else{
//    echo "NO, It doesn't Exist";
//}

//TO CHECK IF A CLASS EXISTS 7:03AM 9/10/2020
//if(class_exists("Phone")){
//    echo "The Class Exists";
//}
//else{
//    echo "NO, It doesn't Exist";
//}

//THIS IS A CLASS INHERITANCE 7:49 AM 9/10/2020
class Laptop extends Phone {
var $apps = "GOOGLE";

function age_finder($birth_year){
    return 2020 - $birth_year;
}
}
$omen_15 = new Laptop();
echo "<br>" . $omen_15->camera;
echo "<br>" . $omen_15->apps;
echo "<br>" . $omen_15->age_finder(2003);


