<?php

echo "<h1>PHP Date and Time Functions</h1>";

echo "Today's Date: " . date("Y-m-d") . "<br><br>";

echo "1. DAYOFWEEK() : " . date("N") . "<br><br>";
echo "2. WEEKDAY() : " . (date("N") - 1) . "<br><br>";
echo "3. DAYOFMONTH() : " . date("d") . "<br><br>";
echo "4. DAYOFYEAR() : " . (date("z") + 1) . "<br><br>";
echo "5. DAYNAME() : " . date("l") . "<br>";
?>