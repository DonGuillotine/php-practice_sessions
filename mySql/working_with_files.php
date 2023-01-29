<?php
$filename = "PRAISE.html";
if($holder = fopen($filename, 'w')){
    fwrite($holder, "<h1>I LOVE PHP PROGRAMMING 😎</h1>");
    fclose($holder);
}
else{
    echo "unsuccessful";
}