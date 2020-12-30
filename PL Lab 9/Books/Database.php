<!DOCTYPE html>
<html>
<head>
<title>Database</title>
</head>
<?php
$servername = "localhost";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully!<br>";

// Create database
$sql = "CREATE DATABASE Books";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully!<br>";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}
mysqli_select_db($conn, "Books") or die(mysqli_error($conn));
$sql = "CREATE TABLE Books (
AccessionNumber INT AUTO_INCREMENT PRIMARY KEY, 
Title VARCHAR(255), 
Author VARCHAR(255),
Edition VARCHAR(255), 
Publisher VARCHAR(255)
)";

if (mysqli_query($conn, $sql)) {
    echo "Table Books created successfully!<br>";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
</html>