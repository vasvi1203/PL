<?php
session_start();
?>

<!DOCTYPE html>
<html style="background-color:#ff0066;">
<head>
<title>111803128</title>
<style>
form,p {
	font-family:calibri;
	font-size:20px;
	border:none;
	text-align:center;
}
label {
	margin-left:350px;
}
input {
	width:20%;
	font-size:15px;
	padding: 12px 20px;
	margin: 8px 0;
	box-sizing: border-box;
	border: 3px solid #ccc;
	border-radius: 4px;
	outline:none;
}
input:focus {
	border: 3px solid #555;
}
textarea {
	width: 50%;
	margin-left:350px;
	height: 150px;
	padding: 12px 20px;
	box-sizing: border-box;
	border: 3px solid #ccc;
	border-radius: 4px;
	resize: none;
	outline:none;
	font-size:15px;
	font-family:calibri;
}

textarea:focus {
	border: 3px solid #555;
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
}
h1 {
	text-align:center;
	font-size:40px;
	font-family:calibri;
	text-decoration:underline;
}
</style>
</head>

<body>
<h1>COMPLAINT BOX</h1>
<p>Please choose your type of complaint</p><br><br>
	<form method="post" action="Mess.php">
		<input type="submit" value="Mess" align="center"><br><br>
		<input type="submit" value="Room" align="center" formaction="Room.php"><br><br>
		<input type="submit" value="Hall" align="center" formaction="Hall.php"><br><br>
	</form>

</body>
</html>