<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
</head>
<body>

<center>

<form method="post" enctype="multipart/form-data">

<h1>Product Details</h1>

<h3>Product Name :</h3>
<input type="text" name="Product_Name" required><br>

<h3>Product Price :</h3>
<input type="number" name="Product_Price" required><br>

<h3>Product Quantity :</h3>
<input type="number" name="Product_Quantity" required><br>

<h3>Product Type :</h3>

<select name="product" required>
    <option value="">Select Product Type</option>
    <option value="Fruits & Vegetables">Fruits & Vegetables</option>
    <option value="Dairy & Eggs">Dairy & Eggs</option>
    <option value="Bakery & Bread">Bakery & Bread</option>
    <option value="Snacks & Beverages">Snacks & Beverages</option>
    <option value="Packaged Foods">Packaged Foods</option>
</select>

<br><br>

<h3>Product Image :</h3>
<input type="file" name="image">

<br><br>

<input type="submit" name="submit" value="Submit">

</form>

</center>

<?php

include("db1.php");

if(isset($_POST['submit']))
{
    $pname   = $_POST['Product_Name'];
    $price   = $_POST['Product_Price'];
    $qty     = $_POST['Product_Quantity'];
    $product = $_POST['product'];

    $image = "";

    if(isset($_FILES['image']))
    {
        $image = $_FILES['image']['name'];
    }

    $sql = "INSERT INTO pro(name,price,quantity,type,image)
            VALUES('$pname','$price','$qty','$product','$image')";

    if(mysqli_query($conn,$sql))
    {
    }
    else
    {
        echo mysqli_error($conn);
    }
}

?>

</body>
</html>