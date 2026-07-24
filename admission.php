<!DOCTYPE html>
<html>
<head>
    <title>Student Admission Form</title>
</head>
<body>

<center>

<h2>Student Admission Form</h2>

<form action="admission_process.php" method="post">

<table border="1" cellpadding="10">

<tr>
    <td>Student Name</td>
    <td><input type="text" name="name" required></td>
</tr>

<tr>
    <td>Father Name</td>
    <td><input type="text" name="father" required></td>
</tr>

<tr>
    <td>Course</td>
    <td>
        <select name="course">
            <option>BCA</option>
            <option>BBA</option>
            <option>B.Com</option>
            <option>B.Sc</option>
        </select>
    </td>
</tr>

<tr>
    <td>Mobile No.</td>
    <td><input type="text" name="mobile" required></td>
</tr>

<tr>
    <td colspan="2" align="center">
        <input type="submit" value="Submit">
        <input type="reset" value="Clear">
    </td>
</tr>

</table>

</form>

</center>

</body>
</html>