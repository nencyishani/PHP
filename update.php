<?php
include("db.php");

$message = "";

if (isset($_POST['update_password'])) 
{

    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password != $confirm_password) 
    {

        $message = "Password does not match.";

    } 
    else 
    {

        $sql = "UPDATE login SET password='$password'WHERE name='$username'";

        if (mysqli_query($conn, $sql)) 
        {

            if (mysqli_affected_rows($conn) > 0) 
            {
                $message = "Password Updated Successfully.";
            } 
            else 
            {
                $message = "Username Not Found.";
            }

        } 
        else 
        {
            $message = "Password Update Failed.";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password</title>
</head>
<body>

<h2 align="center">Forgot Password</h2>

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
    <td>Confirm Password</td>
    <td>
        <input type="password" name="confirm_password" required>
    </td>
</tr>

<tr>
    <td colspan="2" align="center">
        <input type="submit" name="update_password" value="Update Password">
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