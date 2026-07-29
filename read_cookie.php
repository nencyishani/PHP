<?php
echo "<h2>Stored Cookie Values</h2>";

if(isset($_COOKIE['username']) && isset($_COOKIE['password']))
{
    echo "Username : " . $_COOKIE['username'] . "<br>";
    echo "Password : " . $_COOKIE['password'];
}
else
{
    echo "Cookies are not available.";
}
?>