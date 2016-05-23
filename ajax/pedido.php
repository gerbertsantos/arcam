
<?php

    if( 'POST' == $_SERVER['REQUEST_METHOD'] && isset($_POST['formName']) && isset($_POST['formMarca']) && isset($_POST['formModelo']) && isset($_POST['formAno']) && isset($_POST['formEmail']) && isset($_POST['formMessage']) ) {
	
        $name = $_POST['formName'];
        $phone = $_POST['formPhone'];
		$mail = $_POST['formEmail'];
		$address = $_POST['formEndereco'];
		$estado = $_POST['formEstado'];
		$cidade = $_POST['formCidade'];
		$cnpj = $_POST['formCnpj'];
		$inscr = $_POST['formInscricao'];
		$modelo = $_POST['formModelo'];
		$ano = $_POST['formAno'];
		$chassis = $_POST['formChassis'];
		$subj = $_POST['formSubject'];
		$mess = $_POST['formMessage'];
		
		$to = '<Email envio>';
		$subject = ($subj) ? $subj : 'Pedido recebido do site Arcam Brasil';
		$message = 	$name . "\r\n" . 
					$phone . "\r\n" .
					$mail . "\r\n" .
					$address . "\r\n" .
					$estado . "\r\n" .
					$cidade . "\r\n" .
					$cnpj . "\r\n" .
					$inscr . "\r\n" .
					$modelo . "\r\n" .
					$ano . "\r\n" .
					$chassis . "\r\n" .
					$mess;
		$headers = 'From: <' . $mail . '>' . "\r\n";
		
        $result = mail( $to, $subject, $message, $headers );
		echo $result;
	}

	return false;

?>
