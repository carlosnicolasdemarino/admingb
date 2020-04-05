<?php

	$producto= $_POST["producto"];
	$precio= $_POST["precio"];
	$cantidad= $_POST["cantidad"];
	

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

	$query = "INSERT INTO `supermercado`(`producto`, `precio`, `cantidad`, `precio_final`) VALUES ('$producto','$precio','$cantidad','')";
	
	
	$resultado=$mysqli->query($query);
	


/* cerrar la conexión */
$mysqli->close();

header('Location:/supermercado');

?>