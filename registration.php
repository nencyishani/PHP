<?php
session_start();

if(isset($_POST['register']))
{
    $_SESSION['userid'] = $_POST['userid'];
    $_SESSION['password'] = $_POST['password'];

    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>

<h2>Registration Form</h2>

<form method="post">
    User ID :
    <input type="text" name="userid" required><br><br>

    Password :
    <input type="password" name="password" required><br><br>

    <input type="submit" name="register" value="Register">
</form>

</body>
</html>