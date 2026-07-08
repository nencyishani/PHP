<!DOCTYPE html>
<html>
<head>
    <title>PHP Calculator using User Defined Function</title>
</head>
<body bgcolor="lightpink">

<h2><font color="black">Simple Calculator</font></h2>

<form method="post">
    <font color="green">Enter First Number:</font>
    <input type="number" name="num1" required><br><br>

    <font color="green">Enter Second Number:</font>
    <input type="number" name="num2" required><br><br>

    <font color="green">Select Operation:</font>
    <select name="op">
        <option value="+">Addition (+)</option>
        <option value="-">Subtraction (-)</option>
        <option value="">Multiplication ()</option>
        <option value="/">Division (/)</option>
    </select>
    <br><br>

    <input type="submit" name="submit" value="Calculate">
</form>

<?php

// User Defined Function
function calculator($a, $b, $op)
{
    switch($op)
    {
        case "+":
            return $a + $b;

        case "-":
            return $a - $b;

        case "*":
            return $a * $b;

        case "/":
            if($b != 0)
                return $a / $b;
            else
                return "Division by zero is not allowed.";

        default:
            return "Invalid Operation";
    }
}

if(isset($_POST['submit']))
{
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $op = $_POST['op'];

    $result = calculator($num1, $num2, $op);

    echo "<br><font color='red'><b>Result = $result</b></font>";
}

?>

</body>
</html>