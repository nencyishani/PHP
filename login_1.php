<?php
include("db.php");

$message = "";

if (isset($_POST['login'])) 
{

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM login WHERE name='$username' AND password='$password'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) 
    {
        $message = "Login Successfully.";
    } 
    else 
    {
        $message = "Invalid Username or Password.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>

<h2 align="center">Login Page</h2>

<form method="post">

<table align="center" border="1" cellpadding="10">

<tr>
    <td>Username</td>
    <td>
        <input type="text" name="username" required>
    </td>
</tr>

<tr>
    <td>Password</td>
    <td>
        <input type="password" name="password" required>
    </td>
</tr>

<tr>
    <td colspan="2" align="center">
        <input type="submit" name="login" value="Login">
    </td>
</tr>

<tr>
    <td colspan="2" align="center">
        <a href="forgot_password.php">Forgot Password?</a>
    </td>
</tr>

<tr>
    <td colspan="2" align="center">
        <?php echo $message; ?>
    </td>
</tr>

</table>

</form>

</body>
</html>