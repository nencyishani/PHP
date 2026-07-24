<?php
session_start();

echo "<center>";
echo "<h2>Student Admission Details</h2>";

echo "<table border='1' cellpadding='10'>";

echo "<tr><td>Student Name</td><td>".$_SESSION["name"]."</td></tr>";
echo "<tr><td>Father Name</td><td>".$_SESSION["father"]."</td></tr>";
echo "<tr><td>Course</td><td>".$_SESSION["course"]."</td></tr>";
echo "<tr><td>Mobile No.</td><td>".$_SESSION["mobile"]."</td></tr>";

echo "</table><br>";

echo "<a href='destroy_session.php'>Destroy Session</a>";

echo "</center>";
?>