<!DOCTYPE html>

<html>

<link rel="stylesheet" href="style.css">

<head>
    <title>EECS 348 Lab Seven Practice 4</title>
    <h1>EECS 348 Lab Seven Practice 4</h1>
</head>

<body>
    <form action="practice4.php">
        <label for="num">Number</label>
        <input type="number" name="num">
        <input type="submit" value="Submit">
    </form>
</body>

<br>

<?php
    $num = $_GET["num"];
    $width = 1;
    for ($i=1; pow(10,$i)<=$num*$num; $i++) {
    	$width = $i + 1;
    }
    
    echo "<style>
            table, th, td {
              column-width: ", $width*10, "px;
          }
        </style>";
    
    echo "<table>";
    for ($i=0; $i<=$num; $i++) {
        echo "<tr>";
        for ($j=0; $j<=$num; $j++) {
            if ($i == 0) {
                echo "<th style=\"background-color: #D6EEEE\">", $j, "</th>";
                continue;
            } else if ($j == 0) {
                echo "<th style=\"background-color: #D6EEEE\">", $i, "</th>";
                continue;
            }
            echo "<th>", $i*$j, "</th>";
        }
        echo "</tr>";
    }
    echo "</table>";
?>

</html>