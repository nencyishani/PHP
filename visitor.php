<?php
$cookie_name = "visitor";

if(isset($_COOKIE[$cookie_name]))
{
    echo "<h2>Welcome Back!</h2>";
    echo "You are a repeated visitor.";
}
else
{
    setcookie($cookie_name, "visited", time() + (30 * 24 * 60 * 60), "/");

    echo "<h2>Welcome!</h2>";
    echo "You are a new visitor.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Visitor Cookie</title>
</head>
<body>

<br><br>
<a href="visitor.php">Refresh Page</a>

</body>
</html>