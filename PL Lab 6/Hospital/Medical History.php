<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Medical History</title>
<style>
body {
background-image:url('https://christianacare.org/images/WLM/ed.jpg');
background-attachment:fixed;
background-size:cover;
}
.field {
font-weight:bold;
font-size:25px;
color:yellow;
width:800px;
margin-left:20%;
}
.head {
border-bottom:5px solid black;
color:black;
font-size:40px;
}
.error {
color: #FF0000;
}
</style>
</head>

<body style = "text-align:center">
<?php	
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$_SESSION["Name"] = $_POST["Name"];
		$_SESSION["Phone"] = $_POST["Phone"];
		$_SESSION["email"] = $_POST["email"];
	}
?>
<b>
<section style="background:rgba(0,0,0,0.2);height:100%;width:100%; border:4px ridge white;"><br>
<img src = "https://upload.wikimedia.org/wikipedia/en/thumb/e/ef/Fortis_Healthcare_logo.svg/1200px-Fortis_Healthcare_logo.svg.png" alt = "Fortis" width = "200px" height = "80px" style="padding-bottom:30px;"><br><br>
<form method = "post" action = "Appointment.php">
	<fieldset class="field">
	<span class = "error"  style = "text-align:left">*required</span>
		<legend class="head">Medical History:</legend><br>
			Illnesses you had in the past(if any):&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type = "text" name = "illnesses">
			<br><br>
			Vaccinations given:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type = "text" name = "vaccination" required>
			<span class = "error">*</span><br><br>
			Allergies(if any):&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type = "text" name = "allergies">
			<br><br>
			Medications given(if any):&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type = "text" name = "medication">
			<br><br>
			Admitted to the hospital(if anytime):&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type = "text" name = "hospital">
			<br><br>
			<input type="submit" name="Submit">
			<br>
	</fieldset>
</b><br>
</body>
</html>