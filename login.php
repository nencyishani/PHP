<?php
if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Store cookies for 1 month
    setcookie("username", $username, time() + (30 * 24 * 60 * 60));
    setcookie("password", $password, time() + (30 * 24 * 60 * 60));

    echo "Login Successful.<br>";
    echo "<a href='read_cookie.php'>Go to Next Page</a>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
</head>
<body>

<h2>Login Form</h2>

<form method="post">
    Username:
    <input type="text" name="username"
    value="<?php if(isset($_COOKIE['username'])) echo $_COOKIE['username']; ?>">
    <br><br>

    Password:
    <input type="password" name="password"
    value="<?php if(isset($_COOKIE['password'])) echo $_COOKIE['password']; ?>">
    <br><br>

    <input type="submit" name="login" value="Login">
</form>

</body>
</html>