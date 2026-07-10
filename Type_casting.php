<!DOCTYPE html>
<html>
<head>
    <title> Type Casting using settype() and gettype() </title>
</head>
<body>
<center>

<h1>Type Casting </h1>

<form method="post">
    Enter a Value: <input type="text" name="value" required> <br><br>

    Select Data Type:
    <select name="datatype">
        <option value="integer">Integer</option>
        <option value="double">Double</option>
        <option value="string">String</option>
        <option value="boolean">Boolean</option>
    </select> <br><br>
    <input type="submit" name="submit" value="Convert">
</form>

<?php
if(isset($_POST['submit']))
{
    $value = $_POST['value'];
    $datatype = $_POST['datatype'];

    echo "<h3>Before Type Casting</h3>";
    echo "Value: " . $value . "<br>";
    echo "Data Type: " . gettype($value) . "<br><br>";

    settype($value, $datatype);

    echo "<h3>After Type Casting</h3>";
    echo "Value: ";
    var_dump($value);
    echo "<br>Data Type: " . gettype($value);
}
?>

</center>
</body>
</html>