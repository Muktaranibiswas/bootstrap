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
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>
<br /><br /><br />
<div class="container">
    <div class ="row">
        <div class="col-md-8 col-md-offset-2">
            <div class ="well">
                <table class="table table-bordered">
                    <tr>
                    <td><b>City</b></td>
                    <td><b>Country</b></td>
                    <td><b>contient</td></b>
                    </tr>
                    <?php
                    foreach ($places as $list){
                    ?>
                    <tr>
                    <td><?php echo $list['city'];?></td>
                    <td><?php echo $list['country'];?></td>
                    <td><?php echo $list['contient'];?></td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>

</body>
</html>
