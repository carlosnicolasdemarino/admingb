<?php

	$mes= $_POST["mes"];
	$tipo= $_POST["tipo"];
	$fechavto= $_POST["fechavto1"];
	$fechavto2= $_POST["fechavto2"];
	$importe= $_POST["importe"];
	$pago= $_POST["pago"];

	$hostname="localhost";
	$username="id6652504_gastonbarbaccia";
	$password="ns2b7bfqbf";
	$database="id6652504_gestion";

    $mysqli = new mysqli($hostname, $username,$password, $database);

    //Chequeo que no de error la conexion con la base de datos

	if ($mysqli -> connect_errno) {
	die( "Fallo la conexión a MySQL: (" . $mysqli -> mysqli_connect_errno() 
	. ") " . $mysqli -> mysqli_connect_error());
	}


	//Inserto los datos obtenidos del formulario
	$query = "INSERT INTO `servicios`(tipo, fechavto,fechavto2, importe, pago, mes) VALUES ('$tipo','$fechavto','$fechavto2','$importe','$pago','$mes')";

	
	$resultado=$mysqli->query($query);



/* cerrar la conexión */
$mysqli->close();

header('Location:/dashboard');

?>