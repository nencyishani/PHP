<!DOCTYPE html>
<html>
<head>
    <title>While and Do While Loop</title>
    <style>
        body
        {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        .box
        {
            width: 400px;
            margin: auto;
            padding: 20px;
            border: 2px solid black;
        }
    </style>
</head>
<body>

<div class="box">

    <h2>Using While Loop</h2>

    <?php
    $i = 15;
    while($i <= 20)
    {
        echo $i . "<br>";
        $i++;
    }
    ?>

    <hr>

    <h2>Using Do While Loop</h2>

    <?php
    $j = 15;
    do
    {
        echo $j . "<br>";
        $j++;
    }
    while($j <= 20);
    ?>

</div>

</body>
</html>