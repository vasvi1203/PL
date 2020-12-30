<!DOCTYPE html>
<html>
<head>
<title>111803128</title>
</head>
<body>
<?php
	session_start();	
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$_SESSION["fname"] = $_POST["fname"];
		$_SESSION["lname"] = $_POST["lname"];
		$_SESSION["email"] = $_POST["email"];
		$_SESSION["room"] = $_POST["room"];
		$_SESSION["doi"] = $_POST["doi"];
		$_SESSION["doc"] = $_POST["doc"];
		$_SESSION["details"] = $_POST["details"];
		$_SESSION["outcome"] = $_POST["outcome"];
	}

$month = date('F', strtotime($_SESSION["doc"]));

	$complaint = fopen($month." Mess.txt", "w") or die("Unable to open file!");
	fwrite($complaint, "DATE OF COMPLAINT : " .$_SESSION["doc"]. "\n\n");
	$personal = "NAME : " .$_SESSION["fname"]. " " .$_SESSION["lname"]. "\nEMAIL ADDRESS : " .$_SESSION["email"]. "\nROOM NUMBER : " .$_SESSION["room"]. "\n\n";
	fwrite($complaint, $personal);
	fwrite($complaint, "DATE OF INCIDENT : " .$_SESSION["doi"]. "\n\n");
	fwrite($complaint, "COMPLAINT DETAILS : " .$_SESSION["details"]. "\n\n");
	fwrite($complaint, "DESIRED OUTCOME : " .$_SESSION["outcome"]. "\n\n");	
	fclose($complaint);
	
	echo "Your complaint has been stored in the file " .$month. " Mess.txt!<br>";
	
?>
</body>
</html>