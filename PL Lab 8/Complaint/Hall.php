<?php
session_start();
?>

<!DOCTYPE html>
<html style="background-color:#ff9900;">
<head>
<title>111803128</title>
<style>
form,p {
	font-family:calibri;
	font-size:20px;
	border:none;
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
<h1>HALL COMPLAINT</h1>
<p>Please send us details about the incident you would like to report. Our Hall Complaint Center will analyze your complaint and take the appropriate measures in order that the reported situation will not occur at any other time in the future.</p>
	<form method="post" action="Filehall.php">	
		<label for="doc">Date of Complaint</label>&nbsp&nbsp&nbsp&nbsp
		<input type="date" name="doc" placeholder="Enter the date of complaint" required><br>	
		<label for="fname">Name</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<input type="text" name="fname" placeholder="Enter your first name" required>&nbsp&nbsp&nbsp
		<input type="text" name="lname" placeholder="Enter your last name" required><br>
		<label for="email">Email Address</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<input type="email" name="email" placeholder="Enter your email address" required><br>
		<label for="room">Room Number</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<input type="text" name="room" placeholder="Enter your room number" required><br>
		<label for="doi">Date of Incident</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<input type="date" name="doi" placeholder="Enter the date of incident" required><br>	
		<label>Complaint Details</label><br><br>
		<textarea name="details" placeholder="Mention the complaint details." required></textarea><br><br>
		<label>Desired Outcome</label><br><br>
		<textarea name="outcome" placeholder="Suggest the steps that should be taken to avoid a repeat of the problem." required></textarea><br><br>
		<input type="submit" value="Submit" align="center"><br><br>
	</form>

</body>
</html>