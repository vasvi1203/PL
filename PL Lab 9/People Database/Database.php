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
$sql = "CREATE DATABASE PeopleInfo";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully!<br>";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}
mysqli_select_db($conn, "PeopleInfo") or die(mysqli_error($conn));
$sql = "CREATE TABLE PeopleInfo (
id INT AUTO_INCREMENT PRIMARY KEY, 
FirstName VARCHAR(255), 
LastName VARCHAR(255), 
Phone INT,
BirthDate DATE
)";

if (mysqli_query($conn, $sql)) {
    echo "Table PeopleInfo created successfully!<br>";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
</html>