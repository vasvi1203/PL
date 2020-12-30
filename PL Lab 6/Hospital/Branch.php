<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Branch</title>
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
width:500px;
margin-left:30%;
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

<body style = "text-align:center"><b>
<section style="background:rgba(0,0,0,0.1);height:100%;width:100%; border:4px ridge white;"><br>
<img src = "https://upload.wikimedia.org/wikipedia/en/thumb/e/ef/Fortis_Healthcare_logo.svg/1200px-Fortis_Healthcare_logo.svg.png" alt = "Fortis" width = "200px" height = "80px" style="padding-bottom:30px;"><br><br>
<form method = "post" action = "Patient Info.php">
	<fieldset class="field">
	<span class = "error"  style = "text-align:left">*required</span>
		<legend class="head">Hospital Address:</legend><br>
			Street Address&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type = "text" name = "Address" required>
			<span class = "error">*</span><br><br>
			City&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type = "text" name = "City" required>
			<span class = "error">*</span><br><br>
			State/Province&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type = "text" name = "State" required>
			<span class = "error">*</span><br><br>
			Postal/Zip Code&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type = "text" name = "Postal">
			<span class = "error">*</span><br><br>
			<input type = "submit" name = "Submit">
	</fieldset>
</b><br><br><br><br>
</body>
</html>