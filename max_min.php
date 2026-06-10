<!DOCTYPE html>
<html>
<head>
    <title>Maximum and Minimum Number</title>
</head>
<body>

<h1> Find Maximum and Minimum Number </h1>

<form method="post">
    Enter First Number:
    <input type="number" name="no1" required><br><br>

    Enter Second Number:
    <input type="number" name="no2" required><br><br>

    Enter Third Number:
    <input type="number" name="no3" required><br><br>

    <input type="submit" value="Find">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $num1 = $_POST['no1'];
    $num2 = $_POST['no2'];
    $num3 = $_POST['no3'];

        $max = max($no1, $no2, $no3);
         $min = min($no1, $no2, $no3);

    echo " <h3>Result</h3>";
    echo "Maximum Number = " . $max . "<br>";
    echo "Minimum Number = " . $min;
}
?>

</body>
</html>