<!DOCTYPE html>
<html>
<head>
<title>111803128</title>
</head>
<?php
	session_start();	

    ini_set("SMTP","mail.gmail.com");
    ini_set("smtp_port","587");
    ini_set('sendmail_from', 'vasvi2014000000@gmail.com');	
	$resume = fopen("My Resume.txt", "w") or die("Unable to open file!");
	fwrite($resume, "PERSONAL DETAILS\n");
	$personal = "NAME : " .$_SESSION["fname"]. " " .$_SESSION["lname"]. "\nADDRESS : " .$_SESSION["address"]. ", " .$_SESSION["city"]. ", " .$_SESSION["state"]. " - " .$_SESSION["zip"]. ", " .$_SESSION["country"]. "\nDATE OF BIRTH : " .$_SESSION["dob"]. "\nEMAIL ID : " .$_SESSION["email"]. "\nPHONE NO. : " .$_SESSION["phone"]. "\n\n";
	fwrite($resume, $personal); 
	fwrite($resume, "WORK EXPERIENCE\n");
	$work = "COMPANY/ORGANIZATION : " .$_SESSION["company"]. ", " .$_SESSION["wcity"]. ", " .$_SESSION["wstate"]. ", " .$_SESSION["wcountry"]. "\nJOB TITLE : " .$_SESSION["title"]. "\nSTART DATE : " .$_SESSION["month"]. ", " .$_SESSION["year"]. "\nJOB DESCRIPTION : " .$_SESSION["desc"]. "\n\n";
	fwrite($resume, $work);
	fwrite($resume, "EDUCATION\n"); 
	$education = "COLLEGE/UNIVERSITY : " .$_SESSION["college"]. ", " .$_SESSION["ecity"]. ", " .$_SESSION["estate"]. ", " .$_SESSION["ecountry"]. "\nDEGREE : " .$_SESSION["degree"]. "\nFIELD OF STUDY : " .$_SESSION["field"]. "\nGRADE POINT: " .$_SESSION["grade"]. "\nGRADUATION DATE : " .$_SESSION["gmonth"]. ", " .$_SESSION["gyear"]. "\n\n";
	fwrite($resume, $education);
	fwrite($resume, "ADDITIONAL SKILLS\n");
	fwrite($resume, $_SESSION["skills"]. "\n\n");
	fwrite($resume, "CAREER OBJECTIVE\n");
	fwrite($resume, $_SESSION["objective"]. "\n\n");
	fwrite($resume, "REFERENCE\n");
	$reference = "REFERENCE NAME : " .$_SESSION["reffname"]. " " .$_SESSION["reflname"]. "\nCOMPANY/ORGANIZATION : " .$_SESSION["refcompany"]. "\nPOSITION TITLE : " .$_SESSION["reftitle"]. "\nEMAIL ID : " .$_SESSION["refemail"]. "\nPHONE NO. : " .$_SESSION["refphone"]. "\nRELATION : " .$_SESSION["relation"]. "\n\n";
	fwrite($resume, $reference);
	fclose($resume);
	
    $_SESSION["semail"] = $_POST["semail"];	
	if($_SERVER["REQUEST_METHOD"] == 'POST') {
	$from ='vasvi2014000000@gmail.com';
	$recipient = $_SESSION["semail"];
	
	$sender_name = "Vasvi Gupta";
	$reply_to_email = "vasvi2014000000@gmail.com";
	$subject = "Resume";
	$message = "Please find attached resume with the email";
	
        $filename = "My Resume.txt";
        $content = file_get_contents("My Resume.txt");

	
	$boundary = md5("Resume");
	
	//header
	$headers = "MIME-Version: 1.0\r\n";
	$headers .= "From : " .$from. "\r\n";
	$headers .= "Reply-To : " .$reply_to_email. "\r\n";
	$headers .= "Content-Type : multipart/mixed\r\n";
	$headers .= "boundary = $boundary\r\n";
	
	//plain text
	$body = "--$boundary\r\n";
	$body .= "Content-Type : text/plain; charset = ISO-8859-1\r\n";
    $body .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
    $body .= $message;
	
	//attachment
	$body .= "--$boundary\r\n";
	$body .= "Content-Type : text; name = " .$filename. "\r\n\r\n";
	$body .= "Content-Disposition : attachment; filename = " .$filename. "\r\n\r\n";
    $body .="Content-Transfer-Encoding: 7bit\r\n\r\n";
    $body .="Unique Attachment ID: - >".rand(1024, 2048)."\r\n\r\n";
    $body .= $content."\r\n\r\n";

	$sentMailResult = mail($recipient, $subject, $body, $headers);
	
	if($sentMailResult) {
		echo "File sent successfully!<br>";
	}
	
	else {
		echo "File not sent!<br>";
	}
}
	
?>
<html>