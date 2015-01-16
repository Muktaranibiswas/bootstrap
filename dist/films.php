<?php
$films= array(
    array ('title' => 'Funny Movie 3',
        'genre' => 'comedy',
        'stars'=> array('leading actress',
            'leading actor',
            'expandable dude',
            'somebody else')
    ),


);

?>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>

<body>
<br /><br /><br />
<div class="container">
    <div class ="row">
        <div class="col-md-8 col-md-offset-2">

                <table class="table table-bordered">


                    <tr>
                        <td><b>Title</b></td>
                        <td><b>Genre</b></td>
                        <td><b>Stars</td></b>
                    </tr>

                    <?php
                    foreach ($films as $list){
                        ?>
                        <tr>
                            <td><?php echo $list['title'];?></td>
                            <td><?php echo $list['genre'];?></td>
                            <td><?php foreach($list['stars'] as $stars){?>
                            <ul>
                                <li><?php echo $stars ?></li>
                            </ul>
                                <?php }?>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>
</body>

</html>