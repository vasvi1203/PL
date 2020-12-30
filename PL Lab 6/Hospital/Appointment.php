<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Appointment</title>
<style>
body {
background-image:url('https://christianacare.org/images/WLM/ed.jpg');
background-attachment:fixed;
background-size:cover;
font-weight:bold;
font-size:20px;
color:yellow;
}
</style>
</head>

<body style = "text-align:center">
<section style="background:rgba(0,0,0,0.1);height:100%;width:100%; border:4px ridge white;"><br>
<img src = "https://upload.wikimedia.org/wikipedia/en/thumb/e/ef/Fortis_Healthcare_logo.svg/1200px-Fortis_Healthcare_logo.svg.png" alt = "Fortis" width = "200px" height = "80px" style="padding-bottom:50px;"><br><br><br><br><br><br><br>
<?php
	echo "Your appointment has been booked with Fortis Hospital, " .$_SESSION["Address"]. ", " .$_SESSION["City"]. ", " .$_SESSION["State"]. ", " .$_SESSION["Postal"]. "<br><br>";
	echo "Your appointment number has been mailed to ".$_SESSION["email"]. " and sent to " .$_SESSION["Phone"]."<br>";
?>
<br><br><br><br><br><br><br><br><br><br></body>
</html>