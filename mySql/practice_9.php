<?php session_start();
//THIS IS ANOTHER WAY TO CHECK FOR THE GET SUPER GLOBAL
if(isset($_GET['id'])){
    $getter = $_GET['id'];
    echo $getter;
}
//THIS IS ALSO ANOTHER WAY
print_r($_GET);
$id = 2000;
$text = "Click me";
?>
<?php include "includes/header.php"?>
<a href="practice_9.php?id= <?php echo $id ?>"><?php echo $text?></a>
<?php include "includes/footer.php"?>


<?php
$name = "someName";
$value = "anything";
$expiration = time() + (60*60*24*7);

setcookie($name, $value, $expiration);
?>

<?php
if(isset($_COOKIE["someName"])){
    $cookie_finder = $_COOKIE["someName"];
    echo $cookie_finder . "<br>";
}
?>

<?php
$_SESSION["Fees"] = "YOUR FEES ARE PENDING";
if(isset($_SESSION["Fees"])){
    echo $_SESSION["Fees"];
}
?>
