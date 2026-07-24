<?php
session_start();

$_SESSION["name"] = $_POST["name"];
$_SESSION["father"] = $_POST["father"];
$_SESSION["course"] = $_POST["course"];
$_SESSION["mobile"] = $_POST["mobile"];

header("Location: session_view.php");
exit();
?>