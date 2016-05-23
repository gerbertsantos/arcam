
<?php

    if( 'POST' == $_SERVER['REQUEST_METHOD'] && isset($_POST['formName']) && isset($_POST['formEmail']) && isset($_POST['formMessage']) ) {
	
        $name = $_POST['formName'];
		$mail = $_POST['formEmail'];
		$phone = $_POST['formPhone'];
		$subj = $_POST['formSubject'];
		$mess = $_POST['formMessage'];
		
		$to = '<Email envio>';
		$subject = ($subj) ? $subj : 'Contato recebido do site Arcam Brasil';
		$message = $mess . "\r\n" . $name . "\r\n" . $phone;
		$headers = 'From: <' . $mail . '>' . "\r\n";
		
        $result = mail( $to, $subject, $message, $headers );
		echo $result;
	}

	return false;

?>
