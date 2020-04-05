<?php
	$id=$_GET['id'];
	$mes= $_POST["mes"];
	$tipo= $_POST["tipo"];
	$fechavto= $_POST["fechavto"];
	$fechavto2= $_POST["fechavto2"];
	$importe= $_POST["importe"];
	$pago= $_POST["pago"];

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


	//actualizamos los datos obtenidos del formulario
	$query = "UPDATE servicios SET tipo = '".$tipo."', fechavto ='".$fechavto."', fechavto2 ='".$fechavto2."', importe = '".$importe."', mes = '".$mes."',pago = '".$pago."'  WHERE id = '".$id."'";

	//UPDATE `servicios` SET `pago`= "si" WHERE id = 3;
		
	$resultado=$mysqli->query($query);



/* cerrar la conexión */
$mysqli->close();

header('Location:/dashboard');

?>