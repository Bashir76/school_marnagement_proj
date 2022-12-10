<?php

	/* CALL */
//sendMail('ameerkn76@gmail.com', 'Kano Nigeria', 'STONE', 'akgraphicsdesign76@gmail.com', 'Testing email function 1','Testing email function 1');

function sendMail($ToEmail,$ToName,$FromName,$bcc,$subject,$messageBody){
	require "class.phpmailer.php";
	$mail = new PHPMailer;
	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->SMTPDebug = 2;
	$mail->Host = 'smtp.gmail.com';  
	$mail->SMTPAuth = true;                               
	$mail->Username = 'ameekn76@gmail.com';            
	$mail->Password = 'ameekn76';                                                
	$mail->SMTPSecure = 'ssl';                            
	$mail->Port = '465';						

	$mail->From = 'ameekn76@gmail.com';			
	$mail->FromName = $FromName;		//From Email Id Display Name        
	//$mail->addAddress('mail@example.net', 'mail example');  // Add a recipient
	$mail->addAddress($ToEmail,$ToName);               // Name is optional
	//$mail->addReplyTo('info@example.com', 'Information');
	//$mail->addCC('cc@example.com');
	//$mail->addBCC($bcc);

	$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
	//$mail->addAttachment('');         // Add attachments
	//$mail->addAttachment('','');    // Optional name
	$mail->isHTML(true);                                  // Set email format to HTML

	$mail->Subject = $subject;
	$mail->Body    = $messageBody;	

	if(!$mail->send()){
	//header("location:thanks.php");
		echo 0;
	}
	else{
		echo 1;
	}
}
?>
