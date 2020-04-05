<?php

	$producto= $_POST["producto"];
	$precio= $_POST["precio"];
	$cantidad= $_POST["cantidad"];

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

	$query = "DELETE FROM `supermercado`";
	
	$resultado=$mysqli->query($query);



/* cerrar la conexión */
$mysqli->close();

header('Location:/supermercado');

?>