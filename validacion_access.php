<?php

	$pin = $_POST["pin"];

	if($pin == "2461"){

		header('Location:/cuentas_a_pagar');
	
	}else if($pin == "1357"){ 
		
		//Contraseña tubi
	
		header('Location:/cuentas_a_pagar_2');
	
	}else{
	
		header('Location:/validacion');
		
	}
	
?>