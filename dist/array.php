<?php
$places=array(
    0 => array(
        'city'=>'Tokyo',
        'country'=>'Japan',
        'contient'=>'asia'
    ),


    1 => array(
        'city'=>'mexico city',
        'country'=>'mexico',
        'contient'=>'north america'
    ),

    2 => array(
        'city'=>'new york city',
        'country'=>'USA',
        'contient'=>'north america'
    ),

    3 => array(
        'city'=>'mumbai',
        'country'=>'india',
        'contient'=>'asia'
    ),

    4 => array(
        'city'=>'Seoul',
        'country'=>'Korea',
        'contient'=>'asia'
    ),

    5 => array(
        'city'=>'Shanghai',
        'country'=>'china',
        'contient'=>'asia'
    ),

    6 => array(
        'city'=>'Lagos',
        'country'=>'Nigeria',
        'contient'=>'africa'
    ),

    7 => array(
        'city'=>'Buenos Aries',
        'country'=>'argentins',
        'contient'=>'south america'
    ),

    8 => array(
        'city'=>'cairo',
        'country'=>'Egypt',
        'contient'=>'africa'
    ),

    9=> array(
    'city'=>'London',
    'country'=>'Uk',
    'contient'=>'Europe'
)

);
/*print_r($places);
echo $places[3]['country']='bangladesh';
echo "<br>";
echo $places[3]['country'];
echo "<br>";

echo $places[3]['city'];
echo "<br>";
print_r($places[8]);
echo "<br>";
echo $places[8]['city'];
echo "<br>";
echo $places[9]['contient'];
echo "<br>";
print_r($places[9]);
echo "<br>";
print_r($places);
echo "<br>";
echo $places[9]['contient']='bhola';
echo $places[9]['contient'];
echo $places[8]['contient']='bhola';
print_r ($places[8]);*/


/*
$oddnumber=array('mim','fahad','mukta','arifa','saima');
foreach($oddnumber as $bkict){
    echo $bkict;
    echo "<br>";
}*/

//$places=array('mim','fahad','mukta','arifa','saima');
foreach($places as $bkict){
   // echo $bkict." ";
    //echo "<br>";
    //print_r($bkict);
    echo $bkict['city']." ";
   // echo $bkict['city'].'-'.$bkict['country'].'-'.$bkict['contient']." ";


}