<?php

      if (isset($_POST["submit"]))
     {
        
    $name = htmlspecialchars($_POST["name"]);
	$email = htmlspecialchars($_POST["email"]);
    $subject =htmlspecialchars( $_POST["subject"]);
    $message = $_POST["message"];
        
	
	require  ("phpmailer/PHPMailerAutoload.php");

	$mail = new PHPMailer;

	$mail->isSMTP();                  // Set mailer to use SMTP
	$mail->SMTPDebug = 0;             // Enable verbose debug output
	$mail->Debugoutput = 'html';
	$mail->From = "rosesuzette16@gmail.com";
	$mail->FromName = "";
	$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
	$mail->SMTPSecure = 'ssl';  // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 465;                    // TCP port to connect to
	$mail->SMTPAuth = true;          // Enable SMTP authentication
	$mail->Username = 'rosesuzette16@gmail.com';   // SMTP username
	$mail->Password = 'rsml1229';             // SMTP password
	$mail->AddAddress('rosesuzette16@gmail.com');     // Add a recipient

	$mail->IsHTML (true);
	$mail->Subject = $subject;
	$mail->Body =	'
					Name:  '.$_POST['name'].'<br />
					Email:  '.$_POST['email'].'<br />
					Subject:  '.$_POST['subject'].
					'
					<br /><br />
					Message:  '.$_POST['message'].	
					'
					<br /><br /> 
					';

    if(!$mail->send()) {
    	//echo 'Mailer Error: ' . $mail->ErrorInfo;
    	header('location: contact-us.php?c=false');
	}else{
    	header('location: contact-us.php?c=true');
	} 
 }
?>