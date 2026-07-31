<!DOCTYPE html>
<html>
<head>
    <title> PHP Image  </title>
</head>

<body>

<h2>PHP Image Display</h2>

<?php

$images = array("image1.jpg","image2.jpg","image3.jpg","image4.jpg");

$randomImage = $images[array_rand($images)];

echo "<img src='$randomImage' width='500' height='300'>";

?>

</body>
</html>
