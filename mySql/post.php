<!--AN EASY WAY TO USE THE POST VARIABLE 8:09 PM 9/8/2020-->
<?php
echo $_POST['name'];
?>
<?php include "includes/header.php" ?>
<form action="post.php" method="post">
    <input type="text" name="name">
    <input type="submit" name="submit">
</form>
<?php include "includes/footer.php" ?>
