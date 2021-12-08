<?php

	$pin = $_POST["pin"];

	if($pin == "2461"){

		header('Location:/cuentas_a_pagar');
	
	}else{
	
		header('Location:/validacion');
		
	}
	
?>