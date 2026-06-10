<?php
define("COLLEGE", "Marwadi University");
define("COURSE", "BCA - 4C");

$studentName = "Nency Ishani";
$rollNo = "92400527179";
$grno = "127387";   
$semester = "Semester - 4";

$OS = 85;
$CN = 78;
$CSHARP = 82;
$PYTHON = 88;
$LS = 80;

$total = $OS + $CN + $CSHARP + $PYTHON + $LS;
$percentage = $total / 5;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Previous Semester Result</title>
</head>
<body bgcolor="#E6F7FF">

<center>
    <h1 style="color:darkblue;">PREVIOUS SEMESTER RESULT</h1>
    <h2 style="color:green;"><?php echo COLLEGE; ?></h2>
    <h3 style="color:purple;"><?php echo COURSE; ?></h3>

    <table border="2" cellpadding="10" cellspacing="0" bgcolor="white">
        <tr bgcolor="lightblue">
            <th colspan="2">Student Information</th>
        </tr>

        <tr>
            <td><b>Name</b></td>
            <td><?php echo $studentName; ?></td>
        </tr>

        <tr>
            <td><b>Roll No</b></td>
            <td><?php echo $rollNo; ?></td>
        </tr>

        <tr>
            <td><b>GR No</b></td>
            <td><?php echo $grno; ?></td>
        </tr>

        <tr>
            <td><b>Semester</b></td>
            <td><?php echo $semester; ?></td>
        </tr>

        <tr bgcolor="lightgreen">
            <th>Subject</th>
            <th>Marks</th>
        </tr>

        <tr>
            <td>OS</td>
            <td><?php echo $OS; ?></td>
        </tr>

        <tr>
            <td>CN</td>
            <td><?php echo $CN; ?></td>
        </tr>

        <tr>
            <td>C#</td>
            <td><?php echo $CSHARP; ?></td>
        </tr>

        <tr>
            <td>PYTHON</td>
            <td><?php echo $PYTHON; ?></td>
        </tr>

        <tr>
            <td>LS</td>
            <td><?php echo $LS; ?></td>
        </tr>

        <tr bgcolor="yellow">
            <td><b>Total Marks</b></td>
            <td><b><?php echo $total; ?></b></td>
        </tr>

        <tr bgcolor="orange">
            <td><b>Percentage</b></td>
            <td><b><?php echo number_format($percentage, 2) . "%"; ?></b></td>
        </tr>
    </table>

    <h2 style="color:red;">
        Result :
        <?php
        if ($percentage >= 35)
            echo "PASS";
        else
            echo "FAIL";
        ?>
    </h2>
</center>

</body>
</html>