<?php
    $id=$_GET['id'];
   
    
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

    $query = "DELETE FROM cuentas where id like '".$id."'";


	$resultado=$mysqli->query($query);

/* cerrar la conexión */
$mysqli->close();

header('Location:/cuentas_a_pagar');

?>