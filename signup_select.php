<?php
include("db.php");

$message = "";
$records = null;

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
        // INSERT query
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

// SELECT query
$select_sql = "SELECT * FROM login";
$records = mysqli_query($conn, $select_sql);
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

<h2 align="center">All Signup Records</h2>

<table align="center" border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
    </tr>

    <?php
    if($records && mysqli_num_rows($records) > 0)
    {
        while($row = mysqli_fetch_assoc($records))
        {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['phone_number'] . "</td>";
            echo "</tr>";
        }
    }
    else
    {
        echo "<tr><td colspan='4' align='center'>No records found</td></tr>";
    }
    ?>
</table>

</body>
</html>