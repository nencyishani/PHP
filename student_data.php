<!DOCTYPE html>
<html>
<head>
    <title>Student Record</title>
</head>
<body>

<?php
// Database Connection
$conn = mysqli_connect("localhost", "root", "", "college");

if (!$conn)
{
    die("Connection Failed: " . mysqli_connect_error());
}

// Insert Record
if (isset($_POST['submit']))
{
    $name = $_POST['name'];
    $rollno = $_POST['rollno'];
    $course = $_POST['course'];
    $city = $_POST['city'];

    $sql = "INSERT INTO student(name, rollno, course, city)
            VALUES('$name','$rollno','$course','$city')";

    mysqli_query($conn, $sql);
}
?>

<h2>Student Entry Form</h2>

<form method="post">

    Name :
    <input type="text" name="name" required><br><br>

    Roll No :
    <input type="text" name="rollno" required><br><br>

    Course :
    <input type="text" name="course" required><br><br>

    City :
    <input type="text" name="city" required><br><br>

    <input type="submit" name="submit" value="Save">

</form>

<hr>

<h2>Student Record</h2>

<table border="1" cellpadding="8" cellspacing="0">

<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Roll No</th>
    <th>Course</th>
    <th>City</th>
</tr>

<?php

$result = mysqli_query($conn, "SELECT * FROM student");

while($row = mysqli_fetch_assoc($result))
{
?>

<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['rollno']; ?></td>
    <td><?php echo $row['course']; ?></td>
    <td><?php echo $row['city']; ?></td>
</tr>

<?php
}
?>

</table>

</body>
</html>