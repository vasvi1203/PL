<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Payment Information</title>
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
		$_SESSION["origin"] = $_POST["origin"];
		$_SESSION["destination"] = $_POST["destination"];
		$_SESSION["departure"] = $_POST["departure"];
		$_SESSION["class"] = $_POST["class"];
		$_SESSION["passengers"] = $_POST["passengers"];
	}
?><b>
<section style="background:rgba(255,255,255,0.2);height:100%;width:100%; border:4px ridge white;"><br>
<img src = "https://d1e0iy043bd8xo.cloudfront.net/resources/img/logos/avia/rectangular/big/UK.png" alt = "Vistara" width = "300px" height = "90px" style="padding-bottom:50px;"><br><br>
	<form method = "post" action = "Final.php">
	<fieldset class="field">
	<p><span class = "error"  style = "text-align:left">*required</span></p>
	<legend class="head">Payment Information</legend><br><br>
	Card Holder's Name:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type = "text" name = "Card Holder's Name" required>
	<span class = "error">*</span><br><br>
	Card Number:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type = "text" name = "Card no." required>
	<span class = "error">*</span><br><br>
	Card Expiry Date:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type = "month" name = "Expiry" required>
	<span class = "error">*</span><br><br>
	CVV:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type="password" name="CVV" maxlength="3" style="width:50px;" required>
	<span class = "error">*</span><br><br>
	<input type="submit" name="Submit">
	<br>
	</fieldset>
</b><br><br></body>
</html>