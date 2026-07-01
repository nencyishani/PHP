<?php

include("header.php");

echo "<p>This content is displayed after include.</p>";

require("header.php");

echo "<p>This content is displayed after require.</p>";
?>