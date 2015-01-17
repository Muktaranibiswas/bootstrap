<?php
//echo " Simple Calculator";
?>
<html>
<head>
    <title>Simple Calculator</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<header class="container">

</header>
<section class="container">
    <div class ="row">
        <div class="col-md-offset-2 col-md-4">
            <br>
            <div class="panel panel-default">
<form action="calpracjoin.php"  method="POST">

    <legend class="btn-success text-center">Simple Calculator</legend>
        <div class="from group">
            <label class="form-inline">Value1: </label>
            <input type="number" class="form-inline" name="number1" id="number1"/>
        </div>
        <br>

        <div class="from group">
            <label class="form-inline">Value2: </label>
            <input type="number" class="form-inline" name="number2" id="number2" />
        </div>
        <br>

        <div class="form-inline">

           <!-- <input type="radio" name="calculate" value="add">Add
            <input type="radio" name="calculate" value="subtract">Subtract
            <input type="radio" name="calculate" value="divide">Divide
            <input type="radio" name="calculate" value="multiply">Multiply
        </div>-->
</div>

   <br/>
    <select name = "operation" class="text-center">
        <option value = "+">Add</option>
        <option value = "-">Subtract</option>
        <option value = "x">Multiply</option>
        <option value = "/">Divide</option>

    </select>
    <br/>

    <br/>


    <script>
        function myFunction()
        {
            alert("No Alert");
        }
    </script>

            <button type="submit" class="btn btn-success">Calculation</button>
            <button type="reset" class="btn btn-success">Cencel</button>

</form>
</body>
</html>

