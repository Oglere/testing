<?php 
$a = "localhost";
$b = "root";
$c = "";
$d = "project";

$conn = new mysqli($a, $b, $c, $d);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully";
}

// Close connection (optional, as PHP will automatically close it when script ends)
$conn->close();
?>