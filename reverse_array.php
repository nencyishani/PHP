<!DOCTYPE html>
<html>
<head>
    <title>Reverse Array</title>
    <style>
        body
        {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        .box
        {
            width: 450px;
            margin: auto;
            padding: 20px;
            border: 2px solid black;
        }
        input[type=text]
        {
            width: 250px;
            padding: 5px;
        }
    </style>
</head>
<body>

<div class="box">
    <h2>Reverse Array Values</h2>

    <form method="post">
        Enter Values :<br><br>
        <input type="text" name="arr" placeholder="10,20,30,40"><br><br>

        <input type="submit" value="Reverse Array">
    </form>

    <?php
    if(isset($_POST['arr']))
    {
        $array = explode(",", $_POST['arr']);
        $reverse = array_reverse($array);

        echo "<h3>Reversed Array:</h3>";

        foreach($reverse as $value)
        {
            echo $value . " ";
        }
    }
    ?>
</div>

</body>
</html>