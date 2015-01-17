<?php

if($_POST)
{
    $operation = $_POST['operation'];
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    if ($operation == "+") {
        $x = $number1 + $number2;
    }
    if ($operation == "-") {
        $x = $number1 - $number2;
    }

    if ($operation == "x") {
        $x = $number1 * $number2;
    }
    if ($operation == "/") {
        $x = $number1 / $number2;
    }
    if ($operation == "%") {
        $x = $number1 % $number2;
    }

    //echo $x . " is the result<br/>";
    echo " success: output of your calculation is  $x<br/>";
}
if($_POST)
{

    if ($operation == "-" && $number1 < $number2)
    {
        echo "number1 is larger than number2";
    }
echo "<br>";

   /* if ($operation == "%" && $x%2!=0){
    echo"can't devide";
    echo "<br>";*/
}


function add($number1, $number2)
{
return $number1 + $number2;
}

function subtract($number1, $number2)
{
if ($number1 > $number2) {
return $number1 - $number2;
} else {
return "Number1 should be larger than Number2";

}
}

function divide($number1, $number2)
{
if ($number2==0 ) {
return "Can not Divide";

} else {
return $number1 / $number2;
}
}

function multiply($number1, $number2)
{
return $number1 * $number2;
}

?>


<a href="calpracts.php">Go Back</a>
