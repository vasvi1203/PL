<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Booking Details</title>
<style>
body {
background-image:url('https://s.marketwatch.com/public/resources/images/MW-HE536_airpla_ZH_20190225131547.jpg');
background-attachment:fixed;
background-size:cover;
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

<body style = "text-align:center">
<?php	
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$_SESSION["name"] = $_POST["name"];
		$_SESSION["contact"] = $_POST["contact"];
		$_SESSION["email"] = $_POST["email"];
		$_SESSION["gender"] = $_POST["gender"];
		$_SESSION["dob"] = $_POST["dob"];
	}
?>
<b>
<section style="background:rgba(255,255,255,0.2);height:100%;width:100%; border:4px ridge white;"><br>
<img src = "https://d1e0iy043bd8xo.cloudfront.net/resources/img/logos/avia/rectangular/big/UK.png" alt = "Vistara" width = "300px" height = "90px" style="padding-bottom:50px;"><br><br>
<form method = "post" action = "Payment.php">
	<fieldset class="field">
	<p><span class = "error"  style = "text-align:left">*required</span></p>
	<legend class="head">Booking Details</legend>
	Origin:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type = "text" name = "origin" required>
	<span class = "error">*</span><br><br>
	Destination:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type = "text" name = "destination" required>
	<span class = "error">*</span><br><br>
	Departure Date:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type = "date" name = "departure" required>
	<span class = "error">*</span><br><br>
	Class:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<select name = "class" required>
		<option value = "Economy">Economy</option>
		<option value = "Business">Business</option>
		<option value = "First Class">First Class</option>
		<option value = "Premium Economy">Premium Economy</option>
	</select>
	<span class = "error">*</span><br><br>
	Passengers:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type="number" name="passengers" min="1" style="width:50px;" required>
	<span class = "error">*</span><br><br>
	<input type = "submit" name = "Submit">
	<br>
	</fieldset>
</b><br><br></body>
</html>