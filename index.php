<?php
$conn = mysqli_connect("localhost", "root", "", "mydb");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$result = mysqli_query($conn, "SELECT * FROM users");
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Details</title>
</head>
<body>

<table border="1" cellpadding="10" cellspacing="0" width="90%">
    <tr>
        <th>User name</th>
        <th>Password</th>
        <th>Date</th>
        <th colspan="2">Action</th>
    </tr>

<?php
while ($row = mysqli_fetch_assoc($result)) {
?>
    <tr>
        <td><?php echo $row['username']; ?></td>
        <td><?php echo $row['password']; ?></td>
        <td><?php echo $row['date']; ?></td>

        <td>
            <a href="edit.php?id=<?php echo $row['id']; ?>">edit</a>
        </td>

        <td>
            <a href="delete.php?id=<?php echo $row['id']; ?>"
               onclick="return confirm('Are you sure you want to delete?');">
               delete
            </a>
        </td>
    </tr>
<?php
}
?>

</table>

</body>
</html>