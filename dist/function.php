<?php

$number = $_POST['number'];

echo identifyEvenOrOddNumber($_POST['number']);

function is_odd ($number){
    if (($number %2 ) ==0 ) {
        return false;
    }
    else{
        return true;

    }
}

function identifyEvenOrOddNumber ($number){


    if (($number % 2) ==0 ) {
        return "even number";
    }
    else{
        return "odd number";

    }




}









//$number = null;

/*$number = 13;

function identifyEvenorOddNumber($number){
if (($number%2) ==0 ) {
    return "even number";
}
else{
    return "odd number";

}


}*/
/*
$number = 13;



function mytest(){
    $sum = 2+3;
   echo "hello";
    echo "<br>";
    return 'bkict';
}

var_dump( is_null(mytest()));
//echo mytest();

function mytest2(){
    //return "hello";

}
//mytest2();
//echo mytest();*/
