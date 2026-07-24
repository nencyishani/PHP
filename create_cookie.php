<?php

$name = $_POST['name'];
$father = $_POST['father'];
$course = $_POST['course'];
$mobile = $_POST['mobile'];


setcookie("student_name", $name, time() + (30 * 24 * 60 * 60), "/");
setcookie("father_name", $father, time() + (30 * 24 * 60 * 60), "/");
setcookie("course", $course, time() + (30 * 24 * 60 * 60), "/");
setcookie("mobile", $mobile, time() + (30 * 24 * 60 * 60), "/");

echo "<h2> Admission Successful </h2>";
echo "Cookies Created Successfully.<br><br>";

echo "<a href='read_cookie.php'>View Student Details</a>";

?>