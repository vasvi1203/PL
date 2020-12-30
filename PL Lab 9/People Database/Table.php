<!DOCTYPE html>
<html style="background-color:#00cc99;">
<head>
<title>Table</title>
<style>
table, th, td {
    border: 3px ridge #595959;
	border-collapse:collapse;
	padding-right:30px;
	padding-left:30px;
	padding-bottom:20px;
	padding-top:20px;
	background:rgba(255,255,255,0.1);
}
th {
	text-align:center;
	font-family:harrington;
	color:black;
	font-weight:bold;
	font-size:30px;
}
td {
	text-align:center;
	font-family:calibri;
	color:black;
	font-size:20px;
}
h1 {
	text-align:center; 
	font-size:50px; 
	font-family:algerian; 
	color:black;
	text-decoration:underline;
}

input {
	width:20%;
	font-size:15px;
	padding: 12px 20px;
	margin: 8px 0;
	box-sizing: border-box;
	border: 3px solid #ccc;
	border-radius: 4px;
	outline:none;
}
input[type=submit] {
	background-color: white;
	width:10%;
	margin-left:575px;
	margin-right:575px;
	border:3px solid black;
	outline:none;
	color: black;
	padding: 12px 20px;
	text-decoration: none;
	font-size:20px;
}

</style>
</head>
<body style="text-align:center;">

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

mysqli_select_db($conn, "PeopleInfo") or die(mysqli_error($conn));
$stmt = $conn->prepare("INSERT INTO PeopleInfo (FirstName, LastName, Phone, BirthDate) VALUES (?, ?, ?, ?)");
$stmt->bind_param('ssis', $FirstName, $LastName, $Phone, $BirthDate);

// set parameters and execute
$FirstName = $_POST["fname"];
$LastName = $_POST["lname"];
$Phone = $_POST["phone"];
$BirthDate = $_POST["dob"];
$stmt->execute();


echo "<h1>PERSONAL DETAILS</h1>"; 
$sql = "SELECT * FROM PeopleInfo";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table align='center'><tr><th>Id</th><th>Name</th><th>Phone Number</th><th>Birth Date</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["FirstName"]. " " . $row["LastName"]. "</td><td>" .$row["Phone"]. "</td><td>" .$row["BirthDate"]. "</td></tr>";
    }
    echo "</table><br><br>";
} else {
    echo "0 results";
}

$stmt->close();
mysqli_close($conn);
?>
<form method="post" action="Form.php">		
	<input type="submit" value="Insert data" align="center">
</form>
<br><br>
</body>
</html>
