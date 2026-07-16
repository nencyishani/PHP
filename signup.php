<?php
include("db.php");

$message = "";

if(isset($_POST['signup']))
{
    $name = $_POST['name'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $email = $_POST['email'];
    $phone = $_POST['phone_number'];

    if($password != $confirm_password)
    {
        $message = "Password does not match.";
    }
    else
    {
        $sql = "INSERT INTO login(name,password,email,phone_number)
                VALUES('$name','$password','$email','$phone')";

        if(mysqli_query($conn,$sql))
        {
            $message = "Signup Successfully.";
        }
        else
        {
            $message = "Signup Failed.";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Signup Form</title>
</head>
<body>

<h2 align="center">Signup Form</h2>

<form method="post">

<table align="center" border="1" cellpadding="10">

<tr>
    <td>Name</td>
    <td>
        <input type="text" name="name" required>
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
    <td>Email</td>
    <td>
        <input type="email" name="email" required>
    </td>
</tr>

<tr>
    <td>Phone Number</td>
    <td>
        <input type="text" name="phone_number" required>
    </td>
</tr>

<tr>
    <td colspan="2" align="center">
        <input type="submit" name="signup" value="Sign Up">
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
