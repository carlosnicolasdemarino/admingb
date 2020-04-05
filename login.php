<?php

	$user= $_POST["usuario"];
	$pass= $_POST["contrasena"];

	$hostname="localhost";
	$username="id6652504_gastonbarbaccia";
	$password="ns2b7bfqbf";
	$database="id6652504_gestion";

    $mysqli = new mysqli($hostname, $username,$password, $database);

    //Chequeo que no de error la conexion con la base de datos
    if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

	//Validar que el usuario y la contraseña existen en la base de datos

	$query = "SELECT * FROM usuarios WHERE usuario = '$user' and contrasena = '$pass'";
	
	
	$resultado=$mysqli->query($query);


	$rows = $resultado->fetch_assoc();

	//Creo 2 variables para guardar los datos de usuario y contraseña 

	$e = $rows["usuario"];
	$c = $rows["contrasena"];

	//valido si el usuario y la contrase con iguales a los que estan en la BD

	if($e == $user && $c == $pass){
	    
	session_start();

	$_SESSION['id'] = session_id();

	header("Location:https://www.admingb.com/dashboard");	
	
	}else{

	header('Location:https://www.admingb.com/');
	
	}
	
	
 
?>

