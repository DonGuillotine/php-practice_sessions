<?php include "db.php";

//  RECEIVING FORM DATA FROM POST CHECK AND CREATING ROWS 8/31/2020 8:59PM

function createRows(){
    global $connection;

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

$username = mysqli_real_escape_string($connection, $username);
$password = mysqli_real_escape_string($connection, $password);

$hashFormat = "2y$30$";
$salt = "iusesomecrazystrings22";
$encryption = $hashFormat . $salt;

$password = crypt($password, $encryption);

    $query = "INSERT INTO begin(name, password) VALUES ('$username', '$password')";
    // $query .= "VALUES ('$username', '$password')";
    $result = mysqli_query($connection, $query);
    if(!$result){
        die("Sorry try again" . mysqli_error());
    }
    else{
        echo "Row Created";
    }
// TO CHECK IF THE FORM IS FILLED
    // if($username && $password){
    //     echo $username;
    //     echo $password;
    // }
    // else{
    //     echo "not available";
    // }
    
}

}

// READING DATA FROM THE DATABASE
function readData(){
    global $connection;
$query = "SELECT * FROM begin";
    
    $result = mysqli_query($connection, $query);
    if(!$result){
        die("Sorry try again" . mysqli_error());
    }

    while ($row = mysqli_fetch_assoc($result)) {
        print_r($row);
    }
}


// THIS IS A FUNCTION TO GET THE ID FROM THE DATABASE

function showAllResults(){
global $connection;
$query = "SELECT * FROM begin";
    
$result = mysqli_query($connection, $query);
if(!$result){
    die("Sorry try again" . mysqli_error());
}


while($row = mysqli_fetch_assoc($result)){
    $id = $row[id];
    echo "<option value='$id'>$id</option>";
}


}

// THIS IS A FUNCTION TO UPDATE THE DATABASE 9:29 PM 9/5/2020

function updateAll(){
    if(isset($_POST['submit'])){
    global $connection;
$name = $_POST['username'];
$password = $_POST['password'];
$id = $_POST['id'];


$query = "UPDATE begin SET name = '$name', password = '$password' WHERE id = $id";
$result = mysqli_query($connection, $query);
if(!$result){
    die ("FAILED" . mysqli_error($connection));
}
else{
    echo "Update Successful";
}
    }
}

// THIS IS A FUNCTION TO DELETE ROWS FROM THE DATABASE 9:48 PM 9/5/2020

function deleteRows(){
    if(isset($_POST['submit'])){
    global $connection;
    $id = $_POST['id'];
    
    $query = "DELETE FROM begin WHERE id = $id";
$result = mysqli_query($connection, $query);
if(!$result){
    die ("FAILED" . mysqli_error($connection));
}
else{
    echo "Deleted Successfully";
}
}
}

