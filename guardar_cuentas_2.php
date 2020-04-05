<?php
    $id=$_GET['id'];
   
	$detalle= $_POST["detalle"];
	$importe= $_POST["importe"];
    $mes= $_POST["mes"];
    $cuota= $_POST["cuotas"];
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

    
	//actualizamos los datos obtenidos del formulario

    $query = "UPDATE cuentas2 SET detalle = '".$detalle."', importe ='".$importe."', mes = '".$mes."', cuota = '".$cuota."', pago = '".$pago."'  WHERE id = '".$id."'";

	$resultado=$mysqli->query($query);

/* cerrar la conexión */
$mysqli->close();

header('Location:/cuentas_a_pagar_2');

?>