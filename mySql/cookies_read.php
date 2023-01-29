<!--READING COOKIES IN PHP 8:44 PM 9/8/2020-->
<?php
$name = "myName";
$value = 59;
$expiration = time() + (60*60*24*7);//TO ADD AN EXTRA WEEK MULTIPLY AGAIN BY 4 FOR FOUR WEEKS, FIVE FOR FIVE WEEKS VICE VERSA

setcookie($name, $value, $expiration);
?>
<?php include "includes/header.php" ?>
<?php
if (isset($_COOKIE['myName'])){
    $someOne = $_COOKIE['myName'];
    echo $someOne;
}
else{
    echo " ";
}
?>
<?php include "includes/footer.php" ?>
