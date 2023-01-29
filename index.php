<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!--am embeding html code in php-->
    <?php
    $title = "<h1>My name is Donald ALONE</h1>"
    ?>
    <div><?php echo $title;?></div>

    <!-- VARIABLES IN PHP 8/25/2020 1:06 AM  -->
    <?php
    $name = "Ezio";
    $age =  18;
    echo $name . " " . $age
    ?> 

    <!-- MATH IN PHP 8/25/2020 1:14 AM -->
    <?php 
    $num1 = 144;
    $num2 = 12;

    echo "<br>";
    echo $num1 / $num2;
    ?>

    <!--ARRAYS 8/25/2020 1:31 AM -->
    <?php 
    $list = array(12, "DONALD", 144);
    $list2 = [256, "ALONE", 365];

    print_r($list);//THIS IS A BUILT IN PHP FUNCTION THAT GIVES THE INDEXES OF ARRAYS
    echo "<br>";
    echo $list[1];
    echo "<br>";
    echo $list2[1];
    echo "<br>";
    ?>

    <!--ASSOCIATIVE ARRAYS 8/25/2020 1:53 AM -->
    <?php 
    $newSum = array("firstName" => "JOHN", "lastName" => "SMITH");

    echo $newSum["firstName"] . " " . $newSum["lastName"];
    echo "<br>";
    ?>

    <!-- PRACTICE SECTION VARIABLES, MATH AND ARRAYS 8/25/2020 2:00 AM -->
    <?php 
    $number1 = 10;
    $number2 = 20;

    echo $number1 + $number2;
    echo "<br>";

    $actors = array("JANE","DOE","MIKE");
    $ladies = array("firstLady" => "GRACE", "secondLady" => "ZABI", "age" => 22);

    echo $actors[1] . " " . $ladies["firstLady"];
    echo "<br>";
    ?>

    <!-- IF STATEMENTS 8/25/2020 1:50 PM -->
    <?php 
    if(5 < 1){
        echo "fasle";
    }
    else if(10 < 2){
        echo "ten is greater";
    }
    else{
        echo "five is not less than one";
        echo "<br>";
    }
    ?>

    <!-- SWITCH CASE STATEMENTS 8/27/2020 2:10 PM-->
    <?php 
    $num = 20;

    switch($num){
        case 20:
            echo "The number is 20";
        break;

        case 29:
            echo "The number is 29";
        break;

        case 30:
            echo "The number is 30";
        break;

        default: echo "Not found";
        echo "<br>";
    }
    ?>

    <!-- WHILE LOOPS 8/27/2020 2:45 PM -->
    <?php 
        $i = 0;
        while($i <= 10){
            echo "Jasmine<br>";
            $i++;
        } 
    ?>

    <!-- FOR LOOPS 8/27/2020 2:53 PM -->
    <?php 
    for( $i = 0; $i < 10; $i++){
        echo "Donald<br>";
    }
    ?>

    <!-- FOR EACH LOOP 8/27/2020 3:04 PM -->
    <?php 
    $men = ["JOHN", "MIKE", "DOE", "DONALD", "JEFF"];
    foreach($men as $mens){
        echo $mens . "<br>";
    }
    ?>

    <!-- PRACTICE SECTION IF STATEMENTS AND LOOPS 8/27/2020 3:18 PM-->
    <!-- IF STATEMENTS -->
    <?php 
    if( 9 < 5 ){
        echo "This isn't equal";
    }

    else if( 5 > 2 ){
        echo "I LOVE PHP<br>";
    }

    else{
        echo "NO RESULT";
    }
    ?>

    <!-- A FOR LOOP THAT DISPLAYS 10 NUMBERS -->
    <?php 
    for($counter = 0; $counter <= 10; $counter++){
        echo $counter . "<br>";
    }
    ?>

    <!-- SWITCH STATEMENT PRACTICE -->
    <?php 
    $ages = "FULFILED";

    switch($ages){
        case "ALONE":
            echo "ALONE";
        break;

        case "FOREVER":
            echo "FOREVER";
        break;

        case "HAPPY":
            echo "HAPPIER";
        break;

        case "REGRETS":
            echo "REGRETS";
        break;

        case "FULFILED":
            echo "NO REGRETS<br>";
        break;

        
        default: echo "LOVE";
    }
    ?>

    <!-- FUNCTIONS 8/27/2020 3:53 PM -->
    <?php
    function allFather(){


      talk();
      subtract();
    }
    

    function talk(){
        echo "HELLO WORLD<br>";
    }

    function subtract(){
        echo 10 - 2 . "<br>";
    }



   allFather();
    ?>

    <!-- ADDING PARAMETERS TO FUNCTIONS 8/27/2020 4:29 PM  -->
    <?php 
    function calcuAge($birthyear){
        $ageFinder = 2020 - $birthyear;
        echo "Your age is " . $ageFinder  . "<br>";
    }

    calcuAge(2003);
    ?>

    <!-- RETURNING VALUES OF FUNCTIONS 8/27/2020 4:52 PM -->
    <?php 
    function addNum($numb1, $numb2){
        $sum = $numb1 + $numb2;
        return $sum;
    }

    $result = addNum(12,13);
    echo "The result is " . $result . "<br>";
    $result = addNum(1000, $result);
    echo "The total is " . $result;
    ?>

    <!-- SCOPES ~ GLOBAL AND LOCAL 8/28/2020 7:30 AM -->
    <?php 
    $firstMan = "Available<br>";

    function scopeFinder(){
        global $firstMan;
        $firstMan = "Unavailable<br>";
    }
    echo $firstMan;
    scopeFinder();
    echo $firstMan;
    ?>

    <!-- CONSTANTS 8/28/2020 7:40 AM  -->
    <?php 
    define("JOB", 900000);
    echo JOB . "<br>";
    ?>

    <!-- PRACTICE SECTION ~ FUNCTIONS 8/28/2020 7:50 AM -->
    <?php 
    function getUsers(){
        return 90 + 10;
    }

   
    $finale = getUsers();
    echo $finale . "<br>";
    ?>

    <!-- PRACTICE SECTION FUNCTIONS WITH PARAMETERS 8/28/2020 7:58 AM -->
    <?php 
    function simpleIntrest($principal, $rate, $time){
        $si = ($principal * $rate * $time) / 100;
        return $si;
    }

    $findSi = simpleIntrest(9000, 5 , 2);
    echo "The simple interest is " . $findSi . "<br>";
    ?>

    <!-- IN-BUILT MATH FUNCTIONS IN PHP 8/28/2020 8:21 AM -->
    <?php 
    echo pow(5, 3);
    echo "<br>";

    echo sqrt(144);
    echo "<br>";

    echo round(5.9);
    echo "<br>";

    echo rand(1 , 100);
    echo "<br>";

    echo ceil(5.8);
    echo "<br>";

    echo floor(7.9);
    echo "<br>";
    ?>

    <!-- STRING FUNCTIONS IN PHP 8/28/2020 8:39 AM -->
    <?php 
    $letter = "Hello man, how are you doing?";

    echo strlen($letter);
    echo "<br>";

    echo strtoupper($letter);
    echo "<br>";

    echo strtolower($letter);
    echo "<br>";

    ?>

    <!-- ARRAY FUNCTIONS IN PHP 8/28/2020 8:39 AM -->
    <?php 
    $arrayFunc = [2,4,6,8,10];
    echo max($arrayFunc);


    echo "<br>";
    echo min($arrayFunc);

    echo "<br>";
    echo sort($arrayFunc);

    echo "<br>";
    echo print_r($arrayFunc);
    echo "<br>";
    ?>

    <!-- PRACTICE SECTION STRING AND ARRAY FUNCTIONS 8/28/2020 9:33 AM  -->
    <?php 
    $stringo = 999888;
    $arrayFunction = [3, "JOHN", 90, "JOE", $stringo];
    $found = in_array($stringo, $arrayFunction );
    if($found){
        echo "We found it";
    }
    else{
        echo "not found 😑😑";
    }

    ?>
</body>
</html>