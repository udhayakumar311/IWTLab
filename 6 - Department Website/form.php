<?php
$conn = mysqli_connect('localhost','root','','college');
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
/*
$email_from = 'overplay730@gmail.com';

$email_body = "User Name: $name.\n".
				"User Email: $visitor_email. \n".
				"Subject: $subject.\n".
				"User Message: $message .\n";

$to = 'vikassah54@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "reply-to: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);
*/
$sql = "insert into subbu (name, email, subject, message) VALUES ('$name','$visitor_email','$subject','$message' )";
$result = mysqli_query($conn, $sql) or die("Query Failed!");
header("location: http://localhost/college/college website/form.php");
mysqli_close($conn);



header("location: contact.html");




?>