<?php
//PHP ENCRYPTION 12:10AM 9/08/2020
$encryption = "Hello World 12";

$stepOne = "$2y10$";
$stepTwo = "iputsomecrazystrings22";

$initializer = $stepOne . $stepTwo;

$finale = crypt($encryption, $initializer);
echo $finale . '<br>';


//THIS IS THE SECOND WAY
$password = 3443334433;
$salt = "iputsomecrazystrings22";

$init = crypt($password, $salt);
echo $init;