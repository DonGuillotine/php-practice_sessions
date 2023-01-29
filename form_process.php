<!-- Checking Form Submission 8/28/2020 2:42 PM AND FORM VALIDATION 8/28/2020 3:50 PM-->
<?php 
if(isset($_POST['submit'])){
    $maximuim = 10;
    $minimium = 5;
    $arraySort = array("John", "DOE", "Smith", "DONALD");

    $username = $_POST['username'];
    $password = $_POST['password'];


    if(strlen($username) > $maximuim){
        echo " Cannot be more than ten characters ";
    }

    if(strlen($username) < $minimium){
        echo " Cannot be less than five ";
    }

    if(strlen($password) > $maximuim){
        echo " Password Cannot be more than ten characters ";
    }

    if(strlen($password) < $minimium){
        echo " Password cannot be less than five ";
    }

    if(!in_array($username, $arraySort)){
        echo " You are not Allowed";
    }
    else{
        echo " Welcome";
    }
}
?>