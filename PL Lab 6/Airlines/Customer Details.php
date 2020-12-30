<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Customer Details</title>
<style>
body {
background-image:url('https://s.marketwatch.com/public/resources/images/MW-HE536_airpla_ZH_20190225131547.jpg');
background-attachment:fixed;
background-size:cover;
text-align:center;
}
.field {
font-weight:bold;
font-size:20px;
color:#cc6600;
width:500px;
margin-left:30%;
}
.head {
border-bottom:3px solid #4d004d;
color:#4d004d;
font-size:25px;
}
.error {
color: #FF0000;
}
</style>
</head>

<body><b>
<section style="background:rgba(255,255,255,0.2);height:100%;width:100%; border:4px ridge white;"><br>
<img src = "https://d1e0iy043bd8xo.cloudfront.net/resources/img/logos/avia/rectangular/big/UK.png" alt = "Vistara" width = "300px" height = "90px" style="padding-bottom:50px;"><br><br>

<form method = "post" action = "Booking Details.php">
	<fieldset class="field">
	<p><span class = "error"  style = "text-align:left">*required</span></p>
	<legend class="head">Customer Details</legend>
	Name:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type = "text" name = "name" required>
	<span class = "error">*</span><br><br>
	Contact Number:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type = "tel" name = "contact" required>
	<span class = "error">*</span><br><br>
	E-Mail Id:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type = "email" name = "email" required>
	<span class = "error">*</span><br><br>
	Gender:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type = "radio" name = "gender" value = "Male">Male
	<input type = "radio" name = "gender" value = "Female">Female
	<input type = "radio" name = "gender" value = "Others">Others
	<span class = "error">*</span><br><br>
	Date Of Birth:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type = "date" name = "dob" required>
	<span class = "error">*</span><br><br>
	<input type = "submit" name = "Submit">
	<br>
	</fieldset>
</b><br><br></body>
</html>