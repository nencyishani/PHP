<?php

if(isset($_COOKIE['student_name']))
{
    echo "<center>";
    echo "<h2>Student Admission Details</h2>";

    echo "<table border='1' cellpadding='10'>";

    echo "<tr><td>Student Name</td><td>".$_COOKIE['student_name']."</td></tr>";
    echo "<tr><td>Father Name</td><td>".$_COOKIE['father_name']."</td></tr>";
    echo "<tr><td>Course</td><td>".$_COOKIE['course']."</td></tr>";
    echo "<tr><td>Mobile No.</td><td>".$_COOKIE['mobile']."</td></tr>";

    echo "</table>";

    echo "<br><a href='header.php'>Back</a>";
    echo "</center>";
}
else
{
    echo "Cookie Not Found";
}

?>