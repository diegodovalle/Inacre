<?php
	session_start();
	// Set email to send messages to
	$emailTo = 'no-reply@inacre.org.br';
	$nameTo = 'Inacre';
	// Do not edit anything from here unless you know what you are doing
	$contactErrors = array();
		$name = $_SESSION['name'];
		$email = $_SESSION['email'];
		$website = $_SESSION['website'];
		$message = $_SESSION['message'];
	
		if (empty($contactErrors) && trim($emailTo) !== '')
		{			
			$subject = 'Contato pelo Site';
			$subjectConf = 'Inacre - Envio Confirmado';
			$body = "\nNome: $name \nE-mail: $email \nWebsite: $website \nMensagem: $message";
			$headers = 'From: ' . $name . ' <' . $emailTo . '>' . "\r\n" . 'Reply-To: ' . $email;
			$headersResponse = 'From: ' . $nameTo . ' <' . $emailTo . '>' . "\r\n" . 'Reply-To: ' . $emailTo;
			$response = "$name, \n\nObrigado por nos contatar. Esta é uma mensagem automática, confirmando o recebimento de sua mensagem.\nNós iremos responder o mais breve possível.\n\nAtenciosamente,\nTime da Inacre";
			mail($emailTo, $subject, $body, $headers);

			mail($email, $subjectConf, $response, $headersResponse);
			$emailSent = true;
		}
		
		header( 'Location: success.html' ) ;
?>