<!DOCTYPE html>
<html>
<head>
    <title> PHP Arrays Example</title>
</head>
<body bgcolor="lightblue">

<h1><font color="blue">PHP Arrays Demonstration</font></h1>

<h2><font color="green">Numeric Array - Monday to Saturday</font></h2>

<?php
$days = array("Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");

foreach($days as $day)
{
    echo "<font color='red'>$day</font><br>";
}
?>

<hr>

<h2><font color="green">Associative Array - Months and Total Days</font></h2>

<?php
$months = array(
    "January"=>31,
    "February"=>28,
    "March"=>31,
    "April"=>30,
    "May"=>31,
    "June"=>30,
    "July"=>31,
    "August"=>31,
    "September"=>30,
    "October"=>31,
    "November"=>30,
    "December"=>31
);

foreach($months as $month => $days)
{
    echo "<font color='purple'>$month => $days Days</font><br>";
}
?>

<hr>

<h2><font color="green">Multidimensional Array - Laptop Details</font></h2>

<?php
$laptops = array(
    "Dell" => array(
        "Model" => "Inspiron 15",
        "Price" => 55000
    ),
    "HP" => array(
        "Model" => "Pavilion 14",
        "Price" => 60000
    )
);

foreach($laptops as $company => $details)
{
    echo "<font color='brown'><b>Company :</b> $company</font><br>";
    echo "<font color='navy'>Model : ".$details['Model']."</font><br>";
    echo "<font color='darkgreen'>Price : Rs. ".$details['Price']."</font><br><br>";
}
?>

</body>
</html>