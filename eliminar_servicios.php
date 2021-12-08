<?php

include 'conexiondb.php';
$id = $_GET['id'];


$mysqli = conexion_db();

//Chequeo que no de error la conexion con la base de datos

if ($mysqli->connect_error) {
    die('Error de conexión: ' . $mysqli->connect_error);
}


//actualizamos los datos obtenidos del formulario

$query = "DELETE FROM servicios where id like '" . $id . "'";


$resultado = $mysqli->query($query);

/* cerrar la conexión */
$mysqli->close();

header('Location:/dashboard');
