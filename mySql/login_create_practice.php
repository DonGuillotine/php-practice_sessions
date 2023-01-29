<?php 
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $connection = mysqli_connect('localhost', 'root', '', 'myfirst');
    if($connection){
        echo "WE ARE CONNECTED DUDE";
    }
    else{
        echo "Opps 😜";
    }

    $query = "INSERT INTO begin(name, password) VALUES('$username', '$password')";
    $results = mysqli_query($connection, $query);
    if(!$results){
        die("Not inserted ):" . mysqli_error());
    }
}

?>