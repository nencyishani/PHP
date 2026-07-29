<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>

<h2>Registration Form</h2>

<form method="post">
    Name:
    <input type="text" name="name" required><br><br>

    Email:
    <input type="email" name="email" required><br><br>

    Password:
    <input type="password" name="password" required><br><br>

    Mobile:
    <input type="text" name="mobile" required><br><br>

    <input type="submit" name="register" value="Register">
</form>

</body>
</html>

<?php
include "db.php";

if(isset($_POST['register']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $mobile = $_POST['mobile'];

    $sql = "INSERT INTO users(name,email,password,mobile)
            VALUES('$name','$email','$password','$mobile')";

    if(mysqli_query($conn,$sql))
    {
        echo "<br>Registration Successful.";
    }
    else
    {
        echo "Error: " . mysqli_error($conn);
    }
}
?>