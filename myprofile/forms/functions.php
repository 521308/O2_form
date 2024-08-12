<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
function runMail(array $mail_settings, string $to, string $subject, string $body) 
{

	$mail = new PHPMailer(true);
	try {
		$mail->SMTPDebug = 0;                     
	    $mail->isSMTP();                                            
	    $mail->Host       = $mail_settings['host'];                   
	    $mail->SMTPAuth   = $mail_settings['auth'];                                  
	    $mail->Username   = $mail_settings['username'];                      
	    $mail->Password   = $mail_settings['password'];                               
	    $mail->SMTPSecure = $mail_settings['secure'];               
	    $mail->Port       = $mail_settings['port'];    
	    $mail->CharSet    = $mail_settings['charset'];

	    $mail->setFrom($mail_settings['fromEmail'], $mail_settings['fromUsername']);
    	$mail->addAddress($mail_settings['username'], $mail_settings['username']); 

    	$mail->isHTML(true);                                 
	    $mail->Subject = $subject;
	    $mail->Body    = $body;
	    return $mail->send();

	} catch (Exception $e) {
		return false;
		echo 'Error';
	}
}