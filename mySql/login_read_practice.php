<?php 


    $connection = mysqli_connect('localhost', 'root', '', 'myfirst');
    if ($connection) {
        echo "WE ARE CONNECTED";
    }
    else{
        echo "Opps";
    }

    $query = "SELECT * FROM begin";
    $results = mysqli_query($connection, $query);
    if(!$results){
        die("FAILED" . mysqli_error());
    }

while($row = mysqli_fetch_assoc($results)){
    print_r($row);
}

?>