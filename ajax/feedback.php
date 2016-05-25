
<?php

    if( 'POST' == $_SERVER['REQUEST_METHOD']) {
    	
		if ( isset($_POST['formPedidoNome']) && isset($_POST['formPedidoMarca']) 
					&& isset($_POST['formPedidoModelo']) && isset($_POST['formPedidoAno']) 
					&& isset($_POST['formPedidoEmail']) && isset($_POST['formPedidoMessage']) ) {
		
	        $name = $_POST['formPedidoNome'];
	        $phone = $_POST['formPedidoPhone'];
			$mail = $_POST['formPedidoEmail'];
			$address = $_POST['formPedidoEndereco'];
			$estado = $_POST['formPedidoEstado'];
			$cidade = $_POST['formPedidoCidade'];
			$cnpj = $_POST['formPedidoCnpj'];
			$inscr = $_POST['formPedidoInscricao'];
			$modelo = $_POST['formPedidoModelo'];
			$ano = $_POST['formPedidoAno'];
			$chassis = $_POST['formPedidoChassis'];
			$subj = $_POST['formPedidoSubject'];
			$mess = $_POST['formPedidoMessage'];
			
			$to = '<email valido para envio arcam>';
			//$subject = ($subj) ? $subj : 'Pedido recebido do site Arcam Brasil';
			$subject = 	'Pedido recebido do site Arcam Brasil';
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
		}else{
			
			if( isset($_POST['formNome']) && isset($_POST['formEmail']) && isset($_POST['formMessage']) ){	
			
	        $name = $_POST['formNome'];
			$mail = $_POST['formEmail'];
			$phone = $_POST['formPhone'];
			//$subj = $_POST['formSubject'];
			$mess = $_POST['formMessage'];
			
			$to = '<email valido para envio arcam>';
			//$subject = ($subj) ? $subj : 'Contato recebido do site Arcam Brasil';
			$subject = 'Contato recebido do site Arcam Brasil';
			$message = $name . "\r\n" . $phone . "\r\n" . $mess;
			$headers = 'From: <' . $mail . '>' . "\r\n";
			
	        $result = mail( $to, $subject, $message, $headers );
			echo $result;
			
			}
		}
    }

	return false;

?>

