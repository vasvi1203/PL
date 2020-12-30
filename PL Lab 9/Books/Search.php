<!DOCTYPE html>
<html style="background-color:#00cc99;">
<head>
<title>Search</title>
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
	border: 3px solid #595959;
	border-radius: 4px;
	outline:none;
}
input:focus {
	border: 3px solid black;
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
	<form method="post" action="">
		<input type="text" name="book" placeholder="Search for a book" required><br><br>
		<input type="submit" name="search" value="Search" align="center">
	</form><br><br>
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

mysqli_select_db($conn, "Books") or die(mysqli_error($conn));
if(isset($_POST["search"])) {
	$search = $_POST["book"];
	$sql = "SELECT * FROM Books WHERE Title LIKE '%{$search}%'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		echo "<table align='center'><tr><th>Accession<br>Number</th><th>Title</th><th>Author(s)</th><th>Edition</th><th>Publisher</th></tr>";
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo "<tr><td>" . $row["AccessionNumber"]. "</td><td>" . $row["Title"]. "</td><td>" . $row["Author"]. "</td><td>" .$row["Edition"]. "</td><td>" .$row["Publisher"]. "</td></tr>";
		}
    echo "</table><br><br>";
	} 
	
else {
    echo "No record found!";
}

}

mysqli_close($conn);
?>
<br><br>
</body>
</html>