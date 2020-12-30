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
	<h1>BOOK INFORMATION</h1><br><br>
	<form method="post" action="Table.php">	
		<label for="title">Title</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<input type="text" name="title" placeholder="Enter the book's title" required><br><br>
		<label for="author">Author(s)</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<input type="text" name="author" placeholder="Enter the author(s) name" required><br><br>
		<label for="edition">Edition</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<input type="text" name="edition" placeholder="Enter the book's edition" required><br><br>
		<label for="pub">Publisher</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<input type="text" name="pub" placeholder="Enter the publisher's name" required>
		<br><br>
		
	<input type="submit" value="Submit" align="center">
	</form>
</body>
</html>