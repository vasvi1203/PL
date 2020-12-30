<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Patient Info</title>
<style>
body {
background-image:url('https://christianacare.org/images/WLM/ed.jpg');
background-attachment:fixed;
background-size:cover;
}
.field {
font-weight:bold;
font-size:20px;
color:yellow;
width:500px;
margin-left:30%;
}
.head {
border-bottom:3px solid black;
color:black;
font-size:25px;
}
.error {
color: #FF0000;
}
</style>
</head>

<body style = "text-align:center">
<?php	
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$_SESSION["Address"] = $_POST["Address"];
		$_SESSION["City"] = $_POST["City"];
		$_SESSION["State"] = $_POST["State"];
		$_SESSION["Postal"] = $_POST["Postal"];
	}
?>
<b>
<section style="background:rgba(0,0,0,0.1);height:100%;width:100%; border:4px ridge white;"><br>
<img src = "https://upload.wikimedia.org/wikipedia/en/thumb/e/ef/Fortis_Healthcare_logo.svg/1200px-Fortis_Healthcare_logo.svg.png" alt = "Fortis" width = "200px" height = "80px"><br><br>
<form method = "post" action = "Medical History.php">
	<fieldset class="field">
	<span class = "error"  style = "text-align:left">*required</span>
	<legend class="head">Patient Info</legend>
	Name:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type = "text" name = "Name" required>
			<span class = "error">*</span><br><br>
	Phone Number:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type = "tel" name = "Phone" required>
			<span class = "error">*</span><br><br>
	E-Mail:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type = "email" name = "email" required>
			<span class = "error">*</span><br><br>
	Gender:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type = "radio" name = "gender" value = "Male">Male
	<input type = "radio" name = "gender" value = "Female">Female
	<input type = "radio" name = "gender" value = "Others">Others
			<span class = "error">*</span><br><br>
	Date Of Birth:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type = "date" name = "bday" required>
			<span class = "error">*</span><br><br>
	Marital Status:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<select name = "Marital Status" required>
		<option value = "Single">Single</option>
		<option value = "Married">Married</option>
		<option value = "Divorced">Divorced</option>
		<option value = "Legally Separated">Legally Separated</option>
		<option value = "Widowed">Widowed</option>
	</select>
			<span class = "error">*</span><br><br>
	Address:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type = "text" name = "Address" required>
			<span class = "error">*</span><br><br>
			City:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type = "text" name = "City" required>
			<span class = "error">*</span><br><br>
			State/Province:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type = "text" name = "State" required>
			<span class = "error">*</span><br><br>
			Postal/Zip Code:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type = "text" name = "Postal" required>
			<span class = "error">*</span><br><br>
	</fieldset>
<br><br>
<fieldset class="field">	
	<legend class = "head">In Case of Emergency:</legend>
	Emergency Contact:&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type = "text" name = "Name" required>
			<span class = "error">*</span><br><br>
	Relationship:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type = "text" name = "Relationship" required>
			<span class = "error">*</span><br><br>
	Contact Number:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type = "tel" name = "Number" required>
			<span class = "error">*</span><br><br>
	<input type = "submit" name = "Submit">
</fieldset>
</b><br></body>
</html>