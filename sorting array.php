<!DOCTYPE html>
<html>
<head>
    <title> Array Sorting Program </title>
</head>
<center>
<body>
    
<h2><font color="blue"> Sort an Array</font></h2>

<form method="post">
    <font color="blue">Enter Numbers : </font>
    <input type="text" name="numbers" required>
    <input type="submit" name="sort" value="Sort Array">
</form>

<?php
if(isset($_POST['sort']))
{
    $input = $_POST['numbers'];

    $arr = explode(",", $input);
    sort($arr);

    echo "<h3><font color='purple'> Sorted Array: </font></h3>";

    foreach($arr as $value)
    {
        echo "<font color='brown'><b>$value</b></font> ";
    }
}
?>

</body>
</center>
</html>