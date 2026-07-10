<?php
include("db.php");

$message = "";

if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0)
    {
        $message = "Login Successful";
    }
    else
    {
        $message = "Invalid Username or Password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>

<center>

<h2>Login Form</h2>

<?php
if($message != "")
{
    echo "<h3>$message</h3>";
}
?>

<form method="post">

    <table border="1" cellpadding="10">

        <tr>
            <td>Username</td>
            <td><input type="text" name="username" required></td>
        </tr>

        <tr>
            <td>Password</td>
            <td><input type="password" name="password" required></td>
        </tr>

        <tr>
            <td colspan="2" align="center">
                <input type="submit" name="login" value="Login">
            </td>
        </tr>

    </table>

</form>

</center>

</body>
</html>