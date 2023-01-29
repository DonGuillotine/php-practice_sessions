<?php include "db.php"; ?>
<?php include "functions.php"; ?>


<?php 

   deleteRows();


?>

<?php include "includes/header.php"; ?>
<h1 style="padding-top: 100px; padding-bottom: 80px; text-align: center">Delete Database</h1>
    <div class="container">

    <div class="col-xs-6">
        <form action="login_delete.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
            </div>

            <div class="form-group">
            <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <select name="id" id="">

<?php 
   showAllResults();
?>

                <!-- <option value="1">ID</option> -->
            </select>
            <div class="form-group" style="padding-top:10px;">
            <input class="btn btn-primary" type="submit" name="submit" value="DELETE">
            </div>
        </div>
        <?php include "includes/footer.php"; ?>