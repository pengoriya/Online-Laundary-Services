<?php
require_once("class.phpmailer.php");
function smtpmailer($to, $from, $pwd , $from_name, $subject, $body,$file)
   { 
	$mail = new PHPMailer();  // create a new object
	$mail->IsSMTP(); // enable SMTP
	$mail->IsHTML(true);
	$mail->SMTPDebug = 0;  // debugging: 1 = errors and messages, 2 = messages only
	$mail->SMTPAuth = true;  // authentication enabled
	$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
	
	
	//////////////   AS Per Company   ////////////////
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 465;
	
	$mail->Username =$from ; 
	$mail->Password =$pwd ;           
	
	$mail->SetFrom($from . "@gmail.com",$from_name);
	$mail->Subject =$subject ;
	$mail->Body = $body ;
	if( $file != "none")
		{
		$mail-> AddAttachment($file);
		}
	$mail->AddAddress($to);
	
	$mail->Send();
	
	
	/*****************************************************/
	/*
	if(!) {
		echo  'Mail error: '.$mail->ErrorInfo; 
		return false;
	} else {
		echo "Message sent! $to";
		return true;
	}*/
}
?>
