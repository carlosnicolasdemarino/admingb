<?php

	$detalle= $_POST["detalle"];
	$importe= $_POST["importe"];
    $mes= $_POST["mes"];
    $cuota= $_POST["cuotas"];
    $pago= $_POST["pago"];
    $tarjeta= $_POST["tarjeta"];
    
	$hostname="localhost";
	$username="u666073011_gaston";
	$password="ns2b7bfqbf";
	$database="u666073011_gestion";

    $mysqli = new mysqli($hostname, $username,$password, $database);

    //Chequeo que no de error la conexion con la base de datos

	if ($mysqli -> connect_errno) {
	die( "Fallo la conexión a MySQL: (" . $mysqli -> mysqli_connect_errno() 
	. ") " . $mysqli -> mysqli_connect_error());
	}


	//Inserto los datos obtenidos del formulario

	$query = "INSERT INTO `cuentas2`(`detalle`, `importe`, `mes`, `cuota`, `pago`, `tarjeta`) VALUES ('$detalle','$importe','$mes','$cuota','$pago','$tarjeta')";
	
	$resultado=$mysqli->query($query);



/* cerrar la conexión */
$mysqli->close();

header('Location:/cuentas_a_pagar_2');

?>