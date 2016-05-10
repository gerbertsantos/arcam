
<?php

    if( 'POST' == $_SERVER['REQUEST_METHOD'] && isset($_POST['formName']) && isset($_POST['formEmail']) && isset($_POST['formMessage']) ) {
	
        $name = $_POST['formName'];
		$mail = $_POST['formEmail'];
		$subj = $_POST['formSubject'];
		$mess = $_POST['formMessage'];
		
		$to = 'gerbert.nsantos@gmail.com';
		$subject = ($subj) ? $subj : 'Message from your site';
		$message = $mess . "\r\n" . $name;
		$headers = 'From: <' . $mail . '>' . "\r\n";
		
        $result = mail( $to, $subject, $message, $headers );
		echo $result;
	}

	return false;

?>
