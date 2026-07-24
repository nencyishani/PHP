<?php


setcookie("name", "", time()-3600, "/");
setcookie("father", "", time()-3600, "/");
setcookie("course", "", time()-3600, "/");
setcookie("mobile", "", time()-3600, "/");

echo "<h2>Cookies Deleted Successfully</h2>";

echo "<a href='view.php'>View Details</a>";

?>