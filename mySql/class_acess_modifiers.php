<!--ACCESS MODIFIERS IN PHP 9:24 AM 9/10/2020-->
<?php
class Currency{
    public $dollar = "DOLLARS";
    protected $pounds = "POUNDS";
    private $shilling = "SHILLING";
    static $aed = "AED";

    function getCurrency(){
        echo Currency::$aed . "<br>";
    }

}

$value = new Currency();
$value->getCurrency();
echo Currency::$aed = "DUBAI MONEY"  . "<br>";
class Value extends Currency {
    function getCurrency(){

    }
}

$value = new Value();
$value->getCurrency();
echo Currency::$aed = "DUBAI MONEY";
