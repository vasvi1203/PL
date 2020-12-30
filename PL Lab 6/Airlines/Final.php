<?php
session_start();
	echo "Your ticket has been mailed to " .$_SESSION["email"]. " and sent to " .$_SESSION["contact"]. "<br>";
	echo "Your flight is from ".$_SESSION["origin"]. " to " .$_SESSION["destination"]."<br>";
	echo "Departure date is ".$_SESSION["departure"]."<br>";
	echo "Your travel class is ".$_SESSION["class"]."<br>";
	echo "No. of passengers travelling are ".$_SESSION["passengers"]."<br>";
?>
		