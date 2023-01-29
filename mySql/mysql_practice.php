<?php
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $connection = mysqli_connect('localhost', 'root', '', 'practice');
        if(!$connection){
            die("CONNECTION FAILED" . mysqli_error);
        }

        $query = "INSERT INTO practicetable(username, password) VALuES('$username', '$password')";
        $result = mysqli_query($connection, $query);
        if(!$result){
            die("INSERTION FAILED 😜" . mysqli_error($connection));
        }
        else{
            echo "DATA INSERTED";
        }
    }
?>
<?php include "includes/header.php";?>
<h1 style="padding-top: 100px; padding-bottom: 80px; text-align: center">CREATE</h1>
    <div class="container">
    <div class="col-xs-6">
        <form action="mysql_practice.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
            </div>

            <div class="form-group">
            <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>

            <input class="btn btn-primary" type="submit" name="submit" value="CREATE">
        </form>
    </div>

<?php 
if(isset($_POST['submit'])){
    $username = $_POST['username'];
   $password = $_POST['password'];

   $connection = mysqli_connect('localhost', 'root', '', 'practice');
   if(!$connection){
       die("FAILED" . mysqli_error());
   }

   $query = "SELECT * FROM practicetable";

   $result = mysqli_query($connection, $query);

   while($row = mysqli_fetch_assoc($result)){
    print_r($row);
    // echo $row['password']; just in case you wanna display stuff without array version 😎
   }
}

?>

<?php include "includes/footer.php";?>
