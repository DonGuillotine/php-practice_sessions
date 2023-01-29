<!--using the GET super global 7:52 PM 9/8/2020-->
<?php
print_r($_GET);
$id = 90;
$button = "CLICK"; ?>
<?php include "includes/header.php" ?>
<a href="get.php?id=<?php echo $id ?>"><?php echo $button ?></a>
<?php include "includes/footer.php" ?>




