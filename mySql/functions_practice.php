<?php


function updater(){

$connection = mysqli_connect('localhost', 'root', '', 'myfirst');
if(!$connection){
    die("couldnt connect to the database... check your code");
}

$query = "SELECT * FROM begin";
$result = mysqli_query($connection, $query);
if(!$result){
    die("NOT CONNECTED 😜" . mysqli_error());
}
while($row = mysqli_fetch_assoc($result)){
    $id=$row[id];
    echo "<option value='$id'>$id</option>";

}
}
?>