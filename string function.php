<!DOCTYPE html>
<html>
<head>
    <title>PHP String Functions</title>
</head>
<body bgcolor="lightgreen">

<h2><font color="red"> String Functions </font></h2>

<form method="post">
    Enter String : <input type="text" name="str" required><br><br>

    Search Word  : <input type="text" name="search" required><br><br>

    <input type="submit" name="submit" value="Show Result">
</form>

<?php

if(isset($_POST['submit']))
{
    $str = $_POST['str'];
    $search = $_POST['search'];

    echo "<h3><font color='blue'> Results </font></h3>";

    // strlen()
    echo "<b> 1. String Length :</b> ";
    echo strlen($str);
    echo "<br><br>";

    //  strpos()
    echo "<b>2. Position of '$search' :</b> ";
    echo strpos($str, $search);
    echo "<br><br>";

    // str_word_count()
    echo "<b>3. Total Words :</b> ";
    echo str_word_count($str);
    echo "<br><br>";

    // strrev()
    echo "<b>4. Reverse String :</b> ";
    echo strrev($str);
    echo "<br><br>";

    // strtolower()
    echo "<b>5. Lower Case :</b> ";
    echo strtolower($str);
    echo "<br><br>";

    // strtoupper()
    echo "<b>6. Upper Case :</b> ";
    echo strtoupper($str);
    echo "<br><br>";
}

?>

</body>
</html>