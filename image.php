<!DOCTYPE html>
<html>
<head>
    <title>Image Upload</title>
</head>
<body>

<form action="" method="post" enctype="multipart/form-data">

    Upload Image:
    <input type="file" name="image"><br><br>

    <input type="submit" value="Upload Image">

</form>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_FILES["image"]) && $_FILES["image"]["error"]==0)
    {
        $image=$_FILES["image"];

        echo "<b>Image Name :</b> ".$image["name"]."<br>";
        echo "<b>Image Type :</b> ".$image["type"]."<br>";
        echo "<b>Image Size :</b> ".$image["size"]." bytes<br>";

        if(move_uploaded_file($image["tmp_name"],"uploads/".$image["name"]))
        {
            echo "<br><b>Image Uploaded Successfully!</b>";
        }
        else
        {
            echo "<br><b>Image Upload Failed!</b>";
        }
    }
    else
    {
        echo "Please Select an Image.";
    }
}

?>

</body>
</html>