<?php
include("PHPMailer/_lib/class.phpmailer.php");

$con=mysqli_connect('localhost', 'root', '', 'gowns');

$sql="SELECT * FROM notifications where Status=0";
 //<a href='delete.php? id=".$row['id']."';> Delete</a></td><tr>";
$result=mysqli_query($con,$sql);

while($row=mysqli_fetch_array($result)){
$channel=$row['channel'];
$id=$row['id'];
if($channel=='email'){
	
	// Send mail
	$mail = new PHPMailer();
	$mail->IsSMTP(); // telling the class to use SMTP

	// SMTP Configuration
	$mail->SMTPAuth = true;                  // enable SMTP authentication
	$mail->Host = "smtp.mailtrap.io"; // SMTP server
	$mail->Username = "77da38919fe77f";
	$mail->Password = "17786f9fe4aab9";            
	$mail->Port = 2525; // optional if you don't want to use the default 

	$mail->From = "my@email.com";
	$mail->FromName = "My Name";
	$mail->Subject = $row['subject'];
	$mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
	$mail->MsgHTML($row['message'] . "<br /><br />" );

	// Add as many as you want
	$mail->AddAddress($row['email'], "Dear student");

	// If you want to attach a file, relative path to it
	//$mail->AddAttachment("images/phpmailer.gif");             // attachment

	$response= NULL;
	if(!$mail->Send()) {
		$response = "Mailer Error: " . $mail->ErrorInfo;
	} else {
		$response = "Message sent!";
	}

$output = json_encode(array("response" => $response));  
header('content-type: application/json; charset=utf-8');
echo($output);


	/*if(mail($row['email'],$row['subject'],$row['message'],'From: noreply@kisiiuniversity.ac.ke')){
		$sql="UPDATE notifications set Status=1 where id=$id";

	}else{
		$sql="UPDATE notifications set Status=2 where id=$id";
	}
	$result=mysqli_query($con,$sql);
	*/
}


			
			
           }