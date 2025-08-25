<?php
// Connect to MySQL and select the 'yoyo' database
$con = mysqli_connect("localhost", "root", "", "yoyo");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

$query1 = "INSERT INTO textx (_ID, Name, Degree, Email) VALUES (1, 'John', 'BSc', 'john@gmail.com')";
$query2 = "INSERT INTO textx (_ID, Name, Degree, Email) VALUES (2, 'Malik', 'BSc', 'Malik@gmail.com')";
$query3 = "INSERT INTO textx (_ID, Name, Degree, Email) VALUES (3, 'sman', 'BSc', 'jsaman@gmail.com')";
$query4 = "INSERT INTO textx (_ID, Name, Degree, Email) VALUES (4, 'tilk', 'BSc', 'tilkakk@gmail.com')";

// Execute queries and show results
foreach ([$query1, $query2, $query3, $query4] as $i => $query) {
    if (!mysqli_query($con, $query)) {
        echo "Error inserting record " . ($i+1) . ": " . mysqli_error($con) . "<br>";
    } else {
        echo "Record " . ($i+1) . " inserted successfully.<br>";
    }
}


// Close connection
mysqli_close($con);
?>
