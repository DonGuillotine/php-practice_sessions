<?php include "db.php" ?>
<?php include "functions.php" ?>
<?php createRows(); ?>

<!-- MARK UP FOR LOG IN PAGE 8/31/2020 8:40PM -->
<?php include "includes/header.php"; ?>
    <h1 style="padding-top: 100px; padding-bottom: 80px; text-align: center">CREATE</h1>
    <div class="container">

    <div class="col-xs-6">
        <form action="login_create.php" method="post">
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
    
<?php include "includes/footer.php"; ?>