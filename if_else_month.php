<!DOCTYPE html>
<html>
<head>
    <title>Current Month</title>
    <style>
        body
        {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            text-align: center;
            margin-top: 100px;
        }
        .box
        {
            width: 400px;
            margin: auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 10px gray;
        }
        h1
        {
            color: darkblue;
        }
        p
        {
            font-size: 22px;
            color: green;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="box">
    
    <h1> Current Month Program</h1>

    <?php
    $month = date("n"); 

   
    echo "<h2> Using If...Else </h2>";

    if($month == 1) $m = "January";
    else if($month == 2) $m = "February";
    else if($month == 3) $m = "March";
    else if($month == 4) $m = "April";
    else if($month == 5) $m = "May";
    else if($month == 6) $m = "June";
    else if($month == 7) $m = "July";
    else if($month == 8) $m = "August";
    else if($month == 9) $m = "September";
    else if($month == 10) $m = "October";
    else if($month == 11) $m = "November";
    else $m = "December";

    echo "<p>$m</p>";

    echo "<h2>Using Switch Case</h2>";

    switch($month)
    {
        case 1: $monthName = "January"; break;
        case 2: $monthName = "February"; break;
        case 3: $monthName = "March"; break;
        case 4: $monthName = "April"; break;
        case 5: $monthName = "May"; break;
        case 6: $monthName = "June"; break;
        case 7: $monthName = "July"; break;
        case 8: $monthName = "August"; break;
        case 9: $monthName = "September"; break;
        case 10: $monthName = "October"; break;
        case 11: $monthName = "November"; break;
        case 12: $monthName = "December"; break;
    }

    echo "<p>$monthName</p>";
    ?>
</div>

</body>
</html>