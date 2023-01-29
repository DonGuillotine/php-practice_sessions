<?php
$file = "PRAISE.HTML";
if($handle = fopen($file, 'r')){
    echo fread($handle, filesize($file));
    fclose($handle);
}
else{
    echo "Unsuccessful";
}