<?php
session_start();

session_unset();
session_destroy();

echo "<h2> Session Destroyed Successfully </h2>";
echo "<a href='admission.php'> Go to Admission Form </a>";
?>

