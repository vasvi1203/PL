<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>111803128</title>
<style>
h4 {
	font-family:calibri;
	font-size:25px;
}

body {
	font-size:20px;
	font-family:calibri;
}
h1 {
	font-family:calibri;
	font-size:40px;
	text-align:center;
	text-decoration:underline;
}
input[type=submit] {
	background-color: #ccc;
	width:10%;
	margin-left:575px;
	margin-right:575px;
	border: none;
	outline:none;
	color: black;
	padding: 12px 20px;
	text-decoration: none;
	font-size:20px;
	border-radius: 4px;
}
input {
	width:35%;
	font-size:15px;
	padding: 12px 20px;
	margin: 8px 0;
	box-sizing: border-box;
	border: 3px solid #ccc;
	border-radius: 4px;
	outline:none;
}
input:focus[type=email] {
	border: 3px solid #555;
}
</style>
</head>
<body>
<h1>RESUMÉ</h1>
<?php	
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$_SESSION["fname"] = $_POST["fname"];
		$_SESSION["lname"] = $_POST["lname"];
		$_SESSION["address"] = $_POST["address"];
		$_SESSION["city"] = $_POST["city"];
		$_SESSION["state"] = $_POST["state"];
		$_SESSION["zip"] = $_POST["zip"];
		$_SESSION["country"] = $_POST["country"];
		$_SESSION["dob"] = $_POST["dob"];
		$_SESSION["email"] = $_POST["email"];
		$_SESSION["phone"] = $_POST["phone"];
		$_SESSION["company"] = $_POST["company"];
		$_SESSION["title"] = $_POST["title"];
		$_SESSION["wcity"] = $_POST["wcity"];
		$_SESSION["wstate"] = $_POST["wstate"];
		$_SESSION["wcountry"] = $_POST["wcountry"];
		$_SESSION["month"] = $_POST["month"];
		$_SESSION["year"] = $_POST["year"];
		$_SESSION["desc"] = $_POST["desc"];
		$_SESSION["college"] = $_POST["college"];
		$_SESSION["ecity"] = $_POST["ecity"];
		$_SESSION["estate"] = $_POST["estate"];
		$_SESSION["ecountry"] = $_POST["ecountry"];
		$_SESSION["degree"] = $_POST["degree"];
		$_SESSION["field"] = $_POST["field"];
		$_SESSION["grade"] = $_POST["grade"];
		$_SESSION["gmonth"] = $_POST["gmonth"];
		$_SESSION["gyear"] = $_POST["gyear"];
		$_SESSION["skills"] = $_POST["skills"];
		$_SESSION["objective"] = $_POST["objective"];
		$_SESSION["reffname"] = $_POST["reffname"];
		$_SESSION["reflname"] = $_POST["reflname"];
		$_SESSION["refcompany"] = $_POST["refcompany"];
		$_SESSION["reftitle"] = $_POST["reftitle"];
		$_SESSION["refemail"] = $_POST["refemail"];
		$_SESSION["refphone"] = $_POST["refphone"];
		$_SESSION["relation"] = $_POST["relation"];
	}
	echo "<h4>PERSONAL DETAILS</h4>";
	echo "NAME : " .$_SESSION["fname"]. " " .$_SESSION["lname"]. "<br>";
	echo "ADDRESS : " .$_SESSION["address"]. ", " .$_SESSION["city"]. ", " .$_SESSION["state"]. " - " .$_SESSION["zip"]. ", " .$_SESSION["country"]. "<br>";
	echo "DATE OF BIRTH : " .$_SESSION["dob"]. "<br>";
	echo "EMAIL ID : " .$_SESSION["email"]. "<br>";
	echo "PHONE NO. : " .$_SESSION["phone"]. "<br><br>";
	
	echo "<h4>WORK EXPERIENCE</h4>";
	echo "COMPANY/ORGANIZATION : " .$_SESSION["company"]. ", " .$_SESSION["wcity"]. ", " .$_SESSION["wstate"]. ", " .$_SESSION["wcountry"]. "<br>";
	echo "JOB TITLE : " .$_SESSION["title"]. "<br>";
	echo "START DATE : " .$_SESSION["month"]. ", " .$_SESSION["year"]. "<br>";
	echo "JOB DESCRIPTION : " .$_SESSION["desc"]. "<br><br>";

	echo "<h4>EDUCATION</h4>";
	echo "COLLEGE/UNIVERSITY : " .$_SESSION["college"]. ", " .$_SESSION["ecity"]. ", " .$_SESSION["estate"]. ", " .$_SESSION["ecountry"]. "<br>";
	echo "DEGREE : " .$_SESSION["degree"]. "<br>";
	echo "FIELD OF STUDY : " .$_SESSION["field"]. "<br>";
	echo "GRADE POINT: " .$_SESSION["grade"]. "<br>";
	echo "GRADUATION DATE : " .$_SESSION["gmonth"]. ", " .$_SESSION["gyear"]. "<br><br>";
	
	echo "<h4>ADDITIONAL SKILLS</h4>";
	echo $_SESSION["skills"]. "<br><br>";
	
	echo "<h4>CAREER OBJECTIVE</h4>";
	echo $_SESSION["objective"]. "<br><br>";
	
	echo "<h4>REFERENCE</h4>";
	echo "REFERENCE NAME : " .$_SESSION["reffname"]. " " .$_SESSION["reflname"]. "<br>";
	echo "COMPANY/ORGANIZATION : " .$_SESSION["refcompany"]. "<br>";
	echo "POSITION TITLE : " .$_SESSION["reftitle"]. "<br>";
	echo "EMAIL ID : " .$_SESSION["refemail"]. "<br>";
	echo "PHONE NO. : " .$_SESSION["refphone"]. "<br>";
	echo "RELATION : " .$_SESSION["relation"]. "<br><br>";
	

?>
	<form style="text-align:center" method="post" action="Text.php">
		<input type="email" name="semail" placeholder="Email your resumé to the specified email address" align="center" required>
		<input type="submit" value="Send" align="center">
	</form>
</body>
</html>




