<!DOCTYPE html>
<html style="background-color:#00cc99;">
<head>
<title>Form</title>
<style>
label {
	font-family:calibri;
	font-size:20px;
	color:black;
	font-weight:bold;
	}
input {
	width:20%;
	font-size:15px;
	padding: 12px 20px;
	margin: 8px 0;
	box-sizing: border-box;
	border: 3px solid #595959;
	border-radius: 4px;
	outline:none;
}
input:focus {
	border: 3px solid black;
}

input[type=submit] {
	background-color: white;
	width:10%;
	margin-left:575px;
	margin-right:575px;
	border:3px solid black;
	outline:none;
	color: black;
	padding: 12px 20px;
	text-decoration: none;
	font-size:20px;
}
h1 {
	text-align:center;
	font-size:50px;
	color:black;
	font-family:algerian;
	text-decoration:underline;
}
</style>
</head>

<body style="text-align:center;">
	<h1>PERSONAL DETAILS</h1><br><br>
	<form method="post" action="Table.php">	
		<label for="fname">First Name</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<input type="text" name="fname" placeholder="Enter your first name" required><br><br>
		<label for="lname">Last Name</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<input type="text" name="lname" placeholder="Enter your last name" required><br><br>
		<label for="phone">Phone Number</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<input type="tel" name="phone" placeholder="Enter your phone number" required><br><br>
		<label for="dob">Date of Birth</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<input type="date" name="dob" placeholder="Enter your date of birth" required>
		<br><br>
		
	<input type="submit" value="Submit" align="center">
	</form>
</body>
</html>