<?php

if(isset($_COOKIE['student_name']))
{
    echo "<h2>Student Admission Details</h2>";

    echo "Student Name : " . $_COOKIE['student_name'] . "<br>";
    echo "Father Name : " . $_COOKIE['father_name'] . "<br>";
    echo "Course : " . $_COOKIE['course'] . "<br>";
    echo "Mobile No. : " . $_COOKIE['mobile'] . "<br>";
}
else
{
    echo "No Cookie Found.";
}

?>
