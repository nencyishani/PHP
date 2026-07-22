<?php
include("db.php");

$msg = "";

if(isset($_POST['delete']))
{
    $id = $_POST['id'];

    $sql = "DELETE FROM login WHERE id='$id'";

    if(mysqli_query($conn, $sql))
    {
        if(mysqli_affected_rows($conn) > 0)
        {
            $msg = "Record Deleted Successfully.";
        }
        else
        {
            $msg = "Record Not Found.";
        }
    }
    else
    {
        $msg = "Error : " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Delete Record</title>
</head>
<body bgcolor="lightyellow">

<center>
<h2>Delete Record</h2>

<form method="post">
    <table border="1" cellpadding="8">
        <tr>
            <td>Enter ID</td>
            <td>
                <input type="number" name="id" required>
            </td>
        </tr>

        <tr>
            <td colspan="2" align="center">
                <input type="submit" name="delete" value="Delete">
            </td>
        </tr>
    </table>
</form>

<br>

<?php
echo $msg;
?>

</center>

</body>
</html>