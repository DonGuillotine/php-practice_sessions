<?php include "functions_practice.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css"  type="text/css" media="all">
    <title>Document</title>
</head>
<body>
<h1 style="padding-top: 100px; padding-bottom: 80px; text-align: center">Update Database</h1>
    <div class="container">

    <div class="col-xs-6">
        <form action="login_update.php" method="post">
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
   updater();
?>

                <!-- <option value="1">ID</option> -->
            </select>
            <div class="form-group" style="padding-top:10px;">
            <input class="btn btn-primary" type="submit" name="submit" value="UPDATE">
            </div>
        </div>
        </div>
</body>
</html>