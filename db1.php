<?php

    $dbhost = "localhost";
    $dbname = "product";
    $dbuser = "root";
    $dbpass = "";

    $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

    if(!$conn)
    {
        die("Connection Failed : " . mysqli_connect_error());
    }
    else{
        
    }

?>